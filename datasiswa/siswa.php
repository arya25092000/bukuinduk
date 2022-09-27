<?php
session_start();

if ( !isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

require 'functions.php';

$siswa = query("SELECT * from siswa");

?>


<!DOCTYPE html>
<html>

<head>
    <title>Halaman Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
</head>

<body>

<a href="logout.php">Logout</a>


    <h1>Buku Induk Siswa</h1>

    <a href="input.php">Tambah data siswa</a>
    <br><br>
    
    <br>

    <table id="example" border="1" cellpading="10" cellspacing="0">
    <thead>
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>NISN</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Anak ke</th>
            <th>Status dalam Keluarga</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Diterima di sekolah ini kelas</th>
            <th>Sekolah Asal</th>
            <th>Ijazah</th>
            <th>SKHUN</th>
            <th>Orang Tua</th>
            <th>Alamat Orang Tua</th>
            <th>Pekerjaan Orang Tua</th>
            <th>Nama Wali</th>
            <th>Alamat Wali</th>
            <th>Telepon Wali</th>
            <th>Pekerjaan Wali</th>
            <th>Mutasi</th>
            <th>Tahun Masuk</th>
            <th>Alumni</th>
        </tr>
    </thead>
    <tbody>


        <?php $i = 1; ?>
        <?php foreach ($siswa as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a>
                    <a href="hapus.php?id=<?= $row["id"]; ?>" 
                    onclick="return confirm('Yakin ingin menghapus?')">hapus</a>
                </td>
                <td><img src="img/<?= $row["foto"]; ?>" width="50"></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["nisn"]; ?></td>
                <td><?= $row["tempat_lahir"]; ?></td>
                <td><?= $row["tanggal_lahir"]; ?></td>
                <td><?= $row["gender"]; ?></td>
                <td><?= $row["agama"]; ?></td>
                <td><?= $row["anak_ke"]; ?></td>
                <td><?= $row["status_dalam_keluarga"]; ?></td>
                <td><?= $row["alamat"]; ?></td>
                <td><?= $row["telepon"]; ?></td>
                <td><?= $row["diterima_di_sekolah_ini_kelas"]; ?></td>
                <td><?= $row["sekolah_asal"]; ?></td>
                <td><?= $row["ijazah"]; ?></td>
                <td><?= $row["skhun"]; ?></td>
                <td><?= $row["ortu"]; ?></td>
                <td><?= $row["alamat_ortu"]; ?></td>
                <td><?= $row["pekerjaan_ortu"]; ?></td>
                <td><?= $row["nama_wali"]; ?></td>
                <td><?= $row["alamat_wali"]; ?></td>
                <td><?= $row["telepon_wali"]; ?></td>
                <td><?= $row["pekerjaan_wali"]; ?></td>
                <td><?= $row["mutasi"]; ?></td>
                <td><?= $row["tahun_masuk"]; ?></td>
                <td><?= $row["alumni"]; ?></td>

            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </tbody>



    </table>
    <script>
    $(document).ready(function () {
    $('#example').DataTable();
    });
    </script>

</body>

</html>