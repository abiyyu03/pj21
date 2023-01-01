<?php
require_once 'connect.php';
require_once('src/AmbilSemuaData.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PJ21 - Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    </head>
    <body class="d-flex flex-column min-vh-100">
        
        <?php include_once('components/navbar.php');?>

        <div class="container mb-4">
            <div class="mt-4 mb-1 text-center">
                <h3>Data Penduduk Jakarta Berdasarkan Pekerjaan Tahun 2021</h3>
                <p>Sumber Data : <a target="_blank" href="https://data.jakarta.go.id/read-resource/json/data-terpadu-kesejahteraan-sosial-dtks-provinsi-dki-jakarta/bb5a2ccde5ca7f1dd3c82d1b29fdfda1">Open Data DTKS Jakarta</a></p>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card border-top-0 border-bottom-0 border-end-0 mt-4 shadow">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-stiped" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Kota/Kabupaten</th>
                                            <th>Kecamatan</th>
                                            <th>Kelurahan</th>
                                            <th>Jenis Pekerjaan</th>
                                            <th>Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; while($dataPekerjaan = mysqli_fetch_assoc($data)){?>
                                        <tr> 
                                            <td><?= $i++; ?></td>
                                            <td><?= $dataPekerjaan['kota_kabupaten']; ?></td>
                                            <td><?= $dataPekerjaan['kecamatan']; ?></td>
                                            <td><?= $dataPekerjaan['kelurahan']; ?></td>
                                            <td><?= $dataPekerjaan['jenis_pekerjaan']; ?></td>
                                            <td><?= $dataPekerjaan['jumlah']; ?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>

        <?php require_once('components/footer.php');?>
    </body>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        });
    </script>
</html>
