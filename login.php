<?php  
session_start(); 
if(isset($_SESSION['admin_sid']) || isset($_SESSION['customer_sid']))
{
	header("location:index.php");
}
else{
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <title>Login</title>

  
  <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
  
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  


  
  
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
      
    <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/layouts/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">

  
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  
</head>

<body class="cyan" style="background-image:url('images/bg1.jpg'); background-repeat:no-repeat; 
background-attachment: fixed; background-size: cover; ">


  <div class="logo">
  <h1 style="position:absolute; color:orange; margin-left: 420px; 
  margin-top: -115px;font-size: 50px;"><strong>HABIB's KITCHEN</strong></h1>
  
  </div>

  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form method="post" action="routers/router.php" class="login-form" id="form">
        <div class="row">
          <div class="input-field col s12 center">
            <p class="center login-form-text">Login to Order your food</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            
            <input name="username" id="username" type="text">
            <label for="username" class="center-align">Username</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            
            <input name="password" id="password" type="password">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">
			<a href="javascript:void(0);" onclick="document.getElementById('form').submit();" class="btn waves-effect waves-light col s12">Login</a>
          </div>
		  		<div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small">No account? <br><a href="register.php">Register Now!</a></p>
          </div>         
        </div>
        </div>


      </form>
    </div>
  </div>


      <div class="foot" style="position: absolute; color:white; font-size: 20px; margin-left: -150px; margin-top:70px ">
        <span>Copyright © 2020 <a class="a" href="#" target="_blank" style="color:orange ;">HABIB's KITCHEN &nbsp&nbsp</a></span>
        <span class="r"> Design and Developed by <a class="a" href="#" style="color:orange ;">哈比</a></span>
      </div>
    
 



  

  <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>

  <script type="text/javascript" src="js/materialize.min.js"></script>

  <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

 <script type="text/javascript" src="js/plugins.min.js"></script>
    
  <script type="text/javascript" src="js/custom-script.js"></script>

</body>
</html>
<?php
}
?>
