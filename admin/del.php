<?php

$con=mysqli_connect("localhost","root","","12april");

$id=$_GET['did'];
$d="DELETE FROM user WHERE pid='$id'";
if($con->query($d)){
    header("location:list_product.php");
}

?>