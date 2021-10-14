    <?php include('server.php'); 

if (!isset($_SESSION['id'])){
   echo "<script>alert('Login First!'); location.href='login.php';</script>";
 }

?>
<?php require_once('config.php');?>

<!DOCTYPE html>
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
#sam{
    text-decoration: none; 
    color: white; 
}
/* Tooltip container */
.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black; /* If you want dots under the hoverable text */
}

/* Tooltip text */
.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: #555;
  color: #fff;
  text-align: center;
  padding: 5px 0;
  border-radius: 6px;

  /* Position the tooltip text */
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -60px;

  /* Fade in tooltip */
  opacity: 0;
  transition: opacity 0.3s;
}

/* Tooltip arrow */
.tooltip .tooltiptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Show the tooltip text when you mouse over the tooltip container */
.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}
#prof{
    margin-right: 30px;
}
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: blue;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: gray;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
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
                         <li><a href="index.php" >Home</a></li>
                        <li><a href="supplier.php">Suppliers</a>
                            
                       <li><a href="item.php">Items</a></li>
                        <li><a href="users.php" class="active">Users</a></li>
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
                            <h1>Users</h1><br>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    
     
    <div class="col-lg-12 jumbotron">
     <div class="cart-table">
            <form class="form-horizontal" method="post" action="users.php">
           
                <input type="hidden" name="id" value="<?php echo $id;?>">
                <div class="form-row justify-content-center" >
                  
                 
                  <div class="form-group  col-md-2" style="display: inline-block;">
             
                    <input type="text" id="id" name="id" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required class="form-control" placeholder="ID">   
                </div>




                     <div class="form-group col-md-2" id="inputs">
                         <input type="text" name="firstname" id="name" class="form-control" placeholder="Firstname" required="" maxlength="100">
                    </div>
                     <div class="form-group col-md-2" id="inputs">
                         <input type="text" name="lastname" id="name" class="form-control" placeholder="Last Name" required="First Name" maxlength="100">
                    </div>
                     <div class="form-group col-md-2" id="inputs">
                         <input type="text" name="position" id="Position" class="form-control" placeholder="Position" 
                required="Position" maxlength="100">
                    </div>
                      <div class="form-group col-md-2" id="inputs">
                        <select name="u_type" class="form-control">
                          <option>Super Admin</option>
                          <option>Admin</option>
                          <option>User</option>
                        </select>
                    </div>

                   

                         <div class="form-group col-sm-2" id="btn_save">
                        <button type="submit" name="register" class="btn btn-primary">Register</button>
                        
                    </div>
                </div>
                <div id="message">
  <h6>Password must contain the following:</h6>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
        
<script>
var myInput = document.getElementById("id");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
            </form>
           
              
        
  
</div>
    <div class="col-lg-12 jumbotron">
     <div class="cart-table ">
           <form method="post" action="server.php" id="frm">
                
           
        
    <table>
        <thead>
             <th>ID</th>
             <th>First Name</th>
             <th>Last Name</th>
             <th>Position</th>
              <th>user Type</th>
             <th>Actions</th>
            
           
            
         

        </thead>
        <tbody>
            <?php


             while ($row = mysqli_fetch_array($result)){ ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['firstname'] ?></td>
                <td><?php echo $row['lastname'] ?></td>
                <td><?php echo $row['position'] ?></td>
                <td><?php echo $row['u_type'] ?></td>
                   <td>
                    
                    <a class="btn btn-danger" onclick="javascript:confirmationDelete($(this));return false;" href="users.php?del=<?php echo $row['u_id']; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>


                    <script type="text/javascript">
                        function confirmationDelete(anchor){
                            var conf = confirm("Are you sure you want to delete the account?");
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

  <script>
        $('#btndel').on('click', function(e){
          e.preventDefault();
          const href = $(this).attr('href')

         Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((results) => {
  if (results.value) {
    document.location.href = href;
  }
})
      })
  </script>
</body>

</html>

