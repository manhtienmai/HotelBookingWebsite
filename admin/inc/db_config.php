<?php 
  $hostName = '127.0.0.1';
  $port = 3307;
  $userName = 'root';
  $userPassword = '';
  $database = 'hotelbookingwebsite';

  $conn = mysqli_connect($hostName, $userName, $userPassword, $database, $port);

  if (!$conn) {
    die("cannot connect to database".mysqli_connect_error());
  }

  // lọc dữ liệu
  function filteration($data) {
    foreach($data as $key => $value) {
      $data[$key] = trim($value);
      $data[$key] = stripcslashes($value);
      $data[$key] = htmlspecialchars($value);
      $data[$key] = strip_tags($value);
    }
    return $data;
  }

  function select($sql, $values, $datatypes) {
    $conn = $GLOBALS['conn'];
    if ($stmt = mysqli_prepare($conn,$sql)) {
      mysqli_stmt_bind_param($stmt, $datatypes,...$values);
      if (mysqli_stmt_execute($stmt)) {
        $res = mysqli_stmt_get_result($stmt);
        mysqli_stmt_close($stmt);
        return $res;
      } else {
        mysqli_stmt_close($stmt);
        die("Query cannot be executed - Select");
      }
    } else {
      die("Query cannot be executed - select");
    }
  }

  function selectAll($table) {
    $conn = $GLOBALS['conn'];
    $res = mysqli_query($conn, "SELECT * FROM $table");
    return $res;
  }

  function update($sql, $values, $datatypes) {
    $conn = $GLOBALS['conn'];
    if ($stmt = mysqli_prepare($conn,$sql)) {
      mysqli_stmt_bind_param($stmt, $datatypes,...$values);
      if (mysqli_stmt_execute($stmt)) {
        $res = mysqli_stmt_affected_rows($stmt);
        mysqli_stmt_close($stmt);
        return $res;
      } else {
        mysqli_stmt_close($stmt);
        die("Query cannot be executed - Update");
      }
    } else {
      die("Query cannot be prepared - Update");
    }
  }

  function insert($sql, $values, $datatypes) {
    $conn = $GLOBALS['conn'];
    if ($stmt = mysqli_prepare($conn,$sql)) {
      mysqli_stmt_bind_param($stmt, $datatypes,...$values);
      if (mysqli_stmt_execute($stmt)) {
        $res = mysqli_stmt_affected_rows($stmt);
        mysqli_stmt_close($stmt);
        return $res;
      } else {
        mysqli_stmt_close($stmt);
        die("Query cannot be executed - Insert");
      }
    } else {
      die("Query cannot be prepared - Insert");
    }
  }

  function delete($sql, $values, $datatypes) {
    $conn = $GLOBALS['conn'];
    if ($stmt = mysqli_prepare($conn,$sql)) {
      mysqli_stmt_bind_param($stmt, $datatypes,...$values);
      if (mysqli_stmt_execute($stmt)) {
        $res = mysqli_stmt_get_result($stmt);
        mysqli_stmt_close($stmt);
        return $res;
      } else {
        mysqli_stmt_close($stmt);
        die("Query cannot be executed - delete");
      }
    } else {
      die("Query cannot be executed - delete");
    }
  }
?>