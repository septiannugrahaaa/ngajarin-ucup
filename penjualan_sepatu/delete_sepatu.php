<?php

include_once("config.php");

$id = $_GET['id_sepatu'];

$result = mysqli_query($mysqli, "DELETE FROM sepatu WHERE id_sepatu=$id");

header("Location:homepage.php");
?>