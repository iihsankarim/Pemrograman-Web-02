<?php
require_once "class_mahasiswa.php";

$mhs1 = new Mahasiswa('0110221278', 'Muhammad Ihsan');
$mhs1->prodi = 'TI';
$mhs1->thn_angkatan = 2021;
$mhs1->ipk = 3.9;

$mhs2 = new Mahasiswa('0110221275', 'Jamaludin');
$mhs2->prodi = 'SI';
$mhs2->thn_angkatan = 2019;
$mhs2->ipk = 1.9;

$mhs3 = new Mahasiswa('0110221270', 'Ricardo Supriadi');
$mhs3->prodi = 'TI';
$mhs3->thn_angkatan = 2020;
$mhs3->ipk = 3.12;

$mhs4 = new Mahasiswa('01102212786', 'Ahmad Jamal');
$mhs4->prodi = 'SI';
$mhs4->thn_angkatan = 2021;
$mhs4->ipk = 2.8;


$data_mahasiswa = [
	$mhs1,$mhs2,$mhs3,$mhs4
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
	<h1>Daftar Data Mahasiswa</h1>
    <table width="100%" border="1">
        <tr>
            <th>No.</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Tahun Angkatan</th>
            <th>IPK</th>
            <th>Predikat IPK</th>
        </tr>
        <?php
        foreach ($data_mahasiswa as $key => $value) {
        ?>
        <tr>
            <td><?=$key+1?></td>
            <td><?=$value->nim?></td>
            <td><?=$value->nama?></td>
            <td><?=$value->prodi?></td>
            <td><?=$value->thn_angkatan?></td>
            <td><?=$value->ipk?></td>
            <td><?=$value->predikat_ipk()?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>