
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
  <div class="container">
        <form method="post" enctype="multipart/form-data" action="tambah_proses.php">
				<div class="form-group">
					<label>ID Tiket</label>
					<input type="text" name="id_tiket" class="form-control">
				</div>
				<div class="form-group">
					<label>Keberangkatan</label>
					<input type="text" name="keberangkatan" class="form-control">
				</div>
				<div class="form-group">
					<label>Tujuan</label>
					<input type="text" name="tujuan" class="form-control">
				</div>
				<div class="form-group">
					<label>Kelas</label>
					<input type="text" name="kelas" class="form-control">
				</div>
				<div class="form-group">
					<label>Jadwal</label>
					<input type="text" name="jadwal" class="form-control">
				</div>
			</div>
				<button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
				<button type="submit" class="btn btn-primary">Simpan</button>
		</form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
