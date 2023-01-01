<?php
require_once '../connect.php';

$PelajarKotaData = mysqli_query($connection,"SELECT SUM(data_pekerjaan.jumlah) as jumlah, kota_kabupaten.nama as kota_kabupaten FROM data_pekerjaan 
                                  INNER JOIN kota_kabupaten ON kota_kabupaten.id = data_pekerjaan.kota_kabupaten_id
                                  WHERE data_pekerjaan.jenis_pekerjaan_id = 3   
                                  GROUP BY data_pekerjaan.kota_kabupaten_id ORDER BY jumlah DESC ");

$arr = [];

while ($parseSql = mysqli_fetch_assoc($PelajarKotaData)) {
    $arr[] = $parseSql;
}

$parse = json_encode($arr);
echo $parse;