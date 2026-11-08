<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->get();
        return view('admin.galleries.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.galleries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'      => 'required|string|max:255',
            'image'      => 'required|image|mimes:jpeg,png,jpg,webp|max:2048', // Maksimal 2MB
            'event_date' => 'nullable|date',
        ]);

        // Simpan foto ke storage/app/public/galleries
        $imagePath = $request->file('image')->store('galleries', 'public');

        Gallery::create([
            'title'       => $request->title,
            'description' => $request->description,
            'image'       => $imagePath,
            'event_date'  => $request->event_date,
        ]);

        return redirect()->route('admin.galleries.index')->with('success', 'Dokumentasi berhasil di-upload!');
    }

    public function destroy(Gallery $gallery)
    {
        if ($gallery->image) {
            Storage::disk('public')->delete($gallery->image);
        }

        $gallery->delete();

        return redirect()->route('admin.galleries.index')->with('success', 'Dokumentasi berhasil dihapus!');
    }
}
