<?php
    include 'koneksi.php';

    if(isset($_POST['save'])){
        $Id_Barang = $_POST['Id_Barang'];
        $Nama_Barang = $_POST['Nama_Barang'];
        $Kondisi = $_POST['Kondisi'];
        $Jumlah_barang = $_POST['Jumlah_barang'];

        $sql = "INSERT INTO db (Id_Barang, Nama_Barang, Kondisi, Jumlah_barang)  VALUES ('$Id_Barang', '$Nama_Barang', '$Kondisi', '$Jumlah_barang')";
        $query = mysqli_query($connect,$sql);

        if($query){
            header('location: databarang.php');
        }else{
            header('location : simpanbarang.php?status=gagal');
        }
    }
?>