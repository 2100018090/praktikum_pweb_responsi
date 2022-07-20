<?php 
    require 'functions.php';

    if(isset($_POST["login"])){
        tulis($_POST);
    }


 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pengiriman</title>
	 <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

     <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
<body background="swirl_pattern.webp">
	<!-- order section starts  -->

<section class="order" id="order">

    <h3 class="sub-heading"> Pesan </h3>
    <h1 class="heading"> Resto Pras </h1>

    <form action="" method="post">

        <div class="inputBox" >
            <div class="input">
                <span>nama</span>
                <input type="text" name="nama" id="nama" placeholder="enter nama">
            </div>
            <div class="input" >
                <span>Nomer Hp</span>
                <input type="number" name="nomer" id="nomer" placeholder="enter nomer hp">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>Pesenan</span>
                <input type="text" name="pesenan" id="pesenan" placeholder="enter Pesenan">
            </div>
            <div class="input">
                <span>Kode Makanan</span>
                <input type="test" name="food" id="food" placeholder="extra ">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>Jumlah Makanan</span>
                <input type="number" name="enak" id="enak" placeholder="how many orders">
            </div>
            <div class="input">
                <span>tanggal dan waktu</span>
                <input type="datetime-local" name="tanggal" id="tanggal">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>alamat anda</span>
                <textarea name="alamat" placeholder="enter alamat anda" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="input">
                <span>pesan Anda</span>
                <textarea name="pesan" placeholder="enter pesan anda " id="" cols="30" rows="10"></textarea>
            </div>
        </div>

        <input type="submit" name="login" value="pesan sekarang" class="btn">

    </form>

    <h2 align="center"><br><br>
        <a href="proyek.php" class="btn">Kembali ke Menu</a>
    </h2>

</section>

</body>
</html>