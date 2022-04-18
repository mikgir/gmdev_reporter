<?php

namespace App\Http\Controllers\Auth;

use App\Contracts\SocialInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    /**
     * @param string $network
     * @return RedirectResponse
     */
    public function index( string $network ): RedirectResponse
    {
        return Socialite::driver($network)->redirect();
    }

    /**
     * @param string $network
     * @param SocialInterface $social
     * @return string
     */
    public function callback(string $network, SocialInterface $social): string
    {
        return redirect($social->authUser(
            Socialite::driver($network)->user()
        ));
    }
}
