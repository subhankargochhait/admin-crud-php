<?php

$con=mysqli_connect("localhost","root","","12april");

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>
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
                    <h1 class="h3 mb-4 text-gray-800">List Product</h1>

                    <a href="add_product.php" class="btn btn-info">Add New Product</a>


                    <table class="table">
  <thead>
    <tr>
      <th scope="col">PID</th>
      <th scope="col">P-NAME</th>
      <th scope="col">P-PRICE</th>
      <th scope="col">P-CATEGORY</th>
      <th scope="col">P-DETAILS</th>
      <th scope="col">P-IMG</th>
      <th scope="col">DELETE</th>
      <th scope="col">UPDATE</th>
      
    </tr>
  </thead>
  <tbody>

  <?php

$sel="SELECT * FROM user";
$rs=$con->query($sel);
while($row=$rs->fetch_assoc()){ ?>

<tr>
<td><?php echo $row['pname']; ?></td>
<td><?php echo $row['pprice']; ?></td>
<td><?php echo $row['pname']; ?></td>
<td><?php echo $row['pcategory']; ?></td>
<td><?php echo $row['pdetails']; ?></td>
<td><img class="myfun" src="pimg/<?php echo $row['pimg']; ?>" alt=""></td>
<td><a href="del.php?did=<?php echo $row['pid']; ?>" class="btn btn-danger">Delete</a></td>
<td><a href="edit.php?eid=<?php echo $row['pid'];  ?>" class="btn btn-success">Edit</a></td>
</tr>
<?php
}

?>
  </tbody>
</table>


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