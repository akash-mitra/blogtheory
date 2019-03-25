<?php

namespace App\Http\Controllers;

use App\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    //

    /**
     * Responsible for showing the sign-up form
     *
     * @return void
     */
    public function showSignUp() {
        return view('auth.register');
    }

    
    /**
     * On boards the user and starts her subscription 
     */
    public function onBoard (Request $request) {

        $token = $request->input('stripeToken');
        $user = new User([
            'name' => $request->input('fname') . ' ' . $request->input('lname'),
            'email' => $request->input('email'),
            'email_verified_at' => now(),
            // 'remember_token' => Str::random(10),
            'password' => \Hash::make($request->input('password')),
        ]);

        $subscription = $user->newSubscription('primary', 'monthly')
            ->trialDays(14)
            ->create($token);

        $client = new Client();

        $response = $client->request('POST', 'https://bootyman.app/api/provision', [
            'form_params' => [
                'order_id' => $subscription->id,
                'owner_email' => $user->email,
                'app' => 'kayna',
                'services' => [
                    "laravel-queue" => true,
                    "commands" => []
                ]
            ]
        ]);

        if ($response->getStatusCode() == 200) { // 200 OK
            $response_data = $response->getBody()->getContents();
        }

        return $response_data;
    }
}
