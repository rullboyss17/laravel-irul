<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Aktivitas | Portofolio</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f9fafb, #e2e8f0);
            color: #222;
        }

        main {
            max-width: 600px;
            margin: 60px auto;
            padding: 0 20px;
        }

        h1 {
            text-align: center;
            font-size: 30px;
            margin-bottom: 30px;
            font-weight: 600;
        }

        label {
            font-weight: 500;
            margin-top: 15px;
            display: block;
        }

        input, textarea, select {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
            margin-top: 8px;
            background: #f3f4f6;
        }

        /* Tombol Kembali - Warna Ungu */
        .btn-back {
            margin-top: 20px;
            width: 100%;
            padding: 12px;
            background: #4F46E5;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }

        .btn-back:hover {
            background: #4338CA;
        }
    </style>
</head>
<body>

    @include('layouts.header')

    <main>
        <h1>Detail Aktivitas</h1>

        <label>Nama Aktivitas</label>
        <input type="text" value="{{ $aktivitas->nama_aktivitas }}" readonly>

        <label>Deskripsi</label>
        <textarea readonly>{{ $aktivitas->deskripsi }}</textarea>

        <label>Tanggal</label>
        <input type="date" value="{{ $aktivitas->tanggal }}" readonly>

        <label>Status</label>
        <select disabled>
            <option value="0" {{ $aktivitas->status == 0 ? 'selected' : '' }}>Belum Selesai</option>
            <option value="1" {{ $aktivitas->status == 1 ? 'selected' : '' }}>Selesai</option>
        </select>

        <a href="{{ route('aktivitas') }}" class="btn-back">Kembali</a>
    </main>

    @include('layouts.footer')

</body>
</html>
