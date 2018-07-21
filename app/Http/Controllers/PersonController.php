<?php

namespace App\Http\Controllers;

use App\Person;

use File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Validator;
use Illuminate\Http\Request;







//use Collective\Html\FormFacade;

class PersonController extends Controller
{

    public function index()
    {
        $people = Person::all();
        return view('people.index', compact('people'));
    }

    public function getPeople()
    {
        return Person::all();
    }

    public function getDirects($id)
    {
        return Person::find($id)->printSubalterns();
    }


    public function create(Request $request)
    {
        return view('people.create');
    }


    public function store(Request $request)
    {
        $person = new Person();
        $person->name = request('name');

        if(DB::table('people')->where('email',request('email'))->exists()){
            return back()->with('success','Már létezik ez az emailcím az adatbázisban');
        }else{$person->email = request('email');}

        $person->born = request('born');


        if($request->hasFile('file')){
            $file =  $request->file('file');//->resize(500,500);
            $person->image =$person->email.'.jpg';
            $file->move(public_path('images'), $person->image);
        }


        $person->principal_id = request('principal_id');
        $person->save();
       return redirect('/people/index')->with('success', 'Person Saved');
    }


    public function show($id)
    {
        //laravel
    }


    public function edit($id)
    {

        $person = Person::find($id);
        return view('people.edit', compact('person'));
    }

    public function update(Request $request, $id)
    {
        $person = Person::find($id);
        $person->name = request('name');

        if(DB::table('people')
                ->where('email',request('email'))
                ->exists()
                && request('email')!==$person->email){
                     return back()->with('success','Már létezik ez az emailcím az adatbázisban');
        }
        else{$person->email = request('email');}

        $person->born = request('born');

        if($request->hasFile('file')){

            $file =  $request->file('file');//->resize(500,500);
            $person->image =$person->email.'.jpg';
            $file->move(public_path('images'), $person->image);
        }
        $person->save();
        return redirect('/people/index')->with('success', 'Dolgozó adatai frissítve');
    }

    public function destroy($id)
    {
        Person::find($id)->delete();
      //  $img=Person::find($id)->images;

      //  Storage::delete('/images'.$img);

        return Person::all();

    }


}
