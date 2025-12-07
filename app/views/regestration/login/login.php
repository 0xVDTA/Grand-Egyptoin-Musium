<?php
require_once APP_PATH . '/config/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Grand Egyptian Museum</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <!-- bootstrap -->
  <link rel="stylesheet" href="<?= ASSETS ?>css/bootstrap.min.css" />
  <!-- css components -->
  <link rel="stylesheet" href="<?= ASSETS ?>css/components/navbar.component.css">
  <link rel="stylesheet" href="<?= ASSETS ?>css/login.css">
</head>

<body>
<?php
  $hideLogin = true;  // أو أي قيمة
  include VIEW_PATH . 'components/navbar.php';
?>
  <div class="row documentNotNavbar container-fluid justify-content-center m-auto h-100 align-items-center" id="login">
    <div id="form" class="col-sm-12 col-md-7 col-lg-6 py-0">
      <h2 class="address my-4 text-center">Grand Egyptian Museum Portal</h2>

      <div class="d-flex flex-column fm-pacifico gap-4 mb-3">
        <input type="text" class="form-control py-2" id="inputName" placeholder="Enter your Name " />
        <input type="email" class="form-control py-2" id="inputEmail" placeholder="Enter your email" />
        <input type="password" class="form-control py-2" id="inputPassword" placeholder="Enter your password" />
        <div id="errorBox" class="alert alert-danger mt-3 d-none text-center"></div>
        <button id="Submit">Log in</button>
        <p>You have an account? <a id="Sign" href="#"> SignUP</a></p>
      </div>
    </div>
  </div>
  <script src="<?= ASSETS ?>js/login.js"></script>
  <script src="<?= ASSETS ?>js/bootstrap.bundle.min.js"></script>
  <script src="<?= ASSETS ?>js/navbar.component.js"></script>
</body>

</html>