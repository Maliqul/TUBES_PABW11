<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index()
    {
        return Kegiatan::all();
    }

   public function store(Request $request)
{
    $validated = $request->validate([
        'nama_kegiatan' => 'required',
        'deskripsi' => 'nullable',
        'tanggal' => 'required|date',
        'divisi_id' => 'nullable|exists:divisi,id',
        'timestamp' => 'nullable',
    ]);

    $kegiatan = Kegiatan::create($validated);

    // Debug respons
    return response()->json([
        'success' => $kegiatan ? true : false,
        'data' => $kegiatan,
    ]);
}


    public function show($id)
    {
        return Kegiatan::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $kegiatan = Kegiatan::findOrFail($id);

        $validated = $request->validate([
            'nama_kegiatan' => 'sometimes|required',
            'deskripsi' => 'nullable',
            'tanggal' => 'sometimes|required|date',
            'divisi_id' => 'nullable|exists:divisi,id',
        ]);

        $kegiatan->update($validated);

        return $kegiatan;
    }

    public function destroy($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        $kegiatan->delete();

        return response()->json(['message' => 'Kegiatan berhasil dihapus']);
    }
}
