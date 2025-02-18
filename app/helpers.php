<?php
function setUserSessionVariables($user)
{
    DB::table('users')
        ->where('usr_id', '=', $user->usr_id)
        ->first();

    //Set user sessions
    Session::put('usr_id', $user->usr_id);
    Session::put('usr_uuid', $user->usr_uuid);
    Session::put('usr_first_name', $user->usr_first_name);
    Session::put('usr_last_name', $user->usr_last_name);
    Session::put('usr_email', $user->usr_email);
    recordLogin($user->usr_id);
}

function recordLogin($usr_id)
{
    DB::table('logins')
        ->insert([
            'usr_id' => $usr_id,
            'log_date' => \Carbon\Carbon::now(),
            'log_ip' => \Request::ip(),
        ]);
}

function unauthorize()
{
    echo redirect('/logout');
    exit();
}

function generateuuid()
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    $string = '';

    for ($i = 0; $i < 32; $i++) {
        $string .= $characters[mt_rand(0, strlen($characters) - 1)];
    }

    return $string;
}

?>