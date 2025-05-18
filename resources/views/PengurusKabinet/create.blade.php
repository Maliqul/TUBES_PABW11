<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    
<div class="max-w-xl mx-auto p-6 bg-white rounded shadow mt-8">
    <h1 class="text-2xl font-bold mb-4">Tambah PengurusKabinet</h1>
    <form action="{{ route('PengurusKabinet.store') }}" method="POST">
        @method ('PUT')
        @csrf

        <div class="mb-4">
            <label for="nama" class="block font-medium">Nama</label>
            <input type="text" name="nama" id="nama" class="w-full border border-gray-300 rounded px-3 py-2" required>
        </div>

        <div class="mb-4">
            <label for="jabatan" class="block font-medium">Jabatan</label>
            <input type="text" name="jabatan" id="jabatan" class="w-full border border-gray-300 rounded px-3 py-2" required>
        </div>

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Simpan</button>
        <a href="{{ route('PengurusKabinet.index') }}" class="ml-2 text-gray-600 hover:underline">Batal</a>
        <div class="flex justify-between items-right mb-4">
                    <a href="{{ url('/PengurusKabinet') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded-md shadow">
                    ← Kembali ke Data Pengurus
                     </a>
        </div>
    </form>
</div>
</body>
</html>