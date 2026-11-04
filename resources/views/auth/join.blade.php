<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Page</title>
</head>
<body>
    <form action="{{ route('auth.add') }}" method="post">
        @csrf
        <label for="nama">Nama: </label>
        <input type="text" name="nama">

        <label for="nim">NIM: </label>
        <input type="number" name="nim">

        <label for="kampus">Kampus: </label>
        <input type="string" name="kampus">

        <label for="divisi">Divisi: </label>
        <input type="string" name="divisi">

        <label for="no_hp">No.Hp: </label>
        <input type="number" name="no_hp">

        <label for="detail">Detail: </label>
        <input type="string" name="detail">

        <button type="submit">Daftar!</button>
    </form>
</body>
</html>