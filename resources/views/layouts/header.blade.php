<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio | Muhammad Khoirul</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background: #f9f9f9;
            color: #222;
        }

        nav {
            background: #222;
            padding: 16px 40px;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .nav-container {
            max-width: 1100px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Logo */
        .logo a {
            font-size: 24px;
            font-weight: 600;
            color: #fff;
            text-decoration: none;
            letter-spacing: 1px;
        }

        /* Nav list */
        nav ul {
            list-style: none;
            display: flex;
            gap: 24px;
            margin: 0;
            padding: 0;
        }

        nav ul li a {
            font-size: 15px;
            color: #ddd;
            text-decoration: none;
            position: relative;
            padding: 6px 0;
            transition: color 0.3s ease;
        }

        /* Hover effect underline */
        nav ul li a::after {
            content: '';
            position: absolute;
            width: 0%;
            height: 2px;
            left: 0;
            bottom: -4px;
            background: #ffcc00;
            transition: width 0.3s ease;
        }

        nav ul li a:hover {
            color: #fff;
        }

        nav ul li a:hover::after,
        nav ul li.active a::after {
            width: 100%;
        }
    </style>
</head>
<body>
    <nav>
        <div class="nav-container">
            <div class="logo">
                <a href="{{ route('beranda') }}">Muhammad Khoirul</a>
            </div>
            <ul>
                <li class="{{ request()->routeIs('beranda') ? 'active' : '' }}">
                    <a href="{{ route('beranda') }}">Beranda</a>
                </li>
                <li class="{{ request()->routeIs('datadiri') ? 'active' : '' }}">
                    <a href="{{ route('datadiri') }}">Data Diri</a>
                </li>
                <li class="{{ request()->routeIs('aktivitas') ? 'active' : '' }}">
                    <a href="{{ route('aktivitas') }}">Aktivitas</a>
                </li>
                <li class="{{ request()->routeIs('kontak') ? 'active' : '' }}">
                    <a href="{{ route('kontak') }}">Kontak</a>
                </li>
            </ul>
        </div>
    </nav>
</body>
</html>
