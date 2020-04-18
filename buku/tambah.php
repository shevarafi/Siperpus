<?php 
include '../koneksi.php';

$query = mysqli_query($kon,("SELECT * FROM kategori"));
?>

<?php
include '../aset/header.php';
?>

<head>
    <title>Tambah Buku</title>
</head>
<body>
    <center>
    <h3>Tambah Data Buku</h3>
    <form method="post" action="proses-tambah.php">
        <table>
            <tr>
                <td>Judul</td>
                <td><input type="text" name="judul" required></td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td><input type="text" name="penerbit" required></td>
            </tr>
            <tr>
                <td>Pengarang</td>
                <td><input type="text" name="pengarang" required></td>
            </tr>
            <tr>
                <td>Ringkasan</td>
                <td>
                    <textarea style = "width: 205px" name="ringkasan"></textarea>
                </td>
            </tr>
            <tr>
                <td>Cover</td>
                <td><input type="file" name="cover"></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><input type="text" name="stok" required></td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td>
                    <select  style = "width: 205px" class="form-control" name="id_kategori">
                    <option>Pilih</option>
                    <?php while ($kategori = mysqli_fetch_assoc($query)):?>  
                    <option value="<?php echo $kategori['id_kategori']; ?>"><?php echo $kategori['kategori']; ?></option>
                    <?php endwhile; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" class="btn btn-primary" name="simpan" value="Simpan!"></td>
            </tr>
        </table>
    </form>   
</body>
</html>

<?php
include '../aset/footer.php';
?>