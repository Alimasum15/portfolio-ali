2<?php
include 'koneksi.php';
//MEMBACA DATA ATAU READ
$query = "SELECT * FROM buku ORDER BY id DESC";
$result= mysqli_query($koneksi, $query);

if (isset($_GET['hapus'])) { $id =
$_GET['hapus'];
mysqli_query($koneksi, "DELETE FROM buku WHERE id=$id"); 
header("location: index.php");
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PERPUSTAKAN SAYANG</title>
  </head>
  <body>
    <h1>SELAMAT DATANG SAYANG DI PERPUSTAKAN</h1>
    <p>KAMUUUU SYARIAH HURAAA</p>
     <a href="tambah.php" class="btn btn-info">+ Tambah Siswa baru</a>
    <table class="table table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">JUDUL BUKU</th>
      <th scope="coI"> PENULIS</th>
      <th scope="col">PENERBIT</th>
      <th scope="col">TAHUN TERBIT</th>
    </tr>
  </thead>
  <tbody>
      <?php $no = 1; while ($buku = mysqli_fetch_assoc($result)) :?>
        <tr>
          <td><?= $no++; ?></td>
          <td><?= htmlspecialchars($buku['judul']); ?></td>
          <td><?= htmlspecialchars($buku['penulis']); ?></td>
          <td><?= htmlspecialchars($buku['penerbit']); ?></td>
          <td><?= $buku['tahun_terbit']; ?></td> <td>
            <a href="edit.php?id=<?= $buku['id']; ?>"class="btn btn-sm btn-warning">edit</a>
            <a href="index.php?hapus=<?= $buku['id']; ?>" claas="btn btn-sm btn-danger"  
            onclick="return confirm('hapus buku ini?')
            ">hapus</a>
          </td>
        </tr>
        <?php endwhile; ?>
  </tbody>
</table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>