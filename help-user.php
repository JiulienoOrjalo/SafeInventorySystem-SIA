<?php include('server-user.php');


if (!isset($_SESSION['id'])){
   echo "<script>alert('Login First!'); location.href='login.php';</script>";
 }
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="tab icon" type="text/css" href="img/logo101.png"/>
    <title>Safe | Inventory System</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<style >
    /*--------------SECTION SUPPLIERS--------------*/
input.productname {
    border: 0;
    border-bottom: 1px solid #B0BCC2;
    background: none;
}

        .cntr{
            padding: 10px;  
        }
       
        .center {
          display: block;
          margin-left: auto;
          margin-right: auto;
          width: 50%;
        }
        #lbl{
             display: block;
             margin-left: 15%;
              border-radius: 15px;
              font-family: sans-serif;  
              font-size: 16.5px;
              font-weight: bold; 
              border: none;
              margin-top: 10%;
        }
        #btn{
            display: block;
             margin-left: 60%;
              border-radius: 15px;
              font-family: sans-serif;  
              font-size: 16.5px;
              font-weight: bold; 
              color: white;
              border: none;
              margin-top: -7%;
        }
        .form-control{
             display: block;
             width: 35%;
        }
        input[type=ID]{
            border-radius: 12px;
            width: 90%;
            margin-left: 21%;
        }
        input[type=name]{
            border-radius: 12px;
            width: 90%;
        }
        input[type=text]{
            border-radius: 12px;
            width: 90%;
            margin-left: 12%;
        }
        input[type=password]{
            border-radius: 12px;
            width: 90%;
            margin-left: 15%;
        }
        #grad {
             background: linear-gradient(rgb(163,194,224), rgb(57,48,111));
        }
        h5{
             color: white;
        }
        .form-group{
            margin-top: 5%;
            margin-left: 12%;
        }
        .jumbotron{
            background-color: rgba(0,0,0,0.1);
            margin-left: -5%;

        }
        h3{
            margin-left: 45%;
            margin-top: -5%;
        }
        .form-horizontal{
            margin-top: 10%;
        }
        #prof{
    margin-right: 30px;
}


</style>




<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    
    <!-- Search model -->
	<div class="search-model">
		<div class="h-100 d-flex align-items-center justify-content-center">
			<div class="search-close-switch">+</div>
			<form class="search-model-form">
				<input type="text" id="search-input" placeholder="Search here.....">
			</form>
		</div>
	</div>
	<!-- Search model end -->

    <!-- Header Section Begin -->
<header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="index.php"><img src="img/logo102.jpg" alt=""></a>
                </div>
             
             
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li><a href="index-user.php">Home</a></li>
                        <li><a href="supplier-user.php">Suppliers</a>
                        <li><a href="item-user.php">Items</a></li>
                                   <li><a href="stock-user.php">Stocks<span class="badge">
              <?php
                    $con=mysqli_connect('localhost','root','','inventory');

                    $sql="SELECT count(id) AS total FROM tbl_stocks";
                    $result=mysqli_query($con,$sql);
                    $values=mysqli_fetch_assoc($result);
                    $num_rows=$values['total'];
                    echo "<h5>",$num_rows,"</h5>";
                ?>
                        <li><a href="help-user.php" class="active">Help</a></li>
                        <li><a href="profile-user.php" id="prof">Profile</a><ul class="sub-menu">
                                <li><a href="logout.php">Log out</a></li>
                            </ul>
                        </li>
                          <b>Welcome</b>
                                      <?php
                                        if(isset($_SESSION['firstname'])){
                                            echo ''.''.$_SESSION['firstname'];
                                        }
                                         if(isset($_SESSION['lastname'])){
                                            echo " ".$_SESSION['lastname'];
                                        }
                                     
                                        else{
                                            header("location:login.php");
                                        }
                                        
                                        ?>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Info Begin -->
        
    
<div class="cntr" id="grad">
    <section class="row">
        <div class="col-sm-3">

        </div>
         <div class="col-sm-7 jumbotron" id="gilid">
                <h3>HELP</h3>
                <div class="scroll">
                <form class="form-horizontal" method="post" action="">
                    <p style="color: black;">Inventory management is the part of supply chain management that aims to always have the right products in the right quantity for sale, at the right time. When done effectively, businesses reduce the costs of carrying excess inventory while maximizing sales. Good inventory management can help you track your inventory in real time to streamline this process.</p>
                    <p style="color: black;">
                    By effectively managing your inventory you can have the right products in the right quantity on hand and avoid products being out of stock and funds being tied up in excess stock. You can also ensure your products are sold in time to avoid spoilage or obsolescence, or spending too much money on stock that’s taking up space in a warehouse or stockroom.</p>

                    
          
            </div>
            
</form>
</div>
            <div class="footer-widget">
           
            </div>
        </div>
        <div class="social-links-warp">
            <div class="container">
                <div class="social-links">
                    <a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
                    <a href="" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
                    <a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
                    <a href="" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
                    <a href="" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
                    <a href="" class="tumblr"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a>
                </div>
            </div>


    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>