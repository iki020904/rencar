<?php
require 'config1.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $mobil = $_POST['mobil'];
    $harga = $_POST['harga'];
    $tanggal = date("Y-m-d");
    $status_pembayaran = $_POST['status_pembayaran'];

    $sql = "INSERT INTO transaksi (nama, email, no_hp, mobil, harga, tanggal, status_pembayaranS)
    VALUES ('$nama', '$email', '$no_hp', '$mobil', '$harga', '$tanggal','$status_pembayaran)";

    if ($conn->query($sql) === TRUE) {
        header("Location: selesai.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
