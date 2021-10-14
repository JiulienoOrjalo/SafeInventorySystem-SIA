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
                    <a href="#" class="in">Sign in</a>

                </div>
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="profile.php" >Profile</a>
                            <ul class="sub-menu">
                                <li><a href="#">Log out</a></li>
                            </ul>
                        </li>
                        <li><a href="supplier.php" class="active">Suppliers</a></li>
                        <li><a href="item.php">Items</a></li>
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
     <div class="container">
    <section class="jumbotron">
     <div class="cart-table">
            <form method="post">
                <table>
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Suppliers</th>
                            <th>Contact No.</th>
                            <th>Email</th>
                        </tr>

                    </thead>

                        <tbody>
                        <tr>
                            <td>
                                <div>
                                    <input type="text" value="Rakk Walna" class="productname">
                                </div>
                            </td>
                             <td>
                                <div>
                                    <input type="text" value="PC Cartel" class="productname">
                                </div>
                            </td>
                             <td>
                                <div>
                                    <input type="text" value="09162345995" class="productname">
                                </div>
                            </td>
                             <td>
                                <div>
                                    <input type="text" value="pccartel@yahoo.com" class="productname">
                                </div>
                            </td>
                        </tr>
                             <tr>
                            <td>
                                <div>
                                    <input type="text" value="Rakk Maris" class="productname">
                                </div>
                            </td>
                             <td>
                                <div>
                                    <input type="text" value="Easy Pc" class="productname">
                                </div>
                            </td>
                             <td>
                                <div>
                                    <input type="text" value="09162345995" class="productname">
                                </div>
                            </td>
                             <td>
                                <div>
                                    <input type="text" value="easypc@gmail.com" class="productname">
                                </div>
                            </td>
                        </tr>
                             <tr>
                            <td>
                                <div>
                                    <input type="text" value="Rakk Dagoub" class="productname">
                                </div>
                            </td>
                             <td>
                                <div>
                                    <input type="text" value="Enigma" class="productname">
                                </div>
                            </td>
                             <td>
                                <div>
                                    <input type="text" value="09162345995" class="productname">
                                </div>
                            </td>
                             <td>
                                <div>
                                    <input type="text" value="Enigma@gmail.com" class="productname">
                                </div>
                            </td>

                          
                        </tr>
                    </tbody>
                </table>
           
            </div>
            <section class="button-area">
     <div class="col-sm-5">
    <div class="container border-top-generic">
        <a href="#" class="genric-btn success" name="combtn">SAVE</a>
        <a href="#" class="genric-btn success" name="combtn">UPDATE</a>
        <a href="#bot" class="genric-btn success" name="combtn1" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">ADD</a>
        
    </div>

</div>
</section>

</section>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Add Record</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Product Name</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Suppliers</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
             <div class="form-group">
            <label for="message-text" class="col-form-label">Contact</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
             <div class="form-group">
            <label for="message-text" class="col-form-label">Email</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Add</button>
      </div>
    </div>
  </div>
</div>
   

    <!-- Page Add Section Begin -->
    <hr>
     <footer class="footer-section spad" id="bot">
        <div class="container" >
            
            <div class="newslatter-form" >
                <div class="row">
                    <div class="col-lg-12">
                       <h2><b>Supplier Section</b></h2><br>
                       <p>Helps you to manage information of different suppliers of the items including the contact numbers and email addresses for easy and fastest transaction purposes.</p>
                    </div>
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
</body>

</html>