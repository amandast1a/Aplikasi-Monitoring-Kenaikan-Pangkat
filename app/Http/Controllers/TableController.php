<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form_jabatan_fungsional;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function jabatanFungsional()
    {
        $Form_jabatan_fungsional = Form_jabatan_fungsional::all();
        return view('application.crud-form-jabatan.table-jabatan-fungsional', compact('Form_jabatan_fungsional'));
    }

    public function regular()
    {
        return view('application.crud-form-regular.table-regular');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
