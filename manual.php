<?php
    include 'header.php';
?>

<style type="text/css">
    .bs-acc {
        margin: 20px;
    }
    .panel-group .panel {
        margin-bottom: 20px;
        border: none;
    }
    .panel-heading {
        background-color: #2c3e50;
        color: white;
        padding: 15px;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .panel-heading:hover {
        background-color: #34495e;
    }
    .panel-title {
        font-size: 20px;
        font-weight: bold;
        color: #fff;
    }
    .panel-body {
        padding: 20px;
        font-size: 16px;
        color: #555;
        background-color: #ecf0f1;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }
    .panel-body ul {
        margin-left: 20px;
    }
    .panel-body li {
        margin-bottom: 10px;
    }
    .btn-cta {
        display: inline-block;
        background-color: #16a085;
        color: white;
        padding: 10px 20px;
        border-radius: 50px;
        font-weight: bold;
        text-decoration: none;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }
    .btn-cta:hover {
        background-color: #1abc9c;
        transform: scale(1.05);
    }
    .highlight {
        color: #e74c3c;
        font-weight: bold;
    }
    .notification {
        margin: 20px;
        padding: 15px;
        background-color: #f1c40f;
        color: #2c3e50;
        font-size: 18px;
        font-weight: bold;
        text-align: center;
        border-radius: 8px;
    }
</style>

<div class="container" style="padding-top: 20px; padding-bottom: 50px;">
    <h2 style="width: 100%; border-bottom: 4px solid #ff8680; padding-bottom: 20px; text-align: center; font-size: 32px; font-weight: bold;">Pemesanan di Seven Bakery</h2>

    <!-- Pemberitahuan -->
    <div class="notification">
        Silakan pilih opsi pemesanan dengan mengklik pilihan di bawah ini.
    </div>
    
    <div class="bs-acc">
        <div class="panel-group" id="accordion">
            <!-- Pemesanan via WhatsApp -->
            <div class="panel panel-default">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" style="color:#000;">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <i class="glyphicon glyphicon-phone"></i> Pemesanan via WhatsApp
                        </h4>
                    </div>
                </a>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <p>Pesan langsung melalui <span class="highlight">WhatsApp</span> kami dengan cara yang sangat mudah:</p>
                        <ol>
                            <li>Hubungi kami di <strong><a href="https://wa.me/6285886031844" target="_blank" class="btn-cta">085-886-031-844</a></strong> (klik nomor untuk langsung chat).</li>
                            <li>Sampaikan detail pesanan Anda: produk, jumlah, dan alamat pengiriman.</li>
                            <li>Tim kami akan segera mengonfirmasi total pembayaran dan estimasi pengiriman.</li>
                            <li>Anda akan menerima update status pesanan hingga siap diantar!</li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- Pemesanan di Outlet -->
            <div class="panel panel-default">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" style="color:#000;">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <i class="glyphicon glyphicon-map-marker"></i> Pemesanan di Outlet
                        </h4>
                    </div>
                </a>
                <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p>Ingin langsung memilih produk dan menikmati suasana kami? Anda dapat langsung datang ke outlet kami!</p>
                        <ol>
                            <li>Kunjungi outlet SEVEN Bakery & Bakery terdekat.</li>
                            <li>Pilih produk yang ingin Anda beli langsung di toko.</li>
                            <li>Lakukan pembayaran di kasir dan bawa pulang produk lezat kami segera!</li>
                        </ol>
                        <p><strong>Alamat outlet:</strong> Temukan alamat outlet terdekat dengan klik <a href="about.php" class="btn-cta">Layanan & Alamat</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include 'footer.php';
?>
