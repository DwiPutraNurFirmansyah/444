<?php 
	include 'header.php';
?>

<!-- PRODUK TERBARU -->
<div class="container" style="padding-top: 20px; padding-bottom: 50px;">
	<h2 style="width: 100%; border-bottom: 4px solid #ff8680; font-weight: bold; margin-bottom: 20px;">Produk Kami</h2>

	<div class="row">
		<?php 
		$result = mysqli_query($conn, "SELECT * FROM produk");
		while ($row = mysqli_fetch_assoc($result)) {
		?>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<div class="thumbnail" style="border-radius: 15px; overflow: hidden; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); margin-bottom: 20px;">
					<img src="image/produk/<?= $row['image']; ?>" alt="<?= $row['nama']; ?>" class="img-fluid img-hover">
					<div class="caption">
						<h3><?= $row['nama']; ?></h3>
						<h4>Rp.<?= number_format($row['harga']); ?></h4>
						<div class="row">
							<div class="col-md-6">
								<a href="detail_produk.php?produk=<?= $row['kode_produk']; ?>" class="btn btn-warning btn-block btn-hover">Detail</a> 
							</div>
							<?php if(isset($_SESSION['kd_cs'])){ ?>
								<div class="col-md-6">
									<!-- Mengubah tombol Tambah menjadi Buy Now -->
									<a href="manual.php?produk=<?= $row['kode_produk']; ?>&kd_cs=<?= $kode_cs; ?>" class="btn btn-success btn-block btn-hover" role="button"><i class="glyphicon glyphicon-shopping-cart"></i> Buy Now</a>
								</div>
							<?php } else { ?>
								<div class="col-md-6">
									<a href="manual.php" class="btn btn-success btn-block btn-hover" role="button"><i class="glyphicon glyphicon-shopping-cart"></i> Buy Now</a>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>

</div>

<?php 
	include 'footer.php';
?>

<!-- CSS untuk Efek Gambar dan Tombol -->
<style type="text/css">
    /* Efek gambar produk */
    .img-hover {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .img-hover:hover {
        transform: scale(1.1);
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.2);
    }

    /* Efek untuk tombol */
    .btn-hover {
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .btn-hover:hover {
        background-color: #e59424;
        transform: scale(1.05);
    }

    /* Efek untuk tombol warning */
    .btn-warning {
        background-color: #ffac33;
        border-color: #ffac33;
    }

    .btn-warning:hover {
        background-color: #e59424;
        border-color: #e59424;
    }

    /* Efek untuk tombol success */
    .btn-success {
        background-color: #28a745;
        border-color: #28a745;
    }

    .btn-success:hover {
        background-color: #218838;
        border-color: #1e7e34;
    }
</style>
