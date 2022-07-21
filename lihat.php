<?php
    echo "<head><title> Transaksi</title></head>";
    $fp = fopen ("transaksi.txt", "r");
    echo "<table border = 2>";

    while ($isi = fgets($fp,80))
    {
        $pisah = explode("|", $isi);
        echo "<tr><td>Nama </td><td>: $pisah[0]</td><tr>";
        echo "<tr><td>Tanggal </td><td>: $pisah[1]</td><tr>";
        echo "<tr><td>Telp </td><td>: $pisah[2]</td><tr>";
        echo "<tr><td>BBM </td><td>: $pisah[3]</td><tr>";
        echo "<tr><td>Jumlah </td><td>: $pisah[4]</td><tr><tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
    }
    echo "</table>";
    echo "<a href =index.html> Isi Catatan Transaksi </a>";
    ?>