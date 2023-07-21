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
        
        $utilisateurs = User::where('role','user')->get();
        return view('user.list', ['utilisateurs' => $utilisateurs]);
    }  
   
    public function addUsers(Request $request)
    {

        $validatedData = $request->validate([
            'last_name' => 'required|string',
            'first_name' => 'required|string',
            'password' => 'required|string',
            'email' => 'required|string',
            
        ]);

        $user = new User();
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
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
    
    public function editUser($id)
    {
        $user = User::find($id);

        return view('user.edit', ['user'=>$user]);
        
    }
    
    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);

        $validate = $request->validate([
            'last_name' => 'required|string',
            'first_name' => 'required|string',
            'email' => 'required|string',
            'role' => 'required|string',
            'password' => 'required|string',

        ]);
        
        $user->name = $request->input('first_name');
        $user->prenom = $request->input('last_name');
        $user->email = $request->input('email');
        $user->role = $request->input('role');
        $user->password = $request->input('password');
        $user->save();

        session()->flash('success', 'Modification réussi');

        return redirect()->route('home'); 
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

    public function delete($id)
    {
        
        $user = User::find($id);

        if(!$user){
            session()->flash('error', 'Utilisateur introvable ...');
        }
        else{
            $user->delete();
            session()->flash('success', 'Suppression réussi ...');
        }

        return redirect()->route('user-list');
    }

    
}