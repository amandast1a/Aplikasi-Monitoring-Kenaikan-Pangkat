<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kecamatan;

class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kecamatan = Kecamatan::all();
        return view('super-admin.crud-kecamatan.table-kecamatan', compact('kecamatan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('super-admin.crud-kecamatan.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function proses(Request $request)
    {
        $request->validate([
            'kecamatan' => 'required|string',
        ]);

        $dataUpload = new Kecamatan;
        $dataUpload->kecamatan = $request->kecamatan;

        $dataUpload->save();

        return redirect('/kecamatan')->with('success', 'Data baru berhasil ditambahkan!');
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
