<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    public function costs(){
        return $this->hasMany('App\Cost');
    }


}
