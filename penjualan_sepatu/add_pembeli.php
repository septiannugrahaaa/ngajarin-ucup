<html>
<head>
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" href="tampilan.css">
</head>

<body>
    <br/><br/>

    <h2 align="center">Masukan Data Pembeli</h2>

    <form action="add_pembeli.php" method="post" name="form1">
        <table align="center" width="25%" border="0">
            <tr> 
                <td>Nama Pembeli</td>
                <td><input type="text" name="nama_pembeli"></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr> 
                <td>Tanggal Transaksi</td>
                <td><input type="text" name="transaksi"></td>
            </tr>
               
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Tambah"> | 
                <button><a href="pembeli.php">Kembali</a></button>
                </td>
            </tr>
        </table>
    </form>
    <form align="center">
    <?php
    if(isset($_POST['Submit'])) {
        $nama_pembeli = $_POST['nama_pembeli'];
        $alamat = $_POST['alamat'];
        $transaksi = $_POST['transaksi'];

        include_once("config.php");
        
        $result = mysqli_query($mysqli, "INSERT INTO pembeli(nama_pembeli,alamat,transaksi) VALUES('$nama_pembeli','$alamat','$transaksi')");
   
        echo "Data Berhasil Ditambahkan" ;
              
    }
    ?>
    </form>
</body>
</html>