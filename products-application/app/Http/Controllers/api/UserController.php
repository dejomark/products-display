<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function loginUser(Request $request)
    {
        try {
            $validateUser = Validator::make($request->all(), 
            [
                'email' => 'required|email',
                'password' => 'required'
            ]);

            if($validateUser->fails()){
                return redirect('/error');
            }

            if(!Auth::attempt($request->only(['email', 'password']))){
                return redirect('/error');
            }

            $user = User::where('email', $request->email)->first();

            session_start();
            session_destroy();

            session_start();
            if (!isset($_SESSION['sessionId'])) {
                session_regenerate_id(); 
                $_SESSION['sessionId'] = $user->id;
            }
            $_SESSION['admin'] = $user->name;

            return redirect('/admin');

        } catch (\Throwable $th) {
            return redirect('/error');
        }
    }

    public function logoutUser() {
        session_start();
        session_destroy();

        return redirect('/');
    }
}
