<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">

  <style type="text/css">

    
body {
      font-family:"Century Gothic", CenturyGothic, AppleGothic, sans-serif;
   background-image: url("images/background.jpg") ;
   background-repeat: no-repeat;
  background-position: center center;
  background-attachment: fixed;
  background-size: cover;
  }

  .navbar {
  width: 100%;
  background-color:#283B8A;
  overflow: auto;
  align-items: center;
}


.navbar a:hover {
  background-color: #000;
}

.navbar a.active {
  background-color: #283B8A; }


@media screen and (max-width:700px) {
  .navbar a {
    float: none;
    display: block;
    width: 100%;
    text-align: left;
  }
}


  .logo {
  display:block; 
  margin-left: auto;
  margin-right: auto;
  width: 50%;
  margin-top: 50px;
  align-items: center;
  padding-left: 80px;

  }

  .header {
  width: 40%;
  margin: 50px auto 0px;
  color: white;
  background: #283B8A;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 10px;
 


  

}

.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #283B8A;
  border: none;
  border-radius: 5px;

}

.foot {
  color: white;
  background: #283B8A;
  height: 100px;
  margin-top: 150px;
}

.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}
form, .content {
  width:400px;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background-image: url("images/background.jpg");
  border-radius: 0px 0px 10px 10px;
  justify-content:  center; 
  text-align:   center; 
  align-items:  center; 
}
.input-group {
  margin: 10px 0px 10px 0px;
  text-align:   center; 
  justify-content:  center; 
  align-items:  center; 
  margin-right:   auto; 
  margin-left:  auto; 
  align-self: center;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;

}
.input-group input {
  height: 30px;
  width: 100%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
 
}

.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color:#283B8A; 
  color: white;
  
}


</style>
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>