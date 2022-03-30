<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Statamic\Facades\Entry;

class ResultsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $payload = $request->all();
        $userEmail = $payload['user']['email'];

        $entry = Entry::find('results');

        abort_if(! $entry, 404);

        // strip answer texts
        foreach ($payload['solutions'] as &$value) {
            $value['question'] = strip_tags($value['question']);
            $value['answer'] = strip_tags($value['answer']);
        }

        // check if user already exists
        $storedUsers = $entry->get('users') ?: [];

        $userIndex = array_search($userEmail, array_column($storedUsers, 'email')) ?: null;

        ray($storedUsers);
        ray($userIndex);

        if ($userIndex === null) {
            $userIndex = count($storedUsers);
            $storedUsers[$userIndex] = [
                'type' => 'user',
                'enabled' => true,
                'results' => [],
                'email' => $payload['user']['email'],
                'mandelbaerli_received' => false,
            ];
        }

        $result = [
            'time_field' => date('Y-m-d H:i:s'),
            'points' => $payload['points'],
            'total' => $payload['total'],
            'solutions' => [['answer' => $payload['solutions']]],
        ];

        $mandelbaerliReceived = $storedUsers[$userIndex]['mandelbaerli_received'];
        ray($storedUsers[$userIndex]['mandelbaerli_received'], $payload['mandelbaerli_score_achieved']);

        // create new user
        $userData = [
            'firstname' => $payload['user']['firstname'],
            'lastname' => $payload['user']['lastname'],
            'email' => $userEmail,
            'company' => $payload['user']['company'],
            'mandelbaerli_received' => $storedUsers[$userIndex]['mandelbaerli_received'] ?: $payload['mandelbaerli_score_achieved'],
            'newsletter' => $payload['user']['newsletter'],
            'results' => array_merge($storedUsers[$userIndex]['results'], [$result]),
        ];

        $storedUsers[$userIndex] = array_merge($storedUsers[$userIndex], $userData);

        $entry->set('users', $storedUsers);
        $entry->save();

        return response()->json([
            'mandelbaerli_received' => $mandelbaerliReceived,
        ]);
    }
}
