    <?php include('server.php');

$conn=mysqli_connect("localhost","root","","inventory")or die(mysql_error());

if (!isset($_SESSION['id'])){
   echo "<script>alert('Login First!'); location.href='login.php';</script>";
 }



    if(isset($_POST['submit'])){
            $current_pass= mysqli_escape_string($conn, $_POST['current_pass']);
            $new_pass = mysqli_escape_string($conn, $_POST['psw']);
            $firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
            $lastname = mysqli_real_escape_string($conn,$_POST['lastname']);
            $position = mysqli_real_escape_string($conn,$_POST['position']);
            $sessions = $_SESSION['id'];
            $hash_password = password_hash($new_pass, PASSWORD_DEFAULT);
            //connect db


            $queryget = mysqli_query($conn,"SELECT password FROM register WHERE id = '$sessions'" ) or die (mysqli_error());
            $row = mysqli_fetch_assoc($queryget);
            $oldpassword = $row['password'];
            $current_hash = password_verify($current_pass, $oldpassword);

            //check pass

            if($current_pass == $current_hash){
                $querychange = mysqli_query($conn,"UPDATE register SET 
                  password ='$hash_password', firstname='$firstname',lastname='$lastname',position='$position' WHERE id = '$sessions'");
                    if($querychange){
                        echo "<script>alert('Password has been changed!');document.location='profile_sd.php'</script>";
                    }
            }
            elseif ($current_hash != $current_hash) {
               $sql = "UPDATE register SET  password = '$hash_password', firstname =
               '$firstname', lastname = '$lastname',position='$position' WHERE id = '$sessions'";
                $result= mysqli_query($conn,$sql);
                   if($result){
                        echo "<script>alert('Record has been changed!');document.location='profile_sd.php'</script>";
                    }

            }
            else{
                echo '<script type="text/javascript">alert("Old password didnt match!");</script>';
            }
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
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
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
                        <li><a href="index_sd.php">Home</a></li>
                        <li><a href="supplier_sd.php">Suppliers</a>
                        <li><a href="item_sd.php">Items</a></li>
                        <li><a href="users_sd.php">Users</a></li>
                  
                        <li><a href="profile_sd.php" class="active" id="prof">Profile</a><ul class="sub-menu">
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
           <form method="post">
            <div class="form-group">
                    <input type="hidden" name="id"   value="<?php echo $_SESSION['id'] ?>">
                </div>
              <div class="form-group">
                    <label><b>Username</b></label>
                    <input type="text" name="username"  disabled class="form-control" value="<?php echo $_SESSION['id'] ?>">
                </div>
                <div class="form-group">
                    <label><b>First Name</b></label>
                    <input type="text" name="firstname" disabled class="form-control" value="<?php echo $_SESSION['firstname'] ?>">
                </div>
                <div class="form-group">
                    <label><b>Last Name</b></label>
                    <input type="text" name="lastname" disabled class="form-control" value="<?php echo $_SESSION['lastname'] ?>">
                </div>

                 <div class="form-group" >
                    <label><b>Current Password</b></label>
                     <input type="password" name="current_pass" class="form-control" required >        
                 </div>
                 <div class="form-group" >
                    <label><b>New Password</b></label>
                     <input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" class="form-control">     
                 </div>
                 <div id="message">
  <h6>Password must contain the following:</h6>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>

                <div class="form-group">
                    <label><b>Position</b></label>
                    <input type="text" name="position"  class="form-control" value="<?php echo $_SESSION['position'] ?>">
                </div>
                <div class="form-group">
                    <label><b>Login Type</b></label>
                    <input type="text" name="u_type" disabled class="form-control" value="<?php echo $_SESSION['u_type'] ?>">
                </div>
                <div class="form-group" >
                   <input type="submit" name="submit" value="Update Profile" class="btn btn-primary btn-block">

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
<script>
var myInput = document.getElementById("psw");
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
</html>