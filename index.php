```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Web Kelompok 2</title>
    <style>
        body {
            margin: 0;
            font-family: "Segoe UI", Arial, sans-serif;
            background: #0f172a;
            color: #e5e7eb;
        }

        .welcome {
            text-align: center;
            padding: 80px 20px 40px;
        }

        .welcome h1 {
            font-size: 2.8rem;
            margin-bottom: 10px;
        }

        .welcome p {
            color: #94a3b8;
        }

        h2 {
            text-align: center;
            margin-top: 20px;
            font-size: 2rem;
            letter-spacing: 2px;
        }

        .container {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
            padding: 50px;
        }

        .card {
            background: #111827;
            border-radius: 20px;
            width: 260px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0,0,0,0.5);
            transition: 0.3s ease;
        }

        .card:hover {
            transform: scale(1.08);
            box-shadow: 0 20px 40px rgba(0,0,0,0.8);
        }

        .card img {
            width: 100%;
            height: 280px;
            object-fit: cover;
        }

        .card-body {
            padding: 20px;
            text-align: center;
        }

        .card-body h3 {
            margin: 10px 0 5px;
            color: #38bdf8;
        }

        .card-body p {
            margin: 5px 0;
            color: #cbd5f5;
            font-size: 0.95rem;
        }

        .footer {
            text-align: center;
            padding: 20px;
            color: #94a3b8;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

    <!-- 🔹 Selamat Datang -->
    <div class="welcome">
        <h1>Selamat Datang 👋</h1>
        <p>Website kamu sudah berjalan!</p>
    </div>

    <!-- 🔹 Judul -->
    <h2>👨‍💻 Kelompok 2</h2>

    <!-- 🔹 Card Anggota -->
    <div class="container">

        <div class="card">
            <img src="images/fikri.jpg">
            <div class="card-body">
                <h3>Ahmad Fikri Fauzan</h3>
                <p>No Absen: 01</p>
                <p>Kelas: XI RPL</p>
            </div>
        </div>

        <div class="card">
            <img src="images/roy.jpg">
            <div class="card-body">
                <h3>Ahmad Zainur Royyan</h3>
                <p>No Absen: 02</p>
                <p>Kelas: XI RPL</p>
            </div>
        </div>

        <div class="card">
            <img src="images/natanz.jpg">
            <div class="card-body">
                <h3>Natanz Meshaal Saptoaji</h3>
                <p>No Absen: 03</p>
                <p>Kelas: XI RPL</p>
            </div>
        </div>

    </div>

    <div class="footer">
        © 2026 SMK Telkom Malang | HTML Version
    </div>

</body>
</html>
```
