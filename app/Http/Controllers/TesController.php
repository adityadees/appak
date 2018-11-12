<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class TesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index()

    {
    	$countries = DB::table('country')->pluck("name","id");
    	return view('tes',compact('countries'));
    }

    public function getStates($id) {
    	$states = DB::table("state")->where("country_id",$id)->pluck("name","id");

    	return json_encode($states);

    }

}