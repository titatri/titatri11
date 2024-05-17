<h2>Tambah Data Mahasiswa</h2>
 <!-- tag form -->
 <form action="Save.php" method="POST">
 <label>Nomor Induk Siswa :</label>
 <input type="text" name="nim" placeholder="nim mahasiswa"required>
 <br>
 <label>Nama Mahasiswa :</label>
 <input type="text" name="nama" id="nama" placeholder="nama Lengkap"required>
 <br>
 <label for="">Alamat :</label>
 <input type="text" name="alamat" id="alamat" placeholder="alamatLengkap" required>
 <br>
 <label for="">Program Studi :</label>
 <select name="prodi" id="prodi">
    <option value="Sistem Informasi" selected>Sistem Informasi</option>
    <option value="Sistem Komputer">Sistem Komputer</option>
    <option value="Teknik Informatika">Teknik Informatika</option>
 </select>
 <br>
 <label for="">Umur :</label>
 <input type="number" name="umur" id="umur" placeholder="umur mahasiswa" required>
 <br>
 <button type="submit" name="kirim" value="kirim">Kirim Data</button>
 </form>