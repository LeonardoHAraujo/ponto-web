<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ClockWebController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function autenticate(Request $req)
    {
        $user = User::where('email', $req->username)->first();

        if(Hash::check($req->pass, $user->password)) {
            // code...
        }
    }
}
