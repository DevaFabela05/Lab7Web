<?php
    $tanggal = new DateTime('1995-10-17');
    $today = new DateTime('today');
    $tahun = $today->diff($tanggal)->y;

    echo $tahun
?>