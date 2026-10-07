<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Personal Web - Ibrahim Afdhal Riza</title>

  <!-- 2. HTML Favicon -->
  <link rel="icon" type="image/jpeg" href="IMG_3717.JPG.jpeg">

  <!-- 8. HTML Font (Google Fonts: Poppins) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

  <!-- 5. HTML CSS & 6. HTML Background / Color Text -->
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: linear-gradient(135deg, #eef2f7 0%, #cbd5e1 100%);
      color: #334155;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 20px;
    }

    /* 7. HTML Align (Centering Layout Card) */
    .card {
      background-color: #ffffff;
      padding: 40px 30px;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
      max-width: 520px;
      width: 100%;
      text-align: center;
    }

    /* 1. HTML Picture styling */
    .profile-img {
      width: 135px;
      height: 135px;
      border-radius: 50%;
      object-fit: cover;
      border: 4px solid #3b82f6;
      margin-bottom: 16px;
      box-shadow: 0 4px 10px rgba(59, 130, 246, 0.25);
    }

    /* 4. HTML Headings */
    h1 {
      font-size: 1.5rem;
      color: #0f172a;
      margin-bottom: 6px;
    }

    h3 {
      font-size: 0.95rem;
      font-weight: 500;
      color: #64748b;
      margin-bottom: 24px;
    }

    /* 3. HTML Links */
    .social-container {
      display: flex;
      justify-content: center;
      gap: 12px;
      flex-wrap: wrap;
      margin-bottom: 28px;
    }

    .social-btn {
      display: inline-block;
      padding: 8px 18px;
      border-radius: 25px;
      background-color: #f1f5f9;
      color: #2563eb;
      text-decoration: none;
      font-size: 0.85rem;
      font-weight: 500;
      border: 1px solid #e2e8f0;
      transition: all 0.2s ease;
    }

    .social-btn:hover {
      background-color: #2563eb;
      color: #ffffff;
      transform: translateY(-2px);
    }

    /* 10. HTML Table */
    .bio-table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 15px;
      text-align: left;
      font-size: 0.88rem;
    }

    .bio-table th, .bio-table td {
      padding: 12px 14px;
      border: 1px solid #e2e8f0;
      vertical-align: top;
    }

    .bio-table th {
      background-color: #f8fafc;
      color: #1e293b;
      width: 30%;
    }

    /* Bullet Point Hobi */
    .hobby-list {
      margin: 0;
      padding-left: 20px;
    }

    .hobby-list li {
      margin-bottom: 4px;
    }

    .hobby-list li:last-child {
      margin-bottom: 0;
    }

    footer {
      margin-top: 25px;
      font-size: 0.78rem;
      color: #94a3b8;
    }
  </style>
</head>
<body>

  <main class="card">
    <!-- 1. HTML Picture -->
    <picture>
      <source srcset="calon triliuner.jpg" type="image/jpeg">
      <img src="calon triliuner.jpg" alt="Foto Profil" class="profile-img">
    </picture>

    <!-- 4. HTML Heading (h1 & h3) -->
    <h1>Ibrahim Afdhal Riza</h1>
    <h3>102042500093 - FRI - Sistem Informasi</h3>

    <!-- 3. HTML Link (Medsos aktif dengan target="_blank") -->
    <div class="social-container">
      <a href="https://github.com/uchihadhalz" target="_blank" class="social-btn">GitHub</a>
    </div>

    <!-- 10. HTML Table dengan Bullet Point -->
    <h4 style="text-align: left; margin-bottom: 8px; color: #334155;">Informasi Tambahan:</h4>
    <table class="bio-table">
      <tr>
        <th>Hobi</th>
        <td>
          <ul class="hobby-list">
            <li>Trading</li>
            <li>Membaca buku</li>
            <li>Belajar</li>
          </ul>
        </td>
      </tr>
      <tr>
        <th>Email</th>
        <td>Ibriza3636@gmail.com</td>
      </tr>
    </table>

    <!-- 9. HTML Date and Time -->
    <footer>
      <p>Terakhir diperbarui: <time datetime="2026-09-27">27 September 2026</time></p>
    </footer>
  </main>

</body>
</html>