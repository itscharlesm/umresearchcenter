<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class UserManagementController extends Controller
{
    public function user_management()
    {
        $users = DB::table('users')
            ->get();
        $modules = DB::table('modules')->get();
        return view('admin.modules.users.manage-user', compact('users', 'modules'));
    }

    //create user

    public function registerUser(Request $request)
    {
        // Validate inputs
        $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email|unique:users,usr_email',
            'password' => 'required|string|min:8',
            'roles' => 'array',
        ]);

        DB::beginTransaction();
        try {
            $userId = DB::table('users')->insertGetId([
                'usr_first_name' => $request->firstName,
                'usr_last_name' => $request->lastName,
                'usr_email' => $request->email,
                'usr_password' => md5($request->password),
                'usr_active' => 1,
            ]);

            if ($request->roles && is_array($request->roles)) {
                $rolesData = array_map(function ($roleId) use ($userId) {
                    return [
                        'usr_id' => $userId,
                        'mod_id' => $roleId,
                    ];
                }, $request->roles);

                DB::table('user_modules')->insert($rolesData);
            }

            DB::commit();

            return redirect("/admin/dashboard")
                ->with('success', 'User created successfully.');

        } catch (\Exception $e) {


            DB::rollBack();

            return redirect("/admin/dashboard")
                ->with('error', 'Something went wrong.');
        }
    }
}
