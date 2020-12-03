<?php
include_once("config.php");

if(isset($_POST['update']))
{   
    $id_pembeli = $_POST['id_pembeli'];
    $nama = $_POST['nama_pembeli'];
    $alamat = $_POST['alamat'];
    $transaksi = $_POST['transaksi'];

    $result = mysqli_query($mysqli, "UPDATE pembeli SET nama_pembeli='$nama',alamat='$alamat', transaksi= '$transaksi' WHERE id_pembeli=$id_pembeli");

    header("Location: pembeli.php");
}
?>
<?php
$id_pembeli = $_GET['id_pembeli'];

$result = mysqli_query($mysqli, "SELECT * FROM pembeli WHERE id_pembeli=$id_pembeli");

while($pembeli = mysqli_fetch_array($result))
{
    $nama = $pembeli['nama_pembeli'];
    $alamat = $pembeli['alamat'];
    $transaksi = $pembeli['transaksi'];
}
?>

<html>
<head>  
    <title>Edit Data Pembeli</title>
    <link rel="stylesheet" href="tampilan.css">
</head>

<body>
    <br/><br/>

    <h2 align="center">Masukan Data Pembeli</h2>

    <form name="update_pembeli" method="post" action="edit_pembeli.php">
        <table align="center" border="0">
            <tr> 
                <td>Nama Pembeli</td>
                <td><input type="text" name="nama_pembeli" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
            </tr>
            <tr> 
                <td>Tanggal Transaksi</td>
                <td><input type="text" name="transaksi" value=<?php echo $transaksi;?>></td>
            </tr>
            
            <tr>
                <td><input type="hidden" name="id_pembeli" value=<?php echo $_GET['id_pembeli'];?>></td>
                <td><input type="submit" name="update" value="Perbarui"> | 
                <button><a href="pembeli.php">Batal</a></button>
                </td> 
            </tr>
        </table>
    </form>
</body>
</html>