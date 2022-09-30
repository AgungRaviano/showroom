<?php
    include 'koneksi.php';

    if(isset($_POST['save'])){
        $NISN = $_POST['NISN'];
        $Nama_siswa = $_POST['Nama_siswa'];
        $Kelas = $_POST['Kelas'];
        $Nomer_Hp = $_POST['Nomer_Hp'];
        $Jenis_kelamin = $_POST['Jenis_kelamin'];
        $Alamat = $_POST['Alamat'];

        $sql = "UPDATE ds SET NISN='$NISN' , Nama_siswa='$Nama_siswa' , Kelas='$Kelas' , Nomer_Hp='$Nomer_Hp' , Jenis_kelamin='$Jenis_kelamin' , Alamat='$Alamat' WHERE NISN = '$NISN'";
        $query = mysqli_query($connect,$sql);
        if($query){
            header('location: datasiswa.php');
        }else{
            header('location : edit.php?status=gagal');
        }
    }
?>