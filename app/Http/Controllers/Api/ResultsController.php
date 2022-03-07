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
        if (! $entry) {
            return 404;
        }

        // strip answer texts
        foreach ($payload['solutions'] as &$value) {
            $value['question'] = strip_tags($value['question']);
            $value['answer'] = strip_tags($value['answer']);
        }

        // check if user already exists
        $storedUsers = $entry->get('users');

        if ($storedUsers == null) {
            $storedUsers = [];
        }
        $foundUserIndex = array_search($userEmail, array_column($storedUsers, 'email'));

        $isNewUser = ! is_numeric($foundUserIndex);

        // return value
        $mandelbaerliReceived = false;

        // create new user
        if ($isNewUser) {
            $newUser = [
                'firstname' => $payload['user']['firstname'],
                'lastname' => $payload['user']['lastname'],
                'email' => $userEmail,
                'company' => $payload['user']['company'],
                'mandelbaerli_received' => $payload['mandelbaerliReceived'],
                'newsletter' => $payload['user']['newsletter'],
                'results' => [[
                    'time_field' =>  date('Y-m-d H:i:s'),
                    'points' => $payload['points'],
                    'total' => $payload['total'],
                    'solutions' => [['answer' =>  $payload['solutions']]],
                ]],
                'type' => 'user',
                'enabled' => true,
            ];
            if ($storedUsers) {
                $entry->set('users', array_merge($storedUsers, [$newUser]));
            } else {
                $entry->set('users', [$newUser]);
            }

            $entry->save();
            $mandelbaerliReceived = $payload['mandelbaerliReceived'];
        }

        // add result to existing user
        if (! $isNewUser) {
            $newResults = [
                'time_field' =>  date('Y-m-d H:i:s'),
                'points' => $payload['points'],
                'total' => $payload['total'],
                'solutions' => [['answer' =>  $payload['solutions']]],
            ];
            $storedUsers[$foundUserIndex]['firstname'] = $payload['user']['firstname'];
            $storedUsers[$foundUserIndex]['lastname'] = $payload['user']['lastname'];
            $storedUsers[$foundUserIndex]['company'] = $payload['user']['company'];
            $storedUsers[$foundUserIndex]['newsletter'] = $payload['user']['newsletter'];
            $storedUsers[$foundUserIndex]['mandelbaerli_received'] ? null : $storedUsers[$foundUserIndex]['mandelbaerli_received'] = $payload['mandelbaerliReceived'];
            $storedUsers[$foundUserIndex]['results'] = array_merge($storedUsers[$foundUserIndex]['results'], [$newResults]);

            $mandelbaerliReceived = $storedUsers[$foundUserIndex]['mandelbaerli_received'];
            $entry->set('users', $storedUsers);
            $entry->save();
        }

        return $mandelbaerliReceived;
    }
}
