<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $mbln = mysqli_real_escape_string($conn, $_POST['mbln']);
   $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
   $psw = mysqli_real_escape_string($conn,$_POST['psw']);
   $conpsw = mysqli_real_escape_string($conn,$_POST['conpsw']);
   $bupid = mysqli_real_escape_string($conn, $_POST['bupid']);
   $account_type = $_POST['account_type'];

   $select = " SELECT * FROM student WHERE email = '$email' && password = '$psw' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($psw != $conpsw){
         $error[] = 'password do not match!';
      }else{  
         $insert = "INSERT INTO student (email, mobile, username,password, roll, usertype) VALUES('$email', '$mbln', '$fullname','$psw','$bupid','$account_type')";
         mysqli_query($conn, $insert);
if(isset($submit)){
?>
<script type="text/javascript">
alert("<?php echo $row['userid']?>");
</script>
// <?php
}
// echo $row['userid'];
header('location:login.php');
}
}

};


?>


<!--Html starts-->


<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="\Arpa\signup.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

    <link rel="shortcut icon" href="Assets/favicon.ico" type="image/x-icon" />
</head>

<body>
    <!-- <img src="" alt=""> -->

    <div class="bg-signup">
        <a href="main.php">
            <img id="cross" src="./Assets/cross.png" alt="" />
        </a>

        <h2 style="text-align: center; padding-top: 40px; padding-bottom: 20px">
            Join BUP Library
        </h2>

        <!-- test -->
        <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>

        <!-- test ends -->

        <form action="" method="post" style="max-width: 300px; margin: auto">
            <div class="input-container">
                <i class="fa fa-envelope icon"></i>
                <input class="input-field" type="text" placeholder="Email" name="email" />
            </div>

            <div class="input-container">
                <i class="fa fa-mobile icon"></i>
                <input class="input-field" type="number" placeholder="Mobile Number" name="mbln" />
            </div>

            <div class="input-container">
                <i class="fa fa-user icon"></i>
                <input class="input-field" type="text" placeholder="Full Name" name="fullname" />
            </div>

            <div class="input-container">
                <i class="fa fa-key icon"></i>
                <input class="input-field" type="password" placeholder="Password" name="psw" />
            </div>

            <div class="input-container">
                <i class="fa fa-check icon"></i>
                <input class="input-field" type="password" placeholder="Confirm Password" name="conpsw" />
            </div>

            <div class="input-container">
                <i class="fa fa-id-card icon"></i>
                <input class="input-field" type="number" placeholder="BUP ID" name="bupid" />
            </div>

            <div>
                <select id=dropdown name="account_type">
                    <option value="user"> User </option>
                    <option value="admin"> Admin </option>
                </select>
            </div class="signBtn">
            <button type="submit" name="submit" class="btn">Sign Up</button>
    </div>
    </form>

    <a href="login.php" class="back">
        <h4 style="text-align: center;  padding-bottom: 50px; font-size: medium">
            Already have an account?
        </h4>
    </a>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>