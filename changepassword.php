<?php
include('db.php');
if(isset($_POST['verify']))
{
$hhd_check = mysqli_query($link, "SELECT * from `signup` where security_question='".$_POST['security_question']."' and ans='".$_POST['ans']."'") or die(mysqli_error($link));
	$count = mysqli_num_rows($hhd_check);
		if($count==1){
		echo "<script>alert('User verification successful'); window.location = 'newpassword.php';</script>";
	}
	else {
         echo "<script>alert('Verification failed! Try again');window.location = 'changepassword.php';</script>";

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
<form action="" method="post">
<select id="security_question" name="security_question" required />
    <option value="">Security question</option>
    <option value="mother_maiden_name">What is your mother's maiden name?</option>
    <option value="first_pet_name">What is the name of your first pet?</option>
    <option value="hometown">What is your hometown?</option>
	<option value="nickname">What was your childhood nickname?</option>
	<option value="childhood_friend">What is the name of your favorite childhood friend?</option>
	<option value="street">What street did you live on in third grade?</option>
	<option value="school">What was the name of your elementary / primary school?</option>
	<option value="favorite_place">What was your favorite place to visit as a child?</option>
	<option value="musical_instrument">What is your preferred musical instrument?</option>
	<option value="high_school">What high school did you attend?</option>
  </select>
  <div class="input-box">
                        <span class="details"></span>
                        <br><input type="text" placeholder="Enter an answer for the above question" name="ans" style="margin-top:10px;" required />
                    </div>
           <button type="submit" class="btnn" name="verify" id="submit"><i class="glyphicon glyphicon-upload"></i>Verify</button>
                    <form>
</form>
</body>
</html>