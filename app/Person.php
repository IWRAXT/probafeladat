<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable=[
        'name',
        'email',
        'born',
        'image'
    ];


    public function subalterns(){
        return $this->hasMany(Person::class, 'principal_id','id');
    }

    public function printSubalterns()
    {
        $subalterns = $this->subalterns;
        $result = [];

        for ($i = 0, $iMax = count($subalterns); $i < $iMax; $i++) {
            /** @var Person $beosztott */
            $beosztott = $subalterns[$i];

            $result[$beosztott->name] = $beosztott->printSubalterns();
        }

        return $result;
    }
}

