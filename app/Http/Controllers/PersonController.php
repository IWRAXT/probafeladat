<?php

namespace App\Http\Controllers;

use App\Person;

use Intervention\Image\Facades\Image;
use Validator;
use Illuminate\Http\Request;
use Storage;
use File;





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
        $person->email = request('email');
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
        $person->update($request->all());
        if($request->hasFile('file')){

            $file =  $request->file('file');//->resize(500,500);
            $person->image =$person->email.'.jpg';
            $file->move(public_path('images'), $person->image);

        }
        return redirect('/people/index')->with('success', 'Person Updated');
    }

    public function destroy($id)
    {
        Person::find($id)->delete();

        return Person::all();

//        $image_path = '/images/'.Person::find($id)->email.'jpg';
//        if(File::exists($image_path)) {
//            File::delete($image_path);
//        }
    }


}
