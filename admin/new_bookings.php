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
    <title>Admin Panel - New Booking</title>
    <?php require('inc/links.php'); ?>
    <style>
        body {
            background-color: #f4f4f4;
        }
        .main-content {
            padding: 20px;
        }
        .card {
            border-radius: 10px;
        }
        .table th {
            background-color: #344055;
            color: white;
        }
        .table-hover tbody tr:hover {
            background-color: #f8f9fc;
        }
        .modal-content {
            border-radius: 15px;
        }
    </style>
</head>

<body>

    <?php require('inc/header.php'); ?>

    <div class="container-fluid main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto">
                <h3 class="mb-3">New Booking</h3>

                <div class="card shadow">
                    <div class="card-body">
                        <div class="search-bar mb-4">
                            <input type="text" oninput="get_bookings(this.value)" class="form-control w-25 ms-auto" placeholder="Type to search...">
                        </div>

                        <div class="table-responsive">
                            <table class="table table-hover border">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">User Details</th>
                                        <th scope="col">Room Details</th>
                                        <th scope="col">Booking Details</th>
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

    <!-- Assign Room Number Modal -->
    <div class="modal fade" id="assign-room" tabindex="-1" aria-labelledby="assignRoomLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="assign_room_form">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Assign Room</h5>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Room Number</label>
                            <input type="text" name="room_no" class="form-control" required>
                        </div>
                        <div class="alert alert-info">
                            Note: Assign Room Number only when the user has arrived.
                        </div>
                        <input type="hidden" name="booking_id">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Assign</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php require('inc/scripts.php'); ?>
    <script src="scripts/new_bookings.js"></script>
</body>
</html>
