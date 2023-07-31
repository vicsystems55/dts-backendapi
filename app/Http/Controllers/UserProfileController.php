<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    //

    public function index(){
        $users = User::where('role', '!=','visitor')->latest()->get();
        return $users;
    }
}
