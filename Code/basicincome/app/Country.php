<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
	protected $fillable = [];
    public $incrementing = false;

    public function continent() {
    	return $this->belongsTo(Continent::class, 'continents_id', 'continents_id');
    }

    public function gdprecords() {
    	return $this->hasMany('Gdprecord::class');
    }
}
