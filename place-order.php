<?php
include 'includes/connect.php';
include 'includes/wallet.php';
$total = 0;
	if($_SESSION['customer_sid']==session_id())
	{
$result = mysqli_query($con, "SELECT * FROM users where id = $user_id");
while($row = mysqli_fetch_array($result)){
$name = $row['name'];	
$address = $row['address'];
$contact = $row['contact'];
$verified = $row['verified'];
}
		?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <title>Provide Order Details</title>

  
  <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">

  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">

  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
 



  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    
  <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">


  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
       <style type="text/css">
  .input-field div.error{
    position: relative;
    top: -1rem;
    left: 0rem;
    font-size: 0.8rem;
    color:#FF4081;
    -webkit-transform: translateY(0%);
    -ms-transform: translateY(0%);
    -o-transform: translateY(0%);
    transform: translateY(0%);
  }
  .input-field label.active{
      width:100%;
  }
  .left-alert input[type=text] + label:after, 
  .left-alert input[type=password] + label:after, 
  .left-alert input[type=email] + label:after, 
  .left-alert input[type=url] + label:after, 
  .left-alert input[type=time] + label:after,
  .left-alert input[type=date] + label:after, 
  .left-alert input[type=datetime-local] + label:after, 
  .left-alert input[type=tel] + label:after, 
  .left-alert input[type=number] + label:after, 
  .left-alert input[type=search] + label:after, 
  .left-alert textarea.materialize-textarea + label:after{
      left:0px;
  }
  .right-alert input[type=text] + label:after, 
  .right-alert input[type=password] + label:after, 
  .right-alert input[type=email] + label:after, 
  .right-alert input[type=url] + label:after, 
  .right-alert input[type=time] + label:after,
  .right-alert input[type=date] + label:after, 
  .right-alert input[type=datetime-local] + label:after, 
  .right-alert input[type=tel] + label:after, 
  .right-alert input[type=number] + label:after, 
  .right-alert input[type=search] + label:after, 
  .right-alert textarea.materialize-textarea + label:after{
      right:70px;
  }
  </style>
</head>

<body>
  
  <header id="header" class="page-topbar">
        
        <div class="navbar-fixed">
            <nav class="navbar-color" style="background-color:#1b1b1b;">
                <div class="nav-wrapper">
                    <ul class="left">                      
                      <li><h1 class="logo-wrapper"><a href="index.php" class="brand-logo darken-1"><img src="images/materialize-logo.png" alt="logo"></a> <span class="logo-text">Logo</span></h1></li>
                    </ul>
                    <ul class="right hide-on-med-and-down">                        
                        <li><a href="#" class="waves-effect waves-block waves-light"><i class="mdi-editor-attach-money"><?php echo $balance;?></i></a>
                        </li>
                    </ul>						
                </div>
            </nav>
        </div>
        
  </header>
 

 
  <div id="main">

    <div class="wrapper">

    
      <aside id="left-sidebar-nav">
        <ul id="slide-out" class="side-nav fixed leftside-navigation">
            <li class="user-details cyan darken-2">
            <div class="row">
                <div class="col col s4 m4 l4">
                    <img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
                </div>
				<div class="col col s8 m8 l8">
                    <ul id="profile-dropdown" class="dropdown-content">
                        <li><a href="routers/logout.php"> Logout</a>
                        </li>
                    </ul>
                </div>
                <div class="col col s8 m8 l8">
                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown"><?php echo $name;?> <i class="mdi-navigation-arrow-drop-down right"></i></a>
                    <p class="user-roal"><?php echo $role;?></p>
                </div>
            </div>
            </li>
            <li class="bold"><a href="index.php" class="waves-effect waves-cyan"> Order Food</a>
            </li>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"> Orders Detail</a>
                            <div class="collapsible-body">
                                <ul>
								<li><a href="orders.php">All Orders</a>
                                </li>
								<?php
									$sql = mysqli_query($con, "SELECT DISTINCT status FROM orders WHERE customer_id = $user_id;");
									while($row = mysqli_fetch_array($sql)){
                                    echo '<li><a href="orders.php?status='.$row['status'].'">'.$row['status'].'</a>
                                    </li>';
									}
									?>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                	
            <li class="bold"><a href="details.php" class="waves-effect waves-cyan">Profile</a>
            </li>				
        </ul>
        <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
        </aside>
    

      <section id="content">

      
        <div id="breadcrumbs-wrapper">
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
               
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->


        <!--start container-->
				<div class="container">
          <p class="caption">Provide required delivery information and payment details to proceed...</p>
          <div class="divider"></div>
            <div class="row">
              <div class="col s12 m4 l3">
                
              </div>
<div>
                <div class="card-panel">
                  <div class="row">
                    <form class="formValidate col s12 m12 l6" id="formValidate" method="post" action="confirm-order.php" novalidate="novalidate">
                      <div class="row">
                        <div class="input-field col s12">
							<label for="payment_type">Payment Type</label><br><br>
							<select id="payment_type" name="payment_type">
									<option value="Wallet" selected>Debit Card</option>
									<option value="Cash On Delivery">Cash on Delivery</option>							
							</select>
                        </div>
                      </div>					
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-action-home prefix"></i>
							<textarea name="address" id="address" class="materialize-textarea validate" data-error=".errorTxt1"><?php echo $address;?></textarea>
							<label for="address" class="">Address</label>
							<div class="errorTxt1"></div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-action-credit-card prefix"></i>
							<input name="cc_number" id="cc_number" type="text" data-error=".errorTxt2" required>
							<label for="cc_number" class="">Card Number</label>
							<div class="errorTxt2"></div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-communication-vpn-key prefix"></i>	
							<input name="cvv_number" id="cvv_number" type="text" data-error=".errorTxt3" required>
							<label for="cvv_number" class="">CVV Number</label>								
							<div class="errorTxt3"></div>
                        </div>
                      </div>					  
                      <div class="row">
                        <div class="row">
                          <div class="input-field col s12">
                            <button class="btn cyan waves-effect waves-light right" type="submit" name="action" 
					onClick='alert("Order placed successfully!"+ "\n" + "(Note: payment cash in delivery will proceed to next step)");'>Confirm
                              
                            </button>
                          </div>
                        </div>
                      </div>
					  <?php
					  	foreach ($_POST as $key => $value)
						{
							if($key == 'action' || $value == ''){
								break;
							}
							echo '<input name="'.$key.'" type="hidden" value="'.$value.'">';
						}
					  ?>
                    </form>
                  </div>
                </div>
              </div>
            <div class="divider"></div>
            
          </div>
        

      </div>
	  
        <div class="container">
          <p class="caption">Order invoice</p>
          <div class="divider"></div>
          
<div id="work-collections" class="seaction">
<div class="row">
<div>
<ul id="issues-collection" class="collection">
<?php
    echo '<li class="collection-item avatar">
        <i class="mdi-content-content-paste red circle"></i>
        <p><strong>Name:</strong>'.$name.'</p>
		<p><strong>Contact Number:</strong> '.$contact.'</p>
        <a href="#" class="secondary-content"><i class="mdi-action-grade"></i></a>';
		
	foreach ($_POST as $key => $value)
	{
		if($value == ''){
			break;
		}
		if(is_numeric($key)){
		$result = mysqli_query($con, "SELECT * FROM items WHERE id = $key");
		while($row = mysqli_fetch_array($result))
		{
			$price = $row['price'];
			$item_name = $row['name'];
			$item_id = $row['id'];
		}
			$price = $value*$price;
			    echo '<li class="collection-item">
        <div class="row">
            <div class="col s7">
                <p class="collections-title"><strong>#'.$item_id.' </strong>'.$item_name.'</p>
            </div>
            <div class="col s2">
                <span>'.$value.' Pieces</span>
            </div>
            <div class="col s3">
                <span> $ '.$price.'</span>
            </div>
        </div>
    </li>';
		$total = $total + $price;
	}
	}
    echo '<li class="collection-item">
        <div class="row">
            <div class="col s7">
                <p class="collections-title"> Total</p>
            </div>
            <div class="col s2">
                <span>&nbsp;</span>
            </div>
            <div class="col s3">
                <span><strong> $ '.$total.'</strong></span>
            </div>
        </div>
    </li>';
		if(!empty($_POST['description']))
		echo '<li class="collection-item avatar"><p><strong>Note: </strong>'.htmlspecialchars($_POST['description']).'</p></li>';
?>
</ul>


                </div>
				</div>
                </div>
              </div>
            </div>
        </div>
       

      </section>
      
    </div>
    

  </div>
 
  <footer class="page-footer" style="background-color:#1b1b1b;">
    <div class="footer-copyright">
      <div class="container">
        <span>Copyright © 2020 <a class="grey-text text-lighten-4" href="#" target="_blank">HABIB's KITCHEN</a></span>
        <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="#">哈比</a></span>
        </div>
    </div>
  </footer>
   
    
    
    <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>    
   
    <script type="text/javascript" src="js/plugins/angular.min.js"></script>
    
    <script type="text/javascript" src="js/materialize.min.js"></script>
   
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery-validation/additional-methods.min.js"></script>	
	<script type="text/javascript" src="js/plugins/formatter/jquery.formatter.min.js"></script>   
    
    <script type="text/javascript" src="js/plugins.min.js"></script>
   
    <script type="text/javascript" src="js/custom-script.js"></script>
	<script type="text/javascript">
    $("#formValidate").validate({
        rules: {
            address: {
                required: true,
                minlength: 5
            },
            cc_number: {
                required: true,
                minlength: 16,
            },
            cvv_number: {
                required: true,
                minlength: 3,
			},
		},
        messages: {
           address:{
                required: "Enter a address",
                minlength: "Enter at least 5 characters"
            },	
           cc_number:{
                required: "Please provide card number",
                minlength: "Enter at least 16 digits",
            },	
           cvv_number:{
                required: "Please provide CVV number",
                minlength: "Enter at least 3 digits",		
            },				
		},
        errorElement : 'div',
        errorPlacement: function(error, element) {
          var placement = $(element).data('error');
          if (placement) {
            $(placement).append(error)
          } else {
            error.insertAfter(element);
          }
        }
     });
	  $('#cc_number').formatter({
          'pattern': '{{9999}}-{{9999}}-{{9999}}-{{9999}}',
          'persistent': true
      });
	  $('#cvv_number').formatter({
          'pattern': '{{9}}-{{9}}-{{9}}',
          'persistent': true
      });
		$('#payment_type').change(function() {
		if ($(this).val() === 'Cash On Delivery') {
		  $("#cc_number").prop('disabled', true);
		  $("#cvv_number").prop('disabled', true);		  
		}
		if ($(this).val() === 'Wallet'){
		  $("#cc_number").prop('disabled', false);
		  $("#cvv_number").prop('disabled', false);	
		}
		});
    </script>
</body>

</html>
<?php
	}
	else
	{
		if($_SESSION['admin_sid']==session_id())
		{
			header("location:admin-page.php");		
		}
		else{
			header("location:login.php");
		}
	}
?>
