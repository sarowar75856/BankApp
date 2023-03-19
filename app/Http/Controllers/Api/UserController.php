<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Traits\ApiResponse;
use Illuminate\Http\Response;

class UserController extends Controller
{
    use ApiResponse;
    function index(Request $request)
    {
        $user= User::where('email', $request->email)->first();

            if (!$user || !Hash::check($request->password, $user->password)) {
                return response([
                    'message' => ['These credentials do not match our records.']
                ], 404);
            }

             $token = $user->createToken('my-app-token')->plainTextToken;

            $response = [
                'user' => $user,
                'token' => $token
            ];

            return $this->successResponse('Successfully Logedin', $response, Response::HTTP_CREATED);
    }
}



