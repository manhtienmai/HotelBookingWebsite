<?php
    require('../inc/db_config.php');
    require('../inc/essentials.php');

    adminLogin();

    function getCondition($period) {
        switch ($period) {
            case 1:
                return "WHERE datentime BETWEEN NOW() - INTERVAL 30 DAY AND NOW()";
            case 2:
                return "WHERE datentime BETWEEN NOW() - INTERVAL 90 DAY AND NOW()";
            case 3:
                return "WHERE datentime BETWEEN NOW() - INTERVAL 1 YEAR AND NOW()";
            default:
                return "";
        }
    }

    function getBookingAnalytics($conn, $condition) {
        $query = "SELECT 
            COUNT(CASE WHEN booking_status!='pending' AND booking_status!='payment failed' THEN 1 END) AS `total_bookings`,
            SUM(CASE WHEN booking_status!='pending' AND booking_status!='payment failed' THEN  `trans_amt` END) AS `total_amt`,
            COUNT(CASE WHEN booking_status='booked' AND arrival=1 THEN 1 END) AS `active_bookings`,
            SUM(CASE WHEN booking_status='booked' AND arrival=1 THEN `trans_amt` END) AS `active_amt`,
            COUNT(CASE WHEN booking_status='cancelled' AND refund=1 THEN 1 END) AS `cancelled_bookings`,
            SUM(CASE WHEN booking_status='cancelled' AND refund=1 THEN `trans_amt` END) AS `cancelled_amt`
            FROM `booking_order` $condition";

        return mysqli_fetch_assoc(mysqli_query($conn, $query));
    }

    function getUserAnalytics($conn, $condition) {
        $total_queries = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(sr_no) AS `count` FROM `user_queries` $condition"));
        $total_new_reg = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(id) AS `count` FROM `user_cred` $condition"));

        return [
            'total_queries' => $total_queries['count'],
            'total_new_reg' => $total_new_reg['count']
        ];
    }

    if (isset($_POST['booking_analytics'])) {
        $frm_data = filteration($_POST);
        $condition = getCondition($frm_data['period']);
        $result = getBookingAnalytics($conn, $condition);
        echo json_encode($result);
    }

    if (isset($_POST['user_analytics'])) {
        $frm_data = filteration($_POST);
        $condition = getCondition($frm_data['period']);
        $result = getUserAnalytics($conn, $condition);
        echo json_encode($result);
    }
?>
