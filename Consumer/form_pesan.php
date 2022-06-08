<?php
if (isset($_GET["id"])) {
    $id = (int) $_GET["id"];
    $url="http://localhost:8080/api/ListTiket/ambilDataById?idTiket=".$id;
    $content=file_get_contents($url);
    $myjson=json_decode($content,true);
    $myjson = $myjson["value"];
 
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <?php if (isset($_GET["id"])): ?>
  <form method="post" enctype="multipart/form-data" action="proses_pesan.php">
				<div class="form-group">
					<label>Nomor KTP</label>
					<input type="text" name="no_ktp" class="form-control" >
				</div>
				<div class="form-group">
					<label>Nama Lengkap</label>
					<input type="text" name="nama_lengkap" class="form-control">
				</div>
				<div class="form-group">
					<label>Alamat Lengkap</label>
					<input type="text" name="alamat" class="form-control">
				</div>
				<div class="form-group">
					<label>email</label>
					<input type="text" name="email" class="form-control">
				</div>
				<div class="form-group">
					<label>No Telepon</label>
					<input type="text" name="no_telp" class="form-control">
				</div>
				<div class="form-group">
					<!-- <label>ID Tiket</label> -->
					<input type="hidden" value="<?php echo $id ?>" class="form-control" name="id_tiket">
				</div>
				<div class="form-group">
					<label>Keberangkatan</label>
					<input type="text" value="<?php echo $myjson["keberangkatan"] ?>" class="form-control" name="keberangkatan">
				</div>
				<div class="form-group">
					<label>Tujuan</label>
					<input type="text" value="<?php echo $myjson["tujuan"] ?>" class="form-control" name="tujuan">
				</div>
				<div class="form-group">
					<label>Kelas</label>
					<input type="text" value="<?php echo $myjson["kelas"] ?>" class="form-control" name="kelas">
				</div>
				<div class="form-group">
					<label>Jadwal</label>
					<input type="text" value="<?php echo $myjson["tanggal"] ?>" class="form-control" name="tanggal">
				</div>
				<button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
				<button type="submit" class="btn btn-primary">Simpan</button>
			</form>
			<?php endif; ?>

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


