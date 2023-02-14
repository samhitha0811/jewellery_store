<?php
include('db.php');
if ((include 'login.php') == TRUE) {
		$findresult = mysqli_query($link, "SELECT * FROM signup WHERE email= '".$_SESSION['login']."'");
if($res = mysqli_fetch_array($findresult))
{
	$email=$res['email'];
$mobile = $res['mobile']; 
$fname = $res['first_name'];   
$lname = $res['last_name'];  
$image= $res['image'];
}
$find = mysqli_query($link, "SELECT * FROM billing_address WHERE Email= '".$_SESSION['login']."'");
if($r = mysqli_fetch_array($find))
{
$address = $r['Address']; 
$city = $r['City'];   
$state = $r['State'];  
$pincode= $r['Zip'];
}
}
?>

<!DOCTYPE HTML>
<html>

<head>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
	.main{
		display:none;
	}
	.mai {

    width: 100%;
    background: linear-gradient(to top,
            rgba(0, 0, 0, 0.5) 50%,
            rgba(0, 0, 0, 0.5) 50%),
        url(pic.jpg);
    background-position: center;
    background-size: cover;
 height: 130vh;
}
	b{
		color:#ff7200;
	}
	h2{
		font-size:45px;
		color:#ff7200;
	}
	
	</style>
</head>

<body>


        <div class="mai">
            <div class="navbar">
                <div class="icon">
                    <h2 class="logo">JEWELS</h2>
                </div>

                <div class="menu">
                    <ul>
                        <li><a href="account.php">ACCOUNT</a></li>
						<li><a href="user_orders.php">ORDERS</a></li>
                    <li><a href="wishlist.php">WISHLIST</a></li>
                    <li><a href="cart1.php">CART</a></li>
                    <li><a href="faqs.php">FAQs</a></li>
                    </ul>
				</div>
			</div>
			<div class="content">
			<center>
			<?php
			echo '
		
		<li class="li"> 
		
                  <td><img src='.$image.' style="width:70px;height:70px;"></td>
				  
		<td><a href="edit_profile.php" >
          <span class="glyphicon glyphicon-edit " style="color:#ff7200; font-size:30px;"></span> 
        </a></td><br>
				  <td><h4><b>User Name:</b>'.$email.'</td></h4><br>
                  <td><h4><b>First Name:</b>'.$fname.' </td></h4><br>
                  <td><h4><b>Last Name:</b>'.$lname.' </td></h4><br>
                  <td><h4><b>Mobile Number:</b>'.$mobile.' </td> </h4><br><br>
				  <h2>Address</h2>
				  <td><h4><b>Address:</b>'.$address.'</td></h4><br>
				  <td><h4><b>City:</b>'.$city.' </td></h4><br>
				  <td><h4><b>State:</b>'.$state.' </td></h4><br>
				  <td><h4><b>Pincode:</b>'.$pincode.'</td></h4>
				  
				                      
				  
					
              </li>';?>
			  </center>
			  </div>
			  </div>
</body>
</html>			