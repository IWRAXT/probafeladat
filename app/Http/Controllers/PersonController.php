<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;
use Collective\Html\FormFacade;

class PersonController extends Controller
{

    public function index()
    {
        $people = Person::all();
        return view('people.index',compact('people'));
    }


    public function create(Request $request)
    {
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
        $person->principal_id=request('principal_id');

        $person->save();

        return redirect('/people/index')->with('success','Person Saved');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $person=Person::find($id);
        return view('people.edit',compact('person'));
    }


    public function update(Request $request, $id)
    {

        $person=Person::find($id);
        $person->update($request->all());
        return redirect('/people/index')->with('success','Person Updated');
    }


    public function destroy($id)
    {

        if(count(Person::find($id)->subalterns) === 0){

            Person::find($id)->delete();
            return redirect('/people/index')->with('success','Person deleted');
        }else {
            return redirect('/people/index')->with('success','Olyan személy, aki alatt vannak személyek, nem törölhető.');
        }




    }
}
