<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ITEMS </title>
        <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    * {
  margin: 0;
  padding: 0;
  
}

.main {
  width: 100%;
  background: linear-gradient(
      to top,
      rgba(0, 0, 0, 0.5) 50%,
      rgba(0, 0, 0, 0.5) 50%
    );
  background-position: center;
  background-size: cover;
  height: 15vh;
}

.navbar {
  width: 1200px;
  height: 75px;
  margin: auto;
}

.icon {
  width: 200px;
  float: left;
  height: 70px;
}

.logo {
  color: #ff7200;
  font-size: 35px;
  font-family: Arial;
  padding-left: 20px;
  float: left;
  padding-top: 10px;
  margin-top: 5px;
}

.menu {
  width: 400px;
  float: left;
  height: 70px;
}
ul {
  float: left;
  display: flex;
  justify-content: center;
  align-items: center;
}

ul li {
  list-style: none;
  margin-left: 62px;
  margin-top: 27px;
  font-size: 14px;
}

ul li a {
  text-decoration: none;
  color: #fff;
  font-family: Arial;
  font-weight: bold;
  transition: 0.4s ease-in-out;
}

ul li a:hover {
  color: #ff7200;
}
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
.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}


td{
	color:#ff7200;
}
.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clear floats after image containers */


 .li,.row {
    list-style:none;
    padding: 10px;
	
 }
 .row{
	 margin-left:65px;
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
                        <li><a href="home1.html">HOME</a></li>
                        <li><a href="contact.html">CONTACT</a></li>
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
    

    
            </div>
            </div>
        <div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">??</a>
  
  
  <a style="color:#ff7200;">SILVER ITEMS
    <i class="fa fa-caret-down"></i>
  </a>
	<a href="silver.php">SILVER JEWELLERY</a>
    <a href="s_poojaitems.php">POOJA ITEMS</a>
    <a href="s_giftitems.php">GIFT ITEMS</a>
    <a href="s_chains.php">CHAINS</a>
    <a href="s_anklets.php">ANKLETS</a>
    <a href="s_bangles.php">BANGLES</a>
  
  <a style="color:#ff7200;">GOLD ITEMS
    <i class="fa fa-caret-down"></i>
  </a>
	<a href="gold.php">GOLD JEWELLERY</a>
    <a href="g_necklace.php">NECKLACES</a>
    <a href="g_pendents.php">PENDANTS</a>
    <a href="g_chains.php">CHAINS</a>
    <a href="g_earrings.php">EARRINGS</a>
    <a href="g_bangles.php">BANGLES</a>
  
  <a style="color:#ff7200;">DIAMOND ITEMS
    <i class="fa fa-caret-down"></i>
  </a>
	<a href="diamond.php">DIAMOND JEWELLERY</a>
    <a href="d_necklace.php">NECKLACES</a>
    <a href="d_earrings.php">EARRINGS</a>
    <a href="d_pendents.php">PENDANTS</a>
    <a href="d_bangles.php">BANGLES</a>
    <a href="d_rings.php">RINGS</a>
  
  
</div>

<div id="man">

  <button class="openbtn" onclick="openNav()">???</button></div>
  <script>
    function openNav() {
      document.getElementById("mySidebar").style.width = "250px";
      document.getElementById("main").style.marginLeft = "250px";
    }
    
    function closeNav() {
      document.getElementById("mySidebar").style.width = "0";
      document.getElementById("main").style.marginLeft= "0";
    }
    </script>
	<p id = "GFG_DOWN" style =
            "color:green; font-size: 20px; font-weight: bold;">
        </p>
    <script>
            var el_up = document.getElementById("GFG_UP");
            var el_down = document.getElementById("GFG_DOWN");
            
          
            function GFG_click(clicked) {
                el_down.innerHTML = clicked;
            }        
        </script>  
        
            <h1  style="color: #ff7200; text-align:center;">Shop Products</h1><br>
			
                <div class="product-box">
				
			<?php
include('db.php');


if (isset($_POST['cart'])){
	print_r($_POST['product_id']);
    if(isset($_SESSION['addtocart'])){

        $item_array_id = array_column($_SESSION['addtocart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'index.php'</script>";
        }else{

            $count = count($_SESSION['addtocart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['addtocart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['addtocart'][0] = $item_array;
		print_r($item_array);
        print_r($_SESSION['addtocart']);
    }
}




//if ((include 'login.php') == TRUE) {
/*if(isset($_POST['cart']))
	{
		$insert_sql="INSERT INTO `cart`(`item_no`, `quantity`, `user_id`) VALUES ('".$_POST['product_id']."','1','samhitha0811@gmail.com')";
	}*/
//}
$query ="SELECT * from `item`";
$squery=mysqli_query($link,$query);
$count = mysqli_num_rows($squery);
$g_amt="SELECT amount FROM `price` WHERE category='gold'";
$g_res=mysqli_query($link,$g_amt);
$g_cnt=mysqli_num_rows($g_res);

if($g_cnt){
	if($g_res=mysqli_query($link,$g_amt)){
		$g_cn=0;
		while($g_r=$g_res->fetch_assoc()){
		$g_price=$g_r["amount"];
		}
	}
}
if($count){
if ($result = mysqli_query($link,$query)) {
	$c=1;
	$cnt=0;?>
	<ul class="flex-3-cols"><?php
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["item_no"];
		$field2name = $row["img"];
		$field3name = $row["gross_weight"];
		$field4name = $row["net_weight"];
		$field5name = $row["wastage"];
        $field6name = $row["labour"];
        $field7name = $row["specification"];
        $field8name = $row["category"]; 
		$field9name = $row["sub_category"];
		//$price=mysqli_query($link,"select amount from price where category=$field8name");
		/*if($row["category"]=="silver"){
		$field10name=$field4name+$field5name*$s_price+$field6name;}
		else*/
		//if($field8name=="gold"){
		$field10name=$field4name+$field5name*$g_price+$field6name;//}
		
//		$cnt++;
		//if ( $cnt % 3 == 0 ) echo '<tr></tr>';
	

//function component($productname, $productprice, $productimg, $productid){
    //$element = 

       echo'
		<form>
		<li class="li"> 
		
		<a href='.$field2name.' target="_blank">
                  <td><img src='.$field2name.' style="width:300px;height:300px;"></td></a><br>
				  <td><b>Item Number:</b>'.$field1name.'</td><br>
                  <td><b>Gross Wt:</b>'.$field3name.' </td><br>
				  
                  <td><b>Net Wt:</b>'.$field4name.' </td><br>
                  <td><b>West Wt:</b>'.$field5name.' </td> <br>
				  <td><b>Labour:</b>'.$field6name.'</td><br>
				  <td>'.$field7name.' -</td>
				  <td>'.$field8name.' -</td>
				  <td>'.$field9name.'</td><br>
				  <td><b>Amount:</b>'.$field10name.'/-</td><br>
				                      
				  <td><div class="btn-group">
                        <button style="font-size:15px;background-color:#ff7200;border: none;width: 60px;height: 40px; color:#fff;" name="fav">
						
          <center><span class="glyphicon glyphicon-heart-empty" style="color:#fff; font-size:30px;"></span></center>
        </button>
                        <button type="submit" name="cart" "style="color:#fff;">Add to Cart</button>
						<input type="hidden" name="product_id" value='.$field1name.'>
					
                    </div></td><br>
					
              </li>
			  </form>';
			  //echo element;
			  
			  $c++;
			  $cnt++;
			  if ( $cnt % 3 == 0 ) {
				  echo '</div><div class="row"><br><br>';
			  }
			  ?>

			  
			  
			 <?php }?></ul><?php
			  }
}
			  ?>
			  </body>
			  </html>