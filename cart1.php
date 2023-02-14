<!DOCTYPE html>
<html lang="en">
<head>
    <title>Webpage Design</title>
    <link rel="stylesheet" href="frame(1).css">
    <style>
        table,td,th{
            border : none;
            padding : 15px;
            text-align: center;
        }
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
    height: 130vh;
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
    width: 330px;
    float: left;
    margin-left: 270px;
}

.srch {
    font-family: 'Times New Roman';
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


	
  </style>
</head>
<body>
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
  

        <div class="image">
            <center><table border="1" style="border-collapse:collapse;width: 70%;">
               
                
                <tr>
                    <th style="color: orange;">S.N0</th>  
                    <th style="color: orange;">JEWELLERY</th>  
                    <th style="color: orange;">JEWELLERY INFO</th>
                    <th style="color: orange;">QUANTITY</th>
                    <th style="color: orange;">PRICE</th>
                    <th style="color: orange;">ORDERS</th>
                    
                    
                </tr>
                <tr>
                <td style="color: white;">1
                    <td style="color: white;"><img src="https://www.bhimagold.com/media/catalog/product/cache/e172d3225dae05e26e56e77e5f42ea5c/4/4/44247921_main_ymtbv6fvznr7lkk2.jpg"width="100"height="100"></td>
                    <td style="color: white;">Antique Gold Necklace<br>
                    <br>Metal color : Solid Gold
                    <br>Metal Purity : 22KT
                    <br>gross Weight(g) : 20   
                    <br>Metal rate : 56,000 
                    <br>GST :  700  
                        <br> </td>
                    <td style="color: white;"><form action="/action_page.php">

                       <input type="number" id="quantity" name="quantity" min="1" max="5">
                        
                      </form>
                      </td>
                    <td style="color: white;">56,700</td>
                
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


<td><button style="font-size:17px;color:rgb(240, 236, 233);background-color: rgb(239, 114, 31);border: none;width: 30%;height: 30px;" style="font-size:20px"> <i class="fa fa-trash-o"></i></button></td>
                    
                                   

                </tr>
                <tr>
                <td style="color: white;">2<br>
                    <td><img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcRbIir7KEv2oEvqSJ4K1aGBk-KIo730km-J3Kaj7G5RNndUp3kU_FEjSpBzcJp3mUGDVDweB3x3pUrKs_KCfKY08DwQRp6AAQDyoQO8_UM&usqp=CAc"width="100"height="100"></td>
                    <td style="color: white;">Silver Pooja Set<br>
                    <br>Metal color : silver
                    <br>Metal Purity : 816K
                    <br>gross Weight(g) : 34   
                    <br>Metal rate : 46,000 
                    <br>GST :  300 </td> 
                    <td><form action="/action_page.php">

                        <input type="number" id="quantity" name="quantity" min="1" max="5">
                        
                      </form>
                      </td>
                    <td style="color: white;">₹46,300</td>
                    
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>




    <td><button style="font-size:17px;color:rgb(250, 243, 243);background-color: rgb(239, 114, 31);border: none;width: 30%;height: 30px;" style="font-size:20px;color: blueviolet;"> <i class="fa fa-trash-o"></i></button></td>
                    
            
                </tr>
                <tr> 
                <td style="color: white;">3
                    <td style="color: white;"><img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcR_-bBsd63tnOagfp1NDKLTv0aEVaIHZ3FP9uHYR5bXz9FOiBZqKY49Eg0eiYjN3qgSVRt-NYSWv5DMRpgTxT-oHWS04qVzWZjLAMStGa3C-hz6u2NMyRE8VA"width="100"height="100"></td>
                    <td style="color: white;">10ct Diamond Ring <br>
                    <br>Metal color : rose 
                    <br>Metal Purity : 24KT
                    <br>gross Weight(g) : 9   
                    <br>Metal rate : 29,345 
                    <br>GST :  300 </td> 
                    <td style="color: orange;"><form action="/action_page.php">

                        <input type="number" id="quantity" name="quantity" min="1" max="5">
                        
                      </form>
                      </td>
                      
                    <td style="color: white;">₹29,645</td>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<td style="color: orange;"><button style="font-size:17px;color:rgb(249, 241, 234);background-color: rgb(239, 114, 31);border: none;width: 30%;height: 30px;"> <i class="fa fa-trash-o"></i></button></td>
                    
   
                </tr>
                
                    
                </table>
                <style>
                    h1{text-align: left;}
                </style>
            </head>
            <body>
                
                <tr>
                <td style="color: white;"><h3 style="color: white;">Quantity : 3</h3></td>
                <td style="color: white;"><h3 style="color: white;">Total Price : ₹131,645.00</h3></td>
                </tr>
                <br><button class="button" style="font-size:17px;color:rgba(245, 241, 237, 0.909);background-color: rgb(239,114,31);border : none;width: 17%;height: 45px;"><a>Buy Now </a></button><a class="guhhu"></a></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    
               
            </body>
               
                
            
</div>


                </div>
                    </div>
                </div>
                <div>
        </div>
    </div>
</body>
</html>