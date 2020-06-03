<?php
include("conn.php");
//session_start();
//to specify sql statement i.e. insert, update, delete, search
$sql = "Insert into birdfinder(name, image, location, size, beak, colour, link ) values('$_POST[name]','$_POST[image]','$_POST[loc]','$_POST[size]','$_POST[beak]','$_POST[colour]','$_POST[link]',)";

//to execute the sql query
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
//$_SESSION['SOS']="Thankyou for contacting us we will contact you soon !!!";
header("location:index.php#foot");

//echo $_POST["p_name"];

?>