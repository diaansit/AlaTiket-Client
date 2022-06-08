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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <?php if (isset($_GET["id"])): ?>
        <form method="post" enctype="multipart/form-data" action="proses_edit.php">
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
			
				<button type="submit" class="btn btn-primary">Simpan</button>
		</form>

    <?php endif; ?>
       <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>