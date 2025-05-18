<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kegiatan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 py-8">

    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-center mb-6">Daftar Kegiatan</h1>

        <!-- Tombol Tambah Kegiatan -->
        <div class="mb-4 text-right">
            <a href="{{ route('kegiatan.create') }}" class="bg-blue-500 text-white px-6 py-2 rounded-lg shadow hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">Tambah Kegiatan</a>
        </div>
        <div class="flex justify-between items-center mb-4">
            <a href="{{ url('/') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded-md shadow">
                ← Kembali ke Beranda
            </a>
        </div>

        <!-- Tabel Daftar Kegiatan -->
        <table class="min-w-full table-auto border-collapse">
            <thead>
                <tr>
                    <th class="px-4 py-2 border-b font-semibold text-left text-gray-700">Judul</th>
                    <th class="px-4 py-2 border-b font-semibold text-left text-gray-700">Deskripsi</th>
                    <th class="px-4 py-2 border-b font-semibold text-left text-gray-700">Tanggal</th>
                    <th class="px-4 py-2 border-b font-semibold text-left text-gray-700">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kegiatan as $k)
                    <tr>
                        <td class="px-4 py-2 border-b">{{ $k->judul }}</td>
                        <td class="px-4 py-2 border-b">{{ $k->deskripsi }}</td>
                        <td class="px-4 py-2 border-b">{{ $k->tanggal }}</td>
                        <td class="px-4 py-2 border-b">
                            <!-- Edit Button -->
                            <a href="{{ route('kegiatan.edit', $k->id) }}" class="text-blue-500 hover:text-blue-700">Edit</a>

                            <!-- Hapus Button -->
                            <form action="{{ route('kegiatan.destroy', $k->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700 ml-4" onclick="return confirm('Yakin hapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>