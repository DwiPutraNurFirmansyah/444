<?php 
session_start();
include 'koneksi/koneksi.php';
if(isset($_SESSION['kd_cs'])){
    $kode_cs = $_SESSION['kd_cs'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seven Bakery</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: 'Playfair Display', serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        /* Top Contact Info */
        .top-bar {
            background-color: #1a3e5d; /* Biru gelap */
            padding: 12px 0;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .top-bar span {
            color: #ffffff; /* Teks putih */
            font-weight: bold;
            font-size: 16px;
        }

        /* Navbar Styling */
        .navbar {
            background-color: #1a3e5d; /* Biru gelap */
            padding: 15px 0;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }
        .navbar-brand {
            color: #ffffff; /* Teks putih */
            font-size: 28px;
            font-weight: bold;
            transition: color 0.3s ease;
        }
        .navbar-brand:hover {
            color: #87ceeb; /* Biru muda */
        }
        .navbar-nav > li > a {
            color: #ffffff !important; /* Teks putih */
            padding: 12px 20px;
            font-size: 18px;
            font-weight: bold;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .navbar-nav > li > a:hover {
            background-color: #87ceeb; /* Biru muda untuk hover */
            color: #1a3e5d !important;
        }

        /* Hero Section */
        .hero-section {
            background-image: url('https://s4.bukalapak.com/uploads/content_attachment/e140afac23f3048d5fa72fb5/original/Main_Image_(10)_(1).jpg');
            background-size: cover;
            background-position: center;
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            text-align: center;
            position: relative;
            z-index: 1;
            animation: fadeIn 2s ease-out;
        }

        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4); /* Gradient overlay */
            z-index: -1;
        }

        .hero-section h1 {
            font-size: 50px;
            font-weight: bold;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 2px;
            animation: slideUp 1s ease-out;
        }

        @keyframes slideUp {
            0% { transform: translateY(30px); opacity: 0; }
            100% { transform: translateY(0); opacity: 1; }
        }

        .hero-section p {
            font-size: 20px;
            font-style: italic;
            animation: fadeIn 1s ease-in;
        }

        /* Section Title */
        .section-title {
            font-family: 'Playfair Display', serif;
            text-align: center;
            font-size: 30px;
            color: #5d3e30;
            margin-top: 50px;
            padding-bottom: 10px;
            border-bottom: 2px solid #c97c28;
            animation: fadeIn 2s ease-out;
        }

        /* Visi Misi Section */
        .vision-mission-section {
            padding: 50px 0;
            background-color: #fff;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 50px;
        }

        .vision-mission-section .text-center {
            animation: slideIn 1s ease-in-out;
        }

        @keyframes slideIn {
            0% { transform: translateX(-100%); opacity: 0; }
            100% { transform: translateX(0); opacity: 1; }
        }

        .vision-mission-section h2 {
            font-family: 'Playfair Display', serif;
            color: #5d3e30;
            font-size: 28px;
            margin-bottom: 20px;
        }

        .vision-mission-section p {
            font-size: 18px;
            color: #555;
        }

        /* Produk Section */
        .product-section {
            padding: 50px 0;
            background-color: #fff;
        }

        .product-thumbnail {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }

        .product-thumbnail img {
            width: 100%;
            height: auto;
            border-bottom: 3px solid #c97c28;
            transition: transform 0.3s ease;
        }

        .product-thumbnail img:hover {
            transform: scale(1.05);
        }

        .caption {
            text-align: center;
            padding: 15px;
        }

        .caption h3 {
            color: #333;
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<!-- Top Contact Info -->
<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <span><i class="glyphicon glyphicon-earphone"></i> +6285886031844</span>
            </div>
            <div class="col-md-4">
                <span><i class="glyphicon glyphicon-envelope"></i> seven@gmail.com</span>
            </div>
            <div class="col-md-4">
                <span>Seven Bakery Indonesia</span>
            </div>
        </div>
    </div>
</div>

<!-- Navbar -->
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Seven Bakery</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">Home</a></li>
                <li><a href="produk.php">Produk</a></li>
                <li><a href="about.php">Layanan</a></li>
                <li><a href="manual.php">Pemesanan</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<div class="hero-section">
    <h1>Selamat Datang di Seven Bakery</h1>
    <p>Nikmati Kelezatan Tak Tertandingi</p>
</div>

<!-- Visi Misi Section -->
<div class="vision-mission-section">
    <div class="container">
        <h2 class="section-title">Visi dan Misi Kami</h2>
        <div class="text-center">
            <p><strong>Visi:</strong> Menjadi pelopor utama dalam menyediakan produk bakery berkualitas tinggi yang sehat dan terjangkau di seluruh Indonesia.</p>
            <p><strong>Misi:</strong> Menyediakan produk yang segar, sehat, dan lezat dengan bahan-bahan berkualitas terbaik. Membangun hubungan yang erat dengan pelanggan melalui pelayanan yang ramah dan profesional.</p>
        </div>
    </div>
</div>

<!-- Produk Terbaru Section -->
<div class="product-section">
    <div class="container">
        <h2 class="section-title">Produk Kami</h2>
        <div class="row">
            <?php 
            $result = mysqli_query($conn, "SELECT * FROM produk");
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail product-thumbnail">
                        <img src="image/produk/<?= $row['image']; ?>" alt="<?= $row['nama']; ?>" loading="lazy">
                        <div class="caption">
                            <h3><?= $row['nama']; ?></h3>
                            <p><?= $row['deskripsi']; ?></p>
                            <p><strong>Rp <?= number_format($row['harga'], 0, ',', '.'); ?></strong></p>
                        </div>
                    </div>
                </div>
            <?php 
            } 
            ?>
        </div>
    </div>
</div>

</body>
</html>
