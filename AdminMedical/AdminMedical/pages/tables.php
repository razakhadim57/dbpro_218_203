<?php
require_once 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Medica_Store </title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
               <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                
                <a class="navbar-brand" href="index.php">SB Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                  
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
              
                  
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
               
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
						<li><a href="registeration.php"><i class="fa fa-sign-out fa-fw"></i> Registerd</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        
                        <li>
                            <a href="tables.php"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>
                        <li>
                            <a href="forms.php"><i class="fa fa-edit fa-fw"></i> Forms</a>
                        </li>
                       
                      
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tables</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Register User 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<form method="post">
                            <table style="width:100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>sr#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Edit</th>
										<th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php 
								$query1 = "SELECT * FROM `register_form`";
								$result = mysqli_query($con,$query1);
								 if (mysqli_num_rows($result) > 0) {
                        $sr = 1;
                        foreach ($result as $row) {
                            ?>
						
                                    <tr class="odd gradeX">
                                <td> <?php echo $sr; ?></td>
                                <td> <?= $row['reg_name'] ?></td>
                                <td> <?= $row['reg_email'] ?></td>
                                <td> <?= $row['reg_password'] ?></td>
                            
                                <td>  <a href="Edit.php?id=<?php echo $row['reg_id'] ?>" >Edit</a></td>
                                <td> <a href="delete.php?id=<?php echo $row['reg_id'] ?>" >Delete</a></td>
                             
								<?php $sr =  $sr +1; ?> 
                                    </tr>
									  <?php
                        }
                    }
                    ?>
                                  
                                </tbody>
                            </table>
							</form>
                            <!-- /.table-responsive -->
                          
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
			
			
            <!-- /.row -->
            <div class="row">
			
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Product in Cart
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Product id</th>
                                            <th>product name</th>
                                            <th>quantity</th>
											<th>Price </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
								$query1 = "SELECT * FROM `cart`";
								$result = mysqli_query($con,$query1);
								 if (mysqli_num_rows($result) > 0) {
                        $sr = 1;
                        foreach ($result as $row) {
                            ?>
						
                                    <tr class="odd gradeX">
                                   <td> <?php echo $sr; ?></td>
                                <td> <?= $row['product_id'] ?></td>
                                <td> <?= $row['product_name'] ?></td>
								      <td> <?= $row['quantity'] ?></td>
									        <td> <?= $row['price'] ?></td>
                           
                            
								<?php $sr =  $sr +1; ?>
                                    </tr>
									  <?php
                        }
                    }
                    ?>      
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
               
            
        <!-- /#page-wrapper -->

    </div>
	<div class="row">
			
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <b> online checkout</b>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>User Name</th>
                                            <th>Email</th>
                                            <th>Card Name</th>
											<th>Card Number </th>
											<th>cvv number</th>
											<th>Approved</th>
											<th>Not Approved</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
								$query1 = "SELECT * FROM online_checkout";
                                // die($query1);
								$result = mysqli_query($con,$query1);
								 if (mysqli_num_rows($result) > 0) {
                        $sr = 1;
                        foreach ($result as $row) {
                            ?>
						
                                    <tr class="odd gradeX">
                                   <td> <?php echo $sr; ?></td>
                                <td> <?= $row['firstname'] ?></td>
                                <td> <?= $row['email'] ?></td>
								      <td> <?= $row['card_name'] ?></td>
									        <td> <?= $row['card_number'] ?></td>
											<td> <?= $row['cvv_number'] ?></td>
											<td><a href="#">Yes</a> </td>
											<td><a href="#">Yes</a> </td>
                           
                            
								<?php $sr =  $sr +1; ?>
                                    </tr>
									  <?php
                        }
                    }
                    ?>      
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
               
            
        <!-- /#page-wrapper -->

    </div>
	<div class="row">
			
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <b> Home Delivery checkout</b>
                        </div>
                        <!-- /.panel-heading -->
                        <div  class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>User Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
											<th>fax </th>
											<th>company</th>
											<th>address</th>
											<th>city</th>
											<th>postal code</th>
											<th>country</th>
											<th>Approved</th>
											<th>Not Approved</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
								$query1 = "SELECT * FROM `check_out`";
								$result = mysqli_query($con,$query1);
								 if (mysqli_num_rows($result) > 0) {
                        $sr = 1;
                        foreach ($result as $row) {
                            ?>
						
                                    <tr class="odd gradeX">
                                   <td> <?php echo $sr; ?></td>
                                <td> <?= $row['name'] ?></td>
                                <td> <?= $row['email'] ?></td>
								      <td> <?= $row['phone'] ?></td>
									        <td> <?= $row['fax'] ?></td>
											<td> <?= $row['company'] ?></td>
											<td> <?= $row['adress'] ?></td>
											<td> <?= $row['city'] ?></td>
											<td> <?= $row['postal_code'] ?></td>
											<td> <?= $row['country'] ?></td>
											<td><a href="#">Yes</a> </td>
											<td><a href="#">Yes</a> </td>
                           
                            
								<?php $sr =  $sr +1; ?>
                                    </tr>
									  <?php
                        }
                    }
                    ?>      
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
               
            
        <!-- /#page-wrapper -->

    </div>

    <div class="row">
            
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <b> General Category Link</b>
                        </div>
                        <!-- /.panel-heading -->
                        <div  class="panel-body">
                            <div class="table-responsive">
                                <table  class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>General Category name</th>
                                            <th>Categoray Abled</th>
                                            <th>Categoray Disabled</th>
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                $query31 = "SELECT * FROM General_category";
                                $result31 = mysqli_query($con,$query31);
                                 if (mysqli_num_rows($result31) > 0) {
                        $sr = 1;
                        foreach ($result31 as $row31) {
                            ?>
                        
                                    <tr class="odd gradeX">
                                   <td> <?php echo $sr; ?></td>
                                <td> <?= $row31["general_category_name"] ?></td>
                                            <td> <a href="ables.php?id=<?php echo $row31["general_category_id"]; ?>"> <button type="button" class="btn btn-info"> Abled</button></a></td>
                                            <td><a href="disable.php?id=<?php echo $row31["general_category_id"]; ?>"> <button type="button" class="btn btn-danger">Disabled</button></a></td>
                                <?php $sr =  $sr +1; ?>
                                    </tr>
                                      <?php
                        }
                    }
                    ?>      
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
               
            
        <!-- /#page-wrapper -->

    </div>






	<div class="row">
			
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <b> Super Category Link</b>
                        </div>
                        <!-- /.panel-heading -->
                        <div  class="panel-body">
                            <div class="table-responsive">
                                <table  class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
											<th>Categoray name</th>
											<th>Categoray Abled</th>
											<th>Categoray Disabled</th>
										
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
								$query3 = "SELECT * FROM super_category";
								$result3 = mysqli_query($con,$query3);
								 if (mysqli_num_rows($result3) > 0) {
                        $sr = 1;
                        foreach ($result3 as $row3) {
                            ?>
						
                                    <tr class="odd gradeX">
                                   <td> <?php echo $sr; ?></td>
                                <td> <?= $row3["super_category_name"] ?></td>
									        <td> <a href="able.php?id=<?php echo $row3["super_category_id"]; ?>"> <button type="button" class="btn btn-info"> Abled</button></a></td>
											<td><a href="disabled.php?id=<?php echo $row3["super_category_id"]; ?>"> <button type="button" class="btn btn-danger">Disabled</button></a></td>
								<?php $sr =  $sr +1; ?>
                                    </tr>
									  <?php
                        }
                    }
                    ?>      
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
               
            
        <!-- /#page-wrapper -->

    </div>


        <div class="row">
            
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <b> Product Detail</b>
                        </div>
                        <!-- /.panel-heading -->
                        <div  class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Product Name</th>
                                            <th>Medicine Name</th>
                                            <th>Description</th>
                                            <th>Image </th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>status</th>
                                           <th>Edit</th>
                                        <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                $query11 = "SELECT * FROM `product`";
                                $result11 = mysqli_query($con,$query11);
                                 if (mysqli_num_rows($result11) > 0) {
                        $sr = 1;
                        foreach ($result11 as $row11) {
                            ?>
                        
                                    <tr class="odd gradeX">
                                   <td> <?php echo $sr; ?></td>
                                <td> <?= $row11['product_name'] ?></td>
                                <td> <?= $row11['medicine_name'] ?></td>
                                      <td> <?= $row11['discription'] ?></td>
                                            <td> <img src="<?= $row11['img1'] ?>"></td>
                                            <td> <?= $row11['price'] ?></td>
                                            <td> <?= $row11['qty'] ?></td>
                                            <td> <?= $row11['status'] ?></td>
                                            <td>  <a href="Edit.php?id=<?php echo $row['reg_id'] ?>" >Edit</a></td>
                                <td> <a href="delete.php?id=<?php echo $row['reg_id'] ?>" >Delete</a></td>
                                <?php $sr =  $sr +1; ?>
                                    </tr>
                                      <?php
                        }
                    }
                    ?>      
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
               
            
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>


    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script type="text/javascript">
    $(document).ready(function() {
        $('table').DataTable({
            responsive: true
        });
    });

	
    </script>

</body>

</html>
