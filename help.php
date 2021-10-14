<?php include 'help_server.php'; 

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
#frm{
    text-align: center;
}
#border{
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  height: 500px;
  width: 100%;

}
.jumbotron{
    background-color: skyblue;
}
#prof{
    margin-right: 30px;
}



</style>




<body>
<?php if (isset($_SESSION['msg'])):  ?>
    <div class="msg">
        <?php
            echo $_SESSION['msg'];
            unset ($_SESSION['msg']);
        ?>
    </div>

<?php endif ?>
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
                         <li><a href="index.php">Home</a></li>
                        <li><a href="supplier.php">Suppliers</a>
                       <li><a href="item.php">Items</a></li>
              
                        <li><a href="help.php" class="active">Help</a></li>
                        <li><a href="profile.php" id="prof">Profile</a><ul class="sub-menu">
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
    <section>
        <div class="hero-items owl-carousel">
              <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>Help</h1><br>
                        </div>
                    </div>
                </div>
        </div>
    </section>
  
     <div class="container-fluid jumbotron">
        <section class="row " id="dash">
            
           <div class="col-sm-7">
                <img src="img/admin/login.png" height="275" width="700">
           </div>
              <div class="col-sm-5">
               <p style="color: black">
                    To access account, login using Employee ID
                     as your <br>  username and password in 
                    lowercase form.</p>
           </div>                  
    </section>

<hr>
<hr>
    <br>
    <br>

    <section class="row " id="dash">
               <div class="col-sm-5">
               <p style="color: black">
                   
                    After logging in, you'll be directed 
                     to the home page.</p>
           </div> 
           <div class="col-sm-7">
                <img src="img/admin/home.png" height="275" width="700">
           </div>
                            
    </section>
    <hr>
<hr>
      <br>
    <br>
        <section class="row " id="dash">
            
           <div class="col-sm-7">
                <img src="img/admin/users-home.png" height="275" width="700">
           </div>
              <div class="col-sm-5">
               <p style="color: black">
                       When you click Users, you'll be directed
                       <br>to the user page. </p>

           </div>                  
    </section>
    <hr>
<hr>
     <br>
    <br>

    <section class="row " id="dash">
               <div class="col-sm-5">
                 <p>
                    When you click Items, you'll be directed to 
                <br>the items page.</p>
           </div> 
           <div class="col-sm-7">
                <img src="img/admin/users.png" height="275" width="700">
           </div>
                            
    </section>
    <hr>
<hr>
      <br>
    <br>
        <section class="row " id="dash">
            
           <div class="col-sm-7">
                <img src="img/admin/items-home.png" height="275" width="700">
           </div>
              <div class="col-sm-5">
               <p>Items Page</p>
           </div>                  
    </section>
    <hr>
<hr>
     <br>
    <br>

    <section class="row " id="dash">
               <div class="col-sm-5">
                 <p>
                    When you click Suppliers, you'll be directed to the suppliers page.</p>
                    <p style="float: left;margin-top: 10%;">
                  Suppliers Page
                 </p>
           </div> 
           <div class="col-sm-7">
                <img src="img/admin/items.png" height="275" width="700">
           </div>
                            
    </section>
    <hr>
<hr>
      <br>
    <br>
        <section class="row " id="dash">
            
           <div class="col-sm-7">
                <img src="img/admin/suppliers-home.png" height="275" width="700">
           </div>
              <div class="col-sm-5">
               <p style="color: black">
                    To access account, login using Employee ID
                     as your <br>  username and password in 
                    lowercase form.</p>
           </div>                  
    </section>
    <hr>
<hr>
     <br>
    <br>

    <section class="row " id="dash">
               <div class="col-sm-5">
               <p style="color: black">
                    To access account, login using Employee ID
                     as your <br>  username and password in 
                    lowercase form.</p>
           </div> 
           <div class="col-sm-7">
                <img src="img/admin/suppliers.png" height="275" width="700">
           </div>
                            
    </section>
    <hr>
<hr>
      <br>
    <br>
        <section class="row " id="dash">
            
           <div class="col-sm-7">
                <img src="img/admin/profile.png" height="275" width="700">
           </div>
              <div class="col-sm-5">
               <p style="color: black">
                    To access account, login using Employee ID
                     as your <br>  username and password in 
                    lowercase form.</p>
           </div>                  
    </section>
    <hr>
<hr>
    
    <br>
    <br>

    <section class="row " id="dash">
               <div class="col-sm-5">
               <p style="color: black">
                    To access account, login using Employee ID
                     as your <br>  username and password in 
                    lowercase form.</p>
           </div> 
           <div class="col-sm-7">
                <img src="img/admin/logout.png" height="275" width="700">
           </div>
                            
    </section>
</div>
            
      <div class="footer-widget">
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