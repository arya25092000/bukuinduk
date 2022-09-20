<?php 
require 'functions.php';

$id = $_GET["id"];

$siswaubah = query("SELECT * FROM tbl_siswa WHERE id = $id")[0];


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
                value="<?= $siswaubah["foto"]; ?>">
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama"
                value="<?= $siswaubah["nama"]; ?>">
            </li>
            <li>
                <label for="nisn">NISN : </label>
                <input type="text" name="nisn" id="nisn"
                value="<?= $siswaubah["nisn"]; ?>">
            </li>
            <li>
                <label for="tempat_lahir">Tempat Lahir : </label>
                <input type="text" name="tempat_lahir" id="tempat_lahir"
                value="<?= $siswaubah["tempat_lahir"]; ?>">
            </li>
            <li>
                <label for="tanggal_lahir">Tanggal Lahir : </label>
                <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                value="<?= $siswaubah["tanggal_lahir"]; ?>">
            </li>
            <li>
                <label for="gender">Jenis Kelamin : </label>
                <input type="text" name="gender" id="gender"
                value="<?= $siswaubah["gender"]; ?>">
            </li>
            <li>
                <label for="agama">Agama : </label>
                <input type="text" name="agama" id="agama"
                value="<?= $siswaubah["agama"]; ?>">
            </li>
            <li>
                <label for="anak_ke">Anak ke : </label>
                <input type="text" name="anak_ke" id="anak_ke"
                value="<?= $siswaubah["anak_ke"]; ?>">
            </li>
            <li>
                <label for="status_dalam_keluarga">Status dalam Keluarga : </label>
                <input type="text" name="status_dalam_keluarga" id="status_dalam_keluarga"
                value="<?= $siswaubah["status_dalam_keluarga"]; ?>">
            </li>
            <li>
                <label for="alamat">Alamat : </label>
                <input type="text" name="alamat" id="alamat"
                value="<?= $siswaubah["alamat"]; ?>">
            </li>
            <li>
                <label for="telepon">Telepon : </label>
                <input type="text" name="telepon" id="telepon"
                value="<?= $siswaubah["telepon"]; ?>">
            </li>
            <li>
                <label for="diterima_di_sekolah_ini_kelas">Diterima di sekolah ini kelas : </label>
                <input type="text" name="diterima_di_sekolah_ini_kelas" id="diterima_di_sekolah_ini_kelas"
                value="<?= $siswaubah["diterima_di_sekolah_ini_kelas"]; ?>">
            </li>
            <li>
                <label for="sekolah_asal">Sekolah Asal: </label>
                <input type="text" name="sekolah_asal" id="sekolah_asal"
                value="<?= $siswaubah["sekolah_asal"]; ?>">
            </li>
            <li>
                <label for="ijazah">Ijazah: </label>
                <input type="text" name="ijazah" id="ijazah"
                value="<?= $siswaubah["ijazah"]; ?>">
            </li>
            <li>
                <label for="skhun">SKHUN: </label>
                <input type="text" name="skhun" id="skhun"
                value="<?= $siswaubah["skhun"]; ?>">
            </li>
            <li>
                <label for="orang_tua">Orang Tua: </label>
                <input type="text" name="orang_tua" id="orang_tua"
                value="<?= $siswaubah["orang_tua"]; ?>">
            </li>
            <li>
                <label for="alamat_orang_tua">Alamat Orang Tua: </label>
                <input type="text" name="alamat_orang_tua" id="alamat_orang_tua"
                value="<?= $siswaubah["alamat_orang_tua"]; ?>">
            </li>
            <li>
                <label for="pekerjaan_orang_tua">Pekerjaan Orang Tua: </label>
                <input type="text" name="pekerjaan_orang_tua" id="pekerjaan_orang_tua"
                value="<?= $siswaubah["pekerjaan_orang_tua"]; ?>">
            </li>
            <li>
                <label for="nama_wali">Nama Wali: </label>
                <input type="text" name="nama_wali" id="nama_wali"
                value="<?= $siswaubah["nama_wali"]; ?>">
            </li>
            <li>
                <label for="alamat_wali">Alamat Wali : </label>
                <input type="text" name="alamat_wali" id="alamat_wali"
                value="<?= $siswaubah["alamat_wali"]; ?>">
            </li>
            <li>
                <label for="telepon_wali">Telepon Wali: </label>
                <input type="text" name="telepon_wali" id="telepon_wali"
                value="<?= $siswaubah["telepon_wali"]; ?>">
            </li>
            <li>
                <label for="pekerjaan_wali">Pekerjaan Wali: </label>
                <input type="text" name="pekerjaan_wali" id="pekerjaan_wali"
                value="<?= $siswaubah["pekerjaan_wali"]; ?>">
            </li>
            <li>
                <label for="mutasi">Mutasi: </label>
                <input type="text" name="mutasi" id="mutasi"
                value="<?= $siswaubah["mutasi"]; ?>">
            </li>
            <li>
                <label for="tahun_masuk">Tahun Masuk: </label>
                <input type="text" name="tahun_masuk" id="tahun_masuk"
                value="<?= $siswaubah["tahun_masuk"]; ?>">
            </li>
            <li>
                <label for="alumni">Alumni: </label>
                <input type="text" name="alumni" id="alumni"
                value="<?= $siswaubah["alumni"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit"> Ubah Data!</button>
            </li>
            
        </ul>


    </form>

</body>
</html>