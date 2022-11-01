<?php 
	include "connection.php";
    ?>
<!DOCTYPE html>
<html>

<head>

    <title>Account Settings</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="custom.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="userCss.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- <style type="text/css">
    section {
        margin-top: -20px;
    }
    </style> -->
</head>

<body>

    <nav class="navbar-navbar" style="background-color: #B8E2FA;">
        <div class="container-fluid">
            <div class="navbar-header">
                <img src="/Arpa/images/bb.png" id="Buplogo">
            </div>
            <div class="navbar-header">
                <a class="navbar-brand" href="https://bup.edu.bd/" target="_blank"
                    style="color: #044F2B; font-size: 24px;font-weight: 700; font-family:Istok Web;">Bangladesh
                    University of Professionals</a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #044F2B; font-size: 18px; 
                        font-weight: 700; font-family:Istok Web;text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                        <span class="glyphicon glyphicon-user"> User</span>
                        <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:#B8E2FA;">
                        <a class="dropdown-item" href="#" id="dropdn">Your Account</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" id="dropdn">Log out</a>
                    </div>
                </li>
                <li><a href="#"><span class="glyphicon glyphicon-envelope"
                            style="color:#044F2B; font-size: 24px;"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-bell"
                            style="color:#044F2B; font-size: 24px;"></span></a></li>

                <li>
                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <a href="myBooks.php" style="color: #044F2B; font-size: 24px; 
                        font-family:Istok Web;text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                            <span class="glyphicon glyphicon-book" style="color:#044F2B; font-size: 24px;">
                            </span> My Books</a>
                        <a href="pay fees.php" style="color: #044F2B; font-size: 24px; 
                        font-family:Istok Web;text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                            <span class="glyphicon glyphicon-usd" style="color:#044F2B; font-size: 24px;">
                            </span> Pay Fees</a>
                        <a href="user transaction.php" style="color: #044F2B; font-size: 24px; 
                            font-family:Istok Web;text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                            <span class="glyphicon glyphicon-floppy-disk" style="color:#044F2B; font-size: 24px;">
                            </span> Transaction Report</a>
                    </div>
                    <span class="glyphicon glyphicon-menu-hamburger"
                        style="color:#044F2B; font-size: 24px; top: 2px; padding: 12px; padding-right: 15px;"
                        onclick="openNav()"></span>
                </li>
            </ul>
        </div>
    </nav>





    <div class="library_logo_other">
        <a href="user home.php"><img src="/Arpa/images/library_logo.png" alt=""></a>
    </div>


    <div>
        <a class="back_btn">
            <span class="glyphicon glyphicon-menu-left" onclick="history.back()">
            </span>
        </a>
    </div>

    <div class="bbb">
        <div style="padding-top:70px 50px -10px 50px; ">
            <nav aria-label="breadcrumb" width=100%>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="user home.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Your Account</li>
                </ol>
            </nav>
        </div>



        <body>

            <div class="acc_div1">
                <div style="text-align: center; ">
                    <h1 style="text-align: center; font-size: 30px;font-family: New times roman;">Change Your
                        Password</h1>
                </div>
                <div style="padding:20px 450px 80px 450px; ">
                    <form action="" method="post">
                        <input type="text" name="username" class="form-control" placeholder="Username" required=""><br>
                        <input type="text" name="email" class="form-control" placeholder="Email" required=""><br>
                        <input type="text" name="password" class="form-control" placeholder="New Password"
                            required=""><br>
                        <button class="btn btn-default" type="submit" name="submit">Update</button>
                    </form>

                </div>

                <?php

		if(isset($_POST['submit']))
		{
			if(mysqli_query($db,"UPDATE student SET password='$_POST[password]' WHERE username='$_POST[username]'
			AND email='$_POST[email]' ;"))
			{
				?>
                <script type="text/javascript">
                alert("The Password Updated Successfully.");
                </script>

                <?php
			}
			
		}
	?>
            </div>
    </div>


    </footer>
</body>

</html>