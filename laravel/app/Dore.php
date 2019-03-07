<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/*
 * Class Cat
 * @package App\Models
 * @property int id
 * @property string name
 *
 * */
class Dore extends Model
{
    protected $table='dores';
    public function User (){
        return $this->hasMany('App\User');
    }
}
