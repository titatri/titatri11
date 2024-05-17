<!-- Mengambil data yang akan diedit, berdasarkan nim yang dipilih dandikirim melalui link (get) -->
 <?php
 $nim=$_GET['nim'];
 //membuat sql tampil data
 $sqldata="SELECT * FROM tb_mhsw WHERE nim='$nim'";
 //ambil koneksi data
 require_once "KoneksiDB.php";
 //proses sql
 $query=mysqli_query($koneksi,$sqldata);
 //mengubah data ke array asosiatif, tidak menggunakan perulangan karenadatanya hanya 1.
 $data=mysqli_fetch_assoc($query);
 //selanjutnya tampilkan pada field dibawah.
 ?>
 <h2>Update Data Mahasiswa</h2>
 <!-- tag form -->
 <form action="Update.php" method="POST">
 <label>Nomor Induk Siswa :</label>
 <input type="number" name="nim" value="<?=$data['nim']?>"
 placeholder="Nomor Induk Siswa " required>
 <br>
 <label>Nama Mahasiswa :</label>
 <input type="kata" name="nama" id="nama" value="<?=$data['nama']?>"
 placeholder="Nama Lengkap" required>
 <br>
 <label for="">Alamat :</label>
 <input type="kalimat" name="alamat" id="alamat"value="<?=$data['alamat']?>" 
 placeholder="Alamat Lengkap" required>
 <br>
 <label for="">Program Studi :</label>
 <select name="prodi" id="prodi">
    <option value="Sistem Informasi">Sistem Informasi</option>
    <option value="Sistem Komputer">Sistem Komputer</option>
    <option value="Teknik Informatika">Teknik Informatika</option>
 </select>
 <br>
 <label for="">Umur :</label>
 <input type="number" name="umur" id="umur" value="<?=$data['umur']?>"
 placeholder="Umur Mahasiwa" required>
 <br>
 <button type="submit" name="kirim" value="kirim">Update Data</button>
 </form>