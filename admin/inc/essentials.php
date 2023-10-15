<?php

  // FRONTEND PURPOSE DATA
  define('SITE_URL', 'http://127.0.0.1/HotelBookingWebsite/');
  define('ABOUT_IMG_PATH',SITE_URL.'images/about/');
  define('CAROUSEL_IMG_PATH',SITE_URL.'images/carousel/');
  define('FACILITIES_IMG_PATH',SITE_URL.'images/facilities/');

  

  // BACKEND UPLOAD PROCESS NEEDS THIS DATA

  define('UPLOAD_IMAGE_PATH', $_SERVER['DOCUMENT_ROOT'].'/HotelBookingWebsite/images/'); // ảnh trên web
  define('ABOUT_FOLDER', 'about/'); // từ folder about
  define('CAROUSEL_FOLDER', 'carousel/');
  define('FACILITIES_FOLDER', 'facilities/');


  function adminLogin() {
    session_start();
    if(!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] == true)) {
      echo "<script>
        window.location.href='index.php';
      </script>";
      exit;
    }
  }
  function redirect($url) {
    echo "<script>
            window.location.href='$url';  
          </script>";
          exit;
        }

  // hàm bật thông báo
  function alert($type, $msg) {
    $bs_class = ($type == "success") ? "alert-success" : "alert-danger";

    echo <<<alert
      <div class="alert $bs_class alert-dismissible fade show custom-alert" role="alert">
        <strong class="me-3">$msg</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    alert;
  }

  function uploadImage($image, $folder) {
    $valid_mine = ['image/jpeg', 'image/png', 'image/webp'];
    $img_mine = $image['type'];

    if (!in_array($img_mine, $valid_mine)) {
      // kiểm tra type có cùng kiểu trong phần tử mảng trên không
      return 'inv_img'; //invalid image mine or format
    } else if (($image['size']/(1024*1024)) > 2) { // kiểm tra size
      return 'inv_size'; // invalid size > 2mb
    } else {
      $ext = pathinfo($image['name'],PATHINFO_EXTENSION);
      $rname = 'IMG_'.random_int(11111,99999).".$ext";
      // vd: IMG_95555.png
      $img_path = UPLOAD_IMAGE_PATH.$folder.$rname;
      if(move_uploaded_file($image['tmp_name'],$img_path)) {
        return $rname;
      } else {
        return 'upd_failed';
      }
    }
  }

  function deleteImage($image, $folder) {
    if (unlink(UPLOAD_IMAGE_PATH.$folder.$image)) {
      return true;
    } else {
      return false;
    }
  }


  function uploadSVGImage($image, $folder) {
    $valid_mine = ['image/svg+xml'];
    $img_mine = $image['type'];

    if (!in_array($img_mine, $valid_mine)) {
      // kiểm tra type có cùng kiểu trong phần tử mảng trên không
      return 'inv_img'; //invalid image mine or format
    } else if (($image['size']/(1024*1024)) > 1) { // kiểm tra size
      return 'inv_size'; // invalid size > 1mb
    } else {
      $ext = pathinfo($image['name'],PATHINFO_EXTENSION);
      $rname = 'IMG_'.random_int(11111,99999).".$ext";
      // vd: IMG_95555.png
      $img_path = UPLOAD_IMAGE_PATH.$folder.$rname;
      if(move_uploaded_file($image['tmp_name'],$img_path)) {
        return $rname;
      } else {
        return 'upd_failed';
      }
    }
  }
?>