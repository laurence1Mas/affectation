
<?php

include 'config_db/config.php';
if (isset($_POST['addaffectation1'])) {
    $refetudiant = $_POST['refetudiant'];
    $refexamen = $_POST['refexamen'];
    $refsalle = $_POST['refsalle'];
    $sql = " INSERT INTO `affectation_etudiant`(`refinscription`, `refsalle`, `refexamen`) VALUES ('$refetudiant','$refexamen','$refsalle ')";
    //$sql = " INSERT INTO `inscription`(`refetudiant`,`refpromotion`,`dateinscription`,`refannee`) VALUES ('$refetudiant','$refpromotion','getdate()','$refannee')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "data insert";
        header('location:tattributionplaceetudiant.php');
    } else {
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

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

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
<div class="row">
<div class="col-sm-12">
<div class="page-sub-header">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="tinscription.php">Inscription</a></li>
<li class="breadcrumb-item active">All Inscription</li>
</ul>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card card-table comman-shadow">
<div class="card-body">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Inscription</h3>
</div>
<div class="col-auto text-end float-end ms-auto download-grp">
<a href="students.html" class="btn btn-outline-gray me-2 active"><i class="feather-list"></i></a>
<a href="students-grid.html" class="btn btn-outline-gray me-2"><i class="feather-grid"></i></a>
<a href="listeinscription.php" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
<button type="button" class="btn btn-success waves-effect waves-light mt-1" data-bs-toggle="modal" data-bs-target="#con-close-modal"><i class="fas fa-plus"></i></button>
<!--<a href="add-student.html" class="btn btn-primary"><i class="fas fa-plus"></i></a> -->
</div>
</div>
</div>

<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">Enregistrement Affectation</h4>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body p-4">
<form method="post">
<div class="row">
<div class="col-md-6">
    <div class="mb-3">
        <label for="field-3" class="form-label">Etudiant</label>
            <?php
            $sql = "SELECT * FROM `Vinscription`";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_assoc($result);
            ?>
            <select name="refetudiant" id="refetudiant" class="form-control">
                <option >select etudiant ---</option>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                            <option value= "<?php echo $row["idinscription"]; ?>" ><?php echo $row["etudiant"]; ?> </option>;
                        <?php
                }
                ?>                                     
            </select>
            <label for="field-3" class="form-label">Examen</label>
            <?php
            $sql = "SELECT * FROM `vexamen`";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_assoc($result);
            ?>
            <select name="refexamen" id="refpromotion" class="form-control">
                <option >select examen ---</option>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                            <option value= "<?php echo $row["codeexamen"]; ?>" ><?php echo $row["cours"]; ?> </option>;
                        <?php
                }
                ?>                                     
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label for="field-3" class="form-label">Salle</label>
            <?php
            $sql = "SELECT * FROM `salle`";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_assoc($result);
            ?>
            <select name="refsalle" id="refannee" class="form-control">
                <option >select salle ---</option>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                            <option value= "<?php echo $row["codesalle"]; ?>" ><?php echo $row["designation"]; ?> </option>;
                        <?php
                }
                ?>                                     
            </select>
            <label for="dateaffectation"> Date affectation</label>
            <input type="date" class="form-control" id="dateaffectation" name="dateaffectation">
        </div>
    </div>
</div>
<button type="submit" name="addaffectation1" class="btn btn-info waves-effect waves-light"> Add Affectation</button>
</form>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>

<div class="table-responsive">
    <table
    id="zero_config"
    class="table border-0 star-student table-hover table-center mb-0 datatable table-striped"
  >
    <thead class="student-thread">
      <tr>
      <th scope="col">####</th>
      <th scope="col">Etudiant</th>
      <th scope="col">SALLE</th>
      <th scope="col">EXAMEN</th>
      <th scope="col"> DATE</th>
      <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $sql = "SELECT * FROM `affectation_etudiant`";
    $result = mysqli_query($con, $sql);
    if ($result) {
        while ($row = mysqli_fetch_array($result)) {
            $idinscription= $row['codeaffectation'];
            $codeinscription = $row['refinscription'];
            $etudiant = $row['refsalle'];
            $promotion= $row['refexamen'];
            $dateinscription = $row['date_affectation'];
            echo '<tr>
                  <th scope="row">' . $idinscription . '</th>
                  <th scope="row">' . $codeinscription . '</th>
                  <td>' . $etudiant . '</td>
                  <td>' . $promotion . '</td>
                  <td>' . $dateinscription . '</td>
                  <td>
                  <a href="student-details.php?selectid=' . $idinscription . '" class="btn btn-sm bg-success-light me-2">
                      <i class="feather-eye"></i>
                  </a>
                  <button  class="btn btn-primary"> <a href="edit-inscription.php?
                  updateid=' . $idinscription . '" class="text-light"><i class="feather-edit"></i></a> </button>
                  <button class="btn btn-danger"name="danger"> <a href="deleteinscription.php?
                  deletedid=' . $idinscription . '" class="text-light"><i class="feather-delete"></i></a> </button>
                  <button class="btn btn-secondary"name="danger"> <a href="ficheaffectationetudiant.php?
                  printed=' . $idinscription . '" class="text-light"><i class="feather-printer"></i></a> </button>
                  </td>
                  </tr>';
        }

    }
    ?>
    </tbody>
  </table>
</div>
</div>
</div>
</div>
</div>
</div>

<footer>
<p>Copyright © 2022 Dreamguys.</p>
</footer>

</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/datatables/datatables.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>