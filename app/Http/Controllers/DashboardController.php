<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Notification;
use App\Models\Form_jabatan_fungsional;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $Form_jabatan_fungsional = Form_jabatan_fungsional::latest('updated_at')->first();
        $jumlahpengusul = Form_jabatan_fungsional::count();
        $form = Form_jabatan_fungsional::query();
        $pendingstatus = Form_jabatan_fungsional::where('status', 'pending')->count();
        $berhasilstatus = Form_jabatan_fungsional::where('status', 'berhasil')->count();
        $gagalstatus = Form_jabatan_fungsional::where('status', 'ditolak')->count();
        $notifications = Notification::where('user_id', $user->id)->where('read', false)->get();
        $unreadCount = $notifications->count();
        return view('application.dashboard', compact('user', 'notifications', 'unreadCount', 'Form_jabatan_fungsional', 'jumlahpengusul', 'form', 'pendingstatus', 'berhasilstatus', 'gagalstatus'));
    }

    public function superadmin()
    {
        $user = Auth::user();
        $Form_jabatan_fungsional = Form_jabatan_fungsional::latest('updated_at')->first();
        $jumlahpengusul = Form_jabatan_fungsional::count();
        $form = Form_jabatan_fungsional::query();
        $pendingstatus = Form_jabatan_fungsional::where('status', 'pending')->count();
        $berhasilstatus = Form_jabatan_fungsional::where('status', 'berhasil')->count();
        $gagalstatus = Form_jabatan_fungsional::where('status', 'ditolak')->count();
        return view('super-admin.dashboard', compact('user', 'Form_jabatan_fungsional', 'jumlahpengusul', 'form', 'pendingstatus', 'berhasilstatus', 'gagalstatus'));
    }

    public function verifikator()
    {
        $user = Auth::user();
        $Form_jabatan_fungsional = Form_jabatan_fungsional::latest('updated_at')->first();
        $jumlahpengusul = Form_jabatan_fungsional::count();
        $form = Form_jabatan_fungsional::query();
        $pendingstatus = Form_jabatan_fungsional::where('status', 'pending')->count();
        $berhasilstatus = Form_jabatan_fungsional::where('status', 'berhasil')->count();
        $gagalstatus = Form_jabatan_fungsional::where('status', 'ditolak')->count();
        return view('verifikator.dashboard', compact('user', 'Form_jabatan_fungsional', 'jumlahpengusul', 'form', 'pendingstatus', 'berhasilstatus', 'gagalstatus'));

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
