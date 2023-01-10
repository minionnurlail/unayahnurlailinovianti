<?php
include "koneksi.php";
include("header.php");

?>
<h1><center> LAPORAN TRANSAKSI </center></h1>

<table class="table table-bordered table-dark"border="1">
	<tr>
		<td>No</td>
		<td>Nama Pelanggan</td>
		<td>status</td>
		<td>Kategori</td>
		<td>Barang</td>
		<td>Qty</td>
		<td>harga</td>
		<td>Diskon</td>
		<td>total</td>
	</tr>
	<?php
		$no=1;
		
		$query = ("SELECT * FROM transaksi INNER JOIN barang ON transaksi.id_barang = barang.id_barang INNER JOIN pelanggan ON transaksi.id_pelanggan = pelanggan.id_pelanggan
		INNER JOIN kategori ON barang.kategori_id=kategori.id_kategori"); 
		$sql_brg = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
		while ($data = mysqli_fetch_array($sql_brg)) {
			
	?>
	<tr>
	
		<td><?= $no++; ?></td>
		<td><?=$data['nama_pelanggan']?></td>
		<td><?=$data['status']?></td>
		<td><?=$data['nama_kategori']?></td>
		<td><?=$data['nama_barang']?></td>
		<td><?=$data['qty']?></td>
		<td>Rp.<?=$data['harga']?></td>
		<td><?=$data['diskon']?>%</td>
		<td>Rp.<?=$data['harga'] * $data['qty'] - ( $data['harga'] * $data['qty'] * $data['diskon']/100) ?></td>
	</tr>
	<?php }?>
</table>
<input type='button'value='Tambah Transaksi'onClick='top.location="inputtransaksi.php"'class='table table-bordered' border="1">
<?php
include("footer.php");