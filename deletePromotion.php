<?php 
include 'config_db/config.php';

if(isset($_GET['deletedid'])){
    $codepromotion=$_GET['deletedid'];
    $sql=" delete from `promotion` where `codepromotion`=$codepromotion";
    $result=mysqli_query($con,$sql);
if($result){
    echo "date deleted";
    header('location:tPromotion.php');
}
else{
    die(mysqli_error($con));
}
}

?>