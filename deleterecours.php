<?php 
include 'config_db/config.php';

if(isset($_GET['deletedid'])){
    $coderecours=$_GET['deletedid'];
    $sql=" delete from `recours` where `coderecours`=$coderecours";
    $result=mysqli_query($con,$sql);
if($result){
    echo "date deleted";
    header('location:trecours.php');
}
else{
    die(mysqli_error($con));
}
}

?>