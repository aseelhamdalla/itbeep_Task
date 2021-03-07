<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class intrested extends Model
{
    public function userIntrest(){

        return $this->belongsTo('App\service','user_id');
    }
}
