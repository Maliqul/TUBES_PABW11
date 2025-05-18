<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    public function index()
    {
        return Divisi::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_divisi' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        return Divisi::create($validated);
    }

    public function show($id)
    {
        return Divisi::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $divisi = Divisi::findOrFail($id);

        $validated = $request->validate([
            'nama_divisi' => 'sometimes|required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        $divisi->update($validated);

        return $divisi;
    }

    public function destroy($id)
    {
        $divisi = Divisi::findOrFail($id);
        $divisi->delete();

        return response()->json(['message' => 'Divisi berhasil dihapus']);
    }
}
