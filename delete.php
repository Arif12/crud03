<?php
$id= $_GET['id'];

$link= mysqli_connect("localhost",
						"root",
						"",
						"ftfl");

$query="DELETE FROM `ftfl`.`users` WHERE `users`.`id` = '$id'";

mysqli_query($link,$query);

header('location:list.php');
?>
