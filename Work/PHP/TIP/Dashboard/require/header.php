<!DOCTYPE html>
<html lang="en">
<head>
   <title>My website</title>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Main CSS-->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="css/main.css">
   <link rel="stylesheet" type="text/css" href="css/rajdhani.css">
   <link rel="stylesheet" type="text/css" href="css/all.min.css">
   <!-- Font-icon css-->
   <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
</head>
<body class="app sidebar-mini rtl">
   <!-- Navbar-->
   <header class="app-header"><a class="app-header__logo" href="../index.php" target="_blank">My website</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
         <!-- User Menu-->
         <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button "><i class="fa fa-search"></i></button>
        </li>
         <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
            <ul class="dropdown-menu settings-menu dropdown-menu-right">
               <!-- <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li> -->
               <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
               <li><a class="dropdown-item" href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
            </ul>
         </li>
      </ul>
   </header>
   <!-- Sidebar menu-->
   <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
   <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="Me.png" alt="User Image" width="35px">
         <div>
            <p class="app-sidebar__user-name">Abdur rahman</p>
            <p class="app-sidebar__user-designation">Fullstack Developer</p>
         </div>
      </div>
      <ul class="app-menu">
         <li><a class="app-menu__item active" href="index.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard Elements</span></a></li>


         <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Notice Board</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">

               <li><a class="treeview-item" href="NoticeAdd.php"><i class="icon fa fa-circle-o"></i>Notice Add</a></li>

               <li><a class="treeview-item" href="NoticeRead.php"><i class="icon fa fa-circle-o"></i> Notice Read</a></li>

               <li><a class="treeview-item" href="NoticeEdit.php"><i class="icon fa fa-circle-o"></i> Notice Edit</a></li>

               <li><a class="treeview-item" href="NoticeDelete.php"><i class="icon fa fa-circle-o"></i> Notice Delete</a></li>


            </ul>
         </li>



         <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Tables</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
               <li><a class="treeview-item" href="table-basic.html"><i class="icon fa fa-circle-o"></i> Basic Tables</a></li>
               <li><a class="treeview-item" href="table-data-table.html"><i class="icon fa fa-circle-o"></i> Data Tables</a></li>
            </ul>
         </li>


         <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fas fa-file"></i><span class="app-menu__label">Pages</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
               <li><a class="treeview-item" href="blank-page.html"><i class="icon fa fa-circle-o"></i> Blank Page</a></li>
               <li><a class="treeview-item" href="page-login.html"><i class="icon fa fa-circle-o"></i> Login Page</a></li>
               <li><a class="treeview-item" href="page-lockscreen.html"><i class="icon fa fa-circle-o"></i> Lockscreen Page</a></li>
               <li><a class="treeview-item" href="page-user.html"><i class="icon fa fa-circle-o"></i> User Page</a></li>
               <li><a class="treeview-item" href="page-invoice.html"><i class="icon fa fa-circle-o"></i> Invoice Page</a></li>
               <li><a class="treeview-item" href="page-calendar.html"><i class="icon fa fa-circle-o"></i> Calendar Page</a></li>
               <li><a class="treeview-item" href="page-mailbox.html"><i class="icon fa fa-circle-o"></i> Mailbox</a></li>
               <li><a class="treeview-item" href="page-error.html"><i class="icon fa fa-circle-o"></i> Error Page</a></li>
            </ul>
         </li>


         
      </ul>
   </aside>
   <main class="app-content">
      <div class="app-title">
         <div>
            <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
         </div>
         <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
         
            <li class="breadcrumb-item"><a href="#">Notice</a></li>
            <li class="breadcrumb-item active"><a href="#">SMS</a></li>
            
         </ul>
      </div>
