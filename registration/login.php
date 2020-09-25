<?php include('server.php') ?>
<!DOCTYPE html>
<head>
  <title>Registration system PHP and my SQL 
  </title>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
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
<body>

<div class="navbar">

  <a class="active" href="login.php"><img src="images/cornerstonelogo.jpeg" style="height: 70px;"></a>
     <h4 style="color: white" style="font-size: 40px;" style="justify-content: center;">CornerStone Booking System </h4> 
</div>

  <div class="header" style="padding-left: 10px">
    <h2>Log in </h2>
 
  </div>
<div class="container" style="padding-left: 0px;" style="padding-right: 0px">

  <form method="post" action="login.php">
    <?php include('errors.php'); ?>
    <div class="input-group" class="form-group">
      <label for="username">Username:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter username" name="username">
    </div>
    <div  class="input-group" class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>
   

    <button type="submit" class="btn" name="login_user"
     id="sendNewSms" disabled="disabled">Log in</button>

    <p>
       <a href="terms.html" class="form-group">Terms and Conditions </a><br>
       <label> I Agree<input type="checkbox" id="agree" name="agree" value="I AGREE" class="form-group "> </label>
  

    </p>
  </form>
</div>

<footer class="footer"><p>&copy; 2020 ciccc.com  Powered by Carlos A. Diaz <p></footer>

<script type="text/javascript">
  var checker = document.getElementById('agree');
 var sendbtn = document.getElementById('sendNewSms');
 // when unchecked or checked, run the function
 checker.onchange = function(){
if(this.checked){
    sendbtn.disabled = false;
} else {
    sendbtn.disabled = true;
}


};
  </script>

</body>
</html>