<?php
    include 'koneksi.php';

    $NISN = $_GET['NISN'];

    $sql = "DELETE FROM ds WHERE NISN='$NISN'";
    $query = mysqli_query($connect,$sql);

    if ($query) {
        header('Location: datasiswa.php');
    }else{
        header('Location: hapussiswa.php?status=gagal'); 
    }
?>