<?php

include_once("config.php");

$id_pembeli = $_GET['id_pembeli'];

$result = mysqli_query($mysqli, "DELETE FROM pembeli WHERE id_pembeli=$id_pembeli");

header("Location:pembeli.php");
?>