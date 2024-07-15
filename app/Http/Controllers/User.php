<?php

namespace App\Http\Controllers;

use Exception;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User as UserModel;

class User extends Controller
{
    private function _validate(Request &$req) {
        $username = $req->input('username');
        if (!is_string($username) || strlen($username) > 128) {
            throw new Exception('');
        }

        $password = $req->input('password');
        if (!is_string($password)) {
            throw new Exception('');
        }
        if (strlen($password) > 24) {
            throw new Exception('password;The password can only consist of up to 24 characters!');
        }

        $user = UserModel::where('username', '=', $username)->first();
        if (!$user || !Hash::check($password, $user->password)) {
            throw new Exception('wrong;This combination could not be assigned to any account!');
        }
    }

    public function login(Request $req) {
        try {
            $this->_validate($req);
        } catch (Exception $ex) {
            $ex_msg = $ex->getMessage();
            if (empty($ex_msg)) {
                // Don't show this asshole any information.
                return redirect()->back()->withInput();
            }
            $explode = explode(";", $ex_msg);
            return redirect()->back()->withInput()->withErrors([
                $explode[0] => '1',
                'desc' => $explode[1],
            ]);
        }

        if (Auth::attempt(['username' => $req->input('username'), 'password' => $req->input('password')])) {
            return redirect()->route('app.index');
        }

        return redirect()->back()->withInput()->withErrors([
            'unknown' => '1',
            'desc' => 'Something went wrong!',
        ]);
    }

    public function logout(Request $req) {
        Auth::logout();

        $req->session()->invalidate();
        $req->session()->regenerateToken();

        return redirect()->route('app.index');
    }
}
