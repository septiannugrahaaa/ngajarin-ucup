<?php
include_once("config.php");

if(isset($_POST['update']))
{   
    $id = $_POST['id_sepatu'];
    $merk=$_POST['merk'];
    $nama_sepatu=$_POST['nama'];
    $harga=$_POST['harga'];

    $result = mysqli_query($mysqli, "UPDATE sepatu SET merk='$merk',nama='$nama_sepatu',harga='$harga' WHERE id_sepatu=$id");

    header("Location: homepage.php");
}
?>
<?php
$id = $_GET['id_sepatu'];

$result = mysqli_query($mysqli, "SELECT * FROM sepatu WHERE id_sepatu=$id");

while($sepatu = mysqli_fetch_array($result))
{
    $merk = $sepatu['merk'];
    $nama_sepatu = $sepatu['nama'];
    $harga = $sepatu['harga'];
}
?>
<html>
<head>  
    <title>Edit Data Sepatu</title>
    <link rel="stylesheet" href="tampilan.css">
</head>

<body>
    <br/><br/>

    <h2 align="center">Masukan Data Sepatu</h2>

    <form name="update_sepatu" method="post" action="edit_sepatu.php">
        <table align="center" border="0">
            <tr> 
                <td>MERK</td>
                <td><input type="text" name="merk" value=<?php echo $merk;?>></td>
            </tr>
            <tr> 
                <td>Nama Sepatu</td>
                <td><input type="text" name="nama" value=<?php echo $nama_sepatu;?>></td>
            </tr>
            <tr> 
                <td>Harga</td>
                <td><input type="text" name="harga" value=<?php echo $harga;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id_sepatu" value=<?php echo $_GET['id_sepatu'];?>></td>
                <td><input type="submit" name="update" value="Perbarui"> | 
                <button><a href="homepage.php">Batal</a></button>
                </td> 
            </tr>
        </table>
    </form>
</body>
</html>