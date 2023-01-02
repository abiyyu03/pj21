<?php

require_once('src/CountData.php');

?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Visualisasi data Jumlah Penduduk Provinsi DKI Jakarta Berdasarkan Pekerjaan Per Kelurahan Tahun 2021 ">
        <meta name="title" content="PJ21">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PJ21 - Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body class="d-flex flex-column min-vh-100">
        
        <?php include_once('components/navbar.php');?>

        <div class="container mb-4">
            <div class="mt-4 mb-1 text-center">
                <h3>Data Penduduk Jakarta Berdasarkan Pekerjaan Tahun 2021</h3>
                <p>Sumber Data : <a target="_blank" href="https://data.jakarta.go.id/read-resource/json/data-terpadu-kesejahteraan-sosial-dtks-provinsi-dki-jakarta/bb5a2ccde5ca7f1dd3c82d1b29fdfda1">Open Data DTKS Jakarta</a></p>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="card border-4 bg-success text-white border border-success border-top-0 border-bottom-0 border-end-0 mt-4 shadow">
                        <div class="card-body">
                            <div class=" d-flex justify-content-between">
                                <div class=" ">
                                    <p class="card-text fw-bold mb-1">Total Data</p>
                                    <h2 class="card-title fw-light"><?= countAllData(); ?></h2>
                                </div>
                                <div class=" ">
                                    <i class="fa-solid fa-percentage fa-4x text-white text-opacity-75"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="card border-4 border bg-primary border-primary text-white border-top-0 border-bottom-0 border-end-0 mt-4 shadow">
                        <div class="card-body">
                            <div class=" d-flex justify-content-between">
                                <div class=" ">
                                    <p class="card-text fw-bold mb-1">Pekerja</p>
                                    <h2 class="card-title fw-light"><?= countDataPekerja(); ?></h2>
                                </div>
                                <div class=" ">
                                    <i class="fa-solid fa-person-digging fa-4x text-white text-opacity-75"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="card border-4 border border-success border-top-0 border-bottom-0 border-end-0 mt-4 shadow">
                        <div class="card-body">
                            <div class=" d-flex justify-content-between">
                                <div class=" ">
                                    <p class="card-text fw-bold mb-1">Jenis Pekerjaan</p>
                                    <h2 class="card-title fw-light"><?= countJenisPekerjaan(); ?></h2>
                                </div>
                                <div class=" ">
                                    <i class="fa-solid fa-briefcase fa-4x text-success text-opacity-50"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="card border-4 border border-success border-top-0 border-bottom-0 border-end-0 mt-4 shadow">
                        <div class="card-body">
                            <div class=" d-flex justify-content-between">
                                <div class=" ">
                                    <p class="card-text fw-bold mb-1">Kota/Kabupaten</p>
                                    <h2 class="card-title fw-light"><?= countKotaKabupaten(); ?></h2>
                                </div>
                                <div class=" ">
                                    <i class="fa-regular fa-building fa-4x text-success text-opacity-50"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="card border-4 border border-primary border-top-0 border-bottom-0 border-end-0 mt-4 shadow">
                        <div class="card-body">
                            <div class=" d-flex justify-content-between">
                                <div class=" ">
                                    <p class="card-text fw-bold mb-1">Kecamatan</p>
                                    <h2 class="card-title fw-light"><?= countKecamatan(); ?></h2>
                                </div>
                                <div class=" ">
                                    <i class="fa-solid fa-city fa-4x text-primary text-opacity-50"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="card border-4 border border-primary border-top-0 border-bottom-0 border-end-0 mt-4 shadow">
                        <div class="card-body">
                            <div class=" d-flex justify-content-between">
                                <div class=" ">
                                    <p class="card-text fw-bold mb-1">Kelurahan</p>
                                    <h2 class="card-title fw-light"><?= countKelurahan(); ?></h2>
                                </div>
                                <div class=" ">
                                    <i class="fa-solid fa-tree-city fa-4x text-primary text-opacity-50"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>

        <?php require_once('components/footer.php');?>
    </body>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</html>
