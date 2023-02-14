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
<center style="color:#fff;"><span class="glyphicon glyphicon-shopping-cart" style="color:#ff7200"></span>SHOPPING BAG</center></h1>
<?php
include('db.php');
error_reporting(E_ERROR | E_PARSE);
if ((include 'login.php') == TRUE) {

$query ="SELECT c.item_no,c.price,c.quantity,i.img,i.gross_weight,i.net_weight,i.category,i.sub_category from cart c inner join item i on c.item_no=i.item_no where user_id='".$_SESSION['login']."'";
$squery=mysqli_query($link,$query);
$count = mysqli_num_rows($squery);

if($count){
echo '<table> 
      <tr> 
          <th align="center"> <font face="Arial">Image</font> </th> 
		  <th align="center"> <font face="Arial">Details</font> </th> 
          <th align="center"> <font face="Arial">Price</font> </th> 
          <th align="center"> <font face="Arial">Quantity</font> </th> 
          <th align="center"> <font face="Arial">Total Price</font> </th> 

      </tr>';

if ($result = mysqli_query($link,$query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["img"];
		$field2name = $row["gross_weight"];
        $field3name = $row["net_weight"];
        $field4name = $row["category"];
        $field5name = $row["sub_category"]; 
        $field6name = $row["price"];
        $field7name = $row["quantity"];
        $field8name = $row["price"]*$row["quantity"]; 
		$field9name=0;
        echo '<tr> 
                  <td><img src='.$field1name.' style="width:400px;height:400px;"></td> 
                  <td>Gross Weight:'.$field2name.' Net Weight:'.$field3name.' Category:'.$field4name.' Item:'.$field5name.'</td> 
				  <td>'.$field6name.'</td> 
                  <td>'.$field7name.'</td> 
                  <td>'.$field8name.'</td> 
				  <td><button style="font-size:15px;background-color: #ff7200;border: none;width: 50px;height: 30px; color:#fff;" type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-trash"></span> 
        </button></td>
				  
                  
              </tr>';
			  $field9name=$field9name+$field8name;
    }
	echo'<b><h3 style="margin-left:27cm;">Total Price :'.$field6name.'</h3></b>
                <a href="website.php"><button class="bttnn" name="proceed">PROCEED</button></a>';
	//if(isset($_POST['proceed'])){
		
    $result->free();
} 
}
else{
	?>
<center><img src="https://cdn-icons-png.flaticon.com/512/102/102661.png"  width="280" height="280" alt="centerted image">
            <center><h3><b> Your bag is Empty!</b></h3><h6><b>This feels too light! Go on, add your favourites</b></h6></center>
        <br><center><button class="btnn" style="margin-top:7px;"><a href="home1.php">Continue Shopping </a></button></center>
<?php
}
}

?>
</body>
</html>