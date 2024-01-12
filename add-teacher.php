


<?php

    include 'config_db/config.php';
    if(isset($_POST['addteacher'])){
      $name=$_POST['name'];
      $postnom=$_POST['postnom'];
      $prenom=$_POST['prenom'];
      $genre=$_POST['genre'];
      $etat_civil=$_POST['etat-civil'];
      $adresse=$_POST['adresse'];
      $mail=$_POST['email'];
      $numero=$_POST['numero'];

      $sql=" INSERT INTO `enseignant`( `nom`, `postnom`, `prenom`, `genre`, `etat_civil`, `adresse`, `numero`, `mail`) VALUES ('$name','$postnom','$prenom','$genre','$etat_civil','$adresse','$numero','$mail')";
      $result=mysqli_query($con,$sql);

      if($result){
        echo "data insert";
        header('location:tTeachers.php');
      }
      else{
        die(mysqli_error($con));
      }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Preskool - Students</title>

<link rel="shortcut icon" href="assets/img/favicon.png">

<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/feather/feather.css">

<link rel="stylesheet" href="assets/plugins/icons/flags/flags.css">

<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="main-wrapper">

<div class="header">

<div class="header-left">
<a href="index.html" class="logo">
<img src="assets/img/logo.png" alt="Logo">
</a>
<a href="index.html" class="logo logo-small">
<img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
</a>
</div>

<div class="menu-toggle">
<a href="javascript:void(0);" id="toggle_btn">
<i class="fas fa-bars"></i>
</a>
</div>

<div class="top-nav-search">
<form>
<input type="text" class="form-control" placeholder="Search here">
<button class="btn" type="submit"><i class="fas fa-search"></i></button>
</form>
</div>


<a class="mobile_btn" id="mobile_btn">
<i class="fas fa-bars"></i>
</a>


<ul class="nav user-menu">
<li class="nav-item dropdown language-drop me-2">
<a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
<img src="assets/img/icons/header-icon-01.svg" alt="">
</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="javascript:;"><i class="flag flag-lr me-2"></i>English</a>
<a class="dropdown-item" href="javascript:;"><i class="flag flag-bl me-2"></i>Francais</a>
<a class="dropdown-item" href="javascript:;"><i class="flag flag-cn me-2"></i>Turkce</a>
</div>
</li>

<li class="nav-item dropdown noti-dropdown me-2">
<a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
<img src="assets/img/icons/header-icon-05.svg" alt="">
</a>
<div class="dropdown-menu notifications">
<div class="topnav-dropdown-header">
<span class="notification-title">Notifications</span>
<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
</div>
<div class="noti-content">
<ul class="notification-list">
<li class="notification-message">
<a href="#">
<div class="media d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Carlson Tech</span> has approved <span class="noti-title">your estimate</span></p>
<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="#">
<div class="media d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-11.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">International Software Inc</span> has sent you a invoice in the amount of <span class="noti-title">$218</span></p>
<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="#">
<div class="media d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-17.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">John Hendry</span> sent a cancellation request <span class="noti-title">Apple iPhone XR</span></p>
<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="#">
<div class="media d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-13.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Mercury Software Inc</span> added a new product <span class="noti-title">Apple MacBook Pro</span></p>
<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="topnav-dropdown-footer">
<a href="#">View all Notifications</a>
</div>
</div>
</li>

<li class="nav-item zoom-screen me-2">
<a href="#" class="nav-link header-nav-list">
<img src="assets/img/icons/header-icon-04.svg" alt="">
</a>
</li>

<li class="nav-item dropdown has-arrow new-user-menus">
<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
<span class="user-img">
<img class="rounded-circle" src="assets/img/profiles/avatar-01.jpg" width="31" alt="Soeng Souy">
<div class="user-text">
<h6>Soeng Souy</h6>
<p class="text-muted mb-0">Administrator</p>
</div>
</span>
</a>
<div class="dropdown-menu">
<div class="user-header">
<div class="avatar avatar-sm">
<img src="assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
</div>
<div class="user-text">
<h6>Soeng Souy</h6>
<p class="text-muted mb-0">Administrator</p>
</div>
</div>
<a class="dropdown-item" href="profile.html">My Profile</a>
<a class="dropdown-item" href="inbox.html">Inbox</a>
<a class="dropdown-item" href="login.html">Logout</a>
</div>
</li>

</ul>

</div>


<div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">
                            <span>Main Menu</span>
                        </li>
                        <li class="submenu active">
                            <a href="#"><i class="feather-grid"></i> <span> Dashboard</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="index.php" class="active">Admin Dashboard</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-graduation-cap"></i> <span> Students</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="tStudent.php">Student List</a></li>
                                <li><a href="student-details.php">Student View</a></li>
                                <li><a href="add-student.php">Student Add</a></li>
                                <li><a href="edit-student.php">Student Edit</a></li>
                                <li><a href="tinscription.php">Inscription Add</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Teachers</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="tTeachers.php">Teacher List</a></li>
                                <li><a href="teacher-details.html">Teacher View</a></li>
                                <li><a href="add-teacher.php">Teacher Add</a></li>
                                <li><a href="edit-teacher.php">Teacher Edit</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-building"></i> <span> Departments</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="tOption.php">Options Add</a></li>
                                <li><a href="tAnneeAc.php">Annee Add</a></li>
                                <li><a href="tSeession.php">Session Add</a></li>
                                <li><a href="tPromotion.php">Promotion Add</a></li>
                                <li><a href="tPrevision.php">Prevision Add</a></li>
                                <li><a href="tpayement.php">Payement Add</a></li>
                            </ul>
                        </li>
                        <li class="menu-title">
                            <span>Management</span>
                        </li>
                        <li>
                            <a href="exam.php"><i class="fas fa-clipboard-list"></i> <span>Exam list</span></a>
                        </li>
                        <li>
                            <a href="tSalle.php"><i class="fas fa-home"></i><span>Salle list</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-book"></i> <span> Cours</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="tCours.php">Cours List</a></li>
                                <li><a href="add-Cours.php">Cours Add</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-newspaper"></i> <span> Mes recours</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="trecours.php">All recours</a></li>
                                <li><a href="add-recours.php">Add recours</a></li>
                                <li><a href="edit-recours.php">Edit Blog</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="settings.html"><i class="fas fa-cog"></i> <span>Settings</span></a>
                        </li>
                        <li class="menu-title">
                            <span>Pages</span>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-shield-alt"></i> <span> Authentication </span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="forgot-password.html">Forgot Password</a></li>
                                <li><a href="error-404.html">Error Page</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
<div class="col-sm-12">
<div class="page-sub-header">
<h3 class="page-title">Add Teachers</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="students.html">Teachers</a></li>
<li class="breadcrumb-item active">Add Teachers</li>
</ul>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card comman-shadow">
<div class="card-body">
<form method="post">
<div class="row">
<div class="col-12">
<h5 class="form-title student-info">Teachers Information <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
</div>
<div class="col-12">
    <div class="student-submit">
        <button type="submit" class="btn btn-success" name="addteacher">Add teacher</button>
    </div>
</div><br><br><br>
<div class="col-12 col-sm-4">
    <div class="form-group local-forms">
        <label>Nom <span class="login-danger">*</span></label>
        <input class="form-control" name="name" type="text" placeholder="Enter First Name">
    </div>
</div>
<div class="col-12 col-sm-4">
    <div class="form-group local-forms">
        <label>postnom <span class="login-danger">*</span></label>
        <input class="form-control" name="postnom" type="text" placeholder="Enter First Name">
    </div>
</div>
<div class="col-12 col-sm-4">
    <div class="form-group local-forms">
        <label>prenom <span class="login-danger">*</span></label>
        <input class="form-control" name="prenom" type="text" placeholder="Enter First Name">
    </div>
</div>
<div class="col-12 col-sm-4">
    <div class="form-group local-forms">
        <label>Genre <span class="login-danger">*</span></label>
        <select class="form-control select" name="genre">
            <option>Select Gender</option>
            <option value="feminin">Feminin</option>
            <option value="masculin">Masculin</option>
            <option value="autre">autre</option>
        </select>
    </div>
</div>
<div class="col-12 col-sm-4">
    <div class="form-group local-forms">
        <label>Etat-civil <span class="login-danger">*</span></label>
        <select class="form-control select" name="etat-civil">
            <option>Select etat-civil</option>
            <option value="mairie(e)">marie</option>
            <option value="celibataire">celibataire</option>
            <option value="divorce(e)">divorce</option>
        </select>
    </div>
</div>
<div class="col-12 col-sm-4">
    <div class="form-group local-forms">
        <label>Adresse</label>
        <input class="form-control" name="adresse" type="text" placeholder="entre l'adresse">
    </div>
</div>
<div class="col-12 col-sm-4">
    <div class="form-group local-forms">
        <label>Numero tel</label>
        <input class="form-control" name="numero" type="text" placeholder="entrele numero de telephone">
    </div>
</div>
<div class="col-12 col-sm-4">
    <div class="form-group local-forms">
        <label>E-Mail <span class="login-danger">*</span></label>
        <input class="form-control" name="email" type="text" placeholder="Entre l'adresse e-mail">
    </div>
</div>
<div class="col-12 col-sm-4">
    <div class="form-group students-up-files">
        <label>Upload Student Photo (150px X 150px)</label>
        <div class="uplod">
            <label class="file-upload image-upbtn mb-0">Choose File <input type="file" name="image"></label>
        </div>
    </div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/plugins/moment/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>