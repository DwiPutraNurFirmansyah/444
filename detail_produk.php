<?php 
include 'header.php';
$kode = mysqli_real_escape_string($conn,$_GET['produk']);
$result = mysqli_query($conn, "SELECT * FROM produk WHERE kode_produk = '$kode'");
$row = mysqli_fetch_assoc($result);

?>
<div class="container" style="padding-top: 20px; padding-bottom: 50px;">
	<h2 style=" width: 100%; border-bottom: 4px solid #ff8680"><b>Detail produk</b></h2>

	<div class="row">
		<div class="col-md-4">
			<div class="thumbnail">
				<img src="image/produk/<?= $row['image']; ?>" width="400">
			</div>
		</div>

		<div class="col-md-8">
			<form action="proses/add.php" method="GET">
				<input type="hidden" name="kd_cs" value="<?= $kode_cs; ?>">
				<input type="hidden" name="produk" value="<?= $kode;  ?>">
				<input type="hidden" name="hal"  value="2">
				<table class="table table-striped">
					<tbody>
						<tr>
							<td><b>Nama</b></td>
							<td><?= $row['nama']; ?></td>
						</tr>
						<tr>
							<td><b>Harga</b></td>
							<td>Rp.<?= number_format($row['harga']); ?></td>
						</tr>
						<tr>
							<td><b>Deskripsi</b></td>
							<td><?= $row['deskripsi'];  ?></td>
						</tr>
					</tbody>
				</table>
				<?php 
				if(isset($_SESSION['user'])){
					?>
					<button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-shopping-cart"></i> Beli Sekarang </button>
					<?php 
				}else{

					?>
					<a href="manual.php" class="btn btn-success"><i class="glyphicon glyphicon-shopping-cart"></i> Beli Sekarang </a>
					<?php 
				}
				?>
				<a href="produk.php" class="btn btn-warning"> Kembali Belanja</a>
			</div>
		</form>
	</div>


</div>	
<br>
<br>

<?php 
include 'footer.php';
?>