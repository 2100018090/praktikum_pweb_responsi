<?php 

$conn = mysqli_connect("localhost", "root", "", "proyek");

function registrasi($data){
	global $conn;

	$username = strtolower(stripcslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	//cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM mahasiswa WHERE username = '$username'");

	if (mysqli_fetch_assoc($result)) {
		echo "<script>
				alert('username sudah terdaftar')
				</script>";
			return false;
	}

	// cek konfirmasi password
	if ($password !== $password2) {
		echo "<script>
			alert('konfirmasi password tidak sesuai')
			</script>";
		return false;
	}
	//enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	//tambahkan userbaru ke database
	mysqli_query($conn, "INSERT INTO mahasiswa VALUES('','$username', '$password')");

	return mysqli_affected_rows($conn);
}
	
function tulis($data){
	$nama = $data["nama"];
	$nomer = $data ["nomer"];
	$pesenan = $data ["pesenan"];
	$food = $data["food"];
	$enak = $data["enak"];
	$tanggal = $data["tanggal"];
	$alamat = $data["alamat"];
	$pesan = $data["pesan"];
	$fp = fopen("booking.txt", "a+");
	fputs($fp, "$nama|$nomer|$pesenan|$food|$enak|$tanggal|$alamat|$pesan\n");
	fclose($fp);

}
 ?>