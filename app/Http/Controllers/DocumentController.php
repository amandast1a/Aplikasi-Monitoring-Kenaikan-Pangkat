<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function tablePeriode()
    {
        return view('super-admin.crud-periode.table-periode');
    }

    public function tableJabatan()
    {
        return view('super-admin.crud-jabatan.table-jabatan');
    }

    public function tableKecamatan()
    {
        return view('super-admin.crud-kecamatan.table-kecamatan');
    }

    public function tableDinas()
    {
        return view('super-admin.crud-dinas.table-dinas');
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
