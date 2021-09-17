<?php
include 'connect.php';
?>
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
        <div class="container text-center mt-5 ">
            <h1 class=" mt-5">All Customers</h1>
            <table id="myTable" class="table">
                <thead class="bg-dark text-light">
                    <th>S. No.</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                     <th>Email ID</th>
                    <th>Account Balance</th>
                </thead>
                <tbody>
                    <?php
                    $query = 'SELECT * FROM `customers`';
                    $result = mysqli_query($conn, $query);
                    $num_rows = mysqli_num_rows($result);
                    while ($rows = mysqli_fetch_assoc($result)) {
                        echo '
            <tr><td>' . $rows['id'] . '</td>
            <td>' . $rows['first_name'] . '</td>
            <td>' . $rows['last_name'] . '</td>
            <td>' . $rows['email_id'] . '</td>
                <td>Rs. ' . $rows['current_balance'] . '</td>
            </tr>
            ';
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <footer>
    <div class="container">
                <center>
                    <p>Copyright &copy IBS.All Rights Reserved &#8739 Contact Us: +91 90000 00000</p>
                </center>
            </div>
        </footer>
    </body>
