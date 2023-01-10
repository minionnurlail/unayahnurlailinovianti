<?php
include ("koneksi.php");
$query_view=mysqli_query($koneksi,"select * from satuan");
include("header.php");
?>

<?php
echo '<a href="inputsatuan.php" class="btn btn-danger">Tambah Satuan</a>';

echo '<a href="inputbarang.php" class="btn btn-danger">Tambah Barang</a>';?>
</br>
</br>

<table class="table table-bordered" border="1">
  <tr>
    <td>No</td>
    <td>Nama</td>
  </tr>

  <?php
  $no=1;
  while($tampil=mysqli_fetch_array($query_view)){?>
    <tr>
      <td><?php echo $no++;?></td>
      <td><?php echo $tampil ['nama_satuan'];?></td>
  </tr>
<?php }?>

</table>
<?php
include("footer.php");