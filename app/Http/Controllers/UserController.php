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
            'name' => 'required|string',
            'prenom' => 'required|string',
            'password' => 'required|string|same:password_confirm',
            'email' => 'required|string',
        ]);
          
        $user = new User();
        $user->name= $request->input('name');
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
    
    public function editUser($id)
    {
        $user = User::find($id);

        return view('user.edit', ['user'=>$user]);
        
    }
    
    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);

        $validate = $request->validate([
            'name' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string',

        ]);
        
        $user->name = $request->input('name');
        $user->prenom = $request->input('prenom');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();

        session()->flash('success', 'Modification réussie');

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
    public function addimage(Request $request)
    {
        $user = User::find(Auth::user()->id);

        if($request->file('image')){
            /*$file= $request->file('image');

            $filename= date('YmdHi').$file->getClientOriginalName();

            $file->move(public_path('upload'), $filename);

            $user->photos= 'public/upload/'.$filename; 

            */
            
            $chemin =  $request->file('image')->store('upload', 'public');
            $user->photos= $chemin;
            $user->save();  

        }
       
        return redirect()->back();
    }

    
}