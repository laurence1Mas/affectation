<?php 
include 'config_db/config.php';

if(isset($_GET['deletedid'])){
    $codeexamen=$_GET['deletedid'];
    $sql=" delete from `examen` where `codeexamen`=$codeexamen";
    $result=mysqli_query($con,$sql);
if($result){
    echo "date deleted";
    header('location:exam.php');
}
else{
    die(mysqli_error($con));
}
}

?>