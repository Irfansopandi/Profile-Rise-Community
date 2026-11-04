<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anggota Divisi</title>
</head>
<body>
    <form action="{{ route('member.add') }}" method="POST">
        @csrf
        <label for="nama">Name: </label>
        <input type="text" name="nama" id="nama">

        <label for="nim">NIM: </label>
        <input type="number" name="nim" id="nim">

        <label for="kampus">Kampus: </label>
        <input type="string" name="kampus" id="kampus">

        <label for="divisi">Divisi: </label>
        <input type="string" name="divisi" id="divisi">

        <label for="jabatan">Jabatan: </label>
        <input type="string" name="jabatan" id="jabatan">

        <button type="submit">Add</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>NIM</th>
                <th>Kampus</th>
                <th>Divisi</th>
                <th>Jabatan</th>
            </tr>
        </thead>

        <tbody>
            @forelse($dataMem as $dm)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $dm->nama }}</td>
                    <td>{{ $dm->nim }}</td>
                    <td>{{ $dm->kampus }}</td>
                    <td>{{ $dm->divisi }}</td>
                    <td>{{ $dm->jabatan }}</td>
                    <td>
                        <form action="{{ route('member.delete', $dm->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" onclick="return confirm('Yakin ingin menghapus?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>Data Belum Tersedia</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>