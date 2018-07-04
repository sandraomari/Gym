<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class instructorController extends Controller
{
   public function ShowInstructors(Request $req)
	{
		$data = instructors_94117::all();

		return $data;
	}

	public function SaveInstructor(Request $req)
	{
		$name = $req['name'];
		$contact = $req['contact'];
		$email = $req['email'];
		$gender = $req['gender'];
		$profile_photo = $req['profile_photo'];

		$instructors_94117 = new instructors_94117;
		$instructors_94117->name = $name;
		$instructors_94117->contact = $contact;
		$instructors_94117->email = $email;
		$instructors_94117->gender = $gender;
		$instructors_94117->profile_photo = $profile_photo;
		$instructors_94117->save();

		return $instructors_94117->toJson();		
	}

}
