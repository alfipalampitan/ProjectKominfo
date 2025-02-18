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
        $agenda = agendalandingpage::first(); // Ambil data Agenda (jika ada)
        $berita = berita::orderBy('created_at', 'desc')->get(); // Ambil data Berita

        return view('admin.landing', compact('landingPage', 'agenda', 'berita'));
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


    // ini adalah baris untuk controller agenda

    public function agendaIndex()
    {
        $landingPage = LandingPage::first(); // Ambil data Landing Page
        $agenda = agendalandingpage::first(); // Ambil data Agenda (jika ada)
        $berita = berita::orderBy('created_at', 'desc')->get(); // Ambil data Berita

        return view('admin.landing', compact('landingPage', 'agenda', 'berita'));
    }

    public function agendaUpdate(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'imgcard1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'imgcard2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'titlecard1' => 'required|string|max:255',
            'titlecard2' => 'required|string|max:255',
            'descriptioncard1' => 'required|string',
            'descriptioncard2' => 'required|string',
        ]);

        $agenda = agendalandingpage::updateOrCreate(
            ['id' => 1],
            [
                'title' => $request->title,
                'description' => $request->description,
                'image' => $this->uploadImage($request, 'image') ?? agendalandingpage::first()->image,
                'imgcard1' => $this->uploadImage($request, 'imgcard1') ?? agendalandingpage::first()->imgcard1,
                'imgcard2' => $this->uploadImage($request, 'imgcard2') ?? agendalandingpage::first()->imgcard2,
                'titlecard1' => $request->titlecard1,
                'titlecard2' => $request->titlecard2,
                'descriptioncard1' => $request->descriptioncard1,
                'descriptioncard2' => $request->descriptioncard2,
            ]
        );

        return redirect()->route('admin.landing')->with('success', 'Agenda berhasil diperbarui!');
    }
}
