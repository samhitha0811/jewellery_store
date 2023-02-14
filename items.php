<?php
include('db.php');

if(isset($_POST['insert']))
{	
	$item_insert  ="INSERT INTO `item`(`img`, `gross_weight`,`net_weight`,`wastage`,`labour`, `specification`,`category`,`sub_category`) VALUES ('".$_POST['uploadfile']."','".$_POST['g_wt']."','".$_POST['n_wt']."','".$_POST['wast']."','".$_POST['labo']."','".$_POST['specification']."','".$_POST['category']."','".$_POST['subcategory']."')";
	$result=mysqli_query($link,$item_insert);
		 $id=mysqli_insert_id($link); 
			$login_check = mysqli_query($link, "SELECT * from `item` where img='".$_POST['uploadfile']."'") or die(mysqli_error($link));
			$count = mysqli_num_rows($login_check);
	if($count==1)
	{
		
echo "<script>alert('Inserted successfully');</script>";

      }else {
         echo "<script>alert('Insertion failed');</script>";

      }
}

if(isset($_POST['delete']))
{

	
	$g_delete  = mysqli_query($link, "DELETE from item where item_no='".$_POST['item_no']."'") or die(mysqli_error($link));
			$login_check = mysqli_query($link, "SELECT * from `item` where item_no='".$_POST['item_no']."'") or die(mysqli_error($link));
			$count = mysqli_num_rows($login_check);
	if($count==0)
	{
		
echo "<script>alert('Deletion successful');</script>";

      }else {
         echo "<script>alert('Deletion failed. Try again!');</script>";

      }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITEMS OPERATIONS</title>
    <style>
    body {
        margin: 0;
        padding: 0;
        width: 100%;
        background: linear-gradient(to top,
                rgba(0, 0, 0, 0.5) 50%,
                rgba(0, 0, 0, 0.5) 50%),url(pic.jpg);
        background-position: center;
        background-size: cover;
        height: 90vh;

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

    ::-webkit-scrollbar {
        display: none;
    }

    form {
        width: 250px;
        height: 750px;
        background: linear-gradient(to top,
                    rgba(0, 0, 0, 0.8) 50%,
                    rgba(0, 0, 0, 0.8) 50%);
        position: absolute;
        top: 5cm;
        align-items: center;
        left: 4.5cm;
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
        margin-top: 35px;
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

    .btnn {
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

    select {
        width: 240px;
        height: 30px;
        border: none;
        font-size: 15px;
        background: #ff7200;
        cursor: pointer;
        color: #fff;
        border-radius: 10px;
        margin-top: 30px;
    }

    h1 {
        
        color: #fff;
    }

    select {
        text-align: center;
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
            </div>
            </div>
            </div>
            <h1 style="margin-left: 4.5cm;">INSERTING ITEMS &emsp; &emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;  DELETING ITEMS</h1>
			
    <form action="" method="post">
        <div class="files">
            <input class="form-control" type="file" name="uploadfile" value="">
        </div>

        <div>
            <input type="text" placeholder="Gross Weight" name="g_wt">
        </div>
		<div>
            <input type="text" placeholder="Net Weight" name="n_wt">
        </div>
		<div>
            <input type="text" placeholder="Wastage" name="wast">
        </div>
		
        <div>
            <input type="text" placeholder="Labour" name="labo">
        </div>
        <div>
            <select name="specification" id="specification">
                <option value="Specification">M/F/Kid</option>
                <option value="Men">Men</option>
                <option value="Women">Women</option>
                <option value="Kids">Kid</option>
            </select>
        </div>
        <div> <select name="category" id="category">
                <option value="select">Category</option>
                <option value="Gold">GOLD</option>
                <option value="Silver">SILVER</option>
                <option value="Diamond">DIAMOND</option>
            </select></div>
        <div> <select name="subcategory" id="subcategory">
                <option value="select">Sub-Category</option>
                <option value="pooja_items">POOJA ITEMS</option>
                <option value="gift_items">GIFT ITEMS</option>
                <option value="chains">CHAINS</option>
                <option value="anklets">ANKLETS</option>
                <option value="bangles">BANGLES</option>
                <option value="necklace">NECKLACE</option>
                <option value="earrings">EARRINGS</option>
                <option value="pendents">PENDENTS</option>
                <option value="rings">RINGS</option>
            </select></div>
        <button type="submit" class="btnn" name="insert">INSERT</button>
    </form>
    

    
    <form action="" method="post" style="margin-left:16cm; height: 300px;">
    <div>
        <input type="text" placeholder="Item Number" name="item_no">
    </div>
    <button type="submit" class="btnn" name="delete">DELETE</button>
    </form>

</body>
</html>