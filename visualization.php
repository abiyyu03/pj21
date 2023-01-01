<?php
require 'connect.php';
require 'src/KerjaanTerbanyakKota.php'; 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PJ21 - Visualisasi</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body class="d-flex flex-column min-vh-100">
        <!-- <div style="width: 800px;"><canvas id="acquisitions"></canvas></div> -->

        <?php include_once('components/navbar.php');?>

        <div class="container">
            <div class="mt-4 mb-1 text-center">
                <h2>Visualisasi Data</h2>
                <p class="text-secondary small">
                    Arahkan Kursor ke diagram untuk melihat detil data
                </p>
            </div>
            <div class="row mt-4">
                <div class="col-lg-6 col-sm-12 col-md-12">
                    <div class="card border-top-0 border-bottom-0 border-end-0 mt-4 shadow">
                        <div class="card-header bg-success text-center text-light">
                            <h5>5 Profesi dengan Pekerja terbanyak</h5>
                        </div>
                        <div class="card-body">
                            <div ><canvas id="popularProfession"></canvas></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-md-12">
                    <div class="card border-top-0 border-bottom-0 border-end-0 mt-4 shadow">
                        <div class="card-header bg-success text-center text-light">
                            <h5>Grafik Kota/Kabupaten berdasarkan jumlah Pelajar/Mahasiswa</h5>
                        </div> 
                        <div class="card-body">
                            <div ><canvas id="StudentChart"></canvas></div>
                        </div>  
                    </div>
                </div>
            </div>
            <div class="row mt-2 mb-4">
                <div class="col-lg-6 col-sm-12 col-md-12">
                    <div class="card border-top-0 border-bottom-0 border-end-0 mt-4 shadow">
                        <div class="card-header bg-success text-center text-light">
                            <h5>Urutan Kota Berdasarkan Jumlah Pekerja</h5>
                        </div> 
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped"> 
                                    <tr>
                                        <th>#</th>
                                        <th>Kota/Kabupaten</th> 
                                        <th>Jumlah (Jiwa)</th>
                                    </tr>
                                    <?php $i=1;while($array = mysqli_fetch_assoc($KerjaanTerbanyakKotaData)) { ?>
                                    <tr>
                                        <td><?= $i++;?></td>
                                        <td class="text-lowercase"><?= $array['nama'];?></td> 
                                        <td class="text-lowercase"><?= $array['jumlah'];?></td>
                                    </tr>    
                                    <?php } ?> 
                                </table>
                                <p class="text-secondary small">
                                    *Data tidak termasuk yang belum Bekerja, Ibu Rumah Tangga dan Pelajar/Mahasiswa
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-md-12">
                    <div class="card border-top-0 border-bottom-0 border-end-0 mt-4 shadow">
                        <div class="card-header bg-success text-center text-light">
                            <h5>Perbandingan Pekerja dengan yang Tidak/Belum Bekerja</h5>
                        </div>
                        <div class="card-body">
                            <div ><canvas id="WorkerAndUnworkerChart"></canvas></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once('components/footer.php');?>
    </body>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>
    <script src="script/main.js"></src>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</html>
