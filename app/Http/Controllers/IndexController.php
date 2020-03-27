<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $user = User::first();
        dd($user->skills);
        return view('index');
    }
}
