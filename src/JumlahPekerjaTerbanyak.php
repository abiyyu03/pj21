<?php
require '../connect.php'; 

$jumlahPekerjaTerbanyakData = mysqli_query($connection,"SELECT jenis_pekerjaan.jenis_pekerjaan, SUM(data_pekerjaan.jumlah) as jumlah FROM data_pekerjaan
                                  JOIN jenis_pekerjaan ON data_pekerjaan.jenis_pekerjaan_id = jenis_pekerjaan.id 
                                  GROUP BY data_pekerjaan.jenis_pekerjaan_id ORDER BY jumlah DESC LIMIT 5");

$arr = [];

while ($parseSql = mysqli_fetch_assoc($jumlahPekerjaTerbanyakData)) {
    $arr[] = $parseSql;
}

$parse = json_encode($arr);
echo $parse;