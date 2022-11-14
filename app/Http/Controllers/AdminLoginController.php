<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Session;
use Validator;

class AdminLoginController extends Controller
{
    public function index()
    {

        return view('login');
    }

    public function login(Request $request)
    {

        try {

            // $this->validate($request, [
            //     'email' => 'required|email',
            //     'password' => 'required|min:6',
            // ]);

            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required|min:6',

            ]);
            if ($validator->fails()) {

                return redirect()->back()->withErrors($validate->messages())->withInput();
            }

            $email      = $request->email;
            $password   = $request->password;

            $userCheck  = User::where('user_role', 1)
                ->where('email', $email)
                ->first();
            // dd($userCheck);
            if ($userCheck) {

                if (Auth::attempt(['email' => $email, 'password' => $password])) {
                    return redirect('forage/dashboard');
                } else {
                    return redirect()->back()->with('error', 'Invalid E-mail or Password!');
                }
            } else {
                return redirect()->back()->with('error', 'Invalid User!');
            }
        } catch (\Exception $e) {
            return 'Something Went Wrong';
        }
    }

    public function logout(Request $request)
    {

        Auth::logout();
        Session::flush();
        // Auth::logout();
        return redirect('/forage/login');
    }
}
