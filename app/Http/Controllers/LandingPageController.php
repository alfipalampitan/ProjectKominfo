<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandingPage;

class LandingPageController extends Controller
{
    public function index()
    {
        $landingPage = LandingPage::first();
        return view('admin.landing', compact('landingPage'));
    }
    

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $landingPage = LandingPage::first();
        $landingPage->title = $request->title;
        $landingPage->description = $request->description;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $landingPage->image = $path;
        }

        $landingPage->save();

        return redirect()->route('admin.landing')->with('success', 'Landing Page berhasil diperbarui!');
    }
}
