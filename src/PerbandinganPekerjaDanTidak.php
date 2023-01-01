<?php
require '../connect.php';

$workerData = mysqli_query($connection,"SELECT SUM(data_pekerjaan.jumlah) as jumlah_kerja FROM data_pekerjaan
                                  JOIN jenis_pekerjaan ON data_pekerjaan.jenis_pekerjaan_id = jenis_pekerjaan.id 
                                  WHERE data_pekerjaan.jenis_pekerjaan_id NOT IN (1,2,3,4) ");
$notWorkerData = mysqli_query($connection,"SELECT SUM(data_pekerjaan.jumlah) as jumlah_gakerja FROM data_pekerjaan
                                  JOIN jenis_pekerjaan ON data_pekerjaan.jenis_pekerjaan_id = jenis_pekerjaan.id 
                                  WHERE data_pekerjaan.jenis_pekerjaan_id IN (1,2,3,4)");

$arr = [];

while ($parseSql = mysqli_fetch_assoc($workerData)) {
    $arr[] = $parseSql;
}

while ($parseSql = mysqli_fetch_assoc($notWorkerData)) {
    $arr[] = $parseSql;
}

$parse = json_encode($arr);
echo $parse;