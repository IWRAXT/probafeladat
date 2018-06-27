<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable=[
        'last_name',
        'first_name',
        'address',
        'web',
        'phone',
        'foto',
    ];

    public function principal(){
        return $this->hasOne(Person::class,'id','principal_id');

    }
    public function subalterns(){
        return $this->hasMany(Person::class, 'principal_id','id');
    }
    public function repliesAll(){

    }


}

