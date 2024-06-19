<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form_jabatan_fungsional;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function jabatanFungsional()
    {
        return view('application.crud-form-jabatan.form-jabatan-fungsional');
    }
    public function jabatanStore(Request $request)
    {
        $request->validate([
            'periode' => 'required|string',
            'nama' => 'required|string',
            'nip' => 'required|string',
            'golongan' => 'required|string',
            'jabatan' => 'required|string',
            'date' => 'required|date',
            'nomor_wa' => 'required|string',
            'doc_suratPengantar' => 'required|file|mimes:pdf|max:1024',
            'doc_skPangkat' => 'required|file|mimes:pdf|max:1024',
            'doc_pakKonvensional' => 'required|file|mimes:pdf|max:1024',
            'doc_pakIntegrasi' => 'required|file|mimes:pdf|max:1024',
            'doc_pakKonversi' => 'required|file|mimes:pdf|max:1024',
            'doc_penilaian2022' => 'required|file|mimes:pdf|max:1024',
            'doc_penilaian2023' => 'required|file|mimes:pdf|max:1024',
            'doc_jabatanLama' => 'required|file|mimes:pdf|max:1024',
            'doc_jabatanTerakhir' => 'required|file|mimes:pdf|max:1024',
            'doc_pendidik' => 'required|file|mimes:pdf|max:1024',
            'doc_uji' => 'required|file|mimes:pdf|max:1024',
        ]);

        $dataUpload = new Form_jabatan_fungsional;
        $dataUpload->periode = $request->periode;
        $dataUpload->nama = $request->nama;
        $dataUpload->nip = $request->nip;
        $dataUpload->golongan = $request->golongan;
        $dataUpload->jabatan = $request->jabatan;
        $dataUpload->date = $request->date;
        $dataUpload->nomor_wa = $request->nomor_wa;

        $dataUpload->doc_suratPengantar = $request->file('doc_suratPengantar')->store('documentJabatans', 'public');
        $dataUpload->doc_skPangkat = $request->file('doc_skPangkat')->store('documentJabatans', 'public');
        $dataUpload->doc_pakKonvensional = $request->file('doc_pakKonvensional')->store('documentJabatans', 'public');
        $dataUpload->doc_pakIntegrasi = $request->file('doc_pakIntegrasi')->store('documentJabatans', 'public');
        $dataUpload->doc_pakKonversi = $request->file('doc_pakKonversi')->store('documentJabatans', 'public');
        $dataUpload->doc_penilaian2022 = $request->file('doc_penilaian2022')->store('documentJabatans', 'public');
        $dataUpload->doc_penilaian2023 = $request->file('doc_penilaian2023')->store('documentJabatans', 'public');
        $dataUpload->doc_jabatanLama = $request->file('doc_jabatanLama')->store('documentJabatans', 'public');
        $dataUpload->doc_jabatanTerakhir = $request->file('doc_jabatanTerakhir')->store('documentJabatans', 'public');
        $dataUpload->doc_pendidik = $request->file('doc_pendidik')->store('documentJabatans', 'public');
        $dataUpload->doc_uji = $request->file('doc_uji')->store('documentJabatans', 'public');

        $dataUpload->save();

        return redirect('/table-jabatan-fungsional')->with('success', 'Data baru berhasil ditambahkan!');
    }



    public function regular()
    {
        return view('application.crud-form-regular.form-regular');
    }

    /**
     * Show the form for creating a new resource.
     */


     public function periode()
    {
        return view('super-admin.crud-periode.form');
    }

     public function jabatan()
    {
        return view('super-admin.crud-jabatan.form');
    }
     public function kecamatan()
    {
        return view('super-admin.crud-kecamatan.form');
    }
     public function dinas()
    {
        return view('super-admin.crud-dinas.form');
    }

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
