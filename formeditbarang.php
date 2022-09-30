<?php
    include 'koneksi.php';

    $Id_Barang = $_GET['Id_Barang'];
    $sql = "SELECT * FROM db WHERE Id_Barang = '$Id_Barang'";
    $query = mysqli_query($connect,$sql);
    $data = mysqli_fetch_assoc($query);
    if(mysqli_num_rows($query) < 1){
        die("Data Tidak Ditemukan");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SarPras</title>
    <link rel="stylesheet" href="formeditsiswa.css">
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
            <a href="databarang.php"><i class="fa-solid fa-box"></i> Data Barang</a>
        </div>
    </div>
    <!-- sidebar -->
    <div class="content">
        <div class="textdata">
            <p>EDIT DATA BARANG</p>
        </div>
        <div class="bgtbl">
            <div class="tbl">
                <form method="post" action="editbarang.php">
                    <h3>Edit Data Barang</h3>
                    <p><label>Id_Barang : 
                    <br>
                    <input class="d1" type="number" name="Id_Barang" value="<?php echo $data['Id_Barang'] ?>" required="required"></label></p>

                    <p><label>Nama Barang : 
                    <br>
                    <input class="d2" type="text" name="Nama_Barang" value="<?php echo $data['Nama_Barang'] ?>" required="required"></label></p>

                    <p><label>Kondisi : 
                    <br>
                    <input class="d3" type="text" name="Kondisi" value="<?php echo $data['Kondisi'] ?>" required="required"></label></p>

                    <p><label>Jumlah Barang : 
                    <br>
                    <input class="d4" type="number" name="Jumlah_barang" value="<?php echo $data['Jumlah_barang'] ?>" required="required"></label></p>

                    <input class="d7" type="submit" name="save" value="Save">
                </form>
            </div>
        </div>
    </div>

</body>
</html>