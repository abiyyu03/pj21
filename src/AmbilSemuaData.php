<?php

$data = mysqli_query($connection,"SELECT kota_kabupaten.nama as kota_kabupaten, 
                                kecamatan.nama as kecamatan, kelurahan.nama as kelurahan, provinsi.nama as provinsi,
                                jenis_pekerjaan.jenis_pekerjaan as jenis_pekerjaan, data_pekerjaan.jumlah as jumlah FROM data_pekerjaan 
                                JOIN provinsi on provinsi.id = data_pekerjaan.provinsi_id
                                JOIN kota_kabupaten on kota_kabupaten.id = data_pekerjaan.kota_kabupaten_id 
                                JOIN kecamatan on kecamatan.id = data_pekerjaan.kecamatan_id 
                                JOIN kelurahan on kelurahan.id = data_pekerjaan.kelurahan_id 
                                JOIN jenis_pekerjaan on jenis_pekerjaan.id = data_pekerjaan.jenis_pekerjaan_id ORDER BY data_pekerjaan.id");