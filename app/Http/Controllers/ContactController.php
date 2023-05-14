<?php

namespace App\Http\Controllers;

use App\Http\Requests\SiteContact\SiteContactRequest;
use App\Models\SiteContact;
use App\Models\Subject;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contatos = SiteContact::with('subject')->get();
        return view('site.index', compact('contatos'));
    }

    public function create()
    {
        $subjects = Subject::all();
        return view('site.contact', compact('subjects'));
    }

    public function store(SiteContactRequest $request)
    {
        $attributes = $request->validated();
        SiteContact::create($attributes);

        return redirect()->route('site.index');
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
