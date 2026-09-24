<?php
include 'koneksi.php';
if (isset($_POST['sumbit'])) {
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $simpan = mysqli_query($koneksi, "INSERT INTO buku (judul, penulis, penerbit, tahun_terbit)
     VALUES ('$judul', '$penulis', '$penerbit', '$tahun_terbit')");
    if($simpan) {header("location: index.php");
}else { echo "Gagal menyimpan data buku baru"; }
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

    <title>PERPUSTAKAN SAYANGGG</title>
  </head>
  <body>
   
     <divclass="container mt-5">
    <h2 class="md-4">tambah siswa baru</h2>
     
    <form method="POST" action="">
        <label class="from-label">
            JUDUL BUKU
        </label>
        <input type="text" name="judul" class="form-control" placeholder="MASUKAN JUDUL
         BUKU" required>

 <label class="from-label">
            PENULIS BUKU
        </label>
        <input type="text" name="penulis" class="form-control" placeholder="MASUKAN JUDUL
         BUKU" required>

          <label class="from-label">
            penerbit buku
        </label>
        <input type="text" name="penerbit" class="form-control" placeholder="MASUKAN JUDUL
         BUKU" required>


          <label class="from-label">
            TAHUN TERBIT
        </label>
        <input type="text" name="tahun_terbit" class="form-control" placeholder="MASUKAN JUDUL
         BUKU" required>

         <button type="sumbit" name="sumbit" class="btn btn-primary">
            simpan
            </button>
            <a href="index.php" class="btn btn-secondray">
            kembali

            </a>
    </form>
     </div>


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