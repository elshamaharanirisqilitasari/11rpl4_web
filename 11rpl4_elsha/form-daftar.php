<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>WEBSISWA - Tambah Pendaftar Baru</title>
</head>
<body>
<header>
<h3>Formulir Pendaftaran Siswa Baru</h3>
</header>
<form action="proses-daftar.php" method="POST">
<fieldset>
<p>
<label for="nama">Nama: </label>
<input type="text" name="nama" placeholder="Nama Lengkap" />
</p>
<p>
<label for="nama">Email: </label>
<input type="text" name="email" placeholder="Alamat Email" />
</p>
<p>
<label for="nama">Telepon: </label>
<input type="text" name="telepon" placeholder="Nomor Telepon"
/>
</p>
<p>
<label for="kelamin">Jenis Kelamin: </label>
<label><input type="radio" name="kelamin" value="Laki-Laki">
Laki-laki</label>
<label><input type="radio" name="kelamin" value="Perempuan">
Perempuan</label>
</p>
<p>
<label for="jurusan">Jurusan:</label>
  <select name="jurusan" id="jurusan">
    <option value="TKJ">Tkj</option>
    <option value="RPL">Rpl</option>
    <option value="TBSM">Tbsm</option>
    <option value="TKR">Tkr</option>
    <option value="TEI">Tei</option>
   
  </select>
</p>
<p>
<label for="hobi">hobi: </label>
<input type="text" name="hobi" placeholder="Masukkan hobi" />
</p>
<input type="submit" value="Daftar" name="daftar" />
</p>
</fieldset>
</form>
</body>
</html>