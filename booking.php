<?php 
require 'functions.php';
	
	if (isset($_POST["submit"]) ) {
		
      tulis($_POST);
	}
	
 ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rental Mobil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <!--NAVIGASI WEB-->
    <section class="ren_navbar">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container">
                  <a class="navbar-brand" href="#">Rental Mobil</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                      <a href="utama.php"class="nav-link active" aria-current="page" href="#">Home</a>
                      <a class="nav-link" href="#">Booking</a>
                      <a class="nav-link" href="kontak.html">Kontak</a>
                    </div>
                  </div>
                </div>
              </nav>          
      </div>
    </section>
    <section class="ren_header mb-5">
      <div class="container">
        <div class="jumbotron jumbotron-fluid">
              <img class="img-responsive" src="sewamobil.png" alt="Rental Mobil Jakarta" width="1350">
              <font><h2 align="center">SEWA MOBIL JAKARTA</h2></font>
              </div>
             </div>
    </section>
    <section class="ren_brencumbe"></section>
    <div class="container">
    <h3>Form Order Mobil</h3>
    <form method="post">
      <table>
        <tr><td>Nama </td><td><input type="text" name="nama_pemesan" placeholder="Nama Lengkap Pembeli"></td></tr>
      <tr>
        <tr><td>No ponsel </td><td><input type="tel" name="hp" id="hp" pattern="+62 - [0-9]{3} - [0-9]{4} - [0-9]{3}" value="+62"></td></tr>
      <td>Pilih Mobil </td>
      <td>
          <input type="radio" name="mobil" value="Avanza/xenia"/>Avanza/Xenia<br/>
          <input type="radio" name="mobil" value="Terios/Rush"/>Terios/Rush<br/>
          <input type="radio" name="mobil" value="Fortuner/Pajero"/>Fortuner/Pajero<br/>
          <input type="radio" name="mobil" value="Calya/Sigra"/>Calya/Sigra<br/>
          <input type="radio" name="mobil" value="Ertiga"/>Ertiga<br/>
          <input type="radio" name="mobil" value="Yaris"/>Yaris<br/>
          <input type="radio" name="mobil" value="Innova"/>Innova<br/>
          <input type="radio" name="mobil" value="Hiace"/>Hiace<br/>
      </td>
  </tr>
  <tr>
      <td>Tujuan</td>
      <td><select name="pilih">
          <option>Dalam Kota</option>
          <option>Bandung</option>
          <option>Yogyakarta</option>
          <option>Semarang</option>
        </select>
  </tr>
  <tr>
    <td>Tanggal Pergi</td>
    <td>
      <input type="date" name="tanggalpergi">
    </td>
  </tr>
  <tr>
    <td>Tanggal Kembali</td>
    <td>
      <input type="date" name="tanggalkembali">
    </td>
  </tr>
  <tr>
  <td>Detail Alamat</td>
  <td><textarea name="alamat" cols="22" rows="3" ></textarea></td>
  </tr>
  <tr><td></td><td><input type="submit" name="submit"value="Booking"></td></tr>
  </table>
  </div>
    </form>
      <!--Footer-->
      <footer class="ren_footer">
        <div class="border border-1 bg-secondary p-5">
          <font><h6 align="center">&copy 2022 by Fikri</h6></font>
        </div>
      </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>