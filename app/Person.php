<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public function principal(){
        return $this->hasOne(Person::class,'id','principal_id');

    }
    public function subalterns(){
        return $this->hasMany(Person::class, 'principal_id','id');
    }
    public function repliesAll(){

    }
}

/*$people=App\Person::find(1)->principal->last_name;
=> "Nagy"*/