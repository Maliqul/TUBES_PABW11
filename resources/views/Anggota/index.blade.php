<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Anggota IMMAPA</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

    <div class="max-w-6xl mx-auto py-8">
        <h2 class="text-3xl font-bold mb-6 text-center">Daftar Anggota Pengurus IMMAPA</h2>

        <div class="flex justify-end mb-4">
            <a href="{{ route('anggota.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md shadow">
                + Tambah Anggota 
            </a>
        </div>

        </div>

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full text-sm text-left">
                <thead class="bg-gray-200 text-gray-700 uppercase font-semibold">
                    <tr>
                        <th class="px-6 py-3">Nama</th>
                        <th class="px-6 py-3">NIM</th>
                        <th class="px-6 py-3">Jurusan</th>
                        <th class="px-6 py-3">Angkatan</th>
                        <th class="px-6 py-3">Divisi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($anggota as $item)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-6 py-3">{{ $item['nama'] }}</td>
                            <td class="px-6 py-3">{{ $item['nim'] }}</td>
                            <td class="px-6 py-3">{{ $item['jurusan'] }}</td>
                            <td class="px-6 py-3">{{ $item['angkatan'] }}</td>
                            <td class="px-6 py-3">{{ $item['divisi'] }}</td>
                        </tr>
                    @endforeach
                <td class="px-6 py-3 space-x-2">
                        <a href="{{ route('anggota.edit', 1) }}" class="text-blue-600 hover:underline">Edit</a>
                        <form action="{{ route('anggota.destroy', 1) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline">Hapus</button>
        </form>
    </td>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

