<?php 
include 'config_db/config.php';

if(isset($_GET['deletedid'])){
    $codesession=$_GET['deletedid'];
    $sql=" delete from `session` where `codesession`=$codesession";
    $result=mysqli_query($con,$sql);
if($result){
    echo "date deleted";
    header('location:tSeession.php');
}
else{
    die(mysqli_error($con));
}
}

?>