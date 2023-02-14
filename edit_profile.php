<?php
include("db.php");
error_reporting(E_ERROR | E_PARSE);
	if ((include 'login.php') == TRUE) {
		$findresult = mysqli_query($link, "SELECT * FROM signup WHERE email= '".$_SESSION['login']."'");
if($res = mysqli_fetch_array($findresult))
{
$mobile = $res['mobile']; 
$fname = $res['first_name'];   
$lname = $res['last_name'];  
$image= $res['image'];
}
$find = mysqli_query($link, "SELECT * FROM billing_address WHERE Email= '".$_SESSION['login']."'");
if($r = mysqli_fetch_array($find))
{
$address = $r['Address']; 
$city = $r['City'];   
$state = $r['State'];  
$pincode= $r['Zip'];
}
		if(isset($_POST['save'])){
			if($image=""){
			$update  = mysqli_query($link, "UPDATE `signup` SET first_name='".$_POST['first_name']."', last_name='".$_POST['last_name']."', mobile='".$_POST['mobile']."',image='".$_POST['uploadfile']."' where email='".$_SESSION['login']."'") or die(mysqli_error($link));
			}
			else{
				$update  = mysqli_query($link, "UPDATE `signup` SET first_name='".$_POST['first_name']."', last_name='".$_POST['last_name']."', mobile='".$_POST['mobile']."' where email='".$_SESSION['login']."'") or die(mysqli_error($link));
			}
			$update_a  = mysqli_query($link, "UPDATE `billing_address` SET Address='".$_POST['address']."', City='".$_POST['city']."', State='".$_POST['state']."',Zip='".$_POST['pincode']."' where email='".$_SESSION['login']."'") or die(mysqli_error($link));
			//$login_check = mysqli_query($link, "SELECT * from `signup` where first_name='".$_POST['first_name']."'and last_name='".$_POST['last_name']."'and mobile='".$_POST['mobile']."'and image='".$_POST['img']."'") or die(mysqli_error($link));
			//$count = mysqli_num_rows($login_check);
	if($update || $update_a)
	{
		
echo "<script>alert('Saved'); window.location = 'account.php'</script>";

      }else {
         echo "<script>alert('Please try again');</script>";

      }
	}
	}
	else{
		echo "<script>alert('Please login to edit your profile'); window.location = 'login.php';</script>";
	}
?>
<html>
<head>
<style>
.main{
	display:none;
}
.l{
	display:none;
}
body{
	width: 100%;
    background: linear-gradient(to top,
            rgba(0, 0, 0, 0.5) 50%,
            rgba(0, 0, 0, 0.5) 50%),
        url(pic.jpg);
    background-position: center;
    background-size: cover;
	height:100vh;
}
.f{
	width: 300px;
    height: 850px;
    background: linear-gradient(to top,
            rgba(0, 0, 0, 0.5) 50%,
            rgba(0, 0, 0, 0.5) 50%);
        
    position: absolute;
    top: 50px;
    left: 450px;
    transform: translate(0%, -5%);
    border-radius: 10px;
    padding: 25px;
}
.f input {
    width: 270px;
    height: 50px;
    background: transparent;
    border-bottom: 1px solid #ff7200;
    border-top: none;
    border-right: none;
    border-left: none;
    color: #fff;
    font-size: 15px;
    letter-spacing: 1px;
    margin-top: -10px;
	margin-bottom:20px;
    font-family: sans-serif;
}

</style>
</head>
<body>
<form action="" method="post" class="f">
<img src=https://technosmarter.com/assets/icon/user.png style="width:70px;height:70px; margin-left:110px;">
<div>
<label for="myfile" style="margin-top:10px; color:#ff7200">Change image</label>
<input type="file" id="myfile" name="uploadfile" value="<?php echo $image;?>" style="margin-top:10px;">
</div>
<div>
<label style="margin-top:10px; color:#ff7200">First Name</label>
<input type="text" name="first_name"value="<?php echo $fname;?>">
</div>
<div>
<label style="margin-top:10px; color:#ff7200">Last Name</label>
<input type="text" name="last_name"value="<?php echo $lname;?>">
</div>
<div>
<label style="margin-top:10px; color:#ff7200">Mobile Number</label>
<input type="text" name="mobile"value="<?php echo $mobile;?>">
</div>
<h2 style="background:none;">Address</h2>
<div>
<label style="margin-top:10px; color:#ff7200">Address</label>
<input type="text" name="address"value="<?php echo $address;?>">
</div>
<div>
<label style="margin-top:10px; color:#ff7200">City</label>
<input type="text" name="city"value="<?php echo $city;?>">
</div>
<div>
<label style="margin-top:10px; color:#ff7200">State</label>
<input type="text" name="state"value="<?php echo $state;?>">
</div>
<div>
<label style="margin-top:10px; color:#ff7200">Pincode</label>
<input type="text" name="pincode"value="<?php echo $pincode;?>">
</div>


<button type="submit" class="btnn" name="save"><i class="glyphicon glyphicon-upload"></i>Save</button>
</body>
</html>