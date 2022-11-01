<!DOCTYPE html>
<html>

<head>

    <title>My Books</title>

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
                        <span class="glyphicon glyphicon-user"> User</span>
                        <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:#B8E2FA;">
                        <a class="dropdown-item" href="user account.php" id="dropdn">Your Account</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="admin_home.php" id="dropdn">Log out</a>
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

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="user home.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">My books</li>
        </ol>
    </nav>

    <div class="mybook_div">
        <div>
            <a href="cart1.php" class="btn btn-primary" id="cart_btn"><span class="glyphicon glyphicon-shopping-cart"
                    style="color: #dae5ef; right: 3px;"></span>My Cart</a>
        </div>
        <table class="mybook_table">
            <tr>
                <th>Book Name</th>
                <th>Holdins(ISBN)</th>
                <th>Checked Out Date</th>
                <th>Return Date</th>
                <th>Due Date</th>
                <th>Renewed</th>
                <th>Remarks</th>
            </tr>
            <tr>
                <td>Principles of Managerial Finance</td>
                <td>9780070667075</td>
                <td>14/09/2022</td>
                <td> _ /_ /_</td>
                <td>24/09/2022</td>
                <td><input type="number" value="0" min="0" max="4" step="1" id="num_field" /> /4</td>
                <td><button onclick="buttonClick(this)" type="button" class="btn btn-success btn-sm">Renew</button>
                </td>
            </tr>
            <tr>
                <td>Principles of Marketing</td>
                <td>9780070667475</td>
                <td>01/08/2022</td>
                <td>28/08/2022</td>
                <td> _ /_ /_</td>
                <td><input type="number" value="4" id="num_field" readonly /> /4</td>
                <td><button onclick="buttonClick(this)" type="button" class="btn btn-success btn-sm"
                        disabled>Renew</button>
                </td>
            </tr>
            <tr>
                <td>Principles of Managerial Finance</td>
                <td>9780070667075</td>
                <td>1/08/2022</td>
                <td>7/06/2022</td>
                <td> _ /_ /_</td>
                <td><input type="number" value="0" min="0" max="4" step="1" id="num_field" readonly /> /4</td>
                <td><button onclick="buttonClick(this)" type="button" class="btn btn-success btn-sm"
                        disabled>Renew</button>
                </td>
            </tr>
            <tr>
                <td>Principles of Managerial Finance</td>
                <td>9780070667075</td>
                <td>1/07/2022</td>
                <td> _ /_ /_ </td>
                <td style="color:red;">29/07/2022</td>
                <td><input type="number" value="4" min="0" max="4" step="" id="num_field" readonly /> /4</td>
                <td><button type="button" class="btn btn-success btn-sm" style="background-color: red;"><a
                            href="pay fees.php" style="color:white">Fined</a></button>
                </td>
            </tr>
        </table>
    </div>

    <footer>
        <p id="footerText">
            Copyright © 2022 | Bangladesh University of Professionals Library
        </p>
    </footer>
</body>

</html>