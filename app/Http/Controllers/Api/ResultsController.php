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

        // check if user already exists
        $user = Entry::query()->where('collection', 'participants')->where('email', $userEmail)->first();

        if (! $user) {
            $user = Entry::make()
                ->collection('participants')
                ->data([
                    'email' => $payload['user']['email'],
                    'mandelbaerli_received' => false,
                    'results' => [],
                ]);
        }

        $result = [
            'completed_at' => date('Y-m-d H:i:s'),
            'points' => $payload['points'],
            'total' => $payload['total'],
        ];

        $mandelbaerliReceived = $user->mandelbaerli_received;

        $user->title = $payload['user']['firstname'].' '.$payload['user']['lastname'];
        $user->firstname = $payload['user']['firstname'];
        $user->lastname = $payload['user']['lastname'];
        $user->email = $userEmail;
        $user->company = $payload['user']['company'];
        $user->mandelbaerli_received = $user->mandelbaerli_received ?: $payload['mandelbaerli_score_achieved'];
        $user->newsletter = $payload['user']['newsletter'];
        $user->results = array_merge($user->results ?? [], [$result]);

        $user->save();

        return response()->json([
            'mandelbaerli_received' => $mandelbaerliReceived,
        ]);
    }
}
