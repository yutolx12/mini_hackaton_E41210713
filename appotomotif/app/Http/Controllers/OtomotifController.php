<?php

// Controller ini digunakan untuk melakukan proses CRUD aplikasi
namespace App\Http\Controllers;

use App\Models\otomotif;
use Illuminate\Http\Request;

class OtomotifController extends Controller
{

    public function index()
    {
        $otomotif = otomotif::get();
        return view('backend.otomotif.index', compact('otomotif'));
    }

    public function create()
    {
        $otomotif = null;
        return view('backend.otomotif.create', compact('otomotif'));
    }

    public function store(Request $request)
    {
        Otomotif::create($request->all());

        return redirect()->route('otomotif.index')->with('success', 'Data Otomotif baru telah berhasil disimpan.');
    }

    public function edit(Otomotif $otomotif)
    {
        return view('backend.otomotif.create', compact('otomotif'));
    }

    public function update(Request $request, Otomotif $otomotif)
    {
        $otomotif->update($request->all());

        return redirect()->route('otomotif.index')->with('success', 'Otomotif berhasil diperbaharui.');
    }

    public function destroy(Otomotif $otomotif)
    {
        $otomotif->delete();
        return redirect()->route('otomotif.index')->with('success', 'Data Otomotif berhasil dihapus');
    }
}
