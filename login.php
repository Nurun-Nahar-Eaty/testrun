<?php

$host="localhost";
$user="root";
$password="";
$db="libraryboooking";

session_start();


$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
	die("connection error");
}


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["userid"];
	$password=$_POST["psw"];


	$sql="select * from student where userid='".$username."' AND password='".$password."' ";

	$result=mysqli_query($data,$sql);

	$row=mysqli_fetch_array($result);
  error_reporting(E_ERROR | E_PARSE);
  
  
	if($row["usertype"]==null)
	{	
    ?>
<script type="text/javascript">
alert("Invalid ID or Password");
</script>
<?php
  }

  elseif($row["usertype"]==="user")
	{	

		$_SESSION["userid"]=$username;

		header("location:user home.php");
	}
  

	elseif($row["usertype"]==="admin")
	{

		$_SESSION["username"]=$username;
		
		header("location:admin_home.php");
	}

	else
	{
		echo "Invalid ID or Password";
	}

}
?>





<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="login.css" />
</head>

<body>
    <div class="bg">
        <a href="main.php">
            <img id="cross" src="/Assets/cross.png" alt="" />
        </a>

        <h3 style="text-align: center; padding-top: 40px">
            Don't have an account ?
        </h3>

        <div class="signup-btn">
            <a href="signup.php" target="_blank">
                <button type="submit">Signup Here</button>
            </a>
        </div>
        <br /><br /><br /><br /><br /><br />

        <h3 style="text-align: center">Log in to your account</h3>

        <form action="#" method="POST" style="max-width: 300px; margin: auto">
            <div class="input-container">
                <i class="fa fa-user icon"></i>
                <input class="input-field" type="text" placeholder="User ID" name="userid" />
            </div>

            <div class="input-container">
                <i class="fa fa-key icon"></i>
                <input class="input-field" type="password" placeholder="Password" name="psw" />
            </div>

            <a href="#">
                <h5 style="text-align: right">Forgot Password ?</h5>
            </a>

            <div class="login">

                <button type="submit" class="btn">
                    <in href="#" style="color: #fff;">Login</a>
                </button>
            </div>
        </form>
    </div>
</body>

</html>