<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Aktivitas | Portofolio</title>

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
        }

        button {
            margin-top: 20px;
            width: 100%;
            padding: 12px;
            background: #4f46e5;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
        }

        button:hover {
            background: #4338ca;
        }
    </style>
</head>
<body>

    @include('layouts.header')

    <main>
        <h1>Tambah Aktivitas</h1>

        <form action="{{ route('aktivitas.store') }}" method="POST">
            @csrf

            <label for="nama_aktivitas">Nama Aktivitas</label>
            <input type="text" name="nama_aktivitas" required>

            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" required></textarea>

            <label for="tanggal">Tanggal</label>
            <input type="date" name="tanggal" required>

            <label for="status">Status</label>
            <select name="status">
                <option value="0">Belum Selesai</option>
                <option value="1">Selesai</option>
            </select>

            <button type="submit">Simpan Aktivitas</button>
        </form>
    </main>

    @include('layouts.footer')

</body>
</html>
