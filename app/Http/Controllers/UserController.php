<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showUsers()
    {
        $utilisateurs = User::all();
    
        return view('user.list', ['users' => $utilisateurs]);
    }  
}





