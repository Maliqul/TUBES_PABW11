
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kegiatan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 py-8">

    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-center mb-4">Tambah Kegiatan</h1>

        <form action="{{ route('kegiatan.store') }}" method="POST">
            @csrf

            
            <div class="mb-4">
                <label for="judul" class="block text-sm font-semibold text-gray-700">Judul:</label>
                <input type="text" name="judul" id="judul" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-500" required>
            </div>

            
            <div class="mb-4">
                <label for="deskripsi" class="block text-sm font-semibold text-gray-700">Deskripsi:</label>
                <textarea name="deskripsi" id="deskripsi" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-500" required></textarea>
            </div>

            
            <div class="mb-4">
                <label for="tanggal" class="block text-sm font-semibold text-gray-700">Tanggal:</label>
                <input type="date" name="tanggal" id="tanggal" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-500" required>
            </div>

            
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-lg shadow hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">Simpan</button>
                <a href="{{ route('kegiatan.index') }}" class="text-sm text-blue-600 hover:text-blue-800">Kembali</a>
            </div>

            <div class="flex justify-between items-center mb-4">
                <a href="{{ url('/kegiatan') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded-md shadow">
                ← Kembali ke Data Kegiatan
                 </a>
            </div>
        </form>
    </div>

</body>
</html>