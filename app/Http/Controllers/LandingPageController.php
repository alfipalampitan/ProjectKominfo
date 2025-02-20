<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandingPage;
use App\Models\agendalandingpage;
use Illuminate\Support\Facades\Storage;
use App\Models\berita;

class LandingPageController extends Controller
{
    public function index()
    {
        $landingPage = LandingPage::first(); // Ambil data Landing Page

        return view('admin.landing', compact('landingPage'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $landingPage = LandingPage::updateOrCreate(
            ['id' => 1],
            [
                'title' => $request->title,
                'description' => $request->description,
                'image' => $this->uploadImage($request, 'image') ?? LandingPage::first()->image,
            ]
        );

        return redirect()->route('admin.landing')->with('success', 'Landing Page berhasil diperbarui!');
    }

    private function uploadImage(Request $request, $fieldName)
    {
        if ($request->hasFile($fieldName)) {
            return $request->file($fieldName)->store('images', 'public');
        }
        return null;
    }
}
