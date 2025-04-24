<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" href="<?= $model['base_url'] ?>/images/hima.png" />
        <title>HMIF ITATS - Homepage</title>
        <link rel="icon" type="image/png" href="./public/image/HMIF_1.png">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <style>
            :root {
                --primary-color: #EFEBEBFF;
                --secondary-color:rgb(204, 0, 173);
                --light-color: #FFFFFF;
                --dark-color: #1C1C1C;
                --hima-blue: #00529B;
            }

            .navbar {
                background: var(--primary-color);
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }

            .navbar-nav .nav-link {
                color: var(--hima-blue) !important;
            }

            .navbar-nav .nav-link:hover {
                color: var(--secondary-color) !important;
            }

            .btn-primary {
                background-color: var(--secondary-color) !important;
                border-color: var(--secondary-color) !important;
            }
            .btn-primary:hover {
                background-color:rgb(146, 10, 105) !important; /* Oranye lebih gelap saat hover */
                border-color:rgb(146, 10, 105) !important;
            }

            .card {
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .card:hover {
                transform: scale(1.05);
                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            }

            footer {
                background-color: #343a40;
                color: white;
                padding: 20px 0;
                text-align: center;
            }
        </style>
    </head>
    <body class="d-flex flex-column min-vh-100">
        <!-- ini navbar -->
    </body>
</html>    



<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
        <a href="index.php?modul=home" class="navbar-brand d-flex align-items-center ms-3">
            <img src="<?= $model['base_url'] ?>/images/ITATS.png" alt="Logo" class="me-2" style="height: 40px;">
            <img src="<?= $model['base_url'] ?>/images/hima.png" alt="Logo" class="me-2" style="height: 40px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars" style="color: #00529B;"></i>
        </button>
        <?php $modul = isset($_GET['modul']) ? $_GET['modul'] : 'home'; ?>
        <!-- Navigasi -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="index.php?modul=home" class="nav-link <?= ($modul == 'home') ? 'active' : '' ?>">Beranda</a></li>
                <li class="nav-item"><a href="index.php?modul=about" class="nav-link <?= ($modul == 'about') ? 'active' : '' ?>">Tentang</a></li>
                <li class="nav-item"><a href="index.php?modul=organisasi" class="nav-link <?= ($modul == 'organisasi') ? 'active' : '' ?>">Organisasi</a></li>
                <li class="nav-item"><a href="index.php?modul=event" class="nav-link <?= ($modul == 'event') ? 'active' : '' ?>">Event</a></li>
                <li class="nav-item"><a href="index.php?modul=kontak" class="nav-link <?= ($modul == 'kontak') ? 'active' : '' ?>">Kontak</a></li>
                <li class="nav-item"><a href="index.php?modul=pengguna&fitur=login" class="nav-link">Login</a></li>
            </ul>
        </div>
    </div>
</nav>
