<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormPangkatRegularController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('application.crud-form-regular.table-regular');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('application.crud-form-regular.form-regular');
    }

    public function proses()
    {
        return view('application.proses.teble-regular');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
