<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM daftar_pembelian");
foreach ($mysqli as $data)
?>

<html>
<head>    
    <title>Daftar Pembelian</title>
    <link rel="stylesheet" href="tampilan.css">
</head>

<body>


<br/><br/>

    <h2 align="center">Daftar Pembelian
    <br></br>----------------------------------------------</h2>
    <form method="post" align="center">
    <input type="text" name="search" placeholder="cari sepatu">
    <input type="submit" name="submit" value="cari">
    <form>

    <table align="center" width='60%' border=1>

    <tr>
        <th>Nama Pembeli</th><th>Nama Sepatu</th> <th>Merk</th><th>Harga<th>Tanggal Transaksi</th>
    </tr>
    <?php
            if(!ISSET($_POST['submit'])){

            $sql = "SELECT * FROM daftar_pembelian";
            $query = mysqli_query($mysqli, $sql);
            while ($row = mysqli_fetch_array($query)){

        ?>
        <tr>
            <td><?php echo $row['nama_pembeli']; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['merk']; ?></td>
            <td><?php echo $row['harga']; ?></td>
            <td><?php echo $row['transaksi']; ?></td>
        </tr>

<?php } } ?>
        <?php if (ISSET($_POST['submit'])){
        $cari = $_POST['search'];
        $query2 = "SELECT * FROM daftar_pembelian WHERE nama LIKE '%$cari%'";
 
         $sql = mysqli_query($mysqli, $query2);
        while ($row = mysqli_fetch_array($sql)){
        ?>
        <tr>
        <td><?php echo $row['nama_pembeli']; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['merk']; ?></td>
            <td><?php echo $row['harga']; ?></td>
            <td><?php echo $row['transaksi']; ?></td>
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