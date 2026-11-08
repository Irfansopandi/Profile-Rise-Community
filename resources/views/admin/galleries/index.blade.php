<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Dokumentasi - RISE Community</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-5xl mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">Galeri Dokumentasi RISE</h1>
            <a href="{{ route('admin.galleries.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md">+ Tambah Foto</a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 text-green-800 p-3 rounded-md mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @forelse($galleries as $item)
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-lg">{{ $item->title }}</h3>
                        <p class="text-xs text-gray-500 mb-2">{{ $item->event_date }}</p>
                        <p class="text-sm text-gray-700">{{ $item->description }}</p>

                        <form action="{{ route('admin.galleries.destroy', $item->id) }}" method="POST" class="mt-4">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Hapus foto ini?')" class="text-red-600 text-sm font-semibold">Hapus</button>
                        </form>
                    </div>
                </div>
            @empty
                <p class="col-span-3 text-gray-500 text-center py-8">Belum ada foto dokumentasi yang di-upload.</p>
            @endforelse
        </div>
    </div>
</body>
</html>