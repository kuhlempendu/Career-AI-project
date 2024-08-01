<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'date_of_birth' => ['nullable', 'date'],
            'gender' => ['nullable', 'string', 'max:50'],
            'nationality' => ['nullable', 'string', 'max:100'],
            'phone_number' => ['nullable', 'string', 'max:50'],
            'address' => ['nullable', 'string'],
            'languages_spoken' => ['nullable', 'string'],
            'personality_traits' => ['nullable', 'string'],
            'learning_style' => ['nullable', 'string', 'max:100'],
            'hobbies_and_interests' => ['nullable', 'string'],
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'date_of_birth' => $input['date_of_birth'],
            'gender' => $input['gender'],
            'nationality' => $input['nationality'],
            'phone_number' => $input['phone_number'],
            'address' => $input['address'],
            'languages_spoken' => $this->convertToJson($input['languages_spoken']),
            'personality_traits' => $this->convertToJson($input['personality_traits']),
            'learning_style' => $input['learning_style'],
            'hobbies_and_interests' => $this->convertToJson($input['hobbies_and_interests']),
        ]);
    }

    /**
     * Convert input to JSON.
     *
     * @param  string  $input
     * @return string|null
     */
    private function convertToJson($input)
    {
        return $input ? json_encode(array_map('trim', explode(',', $input))) : null;
    }
}
