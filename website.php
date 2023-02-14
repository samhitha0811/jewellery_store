<?php
	include('db.php');
    // Connect to the database
    //$host = "localhost";
    //$username = "root";
    //$password = "root";
    //$dbname = "website";

    //$conn = mysqli_connect($localhost, $root, $root, $website);

    // Check connection
    //if (!$conn) {
      //  die("Connection failed: " . mysqli_connect_error());
    //}
	if ((include 'login.php') == TRUE) {
		$find = mysqli_query($link, "SELECT * FROM billing_address WHERE Email= '".$_SESSION['login']."'");
if($r = mysqli_fetch_array($find))
{
$address = $r['Address']; 
$city = $r['City'];   
$state = $r['State'];  
$pincode= $r['Zip'];
$email=$r['Email'];
$name=$r['Fullname'];
$ph=$r['Phno'];
}
if(isset($_POST['checkout'])){
    // Get the data from the form
  
    $Nameoncard = $_POST['cardname'];
    $cardnumber = $_POST['cardnumber'];
    $Expmonth = $_POST['expmonth'];
    $Expyear = $_POST['expyear'];
    $cvv = $_POST['cvv'];
    
    
    


    // Insert the data into the first table '".$_POST['email']."'
	//$g_update  = mysqli_query($link, "UPDATE `price` SET amount='".$_POST['amt']."'where category='".$_POST['category']."'") or die(mysqli_error($link));
    $sql1 =  mysqli_query($link, "UPDATE `billing_address` SET Fullname='".$_POST['fullname']."',Phno= '".$_POST['phone']."',Address= '".$_POST['address']."',City= '".$_POST['city']."',State= '".$_POST['state']."',Zip= '".$_POST['zip']."'")or die(mysqli_error($link));
    //if (!mysqli_query($link, $sql1)) {
      //  echo "Error: " . $sql1 . "<br>" . mysqli_error($link);
    //}
	

    

    // Insert the data into the second table
    $sql2 = "INSERT INTO payment (Nameoncard, cardnumber, Expmonth, Expyear, cvv) VALUES ('$Nameoncard', '$cardnumber', '$Expmonth', '$Expyear','$cvv')";
    if (!mysqli_query($link, $sql2)) {
        echo "Error: " . $sql2 . "<br>" . mysqli_error($link);
    } 
	$s1=mysqli_query($link,"select * from billing_address where Fullname='".$_POST['fullname']."'") or die(mysqli_error($link));
	$count1 = mysqli_num_rows($s1);
	$s2=mysqli_query($link,"select * from payment where cardnumber='$cardnumber'") or die(mysqli_error($link));
	$count2 = mysqli_num_rows($s2);
	if($count1==$count2){
		echo "<script>alert('Payment successful');</script>";
	}
}

    // Close the connection
    mysqli_close($link);
	}
?>




<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  color: white;
  font-size: 20px;
  padding: 8px;
  background-image: url("D:/website/pic.jpg");
  background-repeat: no-repeat;
  margin-left:20px;

}
.main{
	display:none;
}
form{
	background:none;
	margin-left:-22.5cm;
	margin-top:4cm;
	width:75%
}
form input{
	color:black;
}


* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: none;
  padding: 5px 20px 15px 20px;
  border: 1px solid rgba(146, 38, 18, 0.445);
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #ff7220;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: royalblue;
  border-color: black;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
  margin-top:19cm;
}

.btn:hover {
  background-color: #ff7220;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}
.tBtn {
  background-color: #ff7220;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  
}

.Btn:hover {
  opacity: 1;
}

span.price {
  float: right;
  color: #808080;
}




@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}

label,input,p{
	color:#ff7200;
}
</style>
</head>
<body>

<h2 style="color:#ff7200;">Payments Page Form</h2>



<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="">
      
        <div class="row">
          <div class="col-50">
            <h3 style="color:#ff7200;">Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" value="<?php echo $name;?>">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" value="<?php echo $email;?>">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" value="<?php echo $address;?>">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" value="<?php echo $city;?>">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" value="<?php echo $state;?>">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" value="<?php echo $pincode;?>">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3 style="color:#ff7200;">Payment </h3>
            <p>Choose your Payments method :</p>    
            <script>
      function enableSubmit() {
        var checkboxes = document.querySelectorAll("input[type='checkbox']");
        var submitBtn = document.querySelector("input[type='submit']");
        var checkedCount = 0;

        for (var i = 0; i < checkboxes.length; i++) {
          if (checkboxes[i].checked) {
            checkedCount++;
          }
        }

        if (checkedCount === checkboxes.length) {
          submitBtn.disabled = false;
        } else {
          submitBtn.disabled = true;
        }
      }
    </script>
    <form style="color:#ff7200;">
     <p> <input type="checkbox" onclick="enableSubmit()">Cash On Delivery</p><br>
      <input onclick="myFunction()" type="submit" value="Pay" disabled>

<script>
function myFunction() {
  alert("Your Order Placed Successfully");
  
}
</script>
        
    </form>
  
          
            <p>By Continuing the Payment you agree to our <a href="#">Terms & Privacy</a>.</p>
              
            </form>
            
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <button type="submit" class="btn">Continue to checkout</button>
      
    </div>
  </div>
  <div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p><a href="#">Product 1</a> <span class="price">$15</span></p>
      <p><a href="#">Product 2</a> <span class="price">$5</span></p>
      <p><a href="#">Product 3</a> <span class="price">$8</span></p>
      <p><a href="#">Product 4</a> <span class="price">$2</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
    </div>
  </div>
</div>

</body>
</html>