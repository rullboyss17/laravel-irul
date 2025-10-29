<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Diri | Portofolio</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f8fafc, #e2e8f0);
            color: #222;
        }

        main {
            max-width: 900px;
            margin: 60px auto;
            padding: 0 20px;
            text-align: center;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 30px;
            color: #111;
            font-weight: 600;
        }

        .profile-img {
            width: 160px;
            height: 160px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
            border: 5px solid #fff;
            box-shadow: 0 6px 20px rgba(0,0,0,0.1);
        }

        .card {
            background: #fff;
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.08);
            text-align: left;
            max-width: 600px;
            margin: 0 auto;
        }

        .card p {
            margin: 12px 0;
            font-size: 16px;
            color: #444;
        }

        .card strong {
            color: #111;
            display: inline-block;
            width: 120px;
        }
    </style>
</head>
<body>

    {{-- Header/Navbar --}}
    @include('layouts.header')

    {{-- Konten Utama --}}
    <main>
        <h1>Data Diri</h1>
        
        {{-- Foto Profil --}}
        <img src="{{ asset('images/profile.jpeg') }}" alt="Foto Profil" class="profile-img">

        {{-- Biodata dalam Card --}}
        <div class="card">
            <p><strong>Nama:</strong> Muhammad Khoirul</p>
            <p><strong>Umur:</strong> 19 Tahun </p>
            <p><strong>Alamat:</strong> Pati, Jawa Tengah</p>
            <p><strong>Email:</strong> irulcamel2@email.com</p>
            <p><strong>Hobi:</strong> Futsal dan coding</p>
        </div>
    </main>
@include('layouts.footer')
</body>
</html>
