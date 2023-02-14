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
    min-width: 160px;
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

	</style>
</head>
<body>

    <div class="main">
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
    <a href="#home">Profile</a>
    <a href="#about">Wishlist</a>
    <a href="cart.php">Cart</a>
  </div>
</div></li>
                </ul>
            </div>

            <div class="search">
                <input class="srch" type="search" name="" placeholder="Type To text">
                <a href="#"> <button class="btn">Search</button></a>&nbsp;
				<a href="logout.php" style="color:#fff; font-size:22px;">
          <span class="glyphicon glyphicon-log-out"></span>
        </a>
            </div>
			
			<!--<button type="submit" class="btnn" name="logout"><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i></a></button>-->
			

        </div> 
		
					
        <marquee id="mar" direction="right" scrollamount="8">TODAY'S GOLD PRICE : <?php echo $result_g['amount'];?> &emsp; &emsp;
          TODAY'S SILVER PRICE : <?php echo $result_s['amount'];?>
        </marquee>
		
        <div class="content">
            <h1>JEWELLERY<br><span>STORE</span></h1>
            <p class="par">Welcome to our store <br> You name the design, You get the design!!!
                <br></p>

                <button class="cn"><a href="login.php">JOIN US</a></button>

                
                    </div>
                </div>
            </div>
            <hr class="dotted">
            <div class="container">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>
                      
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                      
                    <div class="item active">
                       <a href="silverpage.php"><img src="silverij.jpg" alt="Los Angeles" style="width: 100%"></a>
                      <div class="carousel-caption">
                        <h3>SILVER ITEMS</h3>
                      </div>
                    </div>
                      
                    <div class="item">
                       <a href="goldpage.php"><img src="gj.jpg" alt="Chicago" style="width: 100%;"></a>
                      <div class="carousel-caption">
                        <h3>GOLD JEWELS</h3> 
                      </div>
                    </div>
                          
                    <div class="item">
                        <a href="diamondpage.php"><img src="diamondj.jpg" alt="New York" style="width:100%;"></a>
                      <div class="carousel-caption">
                        <h3>DIAMOND JEWELS</h3>
                      </div>
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
		<hr class="dotted">
        <h1><p><center>CUSTOMIZED JEWELLERY</center></p></h1>
        <div class="item">
          <center><a href="customized.php"><img src="customized.jpg" alt="CUSTOMIZED JEWELLERY" width="1150" height="500"></a></center>
          <div class="carousel-caption">
          </div>
        </div> 
        <hr class="dotted">
        
</body>
</html>