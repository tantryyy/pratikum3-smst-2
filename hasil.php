<?php
    // jika belum mengisi from, maka tidak dapat pergi ke halaman hasi
    if( !isset($_POST ['submit']) ){
        header("Location: index.php");
        exit;
    }



    // Menyimpan inputan user kedalam variabel
    $nama = $_POST['nama'];
    $matkul =$_POST['matkul'];
    $uts =$_POST['uts'];
    $uas = $_POST['uas'];
    $tugas =$_POST['tugas'];


    // menetukan nilai akhir
    $_nilai_akhir = ($uts + $uas + $tugas) / 3;

    // mengambil sekaligus menjalankan skirp di library fungsi untuk mencetak kelulusan 
    require_once 'libfungsi.php';
    $_nilai = $_nilai_akhir;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Namat</th>
      <th scope="col">Mata Kuliah</th>
      <th scope="col">Uts</th>
      <th scope="col">Uas</th>
      <th scope="col">Tugas</th>
      <th scope="col">Nilai Akhir</th>
      <th scope="col">Grade</th>
      <th scope="col">Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>2</td>
      <td> <?= $nama ?>   </td>
      <td> <?= $matkul ?>   </td>
      <td> <?= $uts ?>   </td>
      <td> <?= $uas ?>   </td>
      <td> <?= $tugas ?>   </td>
      <td> <?= $nilai_akhir ?>   </td>
      <td> <?= $grade($_nilai) ?>   </td>
      <td> <?= $kelulusan ?>   </td>
    </tr>
  </tbody>
</table>
</body>
</html>