<?php
    include 'koneksi.php';

    $Id_Barang = $_GET['Id_Barang'];

    $sql = "DELETE FROM db WHERE Id_Barang='$Id_Barang'";
    $query = mysqli_query($connect,$sql);

    if ($query) {
        header('Location: databarang.php');
    }else{
        header('Location: hapusdb.php?status=gagal'); 
    }
?>