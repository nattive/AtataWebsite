<?php

namespace App\Http\Controllers;

use App\Http\Resources\sellerResource;
use App\seller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\JWTAuth;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }
    public function register(Request $request)
    {
        $v = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password'  => 'required|min:3|confirmed',
        ]);
        if ($v->fails()) {
            return response()->json([
                'status' => 422,
                'errors' => $v->errors()
            ], 200);
        }
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return response()->json(['status' => 200, 'user' => $user], 200);
    }
    public function login()
    {
        $credentials = request(['email', 'password']);
        if (!$token = auth('api')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthoried'], 401);
        }
        return $this->respondWithToken($token);
    }
    public function logout()
    {
        auth('api')->logout();
        return response()->json(['message' => 'Successfully logged out']);
    }
    public function user(Request $request)
    {
        return response()->json(auth('api')->user());
    }
    public function refresh()
    {
        if ($token = $this->guard()->refresh()) {
            return response()
                ->json(['status' => 'successs'], 200)
                ->header('Authorization', $token);
        }
        return response()->json(['error' => 'refresh_token_error'], 401);
    }
    /**
     * Get the token array structure.
     *
     * @param string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'user' => $this->guard()->user(),
            'role' => $this->guard()->user()->role,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 360000
        ]);
    }
    public function guard()
    {
        return Auth::Guard('api');
    }
    public function getCustomTokens()
    {
        return JWTAuth::getPayload();
    } 
}
