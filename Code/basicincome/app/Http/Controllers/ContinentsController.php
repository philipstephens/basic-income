<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Continent;

class ContinentsController extends Controller
{
	public function index() {
		$continents = Continent::all();
		return view('continents.index', compact('continents'));
	}   
}
