<html>
<head>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
table,th,td{
	border: 1px ridge #ff7200;
	border-collapse:collapse;
	padding:16px;
	width:100%;
	color:#fff;
}
h1{
	text-align:center;
	border-color: #ff7200;  
  border-width: 3px;  
  border-style: inset;  
}

	* {
    margin: 0;
    padding: 0;
}

.main {
            display:none;
        }




  form{
  display:none;
  }
  .search{
	  display:none;
  }
  .content{
	  display:none;
  }
  .bttnn {
    width: 190px;
    height: 40px;
    background: #ff7200;
    border: none;
    margin-top: -2px;
	margin-bottom:10px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color: #fff;
    transition: 0.4s ease;
	margin-left:27cm;
}


</style>
  </head>
<body style="background: linear-gradient(to top,
                    rgba(0, 0, 0, 0.5) 50%,
                    rgba(0, 0, 0, 0.5) 50%),
					url(pic.jpg);
            background-position: center;
            background-size: cover;
            height: 13vh;">
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
<h1 style="color:#fff;"> 
<center><span class="glyphicon glyphicon-shopping-cart" style="color:#ff7200"></span>Your Orders</center></h1>
<?php
include('db.php');
error_reporting(E_ERROR | E_PARSE);
if ((include 'login.php') == TRUE) {

$query ="SELECT o.order_no,i.img,i.gross_weight,i.net_weight,i.category,i.sub_category,o.delivery_update from orders o inner join item i on o.item_no=i.item_no where user_name='".$_SESSION['login']."'";
$squery=mysqli_query($link,$query);
$count = mysqli_num_rows($squery);

if($count){
echo '<table> 
      <tr> 
          <th align="center"> <font face="Arial">Order Number</font> </th> 
		  <th align="center"> <font face="Arial">Image</font> </th> 
          <th align="center"> <font face="Arial">Details</font> </th> 
          <th align="center"> <font face="Arial">Delivery Update</font> </th> 
          

      </tr>';

if ($result = mysqli_query($link,$query)) {
    while ($row = $result->fetch_assoc()) {
        $field0name = $row["img"];
		$field1name = $row["order_no"];
		$field2name = $row["gross_weight"];
        $field3name = $row["net_weight"];
        $field4name = $row["category"];
        $field5name = $row["sub_category"]; 
		$field7name = $row["delivery_update"];
		$field6name=0;
        echo '<tr> 
                  <td>'.$field1name.'</td> 
				  <td><img src='.$field0name.' style="width:200px;height:200px;"></td> 
                  
				  <td>'.$field2name.' '.$field3name.' '.$field4name.' '.$field5name.'</td> 
                  <td>'.$field7name.'</td> 
              </tr>';
			  
    }
	
		
    $result->free();
} 
}
else{

echo "<script language='javascript'>alert('Please login to see your orders');window.location = 'login.php';</script>";

}
}

?>
</body>
</html>