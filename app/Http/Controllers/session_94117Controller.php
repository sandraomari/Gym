<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\session_94117;

class session_94117Controller extends Controller
{
   public function Save(Request $req)
    {
    	$exercise_name = $req['exercise_name'];
    	$rep_number = $req['rep_number'];
    	$location_name = $req['location_name'];
    	$date = $req['date'];

    	$session_94117 = new session_94117;
    	$session_94117->exercise_name = $exercise_name;
    	$session_94117->rep_number = $rep_number;
    	$session_94117->location_name = $location_name;
    	$session_94117->date = $date;
    	$session_94117->save();

    	return $session_94117;
    }

    public function Session(Request $req)
    {
    	$data = session_94117::all();
        return $data;

    }
}
