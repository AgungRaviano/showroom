<?php
    include 'koneksi.php';

    if(isset($_POST['save'])){
        $NISN = $_POST['NISN'];
        $Nama_siswa = $_POST['Nama_siswa'];
        $Kelas = $_POST['Kelas'];
        $Nomer_Hp = $_POST['Nomer_Hp'];
        $Jenis_kelamin = $_POST['Jenis_kelamin'];
        $Alamat = $_POST['Alamat'];

        $sql = "INSERT INTO ds (NISN, Nama_siswa, Kelas, Nomer_Hp, Jenis_kelamin, Alamat) VALUES ('$NISN', '$Nama_siswa', '$Kelas', '$Nomer_Hp', '$Jenis_kelamin', '$Alamat')";
        $query = mysqli_query($connect,$sql);

        if($query){
            header('location: datasiswa.php');
        }else{
            header('location : simpan.php?status=gagal');
        }
    }
?>