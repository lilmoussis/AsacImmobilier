<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class MainController extends Controller
{
    public function login() {
        if (session()->has('admin_id')) {
            return redirect(route('admins.dashboard')); 
        }
        return view("admins.login");
    }
    public function loginform(Request $request){
        $users= user::where('name', $request->username)->get();
        if (count($users)==0) {
            return back()->with('error', 'Nom d\'Utilisateur invalide');
        } else {
            foreach ($users as $user) {
                $password=$user->password;
            }
            if (Hash::check($request->password,$password)) {
               session()->put('admin_id',$user->id); 
               return redirect(route('admins.dashboard'));
            } else {
                return back()->with('error', 'Mot de passe invalide');
            }
        }
    }
    public function dashboard(){
        if (!session()->has('admin_id')) {
            return redirect(route('admins.login')); 
        }
        return view('admins.dashboard');
    }
    public function logout(){
        session()->forget('admin_id');
        return redirect(route('admins.login'));
    }
}