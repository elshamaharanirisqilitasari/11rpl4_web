<?php
include("koneksi.php");
// kalau tidak ada id di query string
if (!isset($_GET['id'])) {
header('Location: list-siswa.php');
}
//ambil id dari query string
$id = $_GET['id'];
// buat query untuk ambil data dari database
$sql = "SELECT * FROM tb_siswa WHERE id=$id";
$query = mysqli_query($conn, $sql);
$siswa = mysqli_fetch_assoc($query);
// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
die("data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>WEBSISWA - Edit Pendaftar</title>
</head>
<body>
<header>
<h3>Formulir Edit Siswa</h3>
</header>
<form action="proses-edit.php" method="POST">
<fieldset>
<input type="hidden" name="id" value="<?php echo $siswa['id'] ?>"
/>
<p>
<label for="nama">Nama: </label>
<input type="text" name="nama" placeholder="Nama lengkap"
value="<?php echo $siswa['nama'] ?>" />
</p>
<p>
<label for="email">Email: </label>
<input type="email" name="email" placeholder="Email"
value="<?php echo $siswa['email'] ?>" />
</p>
<p>
<label for="telepon">Telepon: </label>
<input type="telepon" name="telepon" placeholder="Nomor
Telepon" value="<?php echo $siswa['telepon'] ?>" />
</p>
<p>
<label for="kelamin">Jenis Kelamin: </label>
<?php $jk = $siswa['kelamin']; ?>
<label><input type="radio" name="kelamin" value="laki-laki"
<?php echo ($jk == 'laki-laki') ? "checked" : "" ?>> Laki-laki</label>
<label><input type="radio" name="kelamin" value="perempuan"
<?php echo ($jk == 'perempuan') ? "checked" : "" ?>> Perempuan</label>
</p>
<label for="jurusan">Jurusan:</label>
  <select name="jurusan" id="jurusan">
    <option value="TKJ"<?=  $siswa['jurusan']=='TKJ' ? 'selected="selected"' : ' ' ;?>>Tkj</option>
    <option value="RPL"<?=  $siswa['jurusan']=='RPL' ? 'selected="selected"' : ' ' ;?>>Rpl</option>
    <option value="TBSM"<?=  $siswa['jurusan']=='TBSM' ? 'selected="selected"' : ' ' ;?>>Tbsm</option>
    <option value="TKR"<?=  $siswa['jurusan']=='TKR' ? 'selected="selected"' : ' ' ;?>>Tkr</option>
    <option value="TEI"<?=  $siswa['jurusan']=='TEI' ? 'selected="selected"' : ' ' ;?>>Tei</option>
   
  </select>
<p>
<label for="hobi">hobi: </label>
<input type="text" name="hobi" placeholder="Masukkan hobi" value="<?php echo $siswa['hobi']  ?>" />
</p>
<input type="submit" value="Simpan" name="simpan" />
</p>
</fieldset>
</form>
</body>
</html>