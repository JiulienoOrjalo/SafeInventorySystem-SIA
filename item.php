<?php include('items_server.php'); 
    
    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $edit_state = true;

        $rec = mysqli_query($db, "SELECT * FROM tbl_items WHERE id=$id");
        $record = mysqli_fetch_array($rec);
       
        $product_code = $record['product_code'];
        $product_name = $record ['product_name'];
        $product_color = $record ['product_color'];
        $product_size = $record ['product_size'];
        $product_price = $record ['product_price'];
        $start_quan = $record ['start_quan'];
        $end_quan = $record ['end_quan'];
        $supplier_code = $record ['supplier_code'];
        $id = $record['id'];

    }
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
                       <li><a href="item.php" class="active">Items</a></li>

                        <li><a href="help.php">Help</a></li>
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
                            <h1>Items</h1><br>
                        </div>
                    </div>
                </div>
        </div>
    </section>
           <?php
       $db = mysqli_connect('localhost','root','','inventory');
       if (isset($_POST['search'])) {
           $searchkey= $_POST['search'];
           $sql = "SELECT * FROM `tbl_items` WHERE CONCAT(`product_code`, `product_name`, `product_color`, `product_size`, `product_price`, `start_quan`, `end_quan`, `supplier_code`, `inventory`, `limitt`) LIKE '%$searchkey%'";
       }else{
            $sql ="SELECT * FROM tbl_items";
            $searchkey = "";
       }
       if (isset($_POST['reff'])) {
           $sql ="SELECT * FROM tbl_items";
           $searchkey = "";
       }
        

        $results = mysqli_query($db,$sql);
        ?>
    <div class="col-lg-12 jumbotron">
     <div class="cart-table">
           <form method="post" id="frm" enctype="multipart/form-data">
                 
            <div class="row">
                  <div class="col-md-7">

                  </div>

            <div class="col-md-3">
                 <input type="text" name="search" class="form-control" placeholder="Search By Name"
            value="<?php echo $searchkey ?>"> 
            </div>
            <div class="col-md-2 text-left">
                 <button class="btn btn-primary">Search</button>
                
            </div>
    
             </div>
                
            </form>
            
                <hr>
        
    <table>
        <thead>
             <th>Photo</th>
             <th>Product Code</th>
             <th>Product Name</th>
             <th>Product Color</th>
             <th>Product Size</th>
             <th>Prouct Price</th>
             <th>Total Quantity</th>
             <th>Quantity Sale</th>
             <th>Inventory Sale</th>
             <th>Supplier</th>
          

        </thead>


        <tbody>
            <?php while ($row = mysqli_fetch_array($results)){ ?>
            <tr>
                <td><img src="<?php echo $row['photo'];?>" height="100" width="100"></td>   
                <td><?php echo $row['product_code'] ?></td>
                <td><?php echo $row['product_name'] ?></td>
                <td><?php echo $row['product_color'] ?></td>
                <td><?php echo $row['product_size'] ?></td>
                <td><?php echo $row['product_price'] ?></td>
                <td><?php echo $row['start_quan'] ?></td>
                <td><?php echo $row['end_quan'] ?></td>
                  <td><?php echo $row['inventory'] ?></td>
                <td><?php echo $row['supplier_code'] ?></td>
            </tr>

            <?php }?>
        </tbody>
    </table>


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