<?php 
include 'config_db/config.php';

if(isset($_GET['deletedid'])){
    $codesalle=$_GET['deletedid'];
    $sql=" delete from `salle` where `codesalle`=$codesalle";
    $result=mysqli_query($con,$sql);
if($result){
    echo "date deleted";
    header('location:tSalle.php');
}
else{
    die(mysqli_error($con));
}
}

?>