<?php 
include 'config_db/config.php';

if(isset($_GET['deletedid'])){
    $codecours=$_GET['deletedid'];
    $sql=" delete from `cours` where `codecours`=$codecours";
    $result=mysqli_query($con,$sql);
if($result){
    echo "date deleted";
    header('location:tCours.php');
}
else{
    die(mysqli_error($con));
}
}

?>