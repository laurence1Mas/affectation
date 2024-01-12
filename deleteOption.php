<?php 
include 'config_db/config.php';

if(isset($_GET['deletedid'])){
    $codeoption=$_GET['deletedid'];
    $sql=" delete from `option` where `codeoption`=$codeoption";
    $result=mysqli_query($con,$sql);
if($result){
    echo "date deleted";
    header('location:tOption.php');
}
else{
    die(mysqli_error($con));
}
}

?>