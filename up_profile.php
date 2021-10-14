    <?php include('server.php');;
    


if (!isset($_SESSION['username'])){
   echo "<script>alert('Login First!'); location.href='login.php';</script>";
 } ?>
 
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
        <script type="text/javascript" src="bootstrap/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

  <style type="text/css">
        .verticalhorizontal {
        text-align: center;
        vertical-align: middle;
         border-collapse:separate; 
         border-spacing: 20px;
    }
    input.productname {
    border: 0;
    border-bottom: 1px solid #B0BCC2;
    background: none;
}
#dash{
    text-align: center;
    justify-content: center;

}
#border{
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  height: 500px;
  margin-left: 15px;


}
#users{
    height: 200px;
}
#items{
    height: 200px;
}

#ich2{
     font-family: 'Century Gothic', sans-serif;
    font-weight: bold;

}

#border h2{
    margin-top: 20px;
    text-align: center;
    border: 3px solid gray;
    border-radius: 9px;
    color: black;
      color: white;
    background-color: gray;

    box-shadow: 3px 1px 3px black;
}

#border{
    background-color: #CCCCCC;
}
#prof{
    margin-right: 30px;
}
#firstname{
    width: 100%;
}

</style>

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    
   <!-- Search model -->

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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="supplier.php">Suppliers</a>
                        <li><a href="item.php">Items</a></li>
                        <li><a href="users.php">Users</a></li>
                        <li><a href="help.php">Help</a></li>
                        <li><a href="profile.php" class="active" id="prof">Profile</a><ul class="sub-menu">
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
    <!-- Header Info End -->
 
<body class="whl">
<div class="container">
    <h1>Profile</h1>
</div>

<div class="container jumbotron">
    <div class="row">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-8">
           <form method="post" action="profile.php">
              <div class="form-group">
                    <label><b>Username</b></label>
                    <input type="text" name="username"  class="form-control" value="<?php echo $_SESSION['username'] ?>">
                </div>
                <div class="form-group">
                    <label><b>First Name</b></label>
                    <input type="text" name="firstname"  class="form-control" value="<?php echo $_SESSION['firstname'] ?>">
                </div>
                <div class="form-group">
                    <label><b>Last Name</b></label>
                    <input type="text" name="lastname"  class="form-control" value="<?php echo $_SESSION['lastname'] ?>">
                </div>
                    <div class="form-group">
                    <label><b>Password</b></label>
                    <input type="text" name="password"  class="form-control" value="<?php echo $_SESSION['password'] ?>">
                </div>
                <div class="form-group">
                    <label><b>Position</b></label>
                    <input type="text" name="position"  class="form-control" value="<?php echo $_SESSION['position'] ?>">
                </div>
                <div class="form-group">
                    <label><b>Login Type</b></label>
                    <input type="text" name="u_type"  class="form-control" value="<?php echo $_SESSION['u_type'] ?>">
                </div>
                <div class="form-group" >
                   <button class="btn btn-primary btn-block" name="save">Save profile</button>

                </div>
            </form>          
        </div>
        <div class="col-sm-2">
        </div>
    </div>
</div>



    <!-- Footer Section Begin -->
    
       
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