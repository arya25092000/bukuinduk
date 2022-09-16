<?php 

$conn = mysqli_connect("localhost", "root", "", "sibuduwasmansa");

if( isset($_POST["submit"])){

    $foto = $_POST["foto"];
    $nama = $_POST["nama"];
    $nisn = $_POST["nisn"];
    $tempatlahir = $_POST["tempat_lahir"];
    $tanggallahir = $_POST["tanggal_lahir"];
    $gender = $_POST["gender"];
    $agama = $_POST["agama"];
    $anakke = $_POST["anak_ke"];
    $status = $_POST["status_dalam_keluarga"];
    $alamat = $_POST["alamat"];
    $telepon = $_POST["telepon"];
    $diterima = $_POST["diterima_di_sekolah_ini_kelas"];
    $sekolahasal = $_POST["sekolah_asal"];
    $ijazah = $_POST["ijazah"];
    $skhun = $_POST["skhun"];
    $ortu = $_POST["orang_tua"];
    $alamatortu = $_POST["alamat_orang_tua"];
    $pekerjaanortu = $_POST["pekerjaan_orang_tua"];
    $namawali = $_POST["nama_wali"];
    $alamatwali = $_POST["alamat_wali"];
    $teleponwali = $_POST["telepon_wali"];
    $pekerjaanwali = $_POST["pekerjaan_wali"];
    $mutasi = $_POST["mutasi"];
    $tahunmasuk = $_POST["tahun_masuk"];
    $alumni = $_POST["alumni"];

    $query = "INSERT INTO tbl_siswa 
                VALUES
               ('', '$foto', '$nama', '$nisn', '$tempatlahir', '$tanggallahir',
               '$gender', '$agama', '$anakke', '$status', '$alamat',
               '$telepon', '$diterima', '$sekolahasal', '$ijazah', '$skhun',
               '$ortu', '$alamatortu', '$pekerjaanortu', '$namawali', '$alamatwali',
               '$teleponwali', '$pekerjaanwali', '$mutasi', '$tahunmasuk', '$alumni')
            ";
    mysqli_query($conn, $query);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Input data siswa</title>
</head>
<body>
    <h1> Input data siswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="foto">Foto : </label>
                <input type="text" name="foto" id="foto">
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="nisn">NISN : </label>
                <input type="text" name="nisn" id="nisn">
            </li>
            <li>
                <label for="tempat lahir">Tempat Lahir : </label>
                <input type="text" name="tempat lahir" id="tempat lahir">
            </li>
            <li>
                <label for="tanggal lahir">Tanggal Lahir : </label>
                <input type="date" name="tanggal lahir" id="tanggal lahir">
            </li>
            <li>
                <label for="gender">Jenis Kelamin : </label>
                <input type="text" name="gender" id="gender">
            </li>
            <li>
                <label for="agama">Agama : </label>
                <input type="text" name="agama" id="agama">
            </li>
            <li>
                <label for="anak ke">Anak ke : </label>
                <input type="text" name="anak ke" id="anak ke">
            </li>
            <li>
                <label for="status dalam keluarga">Status dalam Keluarga : </label>
                <input type="text" name="status dalam keluarga" id="status dalam keluarga">
            </li>
            <li>
                <label for="alamat">Alamat : </label>
                <input type="text" name="alamat" id="alamat">
            </li>
            <li>
                <label for="telepon">Telepon : </label>
                <input type="text" name="telepon" id="telepon">
            </li>
            <li>
                <label for="diterima di sekolah ini kelas">Diterima di sekolah ini kelas : </label>
                <input type="text" name="diterima di sekolah ini kelas" id="diterima di sekolah ini kelas">
            </li>
            <li>
                <label for="sekolah asal">Sekolah Asal: </label>
                <input type="text" name="sekolah asal" id="sekolah asal">
            </li>
            <li>
                <label for="ijazah">Ijazah: </label>
                <input type="text" name="ijazah" id="ijazah">
            </li>
            <li>
                <label for="skhun">SKHUN: </label>
                <input type="text" name="skhun" id="skhun">
            </li>
            <li>
                <label for="orang tua">Orang Tua: </label>
                <input type="text" name="orang tua" id="orang tua">
            </li>
            <li>
                <label for="alamat orang tua">Alamat Orang Tua: </label>
                <input type="text" name="alamat orang tua" id="alamat orang tua">
            </li>
            <li>
                <label for="pekerjaan orang tua">Pekerjaan Orang Tua: </label>
                <input type="text" name="pekerjaan orang tua" id="pekerjaan orang tua">
            </li>
            <li>
                <label for="nama wali">Nama Wali: </label>
                <input type="text" name="nama wali" id="nama wali">
            </li>
            <li>
                <label for="alamat wali">Alamat Wali : </label>
                <input type="text" name="alamat wali" id="alamat wali">
            </li>
            <li>
                <label for="telepon wali">Telepon Wali: </label>
                <input type="text" name="telepon wali" id="telepon wali">
            </li>
            <li>
                <label for="pekerjaan wali">Pekerjaan Wali: </label>
                <input type="text" name="pekerjaan wali" id="pekerjaan wali">
            </li>
            <li>
                <label for="mutasi">Mutasi: </label>
                <input type="text" name="mutasi" id="mutasi">
            </li>
            <li>
                <label for="tahun masuk">Tahun Masuk: </label>
                <input type="text" name="tahun masuk" id="tahun masuk">
            </li>
            <li>
                <label for="alumni">Alumni: </label>
                <input type="text" name="alumni" id="alumni">
            </li>
            <li>
                <button type="submit" name="submit"> Masukkan Data!</button>
            </li>
            
        </ul>


    </form>

</body>
</html>