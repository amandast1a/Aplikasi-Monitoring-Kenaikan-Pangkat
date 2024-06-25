<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormPangkatRegularController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        return view('application.crud-form-regular.table-regular', compact('user'));
    }

    public function indexverifikator()
    {
        $user = Auth::user();
        return view('verifikator.crud-form-regular.table-regular', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        return view('application.crud-form-regular.form-regular', compact('user'));
    }

    public function proses()
    {
        $user = Auth::user();
        return view('application.proses.teble-regular', compact('user'));
    }

    public function prosesverifikator()
    {
        $user = Auth::user();
        return view('verifikator.proses.teble-regular', compact('user'));
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
