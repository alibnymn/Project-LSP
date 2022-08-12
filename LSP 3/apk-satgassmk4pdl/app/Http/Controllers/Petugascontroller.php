<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class Petugascontroller extends Controller
{
    public function index(){
        $data = User::all();
        return view ('petugas.index',compact('data'));
    }
}