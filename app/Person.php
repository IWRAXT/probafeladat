<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public function principal(){
        return $this->hasOne(Person::class);

    }

    public function subaltern(){
        return $this->hasMany(Person::class);
    }
}
