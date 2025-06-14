<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __invoke(LoginRequest $request) {

        $input = $request->validated();

        if (auth()->attempt($input)) {
            request()->session()->regenerate();

            return new UserResource(auth()->user());
        }
    }
}
