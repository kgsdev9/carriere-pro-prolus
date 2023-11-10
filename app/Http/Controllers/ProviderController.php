<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class ProviderController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function callback($provider)
    {
        $githubUser = Socialite::drivert($provider)->user();

        dd($githubUser);

        $user = User::updateOrCreate([
            'provider_id' => $githubUser->id,
            'provider' => $provider,
        ], [
            'name' => $githubUser->name,
            'email' => $githubUser->email,
            'provider_token' => $githubUser->token,
        ]);

        Auth::login($user);
        return redirect('/home');


    }
}
