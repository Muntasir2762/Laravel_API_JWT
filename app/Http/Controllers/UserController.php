<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use validator;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $req ){
        return "Hello";
    }
}
