<?php
include("db.php");
if ((include 'login.php') == TRUE) {
if(isset($_POST['upload']))
{	
$findresult = mysqli_query($link, "SELECT * FROM signup WHERE email= '".$_SESSION['login']."'");
if($res = mysqli_fetch_array($findresult))
{
	$email=$res['email'];
}
	$custom_insert  ="INSERT INTO `customize`(`category`, `text`, `image` , `mobile_no`,`user`) VALUES ('".$_POST['category']."','".$_POST['text']."','".$_POST['uploadfile']."','".$_POST['mobile_no']."','".$_SESSION['login']."')";
	$result=mysqli_query($link,$custom_insert);
		 $id=mysqli_insert_id($link); 
			$login_check = mysqli_query($link, "SELECT * from `customize` where category='".$_POST['category']."' and mobile_no='".$_POST['mobile_no']."'") or die(mysqli_error($link));
			$count = mysqli_num_rows($login_check);
	if($count==1)
	{
		
echo "<script>alert('Updated successfully');</script>";

      }else {
         echo "<script>alert('Updation failed');</script>";

      }
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>CUSTOMIZED JEWELLERY</title>
    <link rel="stylesheet" href="frame1.css">
    <meta charset="utf-8">
<style>
.main{
	display:none;
}

    body {
  background-image: url("pic.jpg");
  background-color: #cccccc;
}
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 180px;
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
  .content {
    width: 120px;
    height: auto;
    margin: 12px;
    color: #fff;
    position: relative;
}


form {
    width: 400px;
    height: 300px;
    background: linear-gradient(to top,
            rgba(0, 0, 0, 0.8) 50%,
            rgba(0, 0, 0, 0.8) 50%);
    position: absolute;
    top: 200px;
    left: 420px;
    transform: translate(0%, -5%);
    border-radius: 10px;
    padding: 35px;
}

form h2 {
    width: 300px;
    font-family: sans-serif;
    text-align: center;
    color: #ff7200;
    font-size: 22px;
    background-color: #fff;
    border-radius: 10px;
    margin: 12px;
    padding: 1px;
}

form input {
    width: 400px;
    height: 30px;
    background: transparent;
    border-bottom: 1px solid #ff7200;
    border-top: none;
    border-right: none;
    border-left: none;
    color: #fff;
    font-size: 15px;
    letter-spacing: 1px;
    margin-top:15px;
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
    width: 300px;
    height: 40px;
    left: 20%;
    background: #ff7200;
    border: none;
    margin-top: 15px;
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
    padding-top: 0px;
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
    padding-left: 5px;
    padding-top: 0px;
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
<body>

    <div class="mai">
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
                <div class="search">
                <br> <input class="srch" type="search" name="" placeholder="Type To Search">
                    <a href="#"> <button class="btn">Search</button></a>
                </div>
        </div> 
                </div>
                <form action="" align="center" method="post">
                <h2>&nbsp;&nbsp;CUSTOMIZED JEWELLERY </h2>
                <label for="types"style="color: red;">Choose a Category:</label>
                <select name="category" id="Category">
                    <option value="select"></option>
                    <option value="SILVER">SILVER</option>
                    <option value="GOLD">GOLD</option>
                    <option value="DIAMOND">DIAMOND</option>
                  </select>
                  <form action="" method="post">
                    <div class="input-box">
                        <span class="details"></span>
                        <input type="text" placeholder="Enter details of the item you want to customize" name="text"  />
                    </div>
                    <div class="file">
                        <label for="myfile">Select a file:</label>
                        <input type="file" id="myfile" name="uploadfile"><br><br>
                    </div>
              
                    <div class="input-box">
                        <span class="details"></span>
                        <input type="text" placeholder="Enter WhatsApp number" name="mobile_no" required />
                    </div>
                    
                    <button type="submit" class="btnn" name="upload" id="UPLOAD"><i class="glyphicon glyphicon-upload"></i>UPLOAD</button>              
                </form>
                 

</body>
</html>