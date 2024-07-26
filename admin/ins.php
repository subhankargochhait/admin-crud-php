<?php

$con=mysqli_connect("localhost","root","","12april");

if(isset($_POST['submit'])){

    $pn=$_POST['pname'];
    $pp=$_POST['pprice'];
    $pc=$_POST['pcategory'];
    $pd=$_POST['pdetails'];

    $buf=$_FILES['pimg']['tmp_name'];
    $fn=$_FILES['pimg']['name'];
    move_uploaded_file($buf,"pimg/".$fn);

    $ins="INSERT INTO user SET pname='$pn',pprice='$pp',pcategory='$pc',pdetails='$pd',pimg='$fn'";
    if($con->query($ins)){
     header("location:list_product.php");

}else{
    echo "Access Declin";
}
}

?>