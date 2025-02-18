<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\berita;
use App\Models\LandingPage;
use App\Models\agendalandingpage;

class beritacontroller extends Controller
{
    public function index()
    {
        $berita = berita::orderBy('created_at', 'desc')->get();
        $landingPage = LandingPage::first(); // Ambil data Landing Page
        $agenda = agendalandingpage::first(); // Ambil data Agenda (jika ada)
        return view('admin.landing', compact('berita', 'landingPage', 'agenda'));
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link' => 'required|url',
        ]);

        $imagePath = $request->file('image')->store('berita_images', 'public');

        berita::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
            'link' => $request->link,
            'is_trending' => false,
        ]);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil ditambahkan!');
    }

    public function toggleTrending($id)
    {
        $berita = berita::findOrFail($id);
        $berita->is_trending = !$berita->is_trending;
        $berita->save();

        return response()->json(['success' => true, 'status' => $berita->is_trending]);
    }
}
