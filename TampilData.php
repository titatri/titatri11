<?php
//mengambil program koneksidb, dengan menggunakan fungsi include
include "KoneksiDB.php";
//Membuat SQL untuk menampilkan data
$sqltampil = "SELECT * FROM tb_mhsw";
//Melakukan proses query ke basisdata
$query = mysqli_query($koneksi,$sqltampil) or die("SQL Error");
$nomor = 1;//untuk membuat nomor untuk ditabel hasil query
?>
<h2>Data Mahasiswa STMIK Royal</h2>
<!--Disini kita buat link untuk menambahkan data, dimana link ini nantinya akan memanggil form tambah data. -->
<a href="FormTambah.php">Tambah Data</a>
<table width="100%" border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Program Studi</th>
            <th>Umur</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
 <?php
//Jika data lebih dari 1, maka kita bisa menampilkan dengan menggunakan perintah perulangan seperti (for,while, do-while,foreach)
 //mysqli_fetch_assoc merupakan fungsi yang digunakan untuk mengkonversi data menjadi data array asosiatif.
 while ($data = mysqli_fetch_assoc($query)) {
 ?>
 <tr>
 <!-- untuk menampilkan data, kita gunakan tag pandek php yaitu spt dibawah -->
 <td><?= $nomor ?></td>
 <td><?= $data['nim'] ?></td>
 <td><?= $data['nama'] ?></td>
 <td><?= $data['alamat'] ?></td>
 <td><?= $data['prodi'] ?></td>
 <td><?= $data['umur'] ?></td>
 <td>
 <a href="FormEdit.php?nim=<?=$data['nim']?>"> Edit</a> | <a
href="Delete.php?nim=<?=$data['nim']?>">Delete</a>
 </td>
 </tr>
 <?php $nomor++;
 } //akhir dari perulangan ?>
 </tbody>
 </table>