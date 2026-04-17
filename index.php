<?php
$kelompok = "Kelompok 2";

$anggota = [
    [
        "nama" => "Ahmad Fikri Fauzan",
        "absen" => "01",
        "kelas" => "XI RPL",
        "foto" => "images/fikri.jpg"
    ],
    [
        "nama" => "Ahmad Zainur Royyan",
        "absen" => "02",
        "kelas" => "XI RPL",
        "foto" => "images/roy.jpg"
    ],
    [
        "nama" => "Natanz Meshaal Saptoaji",
        "absen" => "03",
        "kelas" => "XI RPL",
        "foto" => "images/natanz.jpg"
    ]
];
?>

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

        h1 {
            text-align: center;
            margin-top: 40px;
            font-size: 2.5rem;
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

    <h1>👨‍💻 <?= $kelompok ?></h1>

    <div class="container">
        <?php foreach ($anggota as $a) : ?>
        <div class="card">
            <img src="<?= $a['foto']; ?>" alt="<?= $a['nama']; ?>">
            <div class="card-body">
                <h3><?= $a['nama']; ?></h3>
                <p>No Absen: <?= $a['absen']; ?></p>
                <p>Kelas: <?= $a['kelas']; ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <div class="footer">
        © 2026 SMK Telkom Malang | Web Server Dinamis PHP
    </div>

</body>
</html>
