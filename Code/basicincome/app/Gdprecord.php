<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gdprecord extends Model
{
	protected $fillable = [];
	protected $table = "gdprecords";

    public function countries() {
    	return $this->belongsTo(Country::class, 'country_id', 'country_id');
    }
}
