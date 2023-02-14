<?php
include('db.php');

if(isset($_POST['submit'])){
	$user=$_POST['user'];
	$login_check = mysqli_query($link, "SELECT * from `signup` where email='".$_POST['user']."'") or die(mysqli_error($link));
	
	$count = mysqli_num_rows($login_check);
	$check = mysqli_fetch_assoc($login_check); 
	if($count==1){
		
		echo "<script>alert('User verification successful'); window.location = 'changepassword.php';</script>";
		
	}
	else {
         echo "<script>alert('Verification failed! Please enter correct username');window.location = 'forgotpass.php';</script>";

      }
			
		
}
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>forgot password</title>
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
        <form method="post" action="" class="fo">
		<input type='text' name='user' placeholder='Enter username' required />
            <button class="btnn" type="submit" name="submit">Submit</button>
          </form>
          
    </body>
    </html>