<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Electronics Store Admin</title>
    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>

    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" style="margin-bottom: 0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part"><a class="logo" href="index.html"><i class="glyphicon glyphicon-fire"></i>&nbsp;<span class="hidden-xs">Store Admin</span></a></div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs hidden-lg waves-effect waves-light"><i class="ti-arrow-circle-left ti-menu"></i></a></li>
                </ul>
                <!--
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <form role="search" class="app-search hidden-xs">
                            <input type="text" placeholder="Search..." class="form-control">
                            <a href=""><i class="ti-search"></i></a>
                        </form>
                    </li>
                </ul>-->
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <div class="navbar-default sidebar nicescroll" role="navigation">
            <div class="sidebar-nav navbar-collapse ">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="ti-search"></i> </button>
                            </span>
                        </div>
                    </li>
                    <li>
                        <a href="dashboard.php" class="waves-effect"><i class="glyphicon glyphicon-fire fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="check_orders.php" class="waves-effect"><i class="ti-gift fa-fw"></i>Check Orders</a>
                    </li>
                    <li>
                        <a href="store_upload.php" class="waves-effect"><i class="ti-upload fa-fw"></i>Upload To Store</a>
                    </li>
                    <li>
                        <a href="store_stock.php" class="waves-effect"><i class="ti-home fa-fw"></i>Check Store</a>
                    </li>
                    <li>
                        <a href="customers.php" class="waves-effect"><i class="ti-face-smile fa-fw"></i>view Customers</a>
                    </li>
                    <li>
                        <a href="profile.php" class="waves-effect"><i class="ti-upload fa-fw"></i>Profile</a>
                    </li>
                    <!--
                      <li>
                        <a href="blank.html" class="waves-effect"><i class="ti-files fa-fw"></i> Blank Page</a>
                      </li>
                    -->

                </ul>
                <!--<div class="center p-20">
                    <span class="hide-menu"><a href="http://wrappixel.com/templates/myadmin/" target="_blank" class="btn btn-info btn-block btn-rounded waves-effect waves-light">Upgrade to Pro</a></span>
                </div>-->
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-12">
                        <h4 class="page-title">Welcome Electronics Store</h4>
                        <ol class="breadcrumb">
                            <li><a href="#">Store Upload</a></li>
                        </ol>
                    </div>

                </div>
                <div class="white-box">
                    <form class="form-horizontal form-material" action="/php/upload_product.php" method="post" id="product_form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-md-12">Product Name</label>
                            <div class="col-md-12">
                                <input type="text" name ="product_name" placeholder="Enter Product Name"  class="form-control form-control-line" required> </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Description</label>
                            <div class="col-md-12">
                                <textarea rows="5" name="description" placeholder="Enter Description"  class="form-control form-control-line" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12">Select Category</label>
                            <div class="col-sm-12">
                                <select class="form-control form-control-line " name = "category">
                                    <option value="computers">Computers</option>
                                    <option value="mobiles">Mobiles</option>
                                    <option value="accessories">Accessorries</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="file_1" class="col-md-12">Upload Images</label>
                            <div class="col-md-12">
                                <input type="file" class=" btn btn-basic form-control-line" name = "file_1" required>
                                <input type="file" class=" btn btn-basic form-control-line" name = "file_2" required>
                                <input type="file" class=" btn btn-basic form-control-line" name = "file_3" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Standard Price</label>
                            <div class="col-md-12">
                              <div class="input-group">
                              <span class="input-group-addon"><i><strike>N</strike></i></span>
                              <input type="number" name="standard_price" class="form-control form-control-line" required>
                              </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12">Selling Price</label>
                            <div class="col-md-12 ">
                                <div class="input-group">
                                <span class="input-group-addon"><i><strike>N</strike></i></span>
                                <input type="number" name="selling_price" class="form-control form-control-line" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Quantity</label>
                            <div class="col-md-12">
                                <input type="number" name="quantity"  class="form-control form-control-line" required >
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="submit" value="Upload Product" id="product_upload" class="btn btn-success">
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>
        <!-- /#page-wrapper -->
        <footer class="footer text-center"> 2017 &copy; Electronics Store </footer>
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <!--Nice scroll JavaScript -->
    <script src="js/jquery.nicescroll.js"></script>
    <!--Morris JavaScript -->
    <script src="bower_components/raphael/raphael-min.js"></script>
    <script src="bower_components/morrisjs/morris.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/myadmin.js"></script>
    <script src="js/dashboard1.js"></script> -->
    <script src="js/admin.js"></script>
</body>

</html>
