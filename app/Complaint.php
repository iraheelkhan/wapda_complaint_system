<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    //
    public function subdivision(){
    	return $this->belongsTo('App\SubDivision')->withdefault();
    }
    public function user(){
    	return $this->belongsTo('App\User')->withdefault();
    }
    
}
