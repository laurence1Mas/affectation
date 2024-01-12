<?php
    session_start();
	include "../../config/config.php";

   

    if(isset($_POST['Staff_ID'])){
        
        $Staff_ID =$_POST['Staff_ID'];
		$date = date('Y-m-d');
		$time = date('H:i:s A');

		$sql = "SELECT * FROM agent WHERE Staff_ID = '$Staff_ID'";
		$query = $conn->query($sql);

		if($query->num_rows < 1){
			$_SESSION['error'] = ' vous n\'etes pas idenfitifié '.$Staff_ID;
		}else{
				$row = $query->fetch_assoc();
				$id = $row['Staff_ID'];
				$sql = "SELECT * FROM attendance WHERE Staff_ID='$id' AND LOGDATE='$date'";
				$query=$conn->query($sql);
				if($query->num_rows>0){
					echo'err';
				}else{
				$sql ="SELECT * FROM attendance WHERE Staff_ID='$id' AND LOGDATE='$date' AND STATUS='0'";
				$query=$conn->query($sql);
			}
			if($query->num_rows>0){
				$sql = "UPDATE attendance SET TIMEOUT='$time', STATUS='1' WHERE Staff_ID='$Staff_ID' AND LOGDATE='$date'";
				$query=$conn->query($sql);

				$myAudioFile = "audio/96.wav";
                            echo '<audio autoplay="true" style="display:none;">
                                <source src="'.$myAudioFile.'" type="audio/wav">
                            </audio>';
				
				$_SESSION['success'] = 'Au revoir: '.$row['nom'].' '.$row['postnom'].' '.$row['prenom'] ;
			}else{
					$sql = "INSERT INTO attendance(Staff_ID,TIMEIN,LOGDATE,STATUS) VALUES('$Staff_ID','$time','$date','0')";
					if($conn->query($sql) ===TRUE){

                      $myAudioFile = "audio/96.wav";
                            echo '<audio autoplay="true" style="display:none;">
                                <source src="'.$myAudioFile.'" type="audio/wav">
                            </audio>';

					 $_SESSION['success'] = 'Bienvenue: '.$row['nom'].' '.$row['postnom'].' '.$row['prenom'] ;

                   

			 }else{
				
			  $_SESSION['error'] = $conn->error;
		   }	
		}
	}

	}else{
		$_SESSION['error'] = 'Please veuillez scanner ta carte';
}
header("location: index.php");
	   
$conn->close();
?>