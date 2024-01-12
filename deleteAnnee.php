<?php 
include 'config_db/config.php';

if(isset($_GET['deletedid'])){
    $codeoption=$_GET['deletedid'];
    $sql=" delete from `annee` where `codeannee`=$codeoption";
    $result=mysqli_query($con,$sql);
if($result){
    echo "date deleted";
    header('location:tAnneeAc.php');
}
else{
    die(mysqli_error($con));
}

}

?>