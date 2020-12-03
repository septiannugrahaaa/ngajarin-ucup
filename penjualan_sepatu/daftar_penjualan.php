<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM daftar_penjualan");
foreach ($mysqli as $data)
?>

<html>
<head>    
    <title>Daftar Penjualan</title>
    <link rel="stylesheet" href="tampilan.css">
</head>

<body>


<br/><br/>

    <h2 align="center">Daftar Penjualan
    <br></br>----------------------------------------------</h2>
    <form method="post" align="center">
    <input type="text" name="search" placeholder="cari sepatu">
    <input type="submit" name="submit" value="cari">
    <form>

    <table align="center" width='60%' border=1>

    <tr>
        <th>Nama Penjual</th><th>Nama Sepatu</th> <th>Merk</th><th>Harga<th>Alamat Penjual</th>
    </tr>
    <?php
            if(!ISSET($_POST['submit'])){

            $sql = "SELECT * FROM daftar_penjualan";
            $query = mysqli_query($mysqli, $sql);
            while ($row = mysqli_fetch_array($query)){

        ?>
        <tr>
            <td><?php echo $row['nama_penjual']; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['merk']; ?></td>
            <td><?php echo $row['harga']; ?></td>
            <td><?php echo $row['alamat']; ?></td>
        </tr>

<?php } } ?>
        <?php if (ISSET($_POST['submit'])){
        $cari = $_POST['search'];
        $query2 = "SELECT * FROM daftar_penjualan WHERE nama LIKE '%$cari%'";
 
         $sql = mysqli_query($mysqli, $query2);
        while ($row = mysqli_fetch_array($sql)){
        ?>
        <tr>
        <td><?php echo $row['nama_penjual']; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['merk']; ?></td>
            <td><?php echo $row['harga']; ?></td>
            <td><?php echo $row['alamat']; ?></td>
        </tr>  
 <?php }} ?>
    </table>
    <body2>
        <form align="center">
        <br></br>
        <button><a href='homepage.php?'>Kembali</a></button>
        </form>
    </body2>
</body>
</html>