<?php                                                                                     
session_start();
//if (!isset($_SESSION['user']) or ($_SESSION['user_level'] != 1))
if (!isset($_SESSION['user']))
{ 
  header("location: login-form.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en" >
   <head>
      <meta charset="UTF-8">
      <title>BootAdmin</title>
      <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
      <!DOCTYPE html>
               <html lang="en">
                  <!--<![endif]-->
                  <head>
                     <!-- Le Basic Page Needs
                        ================================================== -->
                     <meta charset="utf-8">
                     <meta http-equiv="X-UA-Compatible" content="IE=edge">
                     <title>
                        Dashboard &middot; Bootadmin
                     </title>
                     <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
                     <script type="text/javascript">
                        var host = "bootadmin.org";
                        if ((host == window.location.host) && (window.location.protocol != "https:"))
                            window.location.protocol = "https";
                     </script>
                     <meta name="viewport" content="width=device-width, initial-scale=1">
                     <link rel="stylesheet" href="https://bootadmin.org/style/vendor/library.min.css">
                     <link rel="stylesheet" href="https://bootadmin.org/style/vendor/jqueryui-flat/jquery-ui.min.css">
                     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
                     <link rel="stylesheet" href="https://bootadmin.org/style/core/style.min.css">
                     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                     <link rel="apple-touch-icon" sizes="57x57" href="/images/favicon/apple-icon-57x57.png">
                     <link rel="apple-touch-icon" sizes="60x60" href="/images/favicon/apple-icon-60x60.png">
                     <link rel="apple-touch-icon" sizes="72x72" href="/images/favicon/apple-icon-72x72.png">
                     <link rel="apple-touch-icon" sizes="76x76" href="/images/favicon/apple-icon-76x76.png">
                     <link rel="apple-touch-icon" sizes="114x114" href="/images/favicon/apple-icon-114x114.png">
                     <link rel="apple-touch-icon" sizes="120x120" href="/images/favicon/apple-icon-120x120.png">
                     <link rel="apple-touch-icon" sizes="144x144" href="/images/favicon/apple-icon-144x144.png">
                     <link rel="apple-touch-icon" sizes="152x152" href="/images/favicon/apple-icon-152x152.png">
                     <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-icon-180x180.png">
                     <link rel="icon" type="image/png" sizes="192x192"  href="/images/favicon/android-icon-192x192.png">
                     <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
                     <link rel="icon" type="image/png" sizes="96x96" href="/images/favicon/favicon-96x96.png">
                     <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
                     <link rel="manifest" href="/images/favicon/manifest.json">
                     <meta name="msapplication-TileColor" content="#ffffff">
                     <meta name="msapplication-TileImage" content="/images/favicon/ms-icon-144x144.png">
                     <meta name="theme-color" content="#ffffff">
                  </head>
                  <body id="landing" class="sidebar-open">
                     <div class="loading">
                        <div class="loading-center"><img src="https://bootadmin.org/images/loading/map.gif" alt="Loading" /></div>
                     </div>
                     <div class="page-container animsition">
                        <div id="dashboardPage">
                           <!-- Main Menu -->
                           <div class="topbar sidebar-open">
                              <div class="container-fluid">
                                 <div class="row">
                                    <div class="col-md-5 col-4">
                                       <div class="logo">
                                          <a href="https://bootadmin.org/">
                                          <span class="logo-emblem">BA</span>
                                          <span class="logo-full">Bootadmin</span>
                                          </a>
                                       </div>
                                       <a href="#" class="menu-toggle wave-effect">
                                       <i class="feather icon-menu"></i>
                                       </a>
                                    </div>
                                    <div class="col-md-7 col-8 text-right">
                                       <ul>  
                                          <!-- Profile Menu -->
                                          <li class="btn-group user-account">
                                             <a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <div class="avatar">
                                                   <img src="./image/tmp_gcs_full_5bf8bbee76ec57660765f7b7-2018-11-24-024815.png" alt="profile" />
                                                </div>
                                             </a>
                                             <ul class="dropdown-menu dropdown-menu-right animated bounceInUp">
                                                <li><a href="logout.php" class="animsition-link dropdown-item"><i class="feather icon-log-in"></i> Logout</a></li>
                                             </ul>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <aside class="offcanvas-menu">
                              slideout menu here
                           </aside>
                           <!-- Main Menu -->
                           <div class="sidebar sidebar-open">
                              <div class="logo">
                                 <a href="Dashboard.php">
                                 <span class="logo-emblem">AD</span>
                                 <span class="logo-full">Admin Control</span>
                                 </a>
                              </div>
                              <ul>
                                 <li class="spacer"></li>
                                 <li class="profile">
                                    <span class="profile-image">
                                    <img src="./image/tmp_gcs_full_5bf8bbee76ec57660765f7b7-2018-11-24-024815.png" alt="profile" />
                                    </span>
                                    <span class="profile-name">
                                    Admin
                                    </span>
                                 </li>
                                 <li class="spacer"></li>
                                 <li class="nav-item">
                                    <a href="Dashboard.php" class="nav-link wave-effect nav-single">
                                    <i class="fas fa-chart-line"></i>
                                    <span class="menu-title">Dashboard</span>
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link wave-effect collapsed waves-effect waves-block" data-toggle="collapse" href="#navUser" aria-expanded="false" aria-controls="page-elements">
                                    <i class="far fa-user"></i>
                                    <span class="menu-title">User</span>
                                    <i class="feather icon-chevron-down down-arrow"></i>
                                    </a>
                                    <div class="collapse" id="navUser">
                                       <ul class="flex-column sub-menu">
                                          <li class="nav-item">
                                             <a class="nav-link wave-effect waves-effect waves-block" href="add-user.php">
                                             <i class="fas fa-plus-square"></i>
                                             <span class="menu-title">Add user</span>
                                             </a>
                                          </li>
                                          <li class="nav-item">
                                             <a class="nav-link wave-effect waves-effect waves-block" href="userList.php">
                                             <i class="fas fa-list-ul"></i>
                                             <span class="menu-title">User list</span>
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link wave-effect collapsed waves-effect waves-block" data-toggle="collapse" href="#navMenu" aria-expanded="false" aria-controls="page-elements">
                                    <i class="fas fa-utensils"></i>
                                    <span class="menu-title">Menu</span>
                                    <i class="feather icon-chevron-down down-arrow"></i>
                                    </a>
                                    <div class="collapse" id="navMenu">
                                       <ul class="flex-column sub-menu">
                                          <li class="nav-item">
                                             <a class="nav-link wave-effect waves-effect waves-block" href="add-items.php">
                                             <i class="fas fa-plus-square"></i>
                                             <span class="menu-title">Add item</span>
                                             </a>
                                          </li>
                                          <li class="nav-item">
                                             <a class="nav-link wave-effect waves-effect waves-block" href="ItemsList.php">
                                             <i class="fas fa-list-ul"></i>
                                             <span class="menu-title">Item list</span>
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link wave-effect collapsed waves-effect waves-block" data-toggle="collapse" href="#navPost" aria-expanded="false" aria-controls="page-elements">
                                    <i class="far fa-newspaper"></i>
                                    <span class="menu-title">Post</span>
                                    <i class="feather icon-chevron-down down-arrow"></i>
                                    </a>
                                    <div class="collapse" id="navPost">
                                       <ul class="flex-column sub-menu">
                                          <li class="nav-item">
                                             <a class="nav-link wave-effect waves-effect waves-block" href="add-post.php">
                                             <i class="fas fa-plus-square"></i>
                                             <span class="menu-title">Add post</span>
                                             </a>
                                          </li>
                                          <li class="nav-item">
                                             <a class="nav-link wave-effect waves-effect waves-block" href="PostList.php">
                                             <i class="fas fa-list-ul"></i>
                                             <span class="menu-title">Post list</span>
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </li>
                                 <li class="nav-item">
                                    <a href="order-manager.php" class="nav-link wave-effect nav-single">
                                    <i class="far fa-money-bill-alt"></i>
                                    <span class="menu-title">Order</span>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <main>
                              <div class="page-breadcrumb">
                                 <div class="row">
                                    <div class="col-5">
                                       <h4 class="page-title">Dashboard</h4>
                                       <nav aria-label="breadcrumb">
                                          <ol class="breadcrumb">
                                             <li class="breadcrumb-item"><a href="Dashboard.php">Menu</a></li>
                                             <li class="breadcrumb-item active" aria-current="page">Add Post</li>
                                          </ol>
                                       </nav>
                                    </div>
                                 </div>
                              </div>
                              <div class="container">               
                                <?php include('add-post-form.php') ?>                  
                              </div>
                           </main>
                        </div>
                     </div>
                     <!-- Le Javascript -->
                     <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
                     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                     <script src="https://bootadmin.org/scripts/vendor/bootstrap.min.js"></script>
                     <script src="https://bootadmin.org/scripts/vendor/library.min.js"></script>
                     <script src="https://bootadmin.org/scripts/core/main.js"></script>
                  </body>
               </html>
               <script src="js/index.js"></script>
               </body>
            </html>