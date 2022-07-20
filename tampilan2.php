<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="css/col.css">

</head>
<body background="images/swirl_pattern.web">
    <h1 align="center">Pesan Order</h1>

<?php 

$fp = fopen("booking.txt", "r");

echo "<table width = '700px'  border='1px' align = 'center'>" ;

while ($isi = fgets($fp)) {
    $pisah = explode('|', $isi);
    echo "<tr><td>Nama </td><td> $pisah[0] </td></tr>";
    echo "<tr><td>Nomer Hp </td><td> $pisah[1] </td></tr>";
    echo "<tr><td>Pesanan </td><td> $pisah[2] </td></tr>";
    echo "<tr><td>Food </td><td> $pisah[3] </td></tr>";
    echo "<tr><td>Jumlah Pesanan </td><td> $pisah[4] </td></tr>";
    echo "<tr><td>Tanggal </td><td> $pisah[5] </td></tr>";
    echo "<tr><td>Alamat </td><td> $pisah[6] </td></tr>";
    echo "<tr><td>Pesan </td><td> $pisah[7] </td></tr>";


}
echo "</table>";

?>
<h3 align="center" ><br>
    <a href="pengiriman.php" class="btn">Pesan Lagi</a>

    <a href='proyek.php'  class="btn">Kembali ke Menu</a>
</h3>


</body>
</html>

