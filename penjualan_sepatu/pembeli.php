<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM pembeli");
foreach ($mysqli as $data)
?>

<html>
<head>    
    <title>Data Pembeli</title>
    <link rel="stylesheet" href="tampilan.css">
</head>

<body>


<br/><br/>

    <h2 align="center">Data Pembeli
    <br></br>----------------------------------------------</h2>


    <table align="center" width='60%' border=1>

    <tr>
        <th>id</th><th>Nama Pembeli</th> <th>Alamat</th><th>Tanggal Transaksi<th>Edit</th>
    </tr>
    <?php  
    while($pembeli = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$pembeli['id_pembeli']."</td>";
        echo "<td>".$pembeli['nama_pembeli']."</td>";
        echo "<td>".$pembeli['alamat']."</td>"; 
        echo "<td>".$pembeli['transaksi']."</td>";   
        echo "<td><button1><a href='edit_pembeli.php?id_pembeli=$pembeli[id_pembeli]'>Edit</a></button1> | <button2><a href='delete_pembeli.php?id_pembeli=$pembeli[id_pembeli]'>Delete</a></button2></td></tr>";        
    }
    ?>
    </table>
</body>
<body2>
<form align="center">
<br></br>
<button><a href="add_pembeli.php">Tambah Daftar</a></button> | <button><a href='homepage.php?'>Kembali</a></button>
</form>
</body2>
</html>