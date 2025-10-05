<?php

namespace Database\Seeders;

use App\Enum\UserRole;
use App\Models\User;
use Illuminate\Database\Seeder;

use function Laravel\Prompts\{form, info, error, table};
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        info('create Admin  account');
        $data = form()
            ->text(label: 'Name', placeholder: 'Enter Full Name', required: true, name: 'name')
            ->text(label: 'Email', placeholder: 'Enter Email Address', required: true, validate: 'email|unique:users,email', name: 'email')
            ->text(label: 'Password', placeholder: 'Enter Password', required: true, name: 'password')
            ->submit();

        $data['role'] = UserRole::ADMIN;

        $user = new User($data);
        if ($user->save()) {
            info('User Created Successfully');
            table(
                ['Name', 'Email', 'Role'],
                [[$user->name, $user->email, $user->role->value]]
            );
        } else {
            error('User Created Successfully');
        }
    }
}
