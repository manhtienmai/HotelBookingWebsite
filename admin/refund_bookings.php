<?php
    require('inc/essentials.php');
    require('inc/db_config.php');
    adminLogin();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Refund Booking</title>
    <?php require('inc/links.php'); ?>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .main-content {
            padding: 20px;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .table th {
            background-color: #344055;
            color: white;
        }
        .table-hover tbody tr:hover {
            background-color: #f2f2f2;
        }
        .form-control {
            border-radius: 5px;
            box-shadow: none;
        }
    </style>
</head>

<body>

    <?php require('inc/header.php'); ?>

    <div class="container-fluid main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto">
                <h3 class="mb-4">Refund Booking</h3>

                <div class="card">
                    <div class="card-body">
                        <div class="search-bar mb-4">
                            <input type="text" oninput="get_bookings(this.value)" class="form-control w-25 ms-auto" placeholder="Type to search...">
                        </div>

                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">User Details</th>
                                        <th scope="col">Room Details</th>
                                        <th scope="col">Refund Amount</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="table-data">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require('inc/scripts.php'); ?>
    <script src="scripts/refund_bookings.js"></script>
</body>
</html>
