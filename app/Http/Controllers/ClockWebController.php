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
        return view('pointWeb.clock');
    }

    public function showForm()
    {
        return view('login');
    }

    public function autenticate(Request $req)
    {

    }
}
