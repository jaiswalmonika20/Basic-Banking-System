<!DOCTYPE html>

<html>
    <head>
        <title>Banking System</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap-3.3.7-dist/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <link href="stylesheet.css" type="text/css" rel="stylesheet"/>
    </head>
    <body>
        <?php
        include 'connect.php';
        ?>
        <div class="header">
            <div class="inner-header">
                <div class="logo">
                    <a href="#">IBS</a>
                </div>
                <div class="header-link">
                    <a href="transaction_history.php">History</a>
                </div>
                <div class="header-link">
                    <a href="transferMoney.php">Transfer Money</a>
                </div>
                <div class="header-link">
                    <a href="viewCustomer.php">View all Customers</a>
                </div>
                <div class="header-link">
                    <a href="index.php">Home</a>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="banner-image">
                <div class="inner-banner-image">
                    <center>
                    <div class="banner-content">
                        <h1> Instant Banking System</h1>
                        <p> Send and receive money right from your phone</p>
                     </div>
                    </center>
                </div>
            </div>
            <footer>
            <div class="container">
                <center>
                    <p>Copyright &copy IBS.All Rights Reserved &#8739 Contact Us: +91 90000 00000</p>
                </center>
            </div>
        </footer>
    </body>
</html>
