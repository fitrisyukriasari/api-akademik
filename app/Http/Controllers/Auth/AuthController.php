<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->only('username', 'password');

        try {
            if ( ! $token = \JWT::attempt($credentials)) {
                return response()->json(['error' => 'invalid credentials'], 401);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'could not create token'], 500);
        }

        return response()->json(['token' =>  $token]);
    }

    public function getUserInfo()
    {
        try {
            if ( ! $user = \JWT::parseToken()->authenticate()) {
                return response()->json(['user not found'], 404);
            }
        } catch (TokenExpiredException $e) {
            return response()->json(['error' => 'token expired'], $e->getStatusCode());
        } catch (TokenInvalidException $e) {
            return response()->json(['error' => 'token invalid'], $e->getStatusCode());
        } catch (JWTException $e) {
            return response()->json(['error' => $e->getMessage()], $e->getStatusCode());
        }

        return response()->json(['user' => $user]);
    }

    public function refreshToken()
    {
        $token = \JWT::getToken();

        if ( ! $token) {
            return $this->resposne->errorMethodNotAllowed('Token not provided'  );
        }

        try {
            $refreshedToken = \JwT::refresh($token);
        } catch (JWTException $e) {
            return $this->response->errorInternal('Not able to refresh token');
        }

        return $this->response->withArray(['token' => $refreshedToken]);
    }
}
