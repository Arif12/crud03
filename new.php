<?php
$accesscode= $_POST['accesscode'];
$track= $_POST['track'];
$fullname= $_POST['fullname'];
$fathersname=$_POST['fathersname'];

$link= mysqli_connect("localhost",
						"root",
						"",
						"ftfl");

$query = "INSERT INTO `ftfl`.`users` (`id`, `access_code`, `preferred_track`, `full_name`,`fathers_name`) VALUES ('NULL', '$accesscode', '$track', '$fullname','$fathersname');";

mysqli_query($link, $query);
header('location:list.php');
 ?>
 <a href="ftfl.html"> Another entry </a>



<?php
$accesscode= $_POST['accesscode'];
$track= $_POST['track'];
$fullname= $_POST['fullname'];
$fathersname=$_POST['fathersname'];
$mothersname=$_POST['mothersname'];
$religion=$_POST['religion'];

$link= mysqli_connect("localhost",
						"root",
						"",
						"ftfl");

$query = "INSERT INTO `ftfl`.`users` (`id`, `access_code`, `preferred_track`, `full_name`,`fathers_name`,`mothers_name`,`religion`) VALUES ('NULL', '$accesscode', '$track', '$fullname','$fathersname','$mothersname','$religion');";

mysqli_query($link, $query);
header('location:list.php');
 ?>
 <a href="ftfl.html"> Another entry </a>
