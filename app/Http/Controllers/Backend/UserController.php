<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function User_View()
    {

        
        $Users = User::all();
        //$data['Users'] = User::all();
        return view("User.User_view",compact('Users')); 
    }
}
