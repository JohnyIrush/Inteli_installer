<?php

namespace App\Http\Controllers;

use App\Models\SchoolAdmin;
use App\Http\Requests\StoreSchoolAdminRequest;
use App\Http\Requests\UpdateSchoolAdminRequest;

class SchoolAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreSchoolAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSchoolAdminRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SchoolAdmin  $schoolAdmin
     * @return \Illuminate\Http\Response
     */
    public function show(SchoolAdmin $schoolAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SchoolAdmin  $schoolAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit(SchoolAdmin $schoolAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSchoolAdminRequest  $request
     * @param  \App\Models\SchoolAdmin  $schoolAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSchoolAdminRequest $request, SchoolAdmin $schoolAdmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SchoolAdmin  $schoolAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(SchoolAdmin $schoolAdmin)
    {
        //
    }
}
