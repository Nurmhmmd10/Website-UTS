<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $subjek = $_POST["subjek"];
    $pesan = $_POST["pesan"];

    $to = "youremail@example.com";
    $headers = "From: $email";
    $body = "Nama: $nama\nEmail: $email\nPesan:\n$pesan";

    if (mail($to, $subjek, $body, $headers)) {
        echo "Pesan berhasil dikirim!";
    } else {
        echo "Pesan gagal dikirim.";
    }
}
?>
