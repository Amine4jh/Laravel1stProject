<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

public function get_login(){
    return view('login.login');
}

public function getWelcome() {
    return view('login.welcome', ['name' => "Sarah"]);
}

}
