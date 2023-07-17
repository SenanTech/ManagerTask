<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
  public function showUsers()
    {
        $utilisateurs = User::all();
    
        return view('user.list', ['utilisateurs' => $utilisateurs]);
    }  
   
    public function addUsers(Request $request)
    {

        $validatedData = $request->validate([
            'prenom' => 'required|string',
            'name' => 'required|string',
            'password' => 'required|string',
            'email' => 'required|string',
            
        ]);


        $name = $request->input('name');
        $password = $request->input('password');
        $email = $request->input('email');
        $prenom = $request->input('prenom');
        

        $user = new User();
        
        $user->name = $name;
        // $user->prenom = $prenom;
        $user->email = $email;
        $user->password = $password;
        $user->role = 'utilisateur';
        $user->save();

        session()->flash('success', 'Enregistrement réussi');

        return redirect()->route('userForm');

    }
}