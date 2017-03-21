<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExternalProviders extends Model
{
    protected $table = 'external_providers';

	public function city(){
        return $this->belongsTo('Cities');
    }

    public function users(){
        return $this->hasMany('Users');
    }


}
