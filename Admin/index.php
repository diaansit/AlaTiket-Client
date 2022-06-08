<?php
session_start();
if($_SESSION["logged_in"]==false){
    header('Location: ../Login.php');
}
$url="http://localhost:8080/api/ListTiket/ambilSemuaData";
$content=file_get_contents($url);
$myjson=json_decode($content);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Selamat Datang</title>
  </head>
  <body>
    <h1>Hello <?= $_SESSION["nama_lengkap"]?> Selamat Datang di Tiket.com</h1>
    <a href="../logout.php" class="btn btn-danger">Keluar</a>
    <a href="tambah_data.php" class="btn btn-success">Tambah</a>
    <a href="pesan_tiket.php" class="btn btn-success">Data Pesan Tiket</a>
    <table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">ID Tiket</th>
      <th scope="col">Keberangkatan</th>
      <th scope="col">Tujuan</th>
      <th scope="col">Kelas</th>
      <th scope="col">Jadwal</th>
      <th scope="col"></th>
      
    </tr>
  </thead>
  <tbody>
  <?php foreach ($myjson->value as $json => $obj): ?>
            <tr>
                <td><?php echo $obj->idTiket; ?></td>
                <td><?php echo $obj->keberangkatan; ?></td>
                <td><?php echo $obj->tujuan; ?></td>
                <td><?php echo $obj->kelas; ?></td>
                <td><?php echo $obj->tanggal; ?></td>
                 <td><a href="edit.php?id=<?php echo $obj->idTiket; ?>" class="btn btn-success">Edit</a><a href="hapus.php?id=<?php echo $obj->idTiket; ?>" class="btn btn-danger">Hapus</a></td>
            </tr>
        <?php endforeach; ?>
  
  </tbody>
</table>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>