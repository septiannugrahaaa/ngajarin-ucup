<html>
<head>
    <title>Tambah Data Sepatu</title>
    <link rel="stylesheet" href="tampilan.css">
</head>

<body>
    <br/><br/>

    <h2 align="center">Masukan Data Sepatu dan Penjual</h2>

    <form action="add.php" method="post" name="form1">
        <table align="center" width="25%" border="0">
            <tr> 
                <td>MERK</td>
                <td><input type="text" name="merk"></td>
            </tr>
            <tr> 
                <td>Nama Sepatu</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>Harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr> 
                <td>Nama Penjual</td>
                <td><input type="text" name="nama_penjual"></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Tambah"> | 
                <button><a href="homepage.php">Kembali</a></button>
                </td>
            </tr>
        </table>
    </form>
    <form align="center">
    <?php
    if(isset($_POST['Submit'])) {
        $merk = $_POST['merk'];
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $nama_penjual = $_POST['nama_penjual'];
        $alamat = $_POST['alamat'];

        include_once("config.php");
        
        $result = mysqli_query($mysqli, "INSERT INTO sepatu(merk,nama,harga) VALUES('$merk','$nama','$harga')");
        $result1 = mysqli_query($mysqli, "INSERT INTO penjual(nama_penjual,alamat) VALUES('$nama_penjual','$alamat')");
        
        echo "Data Berhasil Ditambahkan" ;
              
    }
    ?>
    </form>
</body>
</html>
