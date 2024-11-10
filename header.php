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
    <title>202251251</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: 'Playfair Display', serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .top {
            background-color: #ff8680;
            padding: 10px 0;
            text-align: center;
            color: #b22222;
            font-weight: bold;
            font-size: 16px;
        }
        .navbar {
            background-color: #2c3e50;
            padding: 10px 0;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }
        .navbar-brand {
            color: #ff8680;
            font-size: 28px;
            font-weight: bold;
            transition: color 0.3s ease;
        }
        .navbar-brand:hover {
            color: #ffc107;
        }
        .navbar-nav > li > a {
            color: #ffffff !important;
            padding: 15px 20px;
            font-size: 18px;
            font-weight: bold;
            transition: background-color 0.3s, color 0.3s;
        }
        .navbar-nav > li > a:hover {
            background-color: #ff8680;
            color: #2c3e50 !important;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row top">
            <div class="col-md-4">
                <span><i class="glyphicon glyphicon-earphone"></i> +6287804616097</span>
            </div>
            <div class="col-md-4">
                <span><i class="glyphicon glyphicon-envelope"></i> sevenbakery@gmail.com</span>
            </div>
            <div class="col-md-4">
                <span>202251251 Bakery Indonesia</span>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">SEVEN BAKERY</a>
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
</body>
</html>
