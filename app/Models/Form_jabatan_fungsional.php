<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form_jabatan_fungsional extends Model
{
    use HasFactory;
    protected $table = "form_jabatan_fungsionals";
    protected $primarykey = "id";
    protected $fillable = [
        'id', 'periode', 'nama', 'nip', 'golongan', 'jabatan', 'date', 'time', 'nomor_wa', 'doc_suratPengantar', 'doc_skPangkat', 'doc_pakKonvensional', 'doc_pakIntegrasi', 'doc_pakKonversi', 'doc_penilaian2022', 'doc_penilaian2023', 'doc_jabatanLama', 'doc_jabatanTerakhir', 'doc_pendidik', 'doc_uji',
    ];
}