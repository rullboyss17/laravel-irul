<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontak | Portofolio</title>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

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
      font-weight: 600;
      margin-bottom: 40px;
      color: #111;
    }

    .contacts {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 25px;
    }

    .contact-card {
      background: #fff;
      border-radius: 20px;
      padding: 30px 20px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.08);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      text-align: center;
    }

    .contact-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 12px 28px rgba(0,0,0,0.12);
    }

    .contact-card i {
      font-size: 40px;
      margin-bottom: 16px;
      transition: color 0.3s ease;
    }

    .contact-card h3 {
      margin: 10px 0 6px;
      font-size: 18px;
      font-weight: 600;
    }

    .contact-card p {
      margin: 0;
      font-size: 14px;
      color: #555;
    }

    /* warna icon */
    .whatsapp i { color: #25D366; }
    .instagram i { color: #E4405F; }
    .linkedin i { color: #0A66C2; }
    .youtube i { color: #FF0000; }

    .contact-card a {
      text-decoration: none;
      color: inherit;
      display: block;
    }
  </style>
</head>
<body>

  {{-- Header/Navbar  --}}
  @include('layouts.header')

  <main>
    <h1>Hubungi Saya</h1>

    <div class="contacts">
      <a href="https://wa.me/6282136973682" target="_blank" class="contact-card whatsapp">
        <i class="fab fa-whatsapp"></i>
        <h3>WhatsApp</h3>
        <p>+62 821-3697-3682</p>
      </a>

      <a href="https://instagram.com/iiruuull" target="_blank" class="contact-card instagram">
        <i class="fab fa-instagram"></i>
        <h3>Instagram</h3>
        <p>@iiruuull</p>
      </a>

      <a href="https://linkedin.com/in/khoirul17" target="_blank" class="contact-card linkedin">
        <i class="fab fa-linkedin"></i>
        <h3>LinkedIn</h3>
        <p>linkedin.com/in/khoirul17</p>
      </a>

      <a href="https://youtube.com/kudalumping" target="_blank" class="contact-card youtube">
        <i class="fab fa-youtube"></i>
        <h3>YouTube</h3>
        <p>@kudalumping</p>
      </a>
    </div>
  </main>
    <section style="margin-top: 60px; text-align: left;">
      <h2 style="text-align:center; margin-bottom:20px;">Kirim Pesan Langsung ke WhatsApp</h2>
      <form id="waForm" style="background:#fff; padding:25px; border-radius:15px; box-shadow:0 8px 20px rgba(0,0,0,0.08); max-width:500px; margin:0 auto;">
        
        <div style="margin-bottom:15px;">
          <label for="nama" style="font-weight:600;">Nama</label><br>
          <input type="text" id="nama" name="nama" style="width:100%; padding:10px; border:1px solid #ccc; border-radius:8px;">
        </div>

        <div style="margin-bottom:15px;">
          <label for="email" style="font-weight:600;">Email</label><br>
          <input type="email" id="email" name="email" style="width:100%; padding:10px; border:1px solid #ccc; border-radius:8px;">
        </div>

        <div style="margin-bottom:15px;">
          <label for="pesan" style="font-weight:600;">Pesan</label><br>
          <textarea id="pesan" name="pesan" rows="4" style="width:100%; padding:10px; border:1px solid #ccc; border-radius:8px;"></textarea>
        </div>

        <button type="submit" style="background:#25D366; color:#fff; padding:12px 20px; border:none; border-radius:8px; font-weight:600; cursor:pointer;">
          Kirim ke WhatsApp
        </button>
      </form>
    </section>

    <script>
      document.getElementById("waForm").addEventListener("submit", function(e) {
        e.preventDefault();

        let nama = document.getElementById("nama").value.trim();
        let email = document.getElementById("email").value.trim();
        let pesan = document.getElementById("pesan").value.trim();

        // Validasi
        if(nama === "" || email === "" || pesan === "") {
          alert("Semua field wajib diisi!");
          return;
        }
        if(!/\S+@\S+\.\S+/.test(email)) {
          alert("Format email tidak valid!");
          return;
        }

        // Nomor tujuan WA
        let nomorWA = "6282136973682";

        // Buat pesan
        let text = `Halo, saya *${nama}* (${email}).%0A%0A${pesan}`;

        // Arahkan ke WhatsApp
        window.open(`https://wa.me/${nomorWA}?text=${text}`, "_blank");
      });
    </script>
@include('layouts.footer')
</body>
</html>

