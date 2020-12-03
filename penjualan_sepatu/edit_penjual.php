<?php
include_once("config.php");

if(isset($_POST['update']))
{   
    $id_penjual = $_POST['id_penjual'];
    $nama = $_POST['nama_penjual'];
    $alamat = $_POST['alamat'];

    $result = mysqli_query($mysqli, "UPDATE penjual SET nama_penjual='$nama',alamat='$alamat' WHERE id_penjual=$id_penjual");

    header("Location: homepage.php");
}
?>
<?php
$id_penjual = $_GET['id_penjual'];

$result = mysqli_query($mysqli, "SELECT * FROM penjual WHERE id_penjual=$id_penjual");

while($penjual = mysqli_fetch_array($result))
{
    $nama = $penjual['nama_penjual'];
    $alamat = $penjual['alamat'];
}
?>

<html>
<head>  
    <title>Edit Data Penjual</title>
    <link rel="stylesheet" href="tampilan.css">
</head>

<body>
    <br/><br/>

    <h2 align="center">Masukan Data Penjual</h2>

    <form name="update_penjual" method="post" action="edit_penjual.php">
        <table align="center" border="0">
            <tr> 
                <td>Nama Penjual</td>
                <td><input type="text" name="nama_penjual" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
            </tr>
            
            <tr>
                <td><input type="hidden" name="id_penjual" value=<?php echo $_GET['id_penjual'];?>></td>
                <td><input type="submit" name="update" value="Perbarui"> | 
                <button><a href="homepage.php">Batal</a></button>
                </td> 
            </tr>
        </table>
    </form>
</body>
</html>