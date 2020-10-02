<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Services\UserService;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function login(LoginRequest $request)
    {
        try {
            # credentials
            $credentials =  $request->only('email', 'password');
            # attempt login
            if (Auth::attempt($credentials)) {
                # Authentication passed...
               
                $success = "Welcome Affliate";
                return redirect()->intended('dashboard')->with(['data' => $success]);
            }
            else{
                return back()->withInput()->withErrors(['Password incorrect']);
            }
        } catch (\Exception $ex) {
            dd($ex);
        }
    }

    public function register(RegisterRequest $request)
    {
        try {
            # create data
            $data = [
                "name" => $request->get('name'),
                "last_name" => $request->get('last_name'),
                "email" => $request->get('email'),
                "phone_number" => $request->get('phone_number'),
                "password" => $request->get('password'),
            ];

            # hash password
            $data["password"] = Hash::make($data["password"]);
            $data["role"] = "Admin";

            # create user
            $user = $this->userService->create($data);

            # log user in
            Auth::loginUsingId($user->id);

            # redirect to dashboard
            return redirect()->intended('dashboard');
        } catch (\Exception $ex) {
            dump($ex);
        }
    }

    public function logout()
    {
        # logout
        Auth::logout();
        return redirect()->route('login');
    }

}
