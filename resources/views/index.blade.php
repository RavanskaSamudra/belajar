<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Membuat CRUD</title>
</head>
<body>
    <h2>Selamat datang di Halaman CRUD</h2>
    <h3>data pegawai</h3>

   <a href="{{ url('/pegawai/tambah') }}">+ Tambah Pegawai Baru</a>
    <br/>
    <br/>
    <table border="1">
        <tr>
            <th>nama_pegawai</th>
            <th>nama_Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        @foreach($pegawai as $p)
        <tr>
            <td>{{ $p->nama_pegawai }}</td>
            <td>{{ $p->nama_jabatan }}</td>
            <td>{{ $p->pegawai_umur }}</td>
            <td>{{ $p->alamat }}</td>
            <td>
                <a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
                |
                <a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>