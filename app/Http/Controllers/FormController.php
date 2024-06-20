<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form_jabatan_fungsional;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function utama()
    {
        return view('pengusul.index');
    }

    public function jabatanStruktural()
    {
        return view('application.crud-form-struktural.form-jabatan-struktural');
    }

    // halaman form jabatan Fungsional
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
            'unit_kerja' => 'required|string',
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
        $dataUpload->unit_kerja = $request->unit_kerja;
        $dataUpload->date = $request->date;
        $dataUpload->nomor_wa = $request->nomor_wa;

        // Handle each file upload individually
        if ($request->hasFile('doc_suratPengantar')) {
            $upload = $request->file('doc_suratPengantar');
            $nameFile = time() . rand(100, 999) . "." . $upload->getClientOriginalExtension();
            $upload->move(public_path('assets/documentJabatans'), $nameFile);
            $dataUpload->doc_suratPengantar = $nameFile;
        }

        if ($request->hasFile('doc_skPangkat')) {
            $upload = $request->file('doc_skPangkat');
            $nameFile = time() . rand(100, 999) . "." . $upload->getClientOriginalExtension();
            $upload->move(public_path('assets/documentJabatans'), $nameFile);
            $dataUpload->doc_skPangkat = $nameFile;
        }
        if ($request->hasFile('doc_pakKonvensional')) {
            $upload = $request->file('doc_pakKonvensional');
            $nameFile = time() . rand(100, 999) . "." . $upload->getClientOriginalExtension();
            $upload->move(public_path('assets/documentJabatans'), $nameFile);
            $dataUpload->doc_pakKonvensional = $nameFile;
        }
        if ($request->hasFile('doc_pakIntegrasi')) {
            $upload = $request->file('doc_pakIntegrasi');
            $nameFile = time() . rand(100, 999) . "." . $upload->getClientOriginalExtension();
            $upload->move(public_path('assets/documentJabatans'), $nameFile);
            $dataUpload->doc_pakIntegrasi = $nameFile;
        }
        if ($request->hasFile('doc_pakKonversi')) {
            $upload = $request->file('doc_pakKonversi');
            $nameFile = time() . rand(100, 999) . "." . $upload->getClientOriginalExtension();
            $upload->move(public_path('assets/documentJabatans'), $nameFile);
            $dataUpload->doc_pakKonversi = $nameFile;
        }
        if ($request->hasFile('doc_penilaian2022')) {
            $upload = $request->file('doc_penilaian2022');
            $nameFile = time() . rand(100, 999) . "." . $upload->getClientOriginalExtension();
            $upload->move(public_path('assets/documentJabatans'), $nameFile);
            $dataUpload->doc_penilaian2022 = $nameFile;
        }
        if ($request->hasFile('doc_penilaian2023')) {
            $upload = $request->file('doc_penilaian2023');
            $nameFile = time() . rand(100, 999) . "." . $upload->getClientOriginalExtension();
            $upload->move(public_path('assets/documentJabatans'), $nameFile);
            $dataUpload->doc_penilaian2023 = $nameFile;
        }
        if ($request->hasFile('doc_jabatanLama')) {
            $upload = $request->file('doc_jabatanLama');
            $nameFile = time() . rand(100, 999) . "." . $upload->getClientOriginalExtension();
            $upload->move(public_path('assets/documentJabatans'), $nameFile);
            $dataUpload->doc_jabatanLama = $nameFile;
        }
        if ($request->hasFile('doc_jabatanTerakhir')) {
            $upload = $request->file('doc_jabatanTerakhir');
            $nameFile = time() . rand(100, 999) . "." . $upload->getClientOriginalExtension();
            $upload->move(public_path('assets/documentJabatans'), $nameFile);
            $dataUpload->doc_jabatanTerakhir = $nameFile;
        }
        if ($request->hasFile('doc_pendidik')) {
            $upload = $request->file('doc_pendidik');
            $nameFile = time() . rand(100, 999) . "." . $upload->getClientOriginalExtension();
            $upload->move(public_path('assets/documentJabatans'), $nameFile);
            $dataUpload->doc_pendidik = $nameFile;
        }
        if ($request->hasFile('doc_uji')) {
            $upload = $request->file('doc_uji');
            $nameFile = time() . rand(100, 999) . "." . $upload->getClientOriginalExtension();
            $upload->move(public_path('assets/documentJabatans'), $nameFile);
            $dataUpload->doc_uji = $nameFile;
        }

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
