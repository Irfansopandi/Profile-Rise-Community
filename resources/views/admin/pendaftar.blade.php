<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftar</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Kampus</th>
                <th>Divisi</th>
                <th>No Hp</th>
                <th>Detail</th>
            </tr>

        </thead>
        
        <tbody>
            @forelse($dataJoin as $dj)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $dj->nama }}</td>
                    <td>{{ $dj->nim }}</td>
                    <td>{{ $dj->kampus }}</td>
                    <td>{{ $dj->divisi }}</td>
                    <td>{{ $dj->no_hp }}</td>
                    <td>{{ $dj->detail }}</td>
                </tr>
            @empty
                <tr>
                    <td>Belum ada pendafar</td>
                </tr>
            @endforelse

        </tbody>
    </table>
</body>
</html>