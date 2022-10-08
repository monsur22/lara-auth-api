<?php

namespace App\Http\Controllers;

use App\Mail\RegistrationMail;
use App\Models\Organization;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UserAuthController extends Controller
{
    public function __construct() {
        $this->middleware('auth:api', ['except' => ['login', 'register','registerVerify']]);
    }

    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|between:2,100',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|confirmed|min:5',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }
        $remember_token = Str::random(32);
        $organization= Organization::create([
            'type' => $request->type,
            'name' => $request->clinic_name,
            'address' => $request->address,
            'size' => $request->size,
            'settlement_month' =>$request->settlement_month,
            'number_clinic' =>$request->number_clinic,
            'started_at'=>0,
        ]);
        $user = User::create(array_merge(
    $validator->validated(),
    [
                'password' => bcrypt($request->password),
                'organization_id' => $organization->id,
                'role' =>1,
                'remember_token'=>$remember_token,
                ]
        ));
        Mail::to($user->email)->send(new RegistrationMail($user,$remember_token));

        if (Mail::failures()) {
            return response()->json('Sorry! Please try again latter');
        }else{
            return response()->json('Great! Successfully send in your mail');
        }
        return response()->json([
            'message' => 'User registered successfully',
            'user' => $user,
            'organization' => $organization,
        ], 201);
    }

    /**
    * After register email check verificaion code
    * Generate Token  Login
    */
    // public $loginAfterSignUp = true;
    public function registerVerify($remember_token, Request $request)
    {
        $user = User::where('remember_token', $remember_token)->first();
        if ($user && empty($user->email_verified_at)) {
            $user->markEmailAsVerified();
            return response()->json(["msg" => "Email  verified."], 200);
        }

        if ($user && !empty($user->email_verified_at)) {
            return response()->json(["msg" => "Already verified"], 200);
        }

        if (!$request->hasValidSignature()) {
            return response()->json(["msg" => "Invalid user."], 400);
        }
        // if ($this->loginAfterSignUp) {
        //     return $this->login($request);
        // }
        return response()->json(["msg" => "Email already verified."], 400);
    }

    /**
     * Get a JWT token after successful login
     * @return \Illuminate\Http\JsonResponse
     */

    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:5',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        if (! $token = JWTAuth::attempt($validator->validated())) {
            return response()->json(['status' => 'failed', 'message' => 'Invalid email and password.', 'error' => 'Unauthorized'], 401);
        }
        if (empty(auth()->user()->email_verified_at))
        {
            return response()->json(['error' => 'Your have not verified your email.'], 401);
        }
        return $this->createNewToken($token);
    }

    /**
     * Get the token array structure.
     * @param  string $token
     * @return \Illuminate\Http\JsonResponse
     */
    protected function createNewToken($token){
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60,
            'user' => auth()->user()
        ]);
    }


    /**
     * Refresh a JWT token
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh() {
        return $this->createNewToken(auth()->refresh());
    }


    /**
     * Get the Auth user using token.
     * @return \Illuminate\Http\JsonResponse
     */
    public function user() {
        return response()->json(auth()->user());
    }


    /**
     * Logout user (Invalidate the token).
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout() {
        auth()->logout();
        return response()->json(['status' => 'success', 'message' => 'User logged out successfully']);
    }

}
