<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
	public function index(Request $request) {
		$pGDP  = $request->input('percentGDP', '30');
		$acr   = $request->input('adultchildratio', '0');
		$cyear = $request->input('fyear', '2014');
		$route_string = "/basicincome/" . $pGDP . "/" . $acr . "/" . $cyear;
		return redirect($route_string);
	}

	public function index2() {
		$route_string = "/basic/income/30/0/2014";
		return redirect($route_string);
	}
}
