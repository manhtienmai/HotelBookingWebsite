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
    <title>Admin Panel - Booking Records</title>
    <?php require('inc/links.php'); ?>
    <style>
        .main-content {
            padding: 20px;
            background-color: #f8f9fa;
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
            background-color: #f8f9fc;
        }
        .pagination {
            justify-content: center; 
        }
    </style>
</head>

<body>

    <?php require('inc/header.php'); ?>

    <div class="container-fluid main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto">
                <h3 class="mb-3">Booking Records</h3>

                <div class="card">
                    <div class="card-body">
                        <div class="mb-4 text-end">
                            <input type="text" id="search_input" oninput="get_bookings(this.value)" class="form-control w-25 ms-auto" placeholder="Type to search...">
                        </div>

                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">User Details</th>
                                        <th scope="col">Room Details</th>
                                        <th scope="col">Booking Details</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="table-data">
                                </tbody>
                            </table>
                        </div>

                        <nav>
                            <ul class="pagination mt-3" id="table-pagination">
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require('inc/scripts.php'); ?>
    <script src="scripts/booking_records.js"></script>
</body>
</html>
