<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\users_94117;
use Illuminate\Support\Facades\Hash;

class User_94117Controller extends Controller
{
    public function Register(Request $req){
    	      

        $firstname = $req['firstname'];
        $lastname = $req['lastname'];
        $email = $req['email'];
        $password = $req['password'];

        $users_94117 = new users_94117;
        $users_94117->firstname =$firstname;
        $users_94117->lastname = $lastname;
        $users_94117->email = $email;
        $users_94117->password = Hash::make($password);
        $users_94117->save();

        return new userResource($users_94117)
    }

    public function Login(Request $req)
    {
        
        $email=$req['email'];
        $password=$req['password'];

        $users_94117 = users_94117::where('email',$email)->firstOrFail();

        if(Hash::check($password, $users_94117->password))
        {
            return $users_94117->toJson();
        }
        return null;
    }

    public function ShowUsers(Request $req)
    {
        $data = users_94117::all();

        return $data->toJson();
    }

    
}
