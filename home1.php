<?php
include('db.php');
$prices_g=mysqli_query($link,"select * from price where category='gold'") or die(mysqli_error($link));
$result_g = mysqli_fetch_assoc($prices_g); 
$prices_s=mysqli_query($link,"select * from price where category='silver'") or die(mysqli_error($link));
$result_s = mysqli_fetch_assoc($prices_s); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>HOME PAGE</title>
    <link rel="stylesheet" href="home.css">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
	li.dropdown {
    display: inline-block;
  }
  .dropbtn{
	  cursor:pointer;
  }
  
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 250px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }
  
  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
  }
  
  .dropdown:hover .dropdown-content {
    display: block;
  }

  .slideshow item {
  height: 1000px;
}


	</style>
</head>
<body>

    <div class="main" style="height:140vh;">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">JEWELS</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="home1.php">HOME</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><div class="dropdown">
  <a onclick="myFunction()" class="dropbtn">MY ACCOUNT</a>					
  <div id="myDropdown" class="dropdown-content">
    <a href="account.php">Profile</a>
    <a href="wishlist.php">Wishlist</a>
    <a href="cart1.php">Cart</a>
  </div>
</div></li>
                </ul>
            </div>

            <!--<div class="search" style="width:280px;margin-right:50px;">
                <input class="srch" type="search" name="" placeholder="Search" style="width:100px;">
                <a href="#"> <button class="btn">Search</button></a>&nbsp;-->
				<div class="search" style="margin-right:1px; margin-top:5px;">
				<a href="login.php" style="color:#fff; font-size:22px;">
				<button type="submit" class="btnn" name="signup" id="submit" style="width:90px; font-size:15px; margin-top:3px;"><i class="glyphicon glyphicon-log-in"></i> Login</button></a>
				        <a href="logout.php" style="color:#fff; font-size:22px;">
                
				<button type="submit" class="btnn" name="signup" id="submit" style="width:90px; font-size:15px; margin-top:3px;"><i class="glyphicon glyphicon-log-out"></i> Logout</button></a>
            </div>
			
			<!--<button type="submit" class="btnn">LOGOUT<a href="logout.php"><i class="glyphicon glyphicon-log-out"></i></a></button>-->
			
 
        </div>
		
					
        <marquee id="mar" direction="right" scrollamount="8">TODAY'S GOLD PRICE : <?php echo $result_g['amount'];?> &emsp; &emsp;
          TODAY'S SILVER PRICE : <?php echo $result_s['amount'];?>
          <br><br> <br>
        </marquee>
            <div class="container">
            <p style="color:orange;"><b>CLICK HERE TO EXPLORE:</b></p>

                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                  </ol>
                      
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                      
                    <div class="item active">
                       <a href="silverpage.php"><img src="picsil.jpeg" alt="Los Angeles" style="width: 100%"></a>
                      <div class="carousel-caption">
                        <h3 style="color:orange"><b>SILVER ITEMS</b></h3>
                      </div>
                    </div>
                      
                    <div class="item">
                       <a href="goldpage.php"><img src="picgo.jpeg" alt="Chicago" style="width: 100%;"></a>
                      <div class="carousel-caption">
                        <h3 style="color:orange"><b>GOLD JEWELS</b></h3> 
                      </div>
                    </div>
                          
                    <div class="item">
                        <a href="diamondpage.php"><img src="picdai.jpeg" alt="New York" style="width:100%;"></a>
                      <div class="carousel-caption">
                        <h3 style="color:orange"><b>DIAMOND JEWELS</b></h3>
                      </div>
                    </div>
                    <div class="item">
                       <a href="customized.php"><img src="piccus.jpeg" alt="CUSTOMIZED JEWELLERY" style="width: 100%;"></a>
                      <div class="carousel-caption">
                        <h3 style="color:orange"><b>CUSTOMIZED JEWELLERY</b></h3> 
                      </div>
                  </div>
                      
                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
        </div>
</div> 
</body>
</html>