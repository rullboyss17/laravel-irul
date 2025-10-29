<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda | Portofolio</title>

    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background: #f9f9f9;
            color: #222;
        }

        main {
            max-width: 900px;
            margin: 60px auto;
            padding: 0 20px;
            text-align: center;
        }

        h1 {
            font-family: 'Fjalla One', sans-serif;
            font-size: 40px;
            margin-bottom: 20px;
            color: #111;
        }

        p {
            font-size: 18px;
            line-height: 1.6;
            color: #444;
        }
    </style>
</head>
<body>

    {{-- Header/Navbar --}}
    @include('layouts.header')

    {{-- Konten Utama --}}
    <main>
        <h1>Selamat Datang di Web Portofolio Saya</h1>
        <p>"Selamat datang! Portofolio ini berisi data diri, aktivitas yang saya lakukan, serta informasi kontak untuk berjejaring."</p>
    </main>
@include('layouts.footer')
</body>
</html>
