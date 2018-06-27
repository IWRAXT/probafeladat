<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{

    public function index()
    {
        $people = Person::all();
        return view('people.index',compact('people'));
    }


    public function create()
    {
       // Person::create([request()]);
        return view('people.create');
    }


    public function store()
    {
        $person=new Person();
        $person->last_name=request('last_name');
        $person->first_name=request('first_name');
        $person->address=request('address');
        $person->web=request('web');
        $person->phone=request('phone');
        $person->foto=request('foto');

        $person->save();

        return redirect('/people/index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
