<?php

namespace App\Services;

use App\Contracts\SocialInterface;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Contracts\User as SocialContract;

class SocialService implements SocialInterface
{
    /**
     * @param SocialContract $socialUser
     * @return string
     * @throws \Exception
     */
    public function authUser(SocialContract $socialUser): string
    {
        $user = User::where('email', $socialUser->getEmail())->first();
        if ($user) {
            $user->name = $socialUser->getName();
            $user->avatar = $socialUser->getAvatar();
            if ($user->save()) {
                Auth::loginUsingId($user->id);
                return route('account.index');
            }
            throw new \Exception('Не удалось авторизоваться, попробуйте позже');
        } else {
            $user = User::updateOrCreate([
                'name' => $socialUser->getName(),
                'email' => $socialUser->getEmail(),
                'avatar' => $socialUser->getAvatar(),
                'password' => Hash::make(date('y-m-d H:i') . $socialUser->getName())
            ]);
            if ($user) {
                Auth::loginUsingId($user->id);
                return route('account.index');
            }
            throw new \Exception('Не удалось зарегистрировать, попробуйте позже');
        }
    }
}
