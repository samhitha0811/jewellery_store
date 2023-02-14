<?php
include('db.php');
if(isset($_POST['submit']))
{

	
	$g_update  = mysqli_query($link, "UPDATE `price` SET amount='".$_POST['amt']."'where category='".$_POST['category']."'") or die(mysqli_error($link));
			$login_check = mysqli_query($link, "SELECT * from `price` where category='".$_POST['category']."' and amount='".$_POST['amt']."'") or die(mysqli_error($link));
			$count = mysqli_num_rows($login_check);
	if($count==1)
	{
		
echo "<script>alert('Updated successfully');</script>";

      }else {
         echo "<script>alert('Updation failed');</script>";

      }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRICE UPDATION</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            background: linear-gradient(to top,
                    rgba(0, 0, 0, 0.5) 50%,
                    rgba(0, 0, 0, 0.5) 50%
                  ),
      url(pic.jpg);
            background-position: center;
            background-size: cover;
            height: 100vh;
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
    width: auto;
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
    margin-top: 20px;
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

        form {
            width: 250px;
            height: 270px;
            background: linear-gradient(to top,
                    rgba(0, 0, 0, 0.8) 50%,
                    rgba(0, 0, 0, 0.8) 50%);
            position: absolute;
            top: 5cm;
            align-items: center;
            left: 13cm;
            transform: translate(0%, -5%);
            border-radius: 10px;
            padding: 25px;
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
            margin-top: 30px;
            margin-bottom: 30px;
            font-family: sans-serif;
        }

        form input:focus {
            outline: none;
        }

        ::placeholder {
            color: #fff;
            font-family: Arial;
        }

        .btnn{
            width: 240px;
            height: 40px;
            background: #ff7200;
            border: none;
            margin-top: 20px;
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
        select{
            width: 240px;
            height: 30px;
            border:none;
            font-size: 15px;
            background: #ff7200;
            cursor: pointer;
            color: #fff;
            border-radius: 10px;
            margin-top: 30px;
            
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
                    <li><a href="price.php">PRICE UPDATION</a></li>
                    <li><a href="items.php">ITEMS OPERATIONS</a></li>
					<li><div class="dropdown">
  <a onclick="myFunction()" class="dropbtn">ORDERS</a>					
  <div id="myDropdown" class="dropdown-content">
    <a href="custom_orders.php">CUSTOM ORDERS</a>
    <a href="admin_orders.php">ORDERS</a>
  </div>
</div></li>
                    
                </ul>
    <form action="" method="post">
      <div>  <select name="category" id="category">
        <option value="select"></option>
            <option value="gold">gold</option>
            <option value="silver">silver</option>
        </select></div>
        <div>
        <input type="text" placeholder="Price" name="amt"></div>
        <button type="submit" class="btnn" name="submit"><i class="glyphicon glyphicon-log-in"></i>Submit</button>
    </form>

</body>

</html>