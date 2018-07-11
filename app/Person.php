<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable=[
        'name',
        'email',
        'born'
    ];

//    public function principal(){
//        return $this->hasOne(Person::class,'id','principal_id');
//
//    }

    public function subalterns(){
        return $this->hasMany(Person::class, 'principal_id','id');
    }

    public function printSubalterns($array){
        $i=0;

            while($i<count($array)){
                echo $array[$i]->name;
                $array[$i]->printSubalterns($array[$i]->subalterns);
                $i++;

            }


    }
//
//    public function printSubalterns(array $elements, $parentId=0){
//
//        $branch = array();
//
//        foreach ($elements as $element) {
//
//                $children = printSubalterns($elements, $element['id']);
//                if ($children) {
//                    $element['children'] = $children;
//                }
//                $branch[] = $element;
//
//        }
//
//        return $branch;
//
//    }
}

