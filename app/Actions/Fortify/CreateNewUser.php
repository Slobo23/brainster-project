<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param array<string, string> $input
     * @throws ValidationException
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
            'phone' => ['required', 'string'/*, 'regex:/^(?:\+3897|07)\d{7}$/'*/],
            'role' => ['required', 'string', 'max:255'],
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'role' => $input['role'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
