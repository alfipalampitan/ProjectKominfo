<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        // Ambil nilai dari session atau set default
        $backgroundDinamis = session('background', 'bg-slate-500');
        $fontDinamis = session('font', 'font-sans');

        return view('admin.settings', compact('backgroundDinamis', 'fontDinamis'));
    }

    public function update(Request $request)
    {
        // Simpan ke session
        session(['background' => $request->background]);
        session(['font' => $request->font]);

        return back()->with('success', 'Pengaturan berhasil diperbarui!');
    }
}
