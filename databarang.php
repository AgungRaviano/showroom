<?php
    include 'koneksi.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SarPras</title>
    <link rel="stylesheet" href="databarang.css">
    <!-- Font Roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <div class="sidebar">
        <div class="logo">
            <img src="tb.png" alt="">
            <a href="index.php">SARPRAS</a>
        </div>
        <div class="data-siswa">
            <a href="datasiswa.php"><i class="fa-regular fa-user"></i> Data Siswa</a>
        </div>
        <div class="data-barang">
            <a href="databarang.php" class="actived"><i class="fa-solid fa-box"></i> Data Barang</a>
        </div>
    </div>
    <!-- sidebar -->
    <div class="content">
        <div class="textdata">
            <p>DATA BARANG</p>
        </div>
        <div class="bgtbl">
            <div class="tbl">
            <table>
                <tr>
                    <th>Id Barang</th>
                    <th>Nama Barang</th>
                    <th>Kondisi</th>
                    <th>Jumlah barang</th>
                    <th>Action</th>
                </tr>
                <?php
                $sql = "SELECT * FROM db";
                $query = mysqli_query ($connect,$sql);
                while($data= mysqli_fetch_array ($query)){
                    echo"
                    <tr>
                    <td>$data[Id_Barang]</td>
                    <td>$data[Nama_Barang]</td>
                    <td>$data[Kondisi]</td>
                    <td>$data[Jumlah_barang]</td>
                    <td>
                        <a href='formeditbarang.php?Id_Barang=".$data['Id_Barang']."'><i class='fa-solid fa-pen-to-square'></i></a>
                        <a href='hapusbarang.php?Id_Barang=".$data['Id_Barang']."'><i class='fa-solid fa-trash'></i></a>
                    </td>
                    </tr>
                    ";
                }
                ?>
            </table>
            </div>
            <div class="create">
                <a href="tambahbarang.html">Create</a>
            </div>
        </div>
    </div>

</body>
</html>