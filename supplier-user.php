<?php include('supplier_server.php'); 
    
    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $edit_state = true;

        $rec = mysqli_query($db, "SELECT * FROM info2 WHERE id=$id");
        $record = mysqli_fetch_array($rec);
        $supplier = $record['supplier'];
        $company = $record ['company'];
        $email = $record ['email'];
        $address = $record ['address'];
        $mobile = $record ['mobile'];
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
button{
    margin-top: 15%;
}
label{
    margin-left: -40%;
}
form{
    margin-top: -2%;
}
#search{
    margin-top: 10%;
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
                         <li><a href="index-user.php">Home</a></li>
                        <li><a href="supplier-user.php" class="active">Suppliers</a>
                            
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
                          <li><a href="help-user.php">Help</a></li>
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
    <section>
        <div class="hero-items owl-carousel">
              <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>Suppliers</h1><br>
                        </div>
                    </div>
                </div>
        </div>
    </section>
          <?php
       $db = mysqli_connect('localhost','root','','inventory');
       if (isset($_POST['search'])) {
           $searchkey= $_POST['search'];
              $sql = "SELECT * FROM `info2` WHERE CONCAT(`id`, `supplier`, `company`, `address`, `email`, `mobile`, `supplier_code`) LIKE '%$searchkey%'";
       }else{
            $sql ="SELECT * FROM info2";
            $searchkey = "";

       }
        $results = mysqli_query($db,$sql);
        ?>
    <div class="col-lg-12 jumbotron ">
     <div class="cart-table">
           <form method="post" action="supplier_server.php" id="frm">

                 <div class="col-lg-12">
                <div class="form-row" id="inputs">
                    <input type="hidden" name="id" value="<?php echo $id;?>">

                    <div class="form-group col-md-2" id="inputs">
                        <label>Supplier code</label>
                         <input type="text" class="form-control" name="supplier" required="" placeholder="Supplier code" value="<?php echo $supplier; ?>" >
                     </div>
                     <div class="form-group col-md-2" id="inputs">
                          <label>Company name</label>
                        <input type="text" class="form-control" name="company" required="" placeholder="Company name" value="<?php echo $company; ?>">
                    </div>
                     <div class="form-group col-md-2" id="inputs">
                          <label>Email Address</label>
                        <input type="email" class="form-control" name="email" required="" placeholder="Email Address" value="<?php echo $email; ?>">
                    </div>
                     <div class="form-group col-md-2" id="inputs">
                          <label>Address</label>
                        <input type="text" class="form-control" name="address" required="" placeholder="Address" value="<?php echo $address; ?>">
                    </div>
                     <div class="form-group col-md-2" id="inputs">
                          <label>Mobile Number</label>
                        <input type="text" class="form-control" name="mobile" required="" placeholder="Mobile" value="<?php echo $mobile; ?>">
                    </div>

                    <div class="form-group col-sm-2" id="btn_save">
                        <?php if ($edit_state == false): ?>
                        <button type="submit" name="save" class="btn btn-success btn-block ">Save</button>
                        <?php else: ?>
                        <button type="submit" name="update" class="btn btn-primary btn-block">Update</button>
                        <?php endif ?>

                    </div>
                </div>
                </div>
                 <div class="row">
                  <div class="col-md-7">

                  </div>

    
             </div>
            </form>

            <form method="post">
                <div class="row">
                <div class="col-md-7">
                    
                </div>
            <div class="col-md-3">
                 <input type="text" id="search" name="search" class="form-control" placeholder="Search By Name"
            value="<?php echo $searchkey ?>"> 
            </div>
            <div class="col-md-2 text-left">
                 <button class="btn btn-primary">Search</button>
              
            </div>
        </div>
            </form>
            
                <hr>
        <div class="col-lg-12" style="text-align: center;">
            
    <table>
        <thead>
             <th>Supplier Code</th>
             <th>Company Name</th>
             <th>Email Address</th>
             <th>Address</th>
             <th>Mobile</th>
            
            <th colspan="3">Action</th>

        </thead>


        <tbody>
            <?php while ($row = mysqli_fetch_array($results)){ ?>

            <tr>
                <td><?php echo $row['supplier'] ?></td>
                <td><?php echo $row['company'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['address'] ?></td>
                <td><?php echo $row['mobile'] ?></td>

                <td>
                    <a class="btn btn-success" href="supplier-user.php?edit=<?php echo $row['id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    <a class="btn btn-danger" onclick="javascript:confirmationDelete($(this));return false;" href="supplier_server.php?del=<?php echo $row['id']; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>


                    <script type="text/javascript">
                        function confirmationDelete(anchor){
                            var conf = confirm("Are you sure you want to delete the record?");
                        if (conf)
                            window.location=anchor.attr("href");
                        }
                    </script>

                </td>

            </tr>

            <?php }?>

    
        </tbody>
    </table>

</div>
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
    <script src="jquery-3.4.1.min.js"></script>
  <script src="sweetalert2.all.min.js"></script>


</body>

</html>