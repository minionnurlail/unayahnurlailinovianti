<?php
include_once("koneksi.php");
if(isset($_POST['save'])){
	$query_input=mysqli_query($koneksi,"insert into barang
	values('','".$_POST['nama_barang']."',".$_POST['kategori_id'].",".$_POST['satuan_id'].")");
	
	if($query_input){
	header('location:tampilbarang.php');
	}else{
		echo mysqli_error($koneksi);
	}
	}		
include('header.php');
?>
<form method="POST">
<table class="table table-bordered" border="1">
	<tr>
		<td>NAMA</td>
		<td><input type="text" name="nama_barang" class="form-control"></td>
	</tr>
	<tr>
	<td>ID Kategori</td>
		<td><select class="form-control" name="kategori_id">
			<option value="">-----Pilih-----</option>
			<?php 
			$sql_kategori = mysqli_query ($koneksi, "Select * from kategori" ) or die
			(mysql_error($koneksi));
			while ($id_kategori = mysqli_fetch_array($sql_kategori)) {
				echo '<option value="'.$id_kategori['id_kategori'].'">'.$id_kategori['id_kategori'].'</option>';
			} ?>
		</select></td>
		</tr>
		<tr>
	<td>ID Satuan</td>
		<td><select class="form-control" name="satuan_id">
			<option value="">-----Pilih-----</option>
			<?php 
			$sql_satuan = mysqli_query ($koneksi, "Select * from satuan" ) or die
			(mysql_error($koneksi));
			while ($id_satuan = mysqli_fetch_array($sql_satuan)) {
				echo '<option value="'.$id_satuan['id_satuan'].'">'.$id_satuan['id_satuan'].'</option>';
			} ?>
		</select></td>
	</tr>
	<tr>
		<td><input type="submit" name="save" class="btn btn-danger"></td>
	</tr>
	
</table>
</form>
<input type='button'value='Tambah kategori'onClick='top.location="inputkategori.php"'class='btn btn-success btn-sm'>
<input type='button'value='Tambah Satuan'onClick='top.location="inputsatuan.php"'class='btn btn-success btn-sm'>
</form>
<?php
include('footer.php');
?>