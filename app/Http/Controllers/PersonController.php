<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;
use App\Http\Resources\Person\PersonResourceCollection;
use App\Http\Resources\Person\PersonResource;
use App\Http\Requests\PersonFormRequest;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *@return PersonResourceCollection
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): PersonResourceCollection
    {
        return new PersonResourceCollection(Person::paginate()); //With paginate is not needed to declare collection.
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonFormRequest $request): PersonResource
    {
        $person = Person::create($request->all());

        return new PersonResource($person);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function show(Person $person): PersonResource
    {
        return new PersonResource($person);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit(Person $person)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(PersonFormRequest $request, Person $person): PersonResource
    {
        $person->update($request->all());

        return new PersonResource($person);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        $person->delete();

        return \response()->json();
    }
}
