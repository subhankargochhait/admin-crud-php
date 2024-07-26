<?php

$con=mysqli_connect("localhost","root","","12april");
$id=$_GET['eid'];

$sel="SELECT * FROM user WHERE pid='$id'";
$rs=$con->query($sel);
$row=$rs->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Product</title>
    <link rel="stylesheet" href="styles.css">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include("admin_inc/sidebar.php") ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include("admin_inc/topbar.php") ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Edit Product</h1>
<a href="list_product.php" class="btn btn-info">List Product</a><br><br>
             <div class="contanier">
<form action="ins.php" method="post" enctype="multipart/form-data">

    <label >Product Name :</label>
    <input type="text" name="pname" value="<?php echo $row['pname']; ?>"><br><br>
    <label>Product Price</label>
    <input type="text" name="pprice" value="<?php echo $row['pprice']; ?>"><br><br>
    <label>Product Category :</label>
    <select name="pcategory" id="">
        <option value="">-select-category-</option>
        <option value="Grocery" <?php if($row['pcategory']=="Grocery") { echo "selected";} ?> >Grocery</option>
        <option value="Electronic" <?php if($row['pcategory']=="Electronic") { echo "selected";} ?> >Electronic</option>
        <option value="Mans" <?php if($row['pcategory']=="Mans") { echo "selected";} ?> >Mans</option>
        <option value="Womens" <?php if($row['pcategory']=="Womens") { echo "selected";} ?>>Womens</option>
    </select><br><br>
    <label>Product Details :</label>
    <input type="text" name="pdetails"cols="30" rows="3" value="<?php echo $row['pdetails']; ?>">
   <br><br>
    <label>Product Images :</label>
    <img class="myfun" src="pimg/<?php echo $row['pimg']; ?>"
    <input type="file" name="pimg"><br><br>
    <input type="submit" name="submit" class="btn btn-success" style="margin-left: 120px; font-size: large;">
</form>
             </div>

                    
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include("admin_inc/footer.php") ?>

            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php include("admin_inc/logout.php") ?>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>