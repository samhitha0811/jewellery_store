<html>
<head>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
table,th,td{
	border: 0px ridge #ff7200;
	border-collapse:collapse;
	padding:16px;
	width:100%;
	
}
th{
	color:#ff7200;
}
h3,td{
	color:#fff;
}
h1{
	text-align:center;
	border-color: #ff7200;  
  border-width: 5px;  
  border-style: inset;  
}

	* {
    margin: 0;
    padding: 0;
}

.main {
            display:none;
        }

  .bttnn {
    width: 190px;
    height: 40px;
    background: #ff7200;
    border: none;    
    font-size: 18px;    
    cursor: pointer;
    color: #fff;
}
.li,.row {
    list-style:none;
    padding: 10px;
	color:#fff;

 }
 .row{
	 margin-left:65px;
 }
 


</style>
  </head>
<body style="background: linear-gradient(to top,
                    rgba(0, 0, 0, 0.5) 50%,
                    rgba(0, 0, 0, 0.5) 50%),
					url(pic.jpg);
            background-position: center;
            background-size: cover;">
<div>

        <div class="mai" style="margin: 0;
            padding: 0;
            width: 100%;
            background: linear-gradient(to top,
                    rgba(0, 0, 0, 0.5) 50%,
                    rgba(0, 0, 0, 0.5) 50%);
            background-position: center;
            background-size: cover;
            height: 13vh;">
            <div class="navbar">
                <div class="icon">
                    <h2 class="logo">JEWELS</h2>
                </div>

                <div class="menu">
                    <ul>
                        <li><a href="home1.php" rel="noreferrer">HOME</a></li>
                        <li><a href="contact.php" rel="noreferrer">CONTACT</a></li>
                        <li><div class="dropdown">
  <a onclick="myFunction()" class="dropbtn">MY ACCOUNT</a>					
  <div id="myDropdown" class="dropdown-content">
    <a href="account.php">Profile</a>
    <a href="wishlist.php">Wishlist</a>
    <a href="cart.php">Cart</a>
  </div>
</div></li>
                    </ul>
                </div>
				</div>
				</div>
<h1> 
<center style="color:#fff;"><span class="glyphicon glyphicon-heart" style="color:#ff7200"></span>WISHLIST</center></h1>
<?php
include('db.php');
error_reporting(E_ERROR | E_PARSE);
if ((include 'login.php') == TRUE) {

$query ="SELECT w.item_no,i.img,i.gross_weight,i.net_weight,i.wastage,i.labour,i.specification,i.category,i.sub_category from wishlist w inner join item i on w.item_no=i.item_no where w.userid='".$_SESSION['login']."'";
$squery=mysqli_query($link,$query);
$count = mysqli_num_rows($squery);

if($count){
/*echo '<table> 
      <tr> 
          <th align="center"> <font face="Arial">Image</font> </th> 
		  <th align="center"> <font face="Arial">Details</font> </th> 
          <th align="center"> <font face="Arial">Price</font> </th> 
          <th align="center"> <font face="Arial">Quantity</font> </th> 
          <th align="center"> <font face="Arial">Total Price</font> </th> 

      </tr>';*/

if ($result = mysqli_query($link,$query)) {
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
		
        echo '
		
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
				  
				                      
				  <td><div class="btn-group">
                        <button  style="font-size:15px;background-color: #ff7200;border: none;width: 60px;height: 40px; color:#fff;" name="fav">
						
          <center><span class="glyphicon glyphicon-heart" style="color:#fff; font-size:30px;"></span></center>
        </button>
                        <a href="#"><button onclick="addToCart(this)"  style="height:40px; width:120px; background-color:#ff7200; font-size:15px;">Add to Cart</button></a>
                    </div></td><br>
					
              </li>';
			  $cnt++;
			  if ( $cnt % 3 == 0 ) {
				  echo '</div><div class="row"><br><br>';
			  }
			  ?>

			  
			  
			 <?php }?></ul><?php
			  }
	
		
    $result->free();
} 
}
else{
	?>
<center><img src="https://cdn-icons-png.flaticon.com/512/102/102661.png"  width="280" height="280" alt="centerted image">
            <center><h3><b> You have no favourites</b></h3><h6><b>This feels too light! Go on, add your favourites</b></h6></center>
        <br><center><button class="btnn" style="margin-top:7px;"><a href="home1.php">Continue Shopping </a></button></center>
<?php
}


?>
</body>
</html>