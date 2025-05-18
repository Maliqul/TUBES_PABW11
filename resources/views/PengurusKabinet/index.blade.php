<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengurus Kabinet</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
<div class="max-w-6xl mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold">Struktur Pengurus Kabinet IMMAPA</h1>
        <a href="{{ route('PengurusKabinet.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
            + Tambah Pengurus
        </a>
    </div>
    <div class="flex justify-between items-center mb-4">
            <a href="{{ url('/') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded-md shadow">
                ← Kembali ke Beranda 
            </a>
        </div>


    @foreach ($pengurus as $jabatan => $daftar)
        <div class="mb-4">
            <h2 class="text-2xl font-semibold text-blue-700 mb-2">{{ $jabatan }}</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                @foreach ($daftar as $orang)
                    <div class="bg-white p-4 rounded-lg shadow">
                        <h3 class="text-lg font-bold">{{ $orang['nama'] }}</h3>
                        <p class="text-sm text-gray-500">ID: {{ $orang['id'] }}</p>
                        <div class="mt-2 space-x-2">
                            <a href="{{ route('PengurusKabinet.edit', $orang['id']) }}" class="text-yellow-500 hover:underline text-sm">Edit</a>
                            <form action="{{ route('PengurusKabinet.destroy', $orang['id']) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline text-sm">Hapus</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</div>

</body>
</html>
