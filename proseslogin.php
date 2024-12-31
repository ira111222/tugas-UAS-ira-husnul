<?php
include ("conn.php");
date_default_timezone_set('Asia/Jakarta');

session_start();

// Pastikan koneksi mysqli ($mysqli) sudah dibuat di file conn.php

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$username = $mysqli->real_escape_string($username);
$password = $mysqli->real_escape_string($password);

if (empty($username) && empty($password)) {
	header('location:login.html?error=1');
	exit();
} else if (empty($username)) {
	header('location:login.html?error=2');
	exit();
} else if (empty($password)) {
	header('location:login.html?error=3');
	exit();
}

$q = $mysqli->query("SELECT * FROM admin WHERE username='$username' AND password='$password'");

if ($q && $q->num_rows == 1) {
	$row = $q->fetch_assoc();
	$_SESSION['user_id'] = $row['user_id'];
	$_SESSION['username'] = $username;
	$_SESSION['fullname'] = $row['fullname'];
	$_SESSION['gambar'] = $row['gambar'];    

	header('location:admin/index.php');
	exit();
} else {
	header('location:login.html?error=4');
	exit();
}

// Tutup koneksi database
$mysqli->close();
?>