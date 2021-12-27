<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\AccessCode;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\StoreUserRequest;

class RegisterController extends Controller
{
    /**
     * Index action
     */
    public function index()
    {
        $data = [
            'title' => 'Register',
        ];

        return view('auth.register')->with($data);
    }

    /**
     * Register the user
     *
     * @param StoreUserRequest $request
     */
    public function register(StoreUserRequest $request)
    {

        $name       = $request->name;
        $email      = $request->email;
        $password   = $request->password;
        $accessCode = $request->access_code;

        # Check if no user can be found
        if (User::where('email', $email)->first()) {
            return redirect()->back()->with('error', 'This user already exists');
        }

        $accessCode = AccessCode::where('access_code', $accessCode)->first();

        # Check if access code is found or is not used
        if (!$accessCode) {
            return redirect()->back()->with('error', 'This access code is invalid');
        } elseif ($accessCode->used == 1) {
            return redirect()->back()->with('error', 'This access code is invalid');
        }

        # Create new user
        $user           = new User();
        $user->name     = $name;
        $user->email    = $email;
        $user->password = Hash::make($password);
        $user->save();

        # Update access code to prevent further using
        $accessCode->used = 1;
        $accessCode->save();

        return redirect()->route('home')->with('success', 'Your account has been saved and you can now login');
    }
}
