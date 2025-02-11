<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\MainController;
use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    //
    public function admin()
    {
        return view('admin.index', );
    }

    public function validateUser(Request $request)
    {
        $usr_email = $request->email;
        $usr_password = $request->password;

        $user = DB::table('users')
            ->where('usr_email', '=', $usr_email)
            ->where('usr_password', '=', md5($usr_password))
            ->where('usr_active', '=', '1')
            ->first();

        if ($user) {
            setUserSessionVariables($user);
            return view('admin.index', compact('user'));
        } else {
            return redirect()->route('home', );
        }
    }

    public function logout()
    {
        session()->flush();
        return redirect()->action([MainController::class, 'main']);
    }

}
