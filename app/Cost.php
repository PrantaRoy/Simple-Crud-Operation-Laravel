<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    public function employe(){
        return $this->belongsTo('App\Employe');
    }

    protected $fillable = [
        'employe_id','totalcost','des','date',
    ];
}
