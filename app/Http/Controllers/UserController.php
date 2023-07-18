<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Personne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

        $user = new User();
        $user->name = $request->input('name');
        $user->prenom = $request->input('prenom');
        $user->email = $request->input('email');$request->input('email');
        $user->password = Hash::make(  $request->input('password') );
        $user->role = 'user';
        $user->save();

        $personne = new Personne();
        $personne->users_id = $user->id;
        $personne->save();
        
        session()->flash('success', 'Enregistrement réussi');

        return redirect()->route('user-add');

    }

    public function update(Request $request)
    {
        $user = auth()->user();

        $validate = $request->validate([
            'prenom' => 'required|string',
            'name' => 'required|string',
            'email' => 'required|string',

        ]);
        
        $user->name = $request->input('name');
        $user->prenom = $request->input('prenom');
        $user->email = $request->input('email');
        $user->save();

        session()->flash('success', 'Modification réussi');

        return redirect()->route('account');  
    }

    public function passwordUpdate(Request $request)
    {
        $user = auth()->user();

        $validate = $request->validate([
            'currentPassword' => 'required|string',
            'password' => 'required|string',
            
        ]);
    
        if (Hash::check($request->input('currentPassword'), $user->password)) {
            $user->password = $request->input('password');
            $user->save();
            session()->flash('success', 'Modification réussi');            
        }else {
            session()->flash('error', 'Veuillez bien mettre votre mot de passe actuel');
        }
        
        return redirect()->route('security');  
    }
}