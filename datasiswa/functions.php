<?php // koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "sibuduwasmansa");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function input($data){
    global $conn;

    $id = $data["id"];
    $foto = htmlspecialchars($data["foto"]);
    $nama = htmlspecialchars($data["nama"]);
    $nisn = htmlspecialchars($data["nisn"]);
    $tempatlahir = htmlspecialchars($data["tempat_lahir"]);
    $tanggallahir = htmlspecialchars($data["tanggal_lahir"]);
    $gender = htmlspecialchars($data["gender"]);
    $agama = htmlspecialchars($data["agama"]);
    $anakke = htmlspecialchars($data["anak_ke"]);
    $status = htmlspecialchars($data["status_dalam_keluarga"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $telepon = htmlspecialchars($data["telepon"]);
    $diterima = htmlspecialchars($data["diterima_di_sekolah_ini_kelas"]);
    $sekolahasal = htmlspecialchars($data["sekolah_asal"]);
    $ijazah = htmlspecialchars($data["ijazah"]);
    $skhun = htmlspecialchars($data["skhun"]);
    $ortu = htmlspecialchars($data["orang_tua"]);
    $alamatortu = htmlspecialchars($data["alamat_orang_tua"]);
    $pekerjaanortu = htmlspecialchars($data["pekerjaan_orang_tua"]);
    $namawali = htmlspecialchars($data["nama_wali"]);
    $alamatwali = htmlspecialchars($data["alamat_wali"]);
    $teleponwali = htmlspecialchars($data["telepon_wali"]);
    $pekerjaanwali = htmlspecialchars($data["pekerjaan_wali"]);
    $mutasi = htmlspecialchars($data["mutasi"]);
    $tahunmasuk = htmlspecialchars($data["tahun_masuk"]);
    $alumni = htmlspecialchars($data["alumni"]);

    $query = "INSERT INTO tbl_siswa 
                VALUES
               ('', '$foto', '$nama', '$nisn', '$tempatlahir', '$tanggallahir',
                 '$gender', '$agama', '$anakke', '$status', '$alamat',
                 '$telepon', '$diterima', '$sekolahasal', '$ijazah', '$skhun',
                 '$ortu', '$alamatortu', '$pekerjaanortu', '$namawali', '$alamatwali',
                 '$teleponwali', '$pekerjaanwali', '$mutasi', '$tahunmasuk', '$alumni')
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM tbl_siswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;

    $id = $data["id"];
    $foto = htmlspecialchars($data["foto"]);
    $nama = htmlspecialchars($data["nama"]);
    $nisn = htmlspecialchars($data["nisn"]);
    $tempatlahir = htmlspecialchars($data["tempat_lahir"]);
    $tanggallahir = htmlspecialchars($data["tanggal_lahir"]);
    $gender = htmlspecialchars($data["gender"]);
    $agama = htmlspecialchars($data["agama"]);
    $anakke = htmlspecialchars($data["anak_ke"]);
    $status = htmlspecialchars($data["status_dalam_keluarga"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $telepon = htmlspecialchars($data["telepon"]);
    $diterima = htmlspecialchars($data["diterima_di_sekolah_ini_kelas"]);
    $sekolahasal = htmlspecialchars($data["sekolah_asal"]);
    $ijazah = htmlspecialchars($data["ijazah"]);
    $skhun = htmlspecialchars($data["skhun"]);
    $ortu = htmlspecialchars($data["orang_tua"]);
    $alamatortu = htmlspecialchars($data["alamat_orang_tua"]);
    $pekerjaanortu = htmlspecialchars($data["pekerjaan_orang_tua"]);
    $namawali = htmlspecialchars($data["nama_wali"]);
    $alamatwali = htmlspecialchars($data["alamat_wali"]);
    $teleponwali = htmlspecialchars($data["telepon_wali"]);
    $pekerjaanwali = htmlspecialchars($data["pekerjaan_wali"]);
    $mutasi = htmlspecialchars($data["mutasi"]);
    $tahunmasuk = htmlspecialchars($data["tahun_masuk"]);
    $alumni = htmlspecialchars($data["alumni"]);

    $query = "UPDATE tbl_siswa SET
                foto = '$foto',
                nama = '$nama',
                nisn = '$nisn',
                tempatlahir = '$tempatlahir',
                tanggallahir = '$tanggallahir',
                gender = '$gender',
                agama = '$agama',
                anakke = '$anakke',
                stats = '$status',
                alamat = '$alamat',
                telepon = '$telepon',
                diterima = '$diterima',
                sekolahasal = '$sekolahasal',
                ijazah = '$ijazah',
                skhun = '$skhun',
                ortu = '$ortu',
                alamatortu = '$alamatortu',
                pekerjaanortu = '$pekerjaanortu',
                namawali = '$namawali',
                alamatwali = '$alamatwali',
                teleponwali = '$teleponwali',
                pekerjaanwali = '$pekerjaanwali',
                mutasi = '$mutasi',
                tahunmasuk = '$tahunmasuk',
                alumni = '$alumni'
               WHERE id = $id
                ";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword){
    $query = "SELECT * FROM tbl_siswa 
                WHERE
              nama LIKE '%$keyword%' OR 
              nisn LIKE '%$keyword%' OR
              agama LIKE '%$keyword%' OR
              alumni LIKE '%$keyword%' OR
              tahunmasuk LIKE '%$keyword%'
            ";
    return query($query);
}

?>