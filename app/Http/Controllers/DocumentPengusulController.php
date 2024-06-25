<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form_jabatan_fungsional;
use Illuminate\Support\Facades\Auth;

class DocumentPengusulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $Form_jabatan_fungsional = Form_jabatan_fungsional::all();
        return view('super-admin.document-pengusul.table-pengusul', compact('Form_jabatan_fungsional', 'user'));
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
