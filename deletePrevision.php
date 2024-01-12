<?php 
include 'config_db/config.php';

if(isset($_GET['deletedid'])){
    $codeprevision=$_GET['deletedid'];
    $sql=" delete from `previsions` where `idprevision`=$codeprevision";
    $result=mysqli_query($con,$sql);
if($result){
    echo "data deleted";
    header('location:tprevision.php');
}
else{
    die(mysqli_error($con));
}
}

?>