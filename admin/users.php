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
            margin-left: 25%;
            margin-top: -5%;
        }
        .form-horizontal{
            margin-top: 10%;
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
             
                 <div class="user-access">
                    <a><b>WELCOME</b></a>
                    <a href="login.php" class="in">Sign in</a>

                </div>
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="supplier.php">Suppliers</a>
                            
                        <li><a href="item.php">Items</a></li>
                        <li><a href="users.php" class="active">Users</a></li>
                        <li><a href="profile.php">Profile</a><ul class="sub-menu">
                                <li><a href="login.php">Log out</a></li>
                            </ul>
                        </li>
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
                <h3>REGISTRATION FORM</h3>
                <form class="form-horizontal" method="post" action="congrats.php">
            <div class="form-group row">
                <h5><label  class="col-sm- col-form-label" for="ID">User ID</label></h5>
                 <div class="col-sm-7">
                <input type="ID" name="ID" id="ID" class="form-control" placeholder="User ID" required="ID" maxlength="100">
            </div>
            </div>
            <div class="form-group row">
                <h5><label  class="col-sm- col-form-label" for="name">Last Name</label></h5>
                 <div class="col-sm-7">
                <input type="text" name="name" id="name" class="form-control" placeholder="Last Name" required="Last Name" maxlength="100">
            </div>
            </div>
            <div class="form-group row">
                <h5><label  class="col-sm- col-form-label" for="name">First Name</label></h5>
                 <div class="col-sm-7">
                <input type="text" name="name" id="name" class="form-control" placeholder="First Name" required="First Name" maxlength="100">
            </div>
            </div>
            <div class="form-group row">
                <h5><label  class="col-sm- col-form-label" for="Position">Position</label></h5>
                 <div class="col-sm-7">
                <input type="text" name="Position" id="Position" class="form-control" placeholder="Position" 
                required="Position" maxlength="100" style="margin-left: 19%;">
            </div>
            </div>
            <div class="form-group row">
                <h5><label  class="col-sm- col-form-label" for="password">Password</label></h5>
                 <div class="col-sm-7">
                <input type="Password" name="password" id="Password" class="form-control" placeholder="Password" required="Password" maxlength="100">
            </div>
            </div>
            <div class="form-group">
                
                <input type="submit" id="lbl" class="btn btn-success" name="register" value="REGISTER">
                
            </div>
            <a href="index.php"><input type="submit" id="btn" class="btn btn-danger" name="Back" value="CANCEL"></a> 
            
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