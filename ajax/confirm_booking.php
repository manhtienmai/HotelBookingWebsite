<?php
    require_once('../admin/inc/db_config.php');
    require('../admin/inc/essentials.php');
    date_default_timezone_set("Asia/Kolkata");

    if (isset($_POST['check_availability'])) {
        $frm_data = filteration($_POST);
        $today_date = new DateTime(date("Y-m-d"));
        $checkin_date = new DateTime($frm_data['check_in']);
        $checkout_date = new DateTime($frm_data['check_out']);

        $status = checkDateValidity($today_date, $checkin_date, $checkout_date);

        if ($status === '') {
            processBooking($checkin_date, $checkout_date);
        } else {
            echo json_encode(["status" => $status]);
        }
    }

    function checkDateValidity($today, $checkin, $checkout) {
        if ($checkin == $checkout) {
            return 'check_in_out_equal';
        } elseif ($checkin > $checkout) {
            return 'check_out_earlier';
        } elseif ($today > $checkout) {
            return 'check_in_earlier';
        }

        return '';
    }

    function processBooking($checkin, $checkout) {
        session_start();
        $room_id = $_SESSION['room']['id'];

        if (!isRoomAvailable($room_id, $checkin->format('Y-m-d'), $checkout->format('Y-m-d'))) {
            echo json_encode(['status' => 'unavailable']);
            exit;
        }

        $count_days = $checkin->diff($checkout)->days;
        $payment = calculatePayment($count_days, $_SESSION['room']['price']);
        $_SESSION['room'] += ['payment' => $payment, 'available' => true];

        echo json_encode(["status" => 'available', "days" => $count_days, "payment" => $payment]);
    }

    function isRoomAvailable($room_id, $checkin, $checkout) {
        $tb_query = "SELECT COUNT(*) AS `total_bookings` FROM `booking_order`
                     WHERE booking_status='booked' AND room_id=?
                     AND check_out > ? AND check_in < ?";

        $tb_fetch = mysqli_fetch_assoc(select($tb_query, [$room_id, $checkin, $checkout], 'iss'));
        $rq_result = select("SELECT `quantity` FROM `rooms` WHERE `id`=?", [$room_id], 'i');
        $rq_fetch = mysqli_fetch_assoc($rq_result);

        return ($rq_fetch['quantity'] - $tb_fetch['total_bookings']) > 0;
    }

    function calculatePayment($days, $pricePerDay) {
        return $days * $pricePerDay;
    }
?>
