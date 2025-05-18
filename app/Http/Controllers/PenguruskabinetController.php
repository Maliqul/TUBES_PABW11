<?php

namespace App\Http\Controllers;

use App\Models\PengurusKabinet;
use Illuminate\Http\Request;

class PengurusKabinetController extends Controller
{
    public function index()
    {
        return PengurusKabinet::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'foto' => 'nullable|string', // bisa juga upload file nantinya
        ]);

        return PengurusKabinet::create($validated);
    }

    public function show($id)
    {
        return PengurusKabinet::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $pengurus = PengurusKabinet::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'sometimes|required|string|max:255',
            'jabatan' => 'sometimes|required|string|max:255',
            'foto' => 'nullable|string',
        ]);

        $pengurus->update($validated);

        return $pengurus;
    }

    public function destroy($id)
    {
        $pengurus = PengurusKabinet::findOrFail($id);
        $pengurus->delete();

        return response()->json(['message' => 'Pengurus kabinet berhasil dihapus']);
    }
}
