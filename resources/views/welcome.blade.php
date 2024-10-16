<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome to the Application!</h1>
    <a href="{{ route('guru.index') }}">Lihat Data Guru</a>
    <a href="{{ route('kelas.index') }}">Lihat Data Kelas</a>
    <a href="{{ route('siswa.index') }}">Lihat Data Siswa</a>
    <a href="{{ route('absensi.index') }}">Lihat Data Absensi</a>
</body>
</html>
