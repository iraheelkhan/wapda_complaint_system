<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubDivision extends Model
{
    //
    protected $table = "subdivisions";
    public function division(){
    	return $this->belongsTo('App\Division')->withdefault();
    }
}
