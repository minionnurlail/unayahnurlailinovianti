<?php
include("koneksi.php");

if(isset($_POST['save'])){
$query_input=mysqli_query($koneksi,"insert into pelanggan(nama_pelanggan,no_tlp,status)
values(
'".$_POST['nama_pelanggan']."',
'".$_POST['no_tlp']."',
'".$_POST['status']."')");

if($query_input){
header('location:tampilpelanggan.php');
}else{
	echo mysqli_error();
}
}
include("header.php");
?>
<form method="POST">
<table class="table table-bordered" border="1">
	<tr>
		<td>Nama Pelanggan</td>
		<td><input type="text" name="nama_pelanggan" class="form-control"></td>
	</tr>
	<tr>
		<td>No Telepon</td>
		<td><input type="text" name="no_tlp" class="form-control"></td>
	</tr>
	<tr>
		<td>Status</td>
		<td><select class="form-control" name="status">
			<option value="">-----Pilih-----</option>
			<option value="Member">Member</option>
			<option value="Non">Non Member</option>
		</select></td>
	</tr>
	<tr>
		<td><input type="submit" name="save" class="btn btn-danger"></td>
	</tr>
</table>
</form>
<?php
include("footer.php");