<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
        return Anggota::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:20|unique:anggota,nim',
            'jurusan' => 'required|string|max:100',
            'angkatan' => 'required|string|max:10',
            'foto' => 'nullable|string',
        ]);

        return Anggota::create($validated);
    }

    public function show($id)
    {
        return Anggota::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $anggota = Anggota::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'sometimes|required|string|max:255',
            'nim' => 'sometimes|required|string|max:20|unique:anggota,nim,' . $anggota->id,
            'jurusan' => 'sometimes|required|string|max:100',
            'angkatan' => 'sometimes|required|string|max:10',
            'foto' => 'nullable|string',
        ]);

        $anggota->update($validated);

        return $anggota;
    }

    public function destroy($id)
    {
        $anggota = Anggota::findOrFail($id);
        $anggota->delete();

        return response()->json(['message' => 'Anggota berhasil dihapus']);
    }
}
