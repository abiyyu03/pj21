<?php
require 'connect.php';

function countAllData()
{ 
    global $connection;
    $countAllData = mysqli_query($connection,"SELECT count(*) as total FROM data_pekerjaan");
    $assocCountAllData = mysqli_fetch_assoc($countAllData);
    return $assocCountAllData['total'];
}

function countJenisPekerjaan()
{
    global $connection;
    $countJenisPekerjaan = mysqli_query($connection,"SELECT count(*) as total FROM jenis_pekerjaan");
    $assocCountJenisPekerjaan = mysqli_fetch_assoc($countJenisPekerjaan);
    return $assocCountJenisPekerjaan['total'];
}

function countDataPekerja()
{
    global $connection;
    $countDataPekerja = mysqli_query($connection,"SELECT sum(jumlah) as total FROM data_pekerjaan");
    $assocCountDataPekerja = mysqli_fetch_assoc($countDataPekerja);
    return $assocCountDataPekerja['total'];
}

function countKotaKabupaten()
{
    global $connection;
    $countKotaKabupaten = mysqli_query($connection,"SELECT count(*) as total FROM kota_kabupaten");
    $assocCountKotaKabupaten = mysqli_fetch_assoc($countKotaKabupaten);
    return $assocCountKotaKabupaten['total'];
}
function countKecamatan()
{
    global $connection;
    $countKecamatan = mysqli_query($connection,"SELECT count(*) as total FROM kecamatan");
    $assocCountKecamatan = mysqli_fetch_assoc($countKecamatan);
    return $assocCountKecamatan['total'];
}

function countKelurahan()
{
    global $connection;
    $countKelurahan = mysqli_query($connection,"SELECT count(*) as total FROM kelurahan");
    $assocCountKelurahan = mysqli_fetch_assoc($countKelurahan);
    return $assocCountKelurahan['total'];
}