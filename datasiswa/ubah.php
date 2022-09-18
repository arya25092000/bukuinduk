<?php 
require 'functions.php';

$id = $_GET["id"];

$siswa = query("SELECT * FROM tbl_siswa WHERE id = $id")[0];


if( isset($_POST["submit"])){

    if( ubah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'siswa.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah!');
                document.location.href = 'siswa.php';
            </script>";
    }

    

   



}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update data siswa</title>
</head>
<body>
    <h1> Update data siswa</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $siswa["id"]; ?>">
        <ul>
            <li>
                <label for="foto">Foto : </label>
                <input type="text" name="foto" id="foto"
                value="<?= $siswa["foto"]; ?>">
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama"
                value="<?= $siswa["nama"]; ?>">
            </li>
            <li>
                <label for="nisn">NISN : </label>
                <input type="text" name="nisn" id="nisn"
                value="<?= $siswa["nisn"]; ?>">
            </li>
            <li>
                <label for="tempat lahir">Tempat Lahir : </label>
                <input type="text" name="tempat lahir" id="tempat lahir"
                value="<?= $siswa["tempat lahir"]; ?>">
            </li>
            <li>
                <label for="tanggal lahir">Tanggal Lahir : </label>
                <input type="date" name="tanggal lahir" id="tanggal lahir"
                value="<?= $siswa["tanggal lahir"]; ?>">
            </li>
            <li>
                <label for="gender">Jenis Kelamin : </label>
                <input type="text" name="gender" id="gender"
                value="<?= $siswa["gender"]; ?>">
            </li>
            <li>
                <label for="agama">Agama : </label>
                <input type="text" name="agama" id="agama"
                value="<?= $siswa["agama"]; ?>">
            </li>
            <li>
                <label for="anak ke">Anak ke : </label>
                <input type="text" name="anak ke" id="anak ke"
                value="<?= $siswa["anak ke"]; ?>">
            </li>
            <li>
                <label for="status dalam keluarga">Status dalam Keluarga : </label>
                <input type="text" name="status dalam keluarga" id="status dalam keluarga"
                value="<?= $siswa["status dalam keluarga"]; ?>">
            </li>
            <li>
                <label for="alamat">Alamat : </label>
                <input type="text" name="alamat" id="alamat"
                value="<?= $siswa["alamat"]; ?>">
            </li>
            <li>
                <label for="telepon">Telepon : </label>
                <input type="text" name="telepon" id="telepon"
                value="<?= $siswa["telepon"]; ?>">
            </li>
            <li>
                <label for="diterima di sekolah ini kelas">Diterima di sekolah ini kelas : </label>
                <input type="text" name="diterima di sekolah ini kelas" id="diterima di sekolah ini kelas"
                value="<?= $siswa["diterima di sekolah ini kelas"]; ?>">
            </li>
            <li>
                <label for="sekolah asal">Sekolah Asal: </label>
                <input type="text" name="sekolah asal" id="sekolah asal"
                value="<?= $siswa["sekolah asal"]; ?>">
            </li>
            <li>
                <label for="ijazah">Ijazah: </label>
                <input type="text" name="ijazah" id="ijazah"
                value="<?= $siswa["ijazah"]; ?>">
            </li>
            <li>
                <label for="skhun">SKHUN: </label>
                <input type="text" name="skhun" id="skhun"
                value="<?= $siswa["skhun"]; ?>">
            </li>
            <li>
                <label for="orang tua">Orang Tua: </label>
                <input type="text" name="orang tua" id="orang tua"
                value="<?= $siswa["orang tua"]; ?>">
            </li>
            <li>
                <label for="alamat orang tua">Alamat Orang Tua: </label>
                <input type="text" name="alamat orang tua" id="alamat orang tua"
                value="<?= $siswa["alamat orang tua"]; ?>">
            </li>
            <li>
                <label for="pekerjaan orang tua">Pekerjaan Orang Tua: </label>
                <input type="text" name="pekerjaan orang tua" id="pekerjaan orang tua"
                value="<?= $siswa["pekerjaan orang tua"]; ?>">
            </li>
            <li>
                <label for="nama wali">Nama Wali: </label>
                <input type="text" name="nama wali" id="nama wali"
                value="<?= $siswa["nama wali"]; ?>">
            </li>
            <li>
                <label for="alamat wali">Alamat Wali : </label>
                <input type="text" name="alamat wali" id="alamat wali"
                value="<?= $siswa["alamat wali"]; ?>">
            </li>
            <li>
                <label for="telepon wali">Telepon Wali: </label>
                <input type="text" name="telepon wali" id="telepon wali"
                value="<?= $siswa["telepon wali"]; ?>">
            </li>
            <li>
                <label for="pekerjaan wali">Pekerjaan Wali: </label>
                <input type="text" name="pekerjaan wali" id="pekerjaan wali"
                value="<?= $siswa["pekerjaan wali"]; ?>">
            </li>
            <li>
                <label for="mutasi">Mutasi: </label>
                <input type="text" name="mutasi" id="mutasi"
                value="<?= $siswa["mutasi"]; ?>">
            </li>
            <li>
                <label for="tahun masuk">Tahun Masuk: </label>
                <input type="text" name="tahun masuk" id="tahun masuk"
                value="<?= $siswa["tahun masuk"]; ?>">
            </li>
            <li>
                <label for="alumni">Alumni: </label>
                <input type="text" name="alumni" id="alumni"
                value="<?= $siswa["alumni"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit"> Ubah Data!</button>
            </li>
            
        </ul>


    </form>

</body>
</html>