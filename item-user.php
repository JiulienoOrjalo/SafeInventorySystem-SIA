<?php include('items_server.php'); 
    
    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $edit_state = true;

        $rec = mysqli_query($db, "SELECT * FROM tbl_items WHERE id=$id");
        $record = mysqli_fetch_array($rec);
        $photo=$record['photo'];
        $product_code = $record['product_code'];
        $product_name = $record ['product_name'];
        $product_color = $record ['product_color'];
        $product_size = $record ['product_size'];
        $product_price = $record ['product_price'];
        $start_quan = $record ['inventory'];
        $inventory = $record ['limitt'];
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
#inputs{
    text-align: center;
}
#btn_save{
    margin-top:2%;
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
label{
  font-size: 12px;
}
#example1 {
  border: 1px solid;
  padding: 10px;
  box-shadow: 5px 5px skyblue, 10px 10px gray, 15px 15px white;
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
                        <li><a href="supplier-user.php">Suppliers</a>
                       <li><a href="item-user.php" class="active">Items</a></li>
                        <li><a href="stock-user.php">Stocks<span class="badge">
              <?php
                    $con=mysqli_connect('localhost','root','','inventory');

                    $sql="SELECT count(id) AS total FROM tbl_stocks";
                    $result=mysqli_query($con,$sql);
                    $values=mysqli_fetch_assoc($result);
                    $num_rows=$values['total'];
                    echo "<h5>",$num_rows,"</h5>";
                ?>
                </span></a></li>
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
              $sql = "SELECT * FROM `tbl_items` WHERE CONCAT (`id`, `photo`, `product_code`, `product_name`, `product_color`, `product_size`, `product_price`, `start_quan`, `end_quan`, `supplier_code`, `inventory`, `limitt`, `adding`) LIKE '%$searchkey%'";
       }else{
            $sql ="SELECT * FROM tbl_items";
            $searchkey = "";

       }


     

      $results = mysqli_query($db,$sql);
        ?>
     
    <div class="col-lg-12 jumbotron">

     <div class="cart-table">

           <form method="post" action="items_server.php" id="frm" enctype="multipart/form-data">
            
                    <div>
                        <?php if ($edit_state == false): ?>
                        <span type="submit" name="save">
                          <div id="example1"><h4>Add Section</h4></div></span>
                        <?php else: ?>

                        <span type="submit" name="update">
                            <div id="example1"><h4>Update Section</h4></div></span>
                        <?php endif ?>
                    </div>
             <hr>
                <div class="form-row" id="inputs">
                    <input type="hidden" name="id" value="<?php echo $id;?>">

                    <div class="form-group col-md-2" id="inputs">

                        <label>Image</label>
                        <input type="file" name="file" class="form-control" value="<?php echo $photo; ?>">
                     </div>
                     &nbsp;&nbsp;
                     &nbsp;&nbsp;
                    <div class="form-group col-md-2" id="inputs">
                      <label>Product code</label>
                       <input type="text" class="form-control" name="product_code" required="" placeholder="Product code" value="<?php echo $product_code; ?>" >
                     </div>
                      &nbsp;&nbsp;
                     &nbsp;&nbsp;
                     <div class="form-group col-md-2" id="inputs">
                      <label>Product name</label>
                        <input type="text" class="form-control" name="product_name" required="" placeholder="Product name" value="<?php echo $product_name; ?>">
                    </div>
                     &nbsp;&nbsp;
                     &nbsp;&nbsp;
                     <div class="form-group col-md-2" id="inputs">
                      <label>Product color</label>
                        <input type="text" class="form-control" name="product_color" required="" placeholder="Product color" value="<?php echo $product_color; ?>">
                    </div>
                     &nbsp;&nbsp;
                     &nbsp;&nbsp;
                     <div class="form-group col-md-2" id="inputs">
                      <label>Product size</label>
                        <select name="product_size" required="" placeholder="Product size" class="form-control"  value="<?php echo $product_size ?>">
                             <option value="small">Small</option>
                            <option value="medium">Medium</option>
                            <option value="large">Large</option>
                            <option value="extra large">XL</option>
                        </select>
                       <!-- <input type="text" class="form-control" name="product_size" required="" placeholder="Product size" value="<?php echo $product_size ?>">-->
                    </div>
                     &nbsp;&nbsp;
                     &nbsp;&nbsp;
                     <div class="form-group col-md-2" id="inputs">
                      <label>Product price</label>
                        <input type="text" class="form-control" name="product_price" required="" placeholder="Product price" value="<?php echo $product_price; ?>">
                    </div>
                     &nbsp;&nbsp;
                     &nbsp;&nbsp;

                  
                    <div class="form-group col-md-2" id="inputs">
                      <label>Total Quantity</label>
                        <input type="text" class="form-control" name="start_quan" required="" placeholder="Total Quantity" value="<?php echo ($start_quan); ?>">
                    </div>
                
                

                     &nbsp;&nbsp;
                     &nbsp;&nbsp;
                     
                     <div class="form-group col-md-2" id="inputs">
                      <label>Quantity Sale</label>
                        <input type="text" class="form-control" name="end_quan" required="" placeholder="Quantity Sale" 
                        value="0">
                    </div>


                      <div class="form-group col-md-2" id="inputs" style="margin-left: 21px;">
                        <label>Limit</label>
                        <input type="text" class="form-control" name="limit" required="" 
                        placeholder="Limit" value="<?php echo $inventory; ?>">
                    </div>


                     &nbsp;&nbsp;
                     &nbsp;&nbsp;
                     <div class="form-group col-md-2" id="inputs">
                      <label>Supplier code</label>
                        <select class="form-control" name="supplier_code" required="" placeholder="Supplier code" value="<?php echo $supplier_code; ?>">
                         <?php while ($row1 = mysqli_fetch_array($result1)):;?>
                            <option><?php echo $row1[2]; ?></option>
                           <?php endwhile;?>
                        </select>
                    </div>

                      <?php

                        if (isset($_GET['edit'])) {
                         
                        echo '
                         <div class="form-group col-md-2" id="inputs">
                         <label>Add Total Quantity</label>
                        <input type="text" class="form-control" name="add" required="" placeholder="New Stock" value="0">
                    </div>
                      <div class="form-group col-md-2" id="inputs" style="margin-left: 21px;">
                      <label>Add Quantity Sale</label>
                        <input type="text" class="form-control" name="deduct" required="" 
                        placeholder="New Deduction" value="0" >
                    </div>';
                        }


                    ?>

                 

                    <div class="form-group col-sm-16" id="btn_save">
                        <?php if ($edit_state == false): ?>
                        <button type="submit" name="save" class="btn btn-success">Save</button>
                        <?php else: ?>
                        <button type="submit" name="update" class="btn btn-primary ">Update</button>
                        <?php endif ?>
                    </div>
                

                    <div class="form-group" col-sm-2 id="btn_save">
                       
                    </div>
                  
                </div>
                
            </form>
            
                <hr>
            
            
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
                    <!--   <a href="export1.php?export=true"><input type="submit" name="export" class="btn btn-success" value="EXPORT"></a> -->
            
              
            </div>  
        </div>
            </form>

        
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
             <th>Supplier Code</th>
          
            
            <th colspan="3">Action</th>

        </thead>


        <tbody >
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
                <td>
                    <a class="btn btn-success" onclick="javascript:confirmationedit($(this));return false;" href="item-user.php?edit=<?php echo $row['id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
              
                    <a class="btn btn-danger" onclick="javascript:confirmationDelete($(this));return false;" href="items_server.php?del=<?php echo $row['id']; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>

                       <script type="text/javascript">
                        function confirmationDelete(anchor){
                            var conf = confirm("Are you sure you want to Delete the record?");
                        if (conf)
                            window.location=anchor.attr("href");
                        }
                    </script>
                       <script type="text/javascript">
                        function confirmationedit(anchor){
                            var conf = confirm("Are you sure you want to Edit the record?");
                        if (conf)
                            window.location=anchor.attr("href");
                        }
                    </script>
                    

                </td>

            </tr>

            <?php }?>
        </tbody>
    </table>
 <?php

$data = array();
$view_querys = mysqli_query($db,"SELECT * FROM tbl_items");

                while ($open=mysqli_fetch_assoc($results))
                {
                  $data = $open;
                }
                ?>


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