<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{


    
    public function user(){

        return $this->belongsTo('App\users','user_id');
    }

    

}
