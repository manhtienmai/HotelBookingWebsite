<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>JW MARIOTT - FACILITIES</title>
  <?php include('inc/links.php'); ?>
  <style>
    .pop:hover {
      border-top-color: var(--teal) !important;
      transform: scale(1.03);
      transition: all 0.3s;
    }
  </style>
</head>

<body class="bg-light">

  <?php require('inc/header.php'); ?>

  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">OUR FACILITIES</h2>
    <div class="h-line"></div>
    <p class="text-center mt-3">
      Lorem ipsum dolor, sit amet consectetur adipisicing
    </p>
  </div>

  <div class="container">
    <div class="row">
      <?php
      $res = selectAll('facilities');
      $path = FACILITIES_IMG_PATH;

      while ($row = mysqli_fetch_assoc($res)) {
        echo <<<data
          <div class="col-lg-4 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow border-top border-dark border-4 p-4 pop">
              <div class="d-flex align-items-center mb-2">
                <img src="$path$row[icon]" width="40px">
                <h2 class="m-0 ms-3">$row[name]</h2>
              </div>
              <p>$row[description]</p>
            </div>
          </div>            
          data;
      }

      ?>
    </div>
  </div>

  <?php include('inc/footer.php'); ?>

</body>

</html>