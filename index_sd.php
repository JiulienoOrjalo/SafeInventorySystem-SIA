<?php include 'server.php'; 


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
    <link rel="tab icon" type="text/css" href="img/logo101.png" />
    <title>Safe | Inventory System</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
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

#border:hover{
     box-shadow: 0 8px 15px 0 rgba(0,0,0,0.5);
     cursor: pointer;
     


}

#border h2{
    margin-top: 20px;
    text-align: center;
    border: 3px solid gray;
    border-radius: 9px;
    color: black;
}
#border h2:hover{
    color: white;
    background-color: gray;
}
#prof{
    margin-right: 30px;
}

</style>

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

<body>
    <!-- Header Section Begin -->
<header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="index.php"><img src="img/logo102.jpg" alt=""></a>
                </div>
             
                 <div class="user-access">
                      
                </div>
                <nav class="main-menu mobile-menu">
                    <ul>
                         <li><a href="index_sd.php" class="active">Home</a></li>
                        <li><a href="supplier_sd.php">Suppliers</a>
                            
                       <li><a href="item_sd.php">Items</a></li>
                        <li><a href="users_sd.php">Users</a></li>
            
                        <li><a href="profile_sd.php" id="prof">Profile</a><ul class="sub-menu">
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
    
    <!-- Header End -->

    <!-- Hero Slider Begin -->
     <div class="container-fluid jumbotron">
        <section class="row " id="dash">
            
           
            <div class="col-sm-3" id="border">
                <img src="img/profilee.png">
                <a href="users_sd.php"><h2 id="ich2">USERS</h2></a> 
                <br>
                    <?php
                    $con=mysqli_connect('localhost','root','','inventory');

                    $sql="SELECT count(id) AS total FROM register";
                    $result=mysqli_query($con,$sql);
                    $values=mysqli_fetch_assoc($result);
                    $num_rows=$values['total'];
                    echo "<h1>",$num_rows,"</h1>";
                ?>
            </div>
                <div class="col-sm-3" id="border">
                <img src="img/items.png" id="items">
                <a href="item_sd.php"><h2 id="ich2">ITEMS</h2> </a> 
                <br>
                 <?php
                    $con=mysqli_connect('localhost','root','','inventory');

                    $sql="SELECT count(id) AS total FROM tbl_items";
                    $result=mysqli_query($con,$sql);
                    $values=mysqli_fetch_assoc($result);
                    $num_rows=$values['total'];
                    echo "<h1>",$num_rows,"</h1>";
                ?>
            </div>
               
                <div class="col-sm-3" id="border">
                      
                <img src="img/users.png" id="users">
                 <a href="supplier_sd.php"><h2 id="ich2">SUPPLIERS</h2></a> 
                <br>
                <?php
                    $con=mysqli_connect('localhost','root','','inventory');

                    $sql="SELECT count(id) AS total FROM info2";
                    $result=mysqli_query($con,$sql);
                    $values=mysqli_fetch_assoc($result);
                    $num_rows=$values['total'];
                    echo "<h1>",$num_rows,"</h1>";
                ?>
           
            </div>
           


       
    </section>
</div>
    


    
            <div class="footer-widget" style="margin-top: -5%;">
           
            </div>
        </div>
        <div style=" background: linear-gradient(rgb(163,194,224), rgb(57,48,111));" class="social-links-warp">
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


    </footer>
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