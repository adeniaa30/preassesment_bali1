<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\tamuController;
use App\User;
use Illuminate\Http\Request;

class tamuController extends Controller
{
    public function index(){
        $data2 = User::all();

        return view('app', compact('data2'));
    }
}
