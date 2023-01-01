<?php

require_once 'JsonProcessor.php';

$KerjaanTerbanyakKotaData = mysqli_query($connection,"SELECT SUM(data_pekerjaan.jumlah) as jumlah, kota_kabupaten.nama FROM data_pekerjaan 
                                  INNER JOIN kota_kabupaten ON kota_kabupaten.id = data_pekerjaan.kota_kabupaten_id
                                  INNER JOIN jenis_pekerjaan ON data_pekerjaan.jenis_pekerjaan_id = jenis_pekerjaan.id
                                  WHERE data_pekerjaan.jenis_pekerjaan_id != 1 
                                  AND data_pekerjaan.jenis_pekerjaan_id != 2 
                                  AND data_pekerjaan.jenis_pekerjaan_id != 3
                                  GROUP BY data_pekerjaan.kota_kabupaten_id ORDER BY jumlah DESC ");
                                  
jsonProcessor($KerjaanTerbanyakKotaData);