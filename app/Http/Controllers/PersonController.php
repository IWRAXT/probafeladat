<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{

    public function index()
    {
        return view('people.index',compact('people'));
    }


    public function create()
    {
        return view('people.create');
    }


    public function store(Request $request)
    {

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
