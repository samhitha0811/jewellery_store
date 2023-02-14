<?php
include('db.php');

	if(isset($_POST['change']))
{
	if($_POST['pwd']==$_POST['cpwd']){
$g_update  = mysqli_query($link, "UPDATE `signup` SET password='".$_POST['pwd']."', conform_password='".$_POST['cpwd']."'where email='".$_POST['user']."'") or die(mysqli_error($link));
$login_check = mysqli_query($link, "SELECT * from `signup` where email='".$_POST['user']."' and password='".$_POST['pwd']."'") or die(mysqli_error($link));
			$count = mysqli_num_rows($login_check);
	if($count==1){
	echo "<script>alert('Password changed successfully'); window.location = 'login.php';</script>";
}
	}
	else{
		echo "<script>alert('Please enter same passwords to continue');</script>";
	}
}

?>

<html>
<head>
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
	form {
            width: 250px;
            height: 370px;
            background: linear-gradient(to top,
                    rgba(0, 0, 0, 0.8) 50%,
                    rgba(0, 0, 0, 0.8) 50%);
            position: absolute;
            top: 4cm;
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
</style>
</head>
<body>
<form action="" method="post">
<input type='text' name='user' placeholder='Enter username' required />
<input type='password' name='pwd' placeholder='Enter new password' required />
<input type='text' name='cpwd' placeholder='Conform password' required />
            <button class="btnn" type="submit" name="change">Change Password</button>
          </form>
</body>
</html>