<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function index()
    {
       $path = 'storage/';
       $subjects = Subject::all();
       return view('site.principal', compact(['path', 'subjects']));
    }

    public function create()
    {
    }


    public function store(Request $request)
    {
        //
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
