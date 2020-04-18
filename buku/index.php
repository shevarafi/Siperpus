<?php

include '../koneksi.php';

$sql = "SELECT * FROM buku ORDER BY judul";

$res = mysqli_query($kon, $sql);

$pinjam = array();

while ($data = mysqli_fetch_assoc($res)){
    $pinjam[] = $data;
}

include '../aset/header.php';
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md">

        </div>
    </div>
</div>

<div class="card">
  <div class="card-header">
    <h2 class="card-title"><i class="fas fa-edit"></i>Data Buku</h2>

    <center><a href="tambah.php"><span class="badge badge-info">+Tambah Buku</span></a></center>
  </div>
  <div class="card-body"><table class="table ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Judul</th>
      <th scope="col">penerbit</th>
      <th scope="col">Pengarang</th>
      <th scope="col">Ringkasan</th>
      <th scope="col">Stok</th>
      <th scope="col">Kategori</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php
    $no = 1;
    foreach ($pinjam as $p) { ?>

    <tr>
      <th scope="row"><?= $no ?></th>
      <td><?= $p['judul'] ?></th>
      <td><?= $p['penerbit'] ?></th>
      <td><?= $p['pengarang'] ?></th>
      <td><?= $p['ringkasan'] ?></th>
      <td><?= $p['stok'] ?></th>
      <td><?= $p['id_kategori'] ?></th>
    <td>
        <a href=""><span class="badge badge-success">Detail</span></a> 
        <a href="edit.php"><span class="badge badge-warning">Edit</span></a>
        <a href=""><span class="badge badge-danger">Hapus</span></a>
    </td>
    </tr>
    
    <?php
        $no++;
    }
    ?>
  </tbody>
</table>

  </div>
</div>

<?php
include '../aset/footer.php';
?>
