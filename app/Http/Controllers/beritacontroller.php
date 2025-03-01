<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\berita;


class beritacontroller extends Controller
{
    public function index()
    {
        $berita = berita::orderBy('created_at', 'desc')->get();
        return view('admin.Berita', compact('berita'));
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
            'category' => 'required|string'
        ]);

        $imagePath = $request->file('image')->store('berita_images', 'public');

        berita::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => asset('storage/' . $imagePath),
            'link' => $request->link,
            'is_trending' => false,
            'category' => $request->category,
        ]);

        return redirect()->route('admin.Berita')->with('success', 'Berita berhasil ditambahkan!');
    }

    public function toggleTrending($id)
    {
        $berita = berita::findOrFail($id);
        $berita->is_trending = !$berita->is_trending;
        $berita->save();

        return response()->json(['success' => true, 'status' => $berita->is_trending]);
    }

    public function getTrendingBerita()
    {
        $trendingBerita = berita::where('is_trending', true)->get();
        return response()->json($trendingBerita);
    }


    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();

        return response()->json(['success' => 'Berita berhasil dihapus dan ID direset.']);
    }
}
