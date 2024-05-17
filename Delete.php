<?php
 //mengambil koneksi basisdata
 require_once "KoneksiDB.php";
 //Mengambil nim yang akan dihapus
 $nim=$_GET['nim'];
 //Membuat SQL Hapus
 $delete="DELETE FROM tb_mhsw WHERE nim='$nim'";
 //Proses SQL ke basisdata
 if(mysqli_query($koneksi,$delete)){
    //tampilkan alert dan redirect ke halaman TampilData
    echo "<script> alert('Data sudah dihapus');window.location.assign('TampilData.php'); </script>";
 }else{
    //tampilkan alert dan redirect ke halaman TampilData
    echo "<script> alert('Data gagal dihapus'); window.location.assign('TampilData.php'); </script>";
 }
 //sampai disini kode hapus sudah selesai, bisa di eksekusi.