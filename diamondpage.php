<!DOCTYPE html>
<html lang="en">
<head>
  <title>DIAMOND ITEMS</title>
  <link rel="stylesheet" href="frame1.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    body{background-color: black;}
      h1{color:coral;
    font-family: "Times New Roman";
    font-size: 50px;
    padding-left: 00px;
    margin-top: 9%;
    letter-spacing: 2px;
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
  <style>
  </style>
    <div class="main">
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

            <li><div class="search">
                <input class="srch" type="search" name="" placeholder="Type To text">
                <a href="#"> <button class="btn">Search</button></a>
            </div></li>
            </div>

            <h1> <div style="color:coral;">DIAMOND </div>
                <div style="color:aliceblue">JEWELLERY<div></h1>
            
            <div class="container">
              <div class="row">
                <div class="col-md-4">
                  <div class="thumbnail">
                    <a href="d_necklace.php" target="_blank">
                      <img src="diamondnecklace.jpg" alt="Lights" style="width:100%">
                      <div class="caption">
                       <center><p style="color:coral">NECKLACES</p></center>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="thumbnail">
                    <a href="d_earrings.php" target="_blank">
                      <img src="diamondearrings.jpg" alt="Lights" style="width:100%">
                      <div class="caption">
                       <center><p style="color:coral">EARRINGS</p></center>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="thumbnail">
                    <a href="d_pendents.php" target="_blank">
                      <img src="diamondpendant.jpg" alt="Lights" style="width:100%">
                      <div class="caption">
                       <center><p style="color:coral">PENDANTS</p></center>
                      </div>
                    </a>
                  </div>
                </div>
                
                <div class="col-md-4">
                  <div class="thumbnail">
                    <a href="d_bangles.php" target="_blank">
                      <img src="diamondbangles.jpg" alt="Nature" style="width:100%">
                      <div class="caption">
                       <center><p style="color:coral">BANGLES</p></center>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="thumbnail">
                    <a href="d_rings.php" target="_blank">
                      <img src="diamondrings.jpg" alt="Fjords" style="width:100%">
                      <div class="caption">
                       <center><p style="color:coral">RINGS</p></center>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            
            </body>
            </html>