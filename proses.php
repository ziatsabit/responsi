<?php
    echo "<head><title>Transaksi</head></title>";
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $telp = $_POST['telp'];
    $bbm = $_POST['bbm'];
    $jumlah = $_POST['jumlah'];

    $fp = fopen("transaksi.txt", "a+");
    fputs($fp, "$nama|$tanggal|$telp|$bbm|$jumlah\n");
    fclose($fp);

    echo "Terimakasih Atas Pertisipasi Anda Mengisi Catatan Transaksi<br>";
    echo "<a href = tampilan.php> Isi Transaksi </a><br>";
    echo "<a href = lihat.php> Lihat Transaksi </a><br>";
    ?>