<?php

include ('config_db/config.php');
if(isset($_GET['deletedid'])){
    $codeenseignant=$_GET['deletedid'];
    $sql="delete from `enseignant` where `codeenseignant`='$codeenseignant'";
    $result=mysqli_query($con,$sql);
        if($result){
            //echo"deleted";
            header('location:tTeachers.php');
        }
        else{
            die(mysqli_error($con));
        }
}

?>