<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Bunny restaurant</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->
        

        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/animate/animate.css" />
        <link rel="stylesheet" href="assets/css/plugins.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <?php
        session_start();
        include_once("connection.php"); 
        ?>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
       
        
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <header id="home" class="navbar-fixed-top">
            <div class="header_top_menu clearfix">	
                <div class="container">
                    <div class="row">	
                        <div class="col-md-5 col-md-offset-3 col-sm-12 text-right">
                            <div class="call_us_text">
								<a href=""><i class="fa fa-clock-o"></i> We serve 24/7</a>
								<a href=""><i class="fa fa-phone"></i>0342 552 442</a>
							</div>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="head_top_social text-right">
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                                <a href=""><i class="fa fa-pinterest-p"></i></a>
                                <a href=""><i class="fa fa-youtube"></i></a>
                                <a href=""><i class="fa fa-phone"></i></a>
                                <a href=""><i class="fa fa-camera"></i></a>
                            </div>	
                        </div>

                    </div>			
                </div>
            </div>

            <!-- End navbar-collapse-->

            <div class="main_menu_bg">
                <div class="container"> 
                    <div class="row">
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand our_logo" href="?page=index"><img src="assets/images/logo.png" alt="" /></a>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a href="?page=index">Home</a></li>
                                        <li><a href="?page=index#abouts">About us</a></li>
                                       
                                    
                                        <li><a href="?page=login">Log in</a></li>
                                        <li><a href="?page=register">Register</a></li>
                                        <li><a href="?page=index#ourPakeg">Menu</a></li>
                                        
<!-- Bootstrap --> 
    <link rel="stylesheet" type="text/css" href="style.css"/>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <script language="javascript">
    function DeleteConfirm(){
        if(confirm("Are you sure?")){
            return true;
        }
        else{
            return false;
        }
    }
    </script>
        <form name="frm" method="post" action="">
        <h1>Product Category</h1>
        <p>
        <img src="assets/images/add.png" alt="Add new" width="16" height="16" border="0" /> <a href="?page=add_category"> Add</a>
        </p>
        <table id="tablecategory" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th><strong>No.</strong></th>
                    <th><strong>Category Name</strong></th>
                     <th><strong>Description</strong></th>
                    <th><strong>Edit</strong></th>
                    <th><strong>Delete</strong></th>
                </tr>
             </thead>

			<tbody>
            <?php
                include_once("connection.php");
                $NO = 1;
                $result = pg_query($conn,"SELECT * FROM category");
                while($row=pg_fetch_array($result, Null, PGSQL_ASSOC))
                {
            ?>
			<tr>
              <td class="cotCheckBox"><?php echo $NO;?></td>
              <td><?php echo $row["cat_name"];?></td>
              <td><?php echo $row["cat_des"];?></td>
              <td style='text-align:center'><a href="?page=update_category&&id=<?php echo $row["cat_id"];?>"><img src='assets/images/edit.png' border='0'  /> </a></td>
              <td style='text-align:center'><a href="?page=category_management&&function=del&&id=<?php echo $row["cat_id"];?>" onclick="return DeleteConfirm()"><img src='assets/images/delete.png' border='0' /> </a></td>
            </tr>
            <?php
            $NO++;
            }
            ?>
            <?php
                if(isset($_GET["function"])=="del"){
                    if(isset($_GET["id"])){
                        $id = $_GET["id"];
                        pg_query($conn, "DELETE From product where cat_id='$id'");
                        pg_query($conn, "DELETE From category where cat_id='$id'");
                    }
                }
            ?>
			</tbody>
        </table>  
        
        
        <!--Nút Thêm mới , xóa tất cả-->
        <div class="row" style="background-color:#FFF"><!--Nút chức nang-->
            <div class="col-md-12">
            	
            </div>
        </div><!--Nút chức nang-->
 </form>
   