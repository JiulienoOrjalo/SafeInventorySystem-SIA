

<!doctype html>
<html lang="en">
<head>
	<title></title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/log.css">
	<link rel="stylesheet" type="text/css" href="js/log.js">
	<style type="text/css">
		p{
			text-align: justify;

		}
		img{
			height: auto;
		}
		a{
			color: #1b2107;
		}
		
		
		label{
			
			color: white;
		}
		body{
			margin-top: 8%;
			background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0)),url('form.jpg');
			background-repeat: no-repeat;
			background-position: center center;
			background-attachment: fixed;
			background-size: cover;
			
		}
		.jumbotron{
			background-color: rgba(0,0,0,0.5);
			border: 2px solid #f1f1f1;
		}
		h2,h1{
			color: white;
		}
		p{
			color: white;
		
		}
		#sign{
			color: gray;
		}
		img{
			height: 150px;
			margin-left: 90px;
		}

		

	</style>
</head>

<body>
	<div class="user">
    <header class="userheader">
        <img src="img/logo101.png">
    </header>
    
    <form class="form">
        <div class="form__group">
            <input type="text" placeholder="Username" class="form__input" />
        </div>
        
        <div class="form__group">
            <input type="email" placeholder="Email" class="form__input" />
        </div>
        
        <div class="form__group">
            <input type="password" placeholder="Password" class="form__input" />
        </div>
           <div class="form__group">
            <input type="password" placeholder="Confirm password" class="form__input" />
        </div>
        
        <button class="btn" type="button">Register</button>
    </form>
</div>
</body>
</html>
		