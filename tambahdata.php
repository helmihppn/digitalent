<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title></title>
</head>
<body>
<div class="card-body">
  <div class="row">
    <div class="col-md-8">
	  <h3>TAMBAH DATA PRINTER</h3><br>
	    <form method="post" action="tambahprosesdata.php">
          <div class="row my-2 justify-content-center">
            <div class="col-md-2">
              <label for="nama">Nama :</label>
             </div>
             <div class="col-md-10">
               <input type="text" class="form-control" name="nama_merk" id="nama_merk" placeholder="nama">
             </div>
          </div>
          <div class="row my-2 justify-content-center">
            <div class="col-md-2">
              <label for="warna">Warna :</label>
            </div>
                <div class="col-md-10">
                  <input type="text" class="form-control" name="warna" id="warna" placeholder="warna">
                </div>
    </div>
    <div class="row my-2 justify-content-center">
                <div class="col-md-2">
                  <label for="jumlah">Jumlah :</label>
                </div>
                <div class="col-md-10">
                  <input type="text" class="form-control" name="jumlah" id="jumlah" placeholder="jumlah">
                </div>
    </div><br>
    <div class="col-md-11" align="left">
                <button class="btn btn-primary shadow" type="submit" name="submit"><a class="mx-3 text-light" href="  ">SIMPAN</a></button>
                <button class="btn btn-primary shadow" type="reset" name="submit"><a class="mx-3 text-light" href="  ">ULANGI</a></button>  
                <button class="btn btn-primary shadow" type="submit" name="submit"><a class="mx-3 text-light" href="data.php">KEMBALI</a></button>  
    </div>
	</form>
    </div>
    <div>
    <div>
    </body>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>