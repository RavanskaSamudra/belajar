        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Tambah Pegawai</title>
        </head>
        <body>
            @foreach ($pegawai as $p )
            <h3>Tambah Pegawai</h3>
            <form action="/pegawai/update" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
                Nama <input type="text" name="  nama" required="required" value="{{ $p->nama_pegawai }}"> <br/>
                Jabatan <input type="text" name="jabatan" required="required" value="{{ $p->nama_jabatan }}"> <br/>
                Umur <input type="number" name="umur" required="required" value="{{ $p->pegawai_umur }}"> <br/>
                Alamat <textarea name="alamat" required="required">{{ $p->alamat }}</textarea> <br/>
                <input type="submit" value="Simpan Data">
            </form>
        @endforeach
        </body>
        </html>