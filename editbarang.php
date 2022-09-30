<?php
    include 'koneksi.php';

    if(isset($_POST['save'])){
        $Id_Barang = $_POST['Id_Barang'];
        $Nama_Barang = $_POST['Nama_Barang'];
        $Kondisi = $_POST['Kondisi'];
        $Jumlah_barang = $_POST['Jumlah_barang'];

        $sql = "UPDATE db SET Id_Barang='$Id_Barang' , Nama_Barang='$Nama_Barang' , Kondisi='$Kondisi' , Jumlah_barang='$Jumlah_barang'  WHERE Id_Barang = '$Id_Barang'";
        $query = mysqli_query($connect,$sql);
        if($query){
            header('location: databarang.php');
        }else{
            header('location : edit.php?status=gagal');
        }
    }
?>