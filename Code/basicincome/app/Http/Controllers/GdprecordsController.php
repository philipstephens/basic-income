<?php

namespace App\Http\Controllers;

use App\Gdprecord;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GdprecordsController extends Controller
{
    public function index($s_pergdp, $s_pcratio, $s_year) {

        $gdpratio = intval($s_pergdp) / 100;
        $bi_ratio = intval($s_pcratio);
        $current_year = intval($s_year);
        
        $gdprecords = Gdprecord::all()->where('year', $current_year);
        foreach($gdprecords as $gdprecord) {
            $Pa = $gdprecord->adultpopulation;
            $Pc = $gdprecord->childpopulation;
            $P = $Pa + $Pc;  // total population
            $T = ($gdprecord->gdpcapita * $P) * $gdpratio;  // basic income for country 
 
            if($bi_ratio == 0) { 
                $gdprecord->bi_adult = round($T / $Pa, 2);
            } else {
                $gdprecord->bi_adult = round($T / ($Pa + ($Pc / $bi_ratio)), 2);
            }
            $gdprecord->bi_adult_monthly = round($gdprecord->bi_adult / 12, 2);
            $gdprecord->bi_adult_daily = round($gdprecord->bi_adult / 365, 2);

            if($bi_ratio == 0) {
                $gdprecord->bi_child = 0;
            } else {
                $gdprecord->bi_child = round($gdprecord->bi_adult / $bi_ratio, 2);
            }
            $gdprecord->bi_child_monthly = round($gdprecord->bi_child / 12, 2);
            $gdprecord->bi_child_daily = round($gdprecord->bi_child / 365, 2);                    
        }
        $sorted_gdprecords = $gdprecords->sortByDesc('bi_adult');
       
    	return view('gdprecords.index', compact('sorted_gdprecords'))->with(['gdpratio'=>$gdpratio,
                    'bi_ratio'=>$bi_ratio, 'current_year'=>$current_year]);
    }
}
