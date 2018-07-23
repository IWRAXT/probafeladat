<?php

namespace App\Http\Controllers;

use App\Person;

use File;
use Intervention\Image\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Validator;
use Illuminate\Http\Request;


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
        $this->validate($request, [
            'file' => 'mimes:jpeg',
        ]);
        $person = new Person();
        $person->name = request('name');

        if(DB::table('people')->where('email',request('email'))->exists()){
            return back()->with('success','Már létezik ez az emailcím az adatbázisban');
        }else{$person->email = request('email');}

        $person->born = request('born');

        if($request->hasFile('file')){
            $file =  $request->file('file');
            $person->image =$person->email.'.jpg';
            //$img = Image::make('./images/'.$person->image);
            //$img->resize(500, 500);
            $file->move(public_path('images'), $person->image);
        }

        $person->principal_id = request('principal_id');
        $person->save();
       return redirect('/people/index')->with('success', 'Person Saved');
    }


    public function edit($id)
    {

        $person = Person::find($id);
        return view('people.edit', compact('person'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'file' => 'mimes:jpeg',
        ]);
        $person = Person::find($id);
        $person->name = request('name');

        if(DB::table('people')
                ->where('email',request('email'))
                ->exists()
                && request('email')!==$person->email){
                     return back()->with('success','Már létezik ez az emailcím az adatbázisban');
        }
        else {
            $person->email = request('email');
            rename(public_path('./images/'.$person->image), './images/'.$person->email.'.jpg');
            $person->image =$person->email.'.jpg';
        }

        $person->born = request('born');

        if($request->hasFile('file')){

            $file =  $request->file('file');
            $person->image =$person->email.'.jpg';
           // $img = Image::make('./images/'.$person->image);
            //$img->resize(500, 500);
            $file->move(public_path('./images/'), $person->image);
        }


        if (request('delete')=='true'){
            $img_path='./images/'.$person->image;
            File::delete($img_path);
            $person->image='default.jpg';

        }

        $person->save();
        return redirect('/people/index')->with('success', 'Dolgozó adatai frissítve');
    }

    public function destroy($id)
    {
        $person=Person::find($id);
        $img_path='./images/'.$person->image;

        File::delete($img_path);
        $person->delete();
        return Person::all();

    }


}
