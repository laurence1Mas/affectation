<?php
include('config_db/config.php');
include 'dompdf/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;
use Dompdf\Options;


// les choses a charger comme pdf dans la page
$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des etudiants</title>
</head>

<style>
  body{
    font-family: Arial, Helvetica, sans-serif;
    
    width:100%;
  }
  table{
    border-collapse: collapse;
    width:100%;
  }
  
  th, td{
    border: 1px solid black;
    padding: 2px;
  }
  p{
    
  }
  img{
    
    width: 120px;
    padding: 2px;
}
.entete{
    text-align:center;
    padding: 2px;
}
.republique{
    font-weight: bold;
    padding: 0,5px;
}
h2.dg{
  font-weight: bold;
  border-bottom: 3px solid black;
}
#footer { position: fixed; right: 0px; bottom: 10px; text-align: center;}
        #footer .page:after { content: counter(page, decimal); }
 @page { margin: 20px 30px 40px 50px; }
 thead{
  display: table-header-group;
  page-break-inside: avoid;
}
</style>
<body>
    <div class="entete ">    
    <h2 class="republique">REPUBLIQUE DEMOCRATIQUE DU CONGO <br>
        PROVINCE DU NORD-KIVU <br>
        MINISTERE DE L ENSEIGNEMENT SUPERIEUR ET UNIVERSITAIRE <br>
        INSTITUT SUPERIEUR DE COMMERCE-GOMA <br>
        <img src="assets/img/isc.jpg" alt="image"> <br>
        ISC-GOMA
    </h2>          
    <p style="font-family: Arial, Helvetica, sans-serif; text-align:center; border-style: double;
    font-weight: bold;
    font-size: 25px;">LISTE DES ETUDIANTS</p>
    </div>

<table class="table-bordered">
<thead style="background-color: dimgrey;">
    <th scope="col">#</th>
    <th scope="col">NOMS</th>
    <th scope="col">SEXE</th>
    <th scope="col">LIEU NAISS.</th>
    <th scope="col">DATE NAISS.</th>
    <th scope="col">TELEPHONE</th>
    <th scope="col">MAIL</th>
    <th scope="col">ADRESSE</th>
</thead>
<tbody>';
        $sql = "SELECT * FROM etudiant";
        $result = mysqli_query($con,$sql);
        $numero = 1;
        while($agent = mysqli_fetch_assoc($result)){
        $html .='
            <tr>
                <td>'.$numero.'</td>
                <td>'.$agent['nom'].'  '.$agent['postnom'].'  '.$agent['prenom'].'</td>               
                <td>'.$agent['genre'].'</td>
                <td>'.$agent['lieu_naissance'].'</td>
                <td>'.$agent['date_naissance'].'</td>
                <td>'.$agent['numero'].'</td>
                <td>'.$agent['mail'].'</td>
                <td>'.$agent['adresse'].'</td>
            </tr>
            ';
            $numero ++;
    }
    
$html .='</tbody>
</table>
<div id="footer">
    <p>infoiscgoma@gmail.com</p>
    <p class="page">Page </p>
  </div> 
</body>
</html>';
$dompdf = new Dompdf();
$option = new Options();
$option ->set('chroot', realpath(''));
$dompdf->set_option("isPhpEnabled", true);
$dompdf = new Dompdf($option);
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('print.pdf',['Attachment'=>false]);
 

?>
