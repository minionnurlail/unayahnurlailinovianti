<?php
  include_once("koneksi.php");
  include_once("header.php");
 
 ?>
<!DOCTYPE html>
<html>
<head>
 <title>Join Table</title>
</head>
<h1><center> DAFTAR BARANG </center></h1>
<body>
<table class="table table-bordered" border="1">
  <tr>
    <td>No</td>
    <td>Nama Barang</td>
    <td>Kategori</td>
    <td>Satuan</td>
</tr>
<?php
 $query =mysqli_query($koneksi, "select * from barang");
 $no=1;
 while($tampil=mysqli_fetch_array($query)){?>
   <tr>
      <td><?php echo $no++;?></td>
      <td><?php echo $tampil ['nama_barang'];?></td>
      <td><?php echo $tampil ['kategori_id'];?></td>
      <td><?php echo $tampil ['satuan_id'];?></td>
    </tr> 
    <?php }?>
 </table>
 <input type='button'value='Tambah Barang'onClick='top.location="inputbarang.php"'class='btn btn-success btn-sm '>
</body>
</html>

<?php
	include("footer.php");
?>