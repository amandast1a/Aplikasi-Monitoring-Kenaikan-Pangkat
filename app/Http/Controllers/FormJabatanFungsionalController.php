<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form_jabatan_fungsional;
use App\Models\Golongan;
use App\Models\Periode;
use App\Models\Status;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class FormJabatanFungsionalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $notifications = Notification::where('user_id', $user->id)->latest()->get();
        $unreadCount = $notifications->count();
        $Form_jabatan_fungsional = Form_jabatan_fungsional::where('user_id', $user->id)->get();
        $Form_jabatan_fungsional = Form_jabatan_fungsional::latest()->paginate(5);
        return view('application.crud-form-jabatan.table-jabatan-fungsional', compact('Form_jabatan_fungsional', 'user', 'notifications', 'unreadCount'));
    }

    public function indexverifikator()
    {
        $user = Auth::user();
        $Form_jabatan_fungsional = Form_jabatan_fungsional::with('user')->paginate(5);
        return view('verifikator.crud-form-jabatan.table-jabatan-fungsional', compact('Form_jabatan_fungsional', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        $golongan = Golongan::all();
        $periode = Periode::all();
        $notifications = Notification::where('user_id', $user->id)->where('read', false)->get();
        $unreadCount = $notifications->count();
        return view('application.crud-form-jabatan.form-jabatan-fungsional', compact('user', 'notifications', 'unreadCount', 'periode', 'golongan'));
    }

    public function proses()
    {
        $user = Auth::user();
        $Form_jabatan_fungsional = Form_jabatan_fungsional::where('user_id', $user->id)->get();
        $notifications = Notification::where('user_id', $user->id)->where('read', false)->get();
        $unreadCount = $notifications->count();
        return view('application.proses.teble-jabatan-fungsional', compact('Form_jabatan_fungsional', 'user', 'notifications', 'unreadCount'));
    }
    public function prosesverifikator()
    {
        $user = Auth::user();
        $Form_jabatan_fungsional = Form_jabatan_fungsional::with('user')->paginate(5);
        return view('verifikator.proses.teble-jabatan-fungsional', compact('Form_jabatan_fungsional', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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
            'doc_jabatanAtasan' => 'required|file|mimes:pdf|max:1024',
            'doc_jabatanLama' => 'required|file|mimes:pdf|max:1024',
            'doc_jabatanTerakhir' => 'required|file|mimes:pdf|max:1024',
            'doc_pendidik' => 'required|file|mimes:pdf|max:1024',
            'doc_uji' => 'required|file|mimes:pdf|max:1024',
        ]);

        $dataUpload = new Form_jabatan_fungsional;
        $dataUpload->user_id = Auth::id();
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
        if ($request->hasFile('doc_jabatanAtasan')) {
            $upload = $request->file('doc_jabatanAtasan');
            $nameFile = time() . rand(100, 999) . "." . $upload->getClientOriginalExtension();
            $upload->move(public_path('assets/documentJabatans'), $nameFile);
            $dataUpload->doc_jabatanAtasan = $nameFile;
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

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = Auth::user();
        $form = Form_jabatan_fungsional::find($id);
        $notifications = Notification::where('user_id', $user->id)->latest()->get();
        return view('application.crud-form-jabatan.detail-form', ['form' => $form, 'user' =>$user, 'notifications'=>$notifications]);
    }

    public function showverifikator($id)
    {
        $user = Auth::user();
        $form = Form_jabatan_fungsional::find($id);
        return view('verifikator.crud-form-jabatan.detail-form', ['form' => $form, 'user' =>$user]);
    }

    public function verifikasi($id)
    {
        $user = Auth::user();
        $status = Status::all();
        $form = Form_jabatan_fungsional::find($id);
        return view('verifikator.crud-form-jabatan.verifikasi-form', ['form' => $form, 'user' =>$user, 'status' =>$status,]);
    }

    public function verifikasipost(Request $request, $id)
    {
        $data_update = Form_jabatan_fungsional::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'status' => 'required|string',
        ]);

        $data_update->update([
            'keterangan' => $request->deskripsi,
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $validated = $validator->validated();

        $updated = $data_update->update($validated);

        if ($updated) {
            // Buat notifikasi berdasarkan status
            if ($validated['status'] == 'berhasil') {
                Notification::create([
                    'user_id' => $data_update->user_id,
                    'form_fungsionals_id' => $data_update->id,
                    'type' => 'Selamat dokumen anda berhasil diverifikasi 🎉',
                    'data' => 'Dokumen Anda telah berhasil diverifikasi.',
                ]);
            } elseif ($validated['status'] == 'ditolak') {
                Notification::create([
                    'user_id' => $data_update->user_id,
                    'form_fungsionals_id' => $data_update->id,
                    'type' => 'Dokumen anda gagal diverisikasi',
                    'data' => 'Dokumen Anda gagal diverifikasi. Silakan periksa kembali.',
                ]);
            }

            return redirect('/proses-table-jabatan-fungsional-verifikator')->with('success', 'Dokumen berhasil diverifikasi!');
        } else {
            return back()->with('error', 'Dokumen gagal diverifikasi');
        }
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
    public function delete(string $id)
{
    $form = Form_jabatan_fungsional::findOrFail($id);

    // Define an array of file attributes
    $fileAttributes = [
        'doc_suratPengantar',
        'doc_skPangkat',
        'doc_pakKonvensional',
        'doc_pakIntegrasi',
        'doc_pakKonversi',
        'doc_penilaian2022',
        'doc_penilaian2023',
        'doc_jabatanAtasan',
        'doc_jabatanLama',
        'doc_jabatanTerakhir',
        'doc_pendidik',
        'doc_uji'
    ];

    // Loop through each attribute and delete the associated file if it exists
    foreach ($fileAttributes as $attribute) {
        if ($form->$attribute) {
            Storage::delete('public/assets/documentJabatans/' . $form->$attribute);
        }
    }

    // Delete the record from the database
    $form->delete();

    return redirect()->back()->with('success', 'Data berhasil dihapus.');
}

}
