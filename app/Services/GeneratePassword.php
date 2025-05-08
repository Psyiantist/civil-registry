<?php

namespace App\Services;
use Illuminate\Support\Str;

class GeneratePassword
{
    public function generatePassword($length)
    {
        $lowercase = 'abcdefghijklmnopqrstuvwxyz';
        $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $numbers = '0123456789';
        $specialChars = '!@#$%^&*()_+[]{}|;:,.<>?';

        // Combine all character sets
        $allChars = $lowercase . $uppercase . $numbers . $specialChars;

        // Generate a random string of a specified length
        $password = Str::random($length);

        // Ensure the password contains at least one lowercase, uppercase, number, and special character
        $password = $this->ensurePasswordComplexity($password, $lowercase, $uppercase, $numbers, $specialChars);

        return $password;
    }

    public function ensurePasswordComplexity($password, $lowercase, $uppercase, $numbers, $specialChars) {
        if (!preg_match('/[a-z]/', $password)) {
            $password .= $lowercase[random_int(0, strlen($lowercase) - 1)];
        }

        if (!preg_match('/[A-Z]/', $password)) {
            $password .= $uppercase[random_int(0, strlen($uppercase) - 1)];
        }

        if (!preg_match('/\d/', $password)) {
            $password .= $numbers[random_int(0, strlen($numbers) - 1)];
        }


        if (!preg_match('/[^a-zA-Z\d]/', $password)) {
            $password .= $specialChars[random_int(0, strlen($specialChars) - 1)];
        }

        return str_shuffle($password);
    }
}
