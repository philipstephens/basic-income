<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Country;

class CountriesController extends Controller
{
    public function index() {
    	$countries = Country::all()->sortBy('nicename');
    	return view('countries.index', compact('countries'));
    }
}
