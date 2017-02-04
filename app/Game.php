<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    //

    protected $fillable = [

        'name',
        'url',
        'pic',

    ];


    public function categories(){

        return $this->belongsToMany('App\Category');
    }


}
