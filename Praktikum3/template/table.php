<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">

<?php
    include_once 'header.php';
    include_once 'side-bar.php';
?>


            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Mahasiswa</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data Mahasiswa</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                Berikut Data Mahasiswa yang telah mengikuti UTS dan UAS 2022
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Mahasiswa
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>NIM</th>
                                            <th>Program Studi</th>
                                            <th>Domisili</th>
                                            <th>Nilai UTS</th>
                                            <th>Nilai UAS</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nama</th>
                                            <th>NIM</th>
                                            <th>Program Studi</th>
                                            <th>Domisili</th>
                                            <th>Nilai UTS</th>
                                            <th>Nilai UAS</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Muhammad jafar</td>
                                            <td>09033233</td>
                                            <td>Sistem Informasi</td>
                                            <td>Bogor</td>
                                            <td>90</td>
                                            <td>90</td>
                                        </tr>
                                        <tr>
                                            <td>Ihsan karim</td>
                                            <td>02239989</td>
                                            <td>Semarang</td>
                                            <td>Teknik Informatika</td>
                                            <td>100</td>
                                            <td>80</td>
                                        </tr>
                                        <tr>
                                            <td>Siti Jubaedah</td>
                                            <td>12129929</td>
                                            <td>Jakarta</td>
                                            <td>Bisnis Digital</td>
                                            <td>100</td>
                                            <td>70</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>


<?php

require_once 'footer.php';
?>

            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>