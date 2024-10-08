<?php
include('database.php');
$stmt = $conn->prepare("SELECT COUNT(*) FROM `system` WHERE `maintenance` = 1");
$stmt->execute();
$result = $stmt->get_result();
if ($result->fetch_row()[0] == 0 && isset($_SESSION['id'])) {
  header("Location: https://example.com");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link type="text/css" rel="stylesheet" id="dark-mode-custom-link">
  <link type="text/css" rel="stylesheet" id="dark-mode-general-link">
  <style lang="en" type="text/css" id="dark-mode-custom-style"></style>
  <style lang="en" type="text/css" id="dark-mode-native-style"></style>
  <style lang="en" type="text/css" id="dark-mode-native-sheet"></style>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Elfbar-Security">
  <meta name="keywords" content="fivem, anticheat, anticheat leaked, free anticheat, imoshield, fivem ac">
  <meta name="author" content="ImoShield LTC.">
  <link rel="icon" href="https://cdn.example.com/assets/images/favicon.png" type="image/x-icon">
  <link rel="shortcut icon" href="https://cdn.example.com/assets/images/favicon.png" type="image/x-icon">
  <title>Elfbar-Security | Panel</title>
  <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
    rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.example.com/assets/css/vendors/icofont.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.example.com/assets/css/vendors/themify.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.example.com/assets/css/vendors/flag-icon.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.example.com/assets/css/vendors/animate.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.example.com/assets/css/vendors/chartist.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.example.com/assets/css/vendors/date-picker.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.example.com/assets/css/vendors/feather-icon.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.example.com/assets/css/vendors/scrollbar.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.example.com/assets/css/vendors/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.example.com/assets/css/style.css">
  <link id="color" rel="stylesheet" href="https://cdn.example.com/assets/css/color-1.css" media="screen">
  <link rel="stylesheet" type="text/css" href="https://cdn.example.com/assets/css/responsive.css">
  <style>
    ::-webkit-scrollbar {
      width: 12px;
    }

    ::-webkit-scrollbar-track {
      box-shadow: inset 0 0 5px rgb(46, 41, 66);
      border-radius: 6px;
    }

    ::-webkit-scrollbar-thumb {
      background: rgb(42, 41, 48);
      border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb:hover {
      background: rgb(54, 54, 80);
    }
  </style>
</head>

<body>

  <div class="page-wrapper">
    <div class="error-wrapper maintenance-bg">
      <div class="container">
        <ul class="maintenance-icons">
          <li><i class="fa fa-cog"></i></li>
          <li><i class="fa fa-cog"></i></li>
          <li><i class="fa fa-cog"></i></li>
        </ul>
        <div class="maintenance-heading">
          <h2 class="headline">MAINTENANCE</h2>
        </div>
        <h4 class="sub-content">Our Site is Currently under maintenance We will be back Shortly<br> Thank You For
          Patience</h4>

      </div>
    </div>
  </div>
  <script src="../assets/js/jquery-3.5.1.min.js"></script>
  <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
  <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
  <script src="../assets/js/scrollbar/simplebar.js"></script>
  <script src="../assets/js/scrollbar/custom.js"></script>
  <script src="../assets/js/config.js"></script>
  <script src="../assets/js/sidebar-menu.js"></script>
  <script src="../assets/js/tooltip-init.js"></script>
  <script src="../assets/js/script.js"></script>

  <script type="text/javascript">
    if ($(".page-wrapper").hasClass("horizontal-wrapper")) {
      $(".according-menu.other").css("display", "none");
      $(".sidebar-submenu").css("display", "block");
    }
  </script>
</body>

</html>