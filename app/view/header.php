<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Grand Coffee</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="../../public/css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="../../public/css/responsive.css">
   <!-- login css -->
   <!-- <link rel="stylesheet" type="text/css" href="../../public/css/login.css"> -->
   <!-- fevicon -->
   <link rel="icon" href="../../public/image/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="../../public/css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="../../public/css/owl.carousel.min.css">
   <link rel="stylesheet" href="../../public/css/owl.theme.default.min.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

   <!--  -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
   <!--header section start -->
   <div class="header_section">
      <div class="container-fluid">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="logo"><a href="index.html"><img src="../../public/image/logo.png"></a></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="about.html">About Us</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="gallery.html">Gallery</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="services.html">Services</a>
                  </li>

                  <li class="nav-item">
                     <a class="nav-link" href="/cart"><i class="bi bi-cart4"></i></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                  </li>
                  <?php
                  if ( isset($_SESSION['name']) && ($_SESSION['name']) != "") {

                     echo '
                     <div class="btn-group">
                     <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     ' . $_SESSION['name'] . '
                     </button>
                     <div class="dropdown-menu">
                       <a class="dropdown-item" href="#">' . $_SESSION['name'] . '</a>
                       <a class="dropdown-item" href="#">Quản lý tài khoản</a>
                       <a class="dropdown-item" href="/qldh">Quản lý đơn hàng</a>
                       ';

                     if ($_SESSION['role'] == 1) {
                        echo '                       
                        <a class="dropdown-item" href="/admin">Quản lí admin</a>
                        ';
                     }
                     echo '
                       <div class="dropdown-divider"></div>
                       <a class="dropdown-item" href="/logout">Đăng xuất</a>
                     </div>';
                  } else { ?>
                     <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                     </li>

                  <?php } ?>

               </ul>
            </div>
         </nav>
      </div>
   </div>