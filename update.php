<?php
$id=$_POST['id'];
$accesscode=$_GET['accesscode'];
$preferredtrack=$_GET['track'];
$fullname=$_GET['fullname'];

$link=mysqli_connect("localhost","root","","ftfl");

$query = "UPDATE `ftfl`.`users` SET `access_code` = '$accesscode', `preferred_track` = '$preferredtrack', `full_name` = '$fullname' WHERE `users`.`id` = $id;";

mysqli_query($link,$query);
