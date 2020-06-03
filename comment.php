<?php
include("conn.php");
//session_start();
//to specify sql statement i.e. insert, update, delete, search
$sql = "Insert into comments(name, email, comment, blogid ) values('$_POST[name]','$_POST[email]','$_POST[message]','$_POST[bid]' )";

//to execute the sql query
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
//$_SESSION['SOS']="Thankyou for contacting us we will contact you soon !!!";
header("location:index.php#foot");

//echo $_POST["p_name"];

?>