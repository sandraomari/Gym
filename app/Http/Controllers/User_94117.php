<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\user_94117;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\UserResource;

class User_94117 extends Controller
{
    public function Register(Request $req){
    	$validatedData = $req->validate([
        'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|unique:user_94117',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6',

        ]);
        

        $firstname = $req['firstname'];
        $lastname = $req['lastname'];
        $email = $req['email'];
        $password = $req['password'];

        $user_94117 = new user_94117;
        $user_94117->firstname =$firstname;
        $user_94117->lastname = $lastname;
        $user_94117->email = $email;
        $user_94117->password = Hash::make($password);
        $user_94117->save();

        return new UserResource(
            $user_94117
        );
    }

    public function Login(Request $req)
    {
        
        $email=$req['email'];
        $password=$req['password'];

        $user_94117 = user_94117::where('email',$email)->firstOrFail();

        if(Hash::check($password, $user_94117->password))
        {
            return $user_94117->toJson();
        }
        return null;
    }

    public function ShowUsers(Request $req)
    {
        $data = user_94117::all();

        return $data->toJson();
    }

    }
}
