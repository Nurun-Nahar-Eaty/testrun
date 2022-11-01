<?php
include "connection.php";
session_start();

?>


<!DOCTYPE html>
<html>

<head>

    <title>Homepage User</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="custom.js"></script>
    <link rel="stylesheet" href="userCss.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <style type="text/css">
    section {
        margin-top: -20px;
    }
    </style>
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
                        <span class="glyphicon glyphicon-user"> Admin</span>
                        <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:#B8E2FA;">
                        <a class="dropdown-item" href="user account.php" id="dropdn">Your Account</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="main.php" id="dropdn">Log out</a>
                    </div>
                </li>
                <li><a href="#"><span class="glyphicon glyphicon-envelope"
                            style="color:#044F2B; font-size: 24px;"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-bell"
                            style="color:#044F2B; font-size: 24px;"></span></a></li>

                <li>
                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <a href="books.php" style="color: #044F2B; font-size: 24px; 
                        font-family:Istok Web;text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                            <span class="glyphicon glyphicon-book" style="color:#044F2B; font-size: 24px;">
                            </span> List of Books</a>
                        <a href="request.php" style="color: #044F2B; font-size: 24px; 
                        font-family:Istok Web;text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                            <span class="glyphicon glyphicon-book" style="color:#044F2B; font-size: 24px;">
                            </span> Book Request</a>
                        <a href="issue_info.php" style="color: #044F2B; font-size: 24px; 
                        font-family:Istok Web;text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                            <span class="glyphicon glyphicon-usd" style="color:#044F2B; font-size: 24px;">
                            </span> Issue Information</a>
                        <a href="user transaction.php" style="color: #044F2B; font-size: 24px; 
                            font-family:Istok Web;text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                            <span class="glyphicon glyphicon-floppy-disk" style="color:#044F2B; font-size: 24px;">
                            </span> Expired List</a>
                    </div>
                    <span class="glyphicon glyphicon-menu-hamburger"
                        style="color:#044F2B; font-size: 24px; top: 2px; padding: 12px; padding-right: 15px;"
                        onclick="openNav()"></span>
                </li>
            </ul>
        </div>
    </nav>



    <div class="library_logo">
        <a href="user home.php"><img src="images/library_logo.png" alt=""></a>

    </div>



    <div class="d-flex justify-content-center h-100">
        <div class="search">
            <form action="booksearch.php" class="" method="post" name="form">
                <input type="text" class="search-input" placeholder="Search Book..." name="search"
                    style="padding-left:5px">
                <a href="booksearch.php" class="search-icon" type="button" style=" height: 40px;
  width: 41px;">
                    <button style="background-color: #6db6b9e6; height: 40px width: 41px" type="submit" name="submit"
                        class="btn btn-default">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </a>
            </form>
        </div>
    </div>


    </div> -->
    </div>
    </div>
    </div>
    </section>
    <footer>
        <p id="footerText">
            Copyright © 2022 | Bangladesh University of Professionals Library
        </p>
    </footer>
</body>

</html>