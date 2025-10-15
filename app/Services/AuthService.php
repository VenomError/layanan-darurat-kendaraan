<?php

namespace App\Services;

use App\Enum\UserRole;
use Auth;
use App\Models\User;

class AuthService
{
    public function login(
        string $email,
        string $password,
        bool|null $remember = false
    ) {
        $isLogin = Auth::attempt([
            'email' => $email,
            'password' => $password,
        ], $remember);

        if (!$isLogin) {
            throw new \Exception("Invalid Email or Password");
        }
        flash('Login Success');
        return redirect()->intended('/dashboard-redirect');
    }

    public function register(
        string $name,
        string $email,
        UserRole $role,
        string $password,
    ) {
        try {
            $user = new User();

            $user->name = $name;
            $user->email = $email;
            $user->role = $role;
            $user->password = $password;

            $user->save();

            return $this->login($user->email, $password, true);
        } catch (\Throwable $th) {
            throw new \Exception("Failed to Register New Account - {$th->getMessage()}");
        }
    }
}
