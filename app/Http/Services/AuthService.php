<?php

namespace App\Http\Services;

class AuthService
{

    public function makeTokenInfoArray(string $token): array
    {
        return [
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'measurement_unit' => 'seconds'
        ];
    }

}
