


<?php

$con=new mysqli('localhost','root','','affectation_db');
if($con){
    //echo"connection successfull";
}
else{
   die(mysqli_error($con));
}

?>