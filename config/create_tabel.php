<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Membuat database
$sqlCreateDB = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sqlCreateDB) === TRUE) {
    echo "Database berhasil dibuat atau sudah ada.";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->select_db($dbname);

// Membuat tabel Users
$sqlCreateTableUsers = "CREATE TABLE IF NOT EXISTS users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50) NOT NULL,
    username VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    datetime timestamp
)";

if ($conn->query($sqlCreateTableUsers) === TRUE) {
    echo "Tabel Users berhasil dibuat atau sudah ada.";
} else {
    echo "Error creating table Users: " . $conn->error;
}

// Membuat tabel Booking
$sqlCreateTableBooking = "CREATE TABLE IF NOT EXISTS booking (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50) NOT NULL,
    whatsapp VARCHAR(15) NOT NULL,
    alamat VARCHAR(255) NOT NULL,
    tanggal DATE NOT NULL,
    paket VARCHAR(50) NOT NULL,
    jam VARCHAR(50) NOT NULL,
    datetime TIMESTAMP
)";

if ($conn->query($sqlCreateTableBooking) === TRUE) {
    echo "Tabel Booking berhasil dibuat atau sudah ada.";
} else {
    echo "Error creating table Booking: " . $conn->error;
}

$conn->close();
?>