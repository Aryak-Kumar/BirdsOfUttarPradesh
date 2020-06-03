<?php
include("conn.php");
//session_start();
//to specify sql statement i.e. insert, update, delete, search
$sql = "Insert into contactus(name, email, subject, message) values('$_POST[name]','$_POST[email]','$_POST[subject]','$_POST[message]')";

//to execute the sql query
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
//$_SESSION['SOS']="Thankyou for contacting us we will contact you soon !!!";
header("location:contact.php#con");

//echo $_POST["p_name"];

?>