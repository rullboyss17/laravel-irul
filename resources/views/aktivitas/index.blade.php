<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aktivitas | Portofolio</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f9fafb, #e2e8f0);
            color: #222;
        }

        main {
            max-width: 900px;
            margin: 60px auto;
            padding: 0 20px;
        }

        h1 {
            text-align: center;
            font-size: 36px;
            margin-bottom: 50px;
            font-weight: 600;
            color: #111;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background: #4f46e5;
            color: #fff;
        }

        tr:nth-child(even) {
            background: #f3f4f6;
        }
    </style>
</head>
<body>

    {{-- Header/Navbar --}}
    @include('layouts.header')

    {{-- Konten Utama --}}
    <main>
        <h1>Daftar Aktivitas</h1>
        <a href="{{ route('aktivitas.create') }}" class="btn btn-primary" style="margin-bottom: 20px;">+ Tambah Aktivitas</a>

        <div class="container mt-5 mb-5">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama Aktivitas</th>
                        <th>Deskripsi</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->nama_aktivitas }}</td>
                        <td>{{ $item->deskripsi }}</td>
                        <td>{{date('d-m-Y', strtotime($item->tanggal))}}</td>
                        <td>{{ $item->status ? 'Selesai' : 'Belum Selesai' }}</td>
                        <td>
                            <a href="{{ route('aktivitas.show', $item->id) }}" class="btn btn-info">Detail</a>
                            <a href="{{ route('aktivitas.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('aktivitas.destroy', $item->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </main>

    {{-- Footer --}}
    @include('layouts.footer')

</body>
</html>
