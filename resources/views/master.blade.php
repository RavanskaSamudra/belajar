<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Utama</title>
</head>
<body>
    <header>
        <h2>Blog Ravanska</h2>
        <nav>
            <a href="/blog">Home</a> 
            <a href="/blog/tentang">Tentang</a> 
            <a href="/blog/kontak">Kontak</a>
        </nav>
    </header>
    <hr/>
    <br/>
    <br/>
    <h3>@yield('judul_halaman')</h3>
    @yield('konten')
</body>
</html>