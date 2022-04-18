<?php

namespace App\Contracts;

use Laravel\Socialite\Contracts\User as SocialContract;

interface SocialInterface
{
    /**
     * @param SocialContract $socialUser
     * @return string
     */
    public function authUser(SocialContract $socialUser): string;

}
