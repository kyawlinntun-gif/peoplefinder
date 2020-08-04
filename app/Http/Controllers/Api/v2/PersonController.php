<?php

namespace App\Http\Controllers\Api\v2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Person;
use App\Http\Resources\Person\PersonResourceCollection;
use App\Http\Resources\Person\v2\PersonResource;
use App\Http\Requests\PersonFormRequest;

class PersonController extends Controller
{
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
}
