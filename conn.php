<?php
$db_name = "db_perpuspro";
$host = "localhost";
$user = "root";
$password = "";

// Mematikan pelaporan error yang sudah usang
error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);

// Menggunakan MySQLi dengan error handling yang lebih baik
$mysqli = new mysqli($host, $user, $password, $db_name);

// Cek koneksi
if ($mysqli->connect_error) {
	die("Connection failed: " . $mysqli->connect_error);
}

// Set karakter encoding ke UTF-8
if (!$mysqli->set_charset("utf8")) {
	printf("Error loading character set utf8: %s\n", $mysqli->error);
	exit();
}

// Fungsi untuk mencegah SQL injection
function escape($conn, $str) {
	return $conn->real_escape_string($str);
}

// Fungsi pinjaman buku terlambat    
function terlambat($tgl_dateline, $tgl_kembali) {
	$tgl_dateline_pcs = explode("-", $tgl_dateline);
	$tgl_dateline_pcs = $tgl_dateline_pcs[2]."-".$tgl_dateline_pcs[1]."-".$tgl_dateline_pcs[0];

	$tgl_kembali_pcs = explode("-", $tgl_kembali);
	$tgl_kembali_pcs = $tgl_kembali_pcs[2]."-".$tgl_kembali_pcs[1]."-".$tgl_kembali_pcs[0];

	$selisih = strtotime($tgl_kembali_pcs) - strtotime($tgl_dateline_pcs);

	$selisih = $selisih / 86400;

	return max(floor($selisih), 0);
}

// Fungsi untuk menutup koneksi database
function closeConnection($conn) {
	$conn->close();
}

// Fungsi untuk menjalankan query dan menangani error
function runQuery($conn, $sql) {
	$result = $conn->query($sql);
	if (!$result) {
		die("Query failed: " . $conn->error);
	}
	return $result;
}
?>