<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class UserController extends Controller
{
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
            return redirect()->action([AdminController::class, 'home']);
        } else {
            session()->flash('errorMessage', 'Invalid Credentials, please try again.');
            return redirect()->action([MainController::class, 'main']);
        }
    }

    public function logout()
    {
        session()->flush();
        return redirect()->action([MainController::class, 'main']);
    }

    public function registerUser(Request $request)
    {
        // Validate inputs
        $request->validate([
            'usr_first_name' => 'required|string|max:255',
            'usr_middle_name' => 'required|string|max:255',
            'usr_last_name' => 'required|string|max:255',
            'usr_email' => 'required|email|unique:users,usr_email',
            'usr_password' => 'required|string',
        ]);

        DB::beginTransaction();
        try {
            $firstName = ucfirst(strtolower($request->usr_first_name));
            $middleName = ucfirst(strtolower($request->usr_middle_name));
            $lastName = ucfirst(strtolower($request->usr_last_name));

            $userId = DB::table('users')->insertGetId([
                'usr_uuid' => generateuuid(),
                'usr_type' => 3,
                'usr_first_name' => $firstName,
                'usr_middle_name' => $middleName,
                'usr_last_name' => $lastName,
                'usr_email' => $request->usr_email,
                'usr_password' => md5($request->usr_password),
                'usr_date_created' => Carbon::now(),
                'usr_active' => 1,
            ]);

            DB::commit();

            // Redirect back to the page
            session()->flash('successMessage', 'User has been successfully created.');
            return redirect()->back();

        } catch (\Exception $e) {
            DB::rollBack();

            // Redirect back to the page
            session()->flash('errorMessage', 'Something went wrong. Please try again.');
            return redirect()->back();
        }
    }

    public function update(Request $request)
    {
        $usr_uuid = $request->usr_uuid;
        $usr_email = $request->usr_email;
        $usr_first_name = $request->usr_first_name;
        $usr_middle_name = $request->usr_middle_name;
        $usr_last_name = $request->usr_last_name;

        DB::table('users')
            ->where('usr_uuid', '=', $usr_uuid)
            ->update([
                'usr_email' => $usr_email,
                'usr_first_name' => $usr_first_name,
                'usr_middle_name' => $usr_middle_name,
                'usr_last_name' => $usr_last_name,
                'usr_date_modified' => Carbon::now()
            ]);

        $user = DB::table('users')
            ->where('usr_uuid', '=', $usr_uuid)
            ->first();

        setUserSessionVariables($user);

        session()->flash('successMessage', 'User information has been updated.');
        return redirect()->action([AdminController::class, 'home']);
    }

    public function updatePassword2(Request $request)
    {
        $current_password = $request->current_password;
        $new_password1 = $request->new_password1;
        $new_password2 = $request->new_password2;

        $user = DB::table('users')
            ->where('usr_id', '=', session('usr_id'))
            ->first();

        if (md5($current_password) == $user->usr_password) {
            if ($new_password1 == $new_password2) {

                DB::table('users')
                    ->where('usr_id', '=', session('usr_id'))
                    ->update([
                        'usr_password' => md5($new_password1)
                    ]);

                session()->flash('successMessage', 'User password has been changed.');
            } else {
                session()->flash('infoMessage', 'Password did not matched.');
            }
        } else {
            session()->flash('warningMessage', 'Incorrect user password.');
        }
        return redirect()->action([AdminController::class, 'home']);
    }
}
