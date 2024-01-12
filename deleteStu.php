<?php

include ('config_db/config.php');
if(isset($_GET['deletedid'])){
    $codeetudiant=$_GET['deletedid'];
    $sql="delete from `etudiant` where `codeetudiant`='$codeetudiant'";
    $result=mysqli_query($con,$sql);
        if($result){
            //echo"deleted";
            header('location:tStudent.php');
        }
        else{
            die(mysqli_error($con));
        }
}

?>