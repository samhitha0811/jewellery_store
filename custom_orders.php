<html>
<head>
<title>CUSTOM ORDERS</title>
<style>
table,th,td{
	border: 3px ridge #ff7200;
	border-collapse:collapse;
	padding:16px;
	width:100%;
}
h1{
	text-align:center;
	border-color: #ff7200;  
  border-width: 5px;  
  border-style: inset;  
}
    .main {
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
            height: 13vh;
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
  .btnn {
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
<h1> CUSTOMIZED JEWELLERY ORDERS </h1>
<a href="custom_delete.php"><button type="submit" class="btnn" name="delete"><i class="glyphicon glyphicon-remove"></i>Delete</button></a>
<?php 
include('db.php');
$query = "SELECT * FROM customize";


echo '<table> 
      <tr> 
          <th align="center"> <font face="Arial">Order Number</font> </th> 
		  <th align="center"> <font face="Arial">Category</font> </th> 
          <th align="center"> <font face="Arial">Text</font> </th> 
          <th align="center"> <font face="Arial">Image</font> </th> 
          <th align="center"> <font face="Arial">Mobile Number</font> </th> 
		  <th align="center"> <font face="Arial">User</font> </th> 

      </tr>';

if ($result = mysqli_query($link,$query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["order_no"];
		$field2name = $row["category"];
        $field3name = $row["text"];
        $field4name = $row["image"];
        $field5name = $row["mobile_no"]; 
		$field6name = $row["user"]; 

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
				  <td>'.$field3name.'</td> 
                  <td><img src='.$field4name.' style="width:500px;height:500px;"></td> 
                  <td>'.$field5name.'</td> 
				  <td>'.$field6name.'</td> 
				  
                  
              </tr>';
    }
    $result->free();
} 
?>
</body>
</html>