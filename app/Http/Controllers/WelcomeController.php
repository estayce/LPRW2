<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Welcome;

class WelcomeController extends Controller
{
    public function index(){
        $welcome = welcome::all();
        return view('pasta.welcome', ['welcome' => $welcome]);
    }
}
