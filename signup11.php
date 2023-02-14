<?php 
include("db.php");
date_default_timezone_set('Asia/Kolkata'); 

	if(isset($_POST['signup']))
	{	
$hhd_check = mysqli_query($link, "SELECT * from `signup` where mobile='".$_POST['mobile']."'") or die(mysqli_error($link));
	$count = mysqli_num_rows($hhd_check);
	$check = mysqli_fetch_assoc($hhd_check); 
		if($count==0)
			{


		$insert_sql="INSERT INTO `signup`(`first_name`, `last_name`, `email`, `mobile`, `location`,`password`) VALUES ('".$_POST['first_name']."','".$_POST['last_name']."','".$_POST['email']."','".$_POST['mobile']."','".$_POST['location']."','".$_POST['password']."')";
		
					
		$result=mysqli_query($link,$insert_sql);
		 $id=mysqli_insert_id($link); 
		$insert_userloginsql="INSERT INTO `login`(`userid`, `password`) VALUES('".$_POST['email']."','".$_POST['password']."')";		
			
		$userlogin_result=mysqli_query($link,$insert_userloginsql);
  
       
        
	
		if($result||$userlogin_result)
		{
echo "<script>alert('User Registration Successfully');window.location = 'login.php';</script>";
		}
	
		
	}
		else
		{
	echo "<script language='javascript'>alert('User is Already Registered');window.location = 'signup.php';</script>";
			
		}
		
	}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
    <META http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
	* {
    margin: 0;
    padding: 0;
}

.main {
    width: 100%;
    background: linear-gradient(to top,
            rgba(0, 0, 0, 0.5) 50%,
            rgba(0, 0, 0, 0.5) 50%),
        url(pic.jpg);
    background-position: center;
    background-size: cover;
    height: 100vh;
}

.navbar {
    width: 1200px;
    height: 15px;
    margin: auto;
}

.icon {
    width: 200px;
    float: left;
    height: 80px;
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
    margin-left: 52px;
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

.search {
    width: 300px;
    float: left;
    margin-left: 270px;
}

.srch {
    font-family: "Times New Roman";
    width: 200px;
    height: 40px;
    background: transparent;
    border: 1px solid #ff7200;
    margin-top: 13px;
    color: #fff;
    border-right: none;
    font-size: 16px;
    float: left;
    padding: 10px;
    border-bottom-left-radius: 5px;
    border-top-left-radius: 5px;
}

.btn {
    width: 100px;
    height: 40px;
    background: #ff7200;
    border: 2px solid #ff7200;
    margin-top: 13px;
    color: #fff;
    font-size: 15px;
    border-bottom-right-radius: 5px;
    border-bottom-right-radius: 5px;
    transition: 0.2s ease;
    cursor: pointer;
}

.btn:hover {
    color: #000;
}

.btn:focus {
    outline: none;
}

.srch:focus {
    outline: none;
}

.content {
    width: 1200px;
    height: auto;
    margin: auto;
    color: #fff;
    position: relative;
}

.content .par {
    padding-left: 20px;
    padding-bottom: 25px;
    font-family: Arial;
    letter-spacing: 1.2px;
    line-height: 30px;
}

.content h1 {
    font-family: "Times New Roman";
    font-size: 50px;
    padding-left: 20px;
    margin-top: 9%;
    letter-spacing: 2px;
}

.content .cn {
    width: 160px;
    height: 40px;
    background: #ff7200;
    border: none;
    margin-bottom: 10px;
    margin-left: 20px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    transition: 0.4s ease;
}

.content .cn a {
    text-decoration: none;
    color: #000;
    transition: 0.3s ease;
}

.cn:hover {
    background-color: #fff;
}

.content span {
    color: #ff7200;
    font-size: 65px;
}

form {
    width: 300px;
    height: 490px;
    background: linear-gradient(to top,
            rgba(0, 0, 0, 0.8) 50%,
            rgba(0, 0, 0, 0.8) 50%);
    position: absolute;
    top: -30px;
    left: 870px;
    transform: translate(0%, -5%);
    border-radius: 10px;
    padding: 35px;
}

form h2 {
    width: 220px;
    font-family: sans-serif;
    text-align: center;
    color: #ff7200;
    font-size: 22px;
    background-color: #fff;
    border-radius: 10px;
    margin: 2px;
    padding: 1px;
}

form input {
    width: 240px;
    height: 35px;
    background: transparent;
    border-bottom: 1px solid #ff7200;
    border-top: none;
    border-right: none;
    border-left: none;
    color: #fff;
    font-size: 15px;
    letter-spacing: 1px;
    margin-top: 20px;
    font-family: sans-serif;
}

form input:focus {
    outline: none;
}

::placeholder {
    color: #fff;
    font-family: Arial;
}

.btnn {
    width: 100px;
    height: 40px;
    left: 80%;
    background: #ff7200;
    border: none;
    margin-top: 30px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color: #fff;
    transition: 0.4s ease;
}

.btnn:hover {
    background: #fff;
    color: #ff7200;
}

.btnn a {
    text-decoration: none;
    color: #000;
    font-weight: bold;
}

form .link {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 17px;
    padding-top: 10px;
    text-align: center;
}

form .link a {
    text-decoration: none;
    color: #ff7200;
}

.liw {
    padding-top: 15px;
    padding-bottom: 15px;
    text-align: center;
}

.icons a {
    text-decoration: none;
    color: #fff;
}

.icons ion-icon {
    color: #fff;
    font-size: 20px;
    padding-left: 15px;
    padding-top: 15px;
    transition: 0.3s ease;
}

.icons ion-icon:hover {
    color: #ff7200;
}

h1,h2{
	font-weight:bold;
}

</style>
</head>

<body><u></u>
    <div>

        <div class="main">
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
    <a href="cart1.php">Cart</a>
  </div>
</div></li>
                    </ul>
                </div>

                <div class="search">
                    <input class="srch" type="search" name="">
                    <a href="#" rel="noreferrer"> <button class="btn">Search</button></a>
                </div>

            </div>
            <div class="content">
                <h1>JEWELLERY<br><span>STORE</span></h1>
                <p class="par">Welcome to our store <br> You name the design, You get the design!!!
                    <br>
                </p>

                <button class="cn"><a href="login.php" rel="noreferrer">JOIN US</a></button>

                <form action="" method="post">
                    <h2>SignUp Here</h2>
                    <div class="input-box">
                        <span class="details"></span>
                        <input type="text" placeholder="Enter first name" name="first_name" required />
                    </div>
                    <div class="input-box">
                        <span class="details"></span>
                        <input type="text" placeholder="Enter last name" name="last_name" required />
                    </div>
                    <div class="input-box">
                        <span class="details"></span>
                        <input type="text" placeholder="Enter email id" name="email"required />
                    </div>
                    <div class="input-box">
                        <span class="details"></span>
                        <input type="text" placeholder="Enter mobile number" name="mobile" required />
                    </div>
                    <div class="input-box">
                        <span class="details"></span>
                        <input type="text" placeholder="Enter location" name="location" required />
                    </div>
                    <div class="input-box">
                        <span class="details"></span>
                        <input type="password" placeholder="Enter password" name="password" required />
                    </div>
                    <button type="submit" class="btnn" name="signup" id="submit"><i class="glyphicon glyphicon-upload"></i>Signup</button>
                    
                </form>
            </div>
        </div>
    </div>
	
</body>
</html>