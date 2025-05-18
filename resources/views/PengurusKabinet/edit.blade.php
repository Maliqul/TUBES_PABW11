<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pengurus</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="max-w-xl mx-auto p-6 bg-white rounded shadow mt-8">
    <h1 class="text-2xl font-bold mb-4">Edit Pengurus</h1>

    <form action="{{ route('PengurusKabinet.update', $pengurus['id']) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="nama" class="block font-medium">Nama</label>
            <input type="text" name="nama" id="nama" value="{{ $pengurus['nama'] }}" class="w-full border border-gray-300 rounded px-3 py-2" required>
        </div>

        <div class="mb-4">
            <label for="jabatan" class="block font-medium">Jabatan</label>
            <input type="text" name="jabatan" id="jabatan" value="{{ $pengurus['jabatan'] }}" class="w-full border border-gray-300 rounded px-3 py-2" required>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update</button>
        <a href="{{ route('PengurusKabinet.index') }}" class="ml-2 text-gray-600 hover:underline">Batal</a>
    </form>
</div>

</body>
</html>
