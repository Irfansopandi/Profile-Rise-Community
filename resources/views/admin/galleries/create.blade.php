<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Dokumentasi - RISE Community</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-4">Tambah Dokumentasi Baru</h2>
@if ($errors->any())
    <div style="background-color: #fee2e2; border: 1px solid #ef4444; color: #b91c1c; padding: 10px; border-radius: 6px; margin-bottom: 15px;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form action="{{ route('admin.galleries.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf

            <div>
                <label class="block text-sm font-medium text-gray-700">Judul Kegiatan / Acara</label>
                <input type="text" name="title" required class="w-full mt-1 p-2 border rounded-md">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Tanggal Kegiatan</label>
                <input type="date" name="event_date" class="w-full mt-1 p-2 border rounded-md">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Deskripsi / Keterangan</label>
                <textarea name="description" rows="3" class="w-full mt-1 p-2 border rounded-md"></textarea>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">File Foto Dokumentasi</label>
                <input type="file" name="image" accept="image/*" required class="w-full mt-1 p-2 border rounded-md">
            </div>
            <button type="submit" class="mt-4 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
        Upload Dokumentasi
    </button>
</form>