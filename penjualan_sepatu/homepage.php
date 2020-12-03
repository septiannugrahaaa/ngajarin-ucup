<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM sepatu ");
$result1 = mysqli_query($mysqli, "SELECT * FROM penjual ");
foreach ($mysqli as $data)
?>

<html>
<head>    
    <title>Homepage</title>
    <link rel="stylesheet" href="tampilan.css">
</head>

<body>

<form align="right">
<br></br>
<button3><a href="index.php">Logout</a></button3> || <button3><a href="daftar_penjualan.php">Daftar Penjualan</a></button3> || <button3><a href="daftar_pembelian.php">Daftar Pembelian</a></button3> 
</form>

    <h2 align="center">List Sepatu
    <br></br>----------------------------------------------</h2> 

    <table align="center" width='60%' border=1>

    <tr>
        <th>id</th><th>Merk</th> <th>Nama Sepatu</th> <th>Harga</th><th>Update</th>
    </tr>
        <?php  
    while($sepatu = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$sepatu['id_sepatu']."</td>";
        echo "<td>".$sepatu['merk']."</td>";
        echo "<td>".$sepatu['nama']."</td>";
        echo "<td>".$sepatu['harga']."</td>";
        echo "<td><button1><a href='edit_sepatu.php?id_sepatu=$sepatu[id_sepatu]'>Edit</a></button1> | <button2><a href='delete_sepatu.php?id_sepatu=$sepatu[id_sepatu]'>Delete</a></button2></td></tr>";        
    }
    ?>
    </table>

    <h2 align="center">Data Penjual
    <br></br>----------------------------------------------</h2>

    <table align="center" width='60%' border=1>

    <tr>
        <th>id</th><th>Nama Penjual</th> <th>Alamat</th><th>Update</th>
    </tr>
    <?php  
    while($penjual = mysqli_fetch_array($result1)) {         
        echo "<tr>";
        echo "<td>".$penjual['id_penjual']."</td>";
        echo "<td>".$penjual['nama_penjual']."</td>";
        echo "<td>".$penjual['alamat']."</td>";
        echo "<td><button1><a href='edit_penjual.php?id_penjual=$penjual[id_penjual]'>Edit</a></button1> | <button2><a href='delete_penjual.php?id_penjual=$penjual[id_penjual]'>Delete</a></button2></td></tr>";        
    }
    ?>
   
    </table>
</body>
<body2>
<form align="center">
<br></br>
<button><a href="add.php">Tambah Data</a></button> | <button><a href='pembeli.php?'>Data Pembeli</a></button>
</form>
</body2>
</html>