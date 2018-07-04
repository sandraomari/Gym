<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

$table->increments('id');
            $table->string('gym_name');
            $table->string('location');
            $table->timestamps();

class gym_locationController extends Controller
{
    public function SaveGym(Request $req)
	{
		$gym_name = $req['gym_name'];
		$location = $req['location'];
		$opening = $req['opening'];
		$closing = $req['closing'];

		$gym_locations94117 = new gym_locations94117;
		$gym_locations94117->gym_name = $gym_name;
		$gym_locations94117->location = $location;
		$gym_locations94117->opening = $opening;
		$gym_locations94117->closing = $closing;

		$gym_locations94117->save();

		return $gym_locations94117->toJson();
	}

	public function ShowGym(Request $req)
	{
		$data = gym_locations94117::all();

		return $data->toJson();
	}

	public function GymNear(Request $req)
	{
		$location->req->input('location');

		$data = gym_locations94117::where('location',$location)->get();

		return $data->toJson();

	}
}
