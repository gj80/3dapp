<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="../public/css/font-awesome.css" />
  <link rel="stylesheet" href="../public/css/bootstrap.css" />
  <link rel="stylesheet" href="../public/css/styles.css" />
  <!-- <link rel="stylesheet" href="../public/css/custom.css" /> -->
  <style>
    @font-face {
      font-family: cocaColaFont;
      src: url(../public/fonts/LOKICOLA.TTF);
    }


    .navbar-brand h1 {
      font-family: cocaColaFont; /* You don't need to repeat this for each media query as it is propagated */
      font-size: 70px;
      margin: 0;
      margin-top: -10px;
      margin-bottom: -15px;
      float: left;
      padding-top: 0px;
      padding-left: 0px;
      padding-right: 2px;
    }

    .navbar-brand h2 {
      font-family: cocaColaFont;
      font-size: 65px;
      margin-top: -6px;
      margin-bottom: -15px;
      padding-top: 0px;
      padding-left: 0px;
      padding-right: 3px;
      float: left;
    }

    .navbar-brand h3 {
      font-size: 60px;
      margin-top: 0px;
      margin-bottom: -5px;
      padding-top: 0px;
      padding-left: 0px;
      float: left;
    }

    #dot-div {
      transform: skewX(-20deg);
    }
  </style>
  <link rel="stylesheet" href="../public/css/x3dom.css" />
  <link rel="icon" href="../public/images/favicon.png" />
  <title><?php echo SITENAME; ?></title>
</head>
<body>
  <?php require APPROOT . '/app/views/inc/navbar.php'; ?>
  <div class="container">