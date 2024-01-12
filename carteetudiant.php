<?php

include ('dompdf/autoload.inc.php');

$con=new mysqli('localhost','root','','affectation_db');
if($con){
    //echo"connection successfull";
}
else{
   die(mysqli_error($con));
}

if($_GET['printed']&&!empty($_GET['printed'])){
  	$id = strip_tags($_GET['printed']);
  	$sql = "SELECT * FROM `vinscription` WHERE  idinscription=' $id'";
	$result=mysqli_query($con,$sql);
  	$data = $con->prepare($sql);
  	$data->execute();
  	$row = $data->fetch();
	  $refetudiant =$row['etudiant'];
	  $refpromotion = $row['promotion'];
	  $dateinscription= $row['options'];
	  $refannee= $row['anneeAC'];
}

 
// reference the Dompdf namespace
use Dompdf\Dompdf;
use Dompdf\Options;

$html = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0014)about:internet -->
<html>
<head>
	<title>carteetudiant</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
		.csE8645E09 {color:#000000;background-color:#E6E6FA;border-left:#000000 1px solid;border-top:#000000 1px solid;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:13px; font-weight:normal; font-style:normal; }
		.cs625DCC3E {color:#000000;background-color:#E6E6FA;border-left:#000000 1px solid;border-top:#000000 1px solid;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:13px; font-weight:normal; font-style:normal; }
		.csB4895ADE {color:#000000;background-color:#E6E6FA;border-left:#000000 1px solid;border-top-style: none;border-right-style: none;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:13px; font-weight:normal; font-style:normal; }
		.csF65B41A7 {color:#000000;background-color:#E6E6FA;border-left:#000000 1px solid;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:13px; font-weight:normal; font-style:normal; }
		.cs8EC1FD14 {color:#000000;background-color:#E6E6FA;border-left-style: none;border-top:#000000 1px solid;border-right:#000000 1px solid;border-bottom-style: none;font-family:Times New Roman; font-size:13px; font-weight:normal; font-style:normal; }
		.csE08131B5 {color:#000000;background-color:#E6E6FA;border-left-style: none;border-top:#000000 1px solid;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:13px; font-weight:normal; font-style:normal; }
		.csF4C873FA {color:#000000;background-color:#E6E6FA;border-left-style: none;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:13px; font-weight:normal; font-style:normal; }
		.cs76386C59 {color:#000000;background-color:#E6E6FA;border-left-style: none;border-top-style: none;border-right:#000000 1px solid;border-bottom-style: none;font-family:Times New Roman; font-size:13px; font-weight:normal; font-style:normal; }
		.csD2E78FC8 {color:#000000;background-color:#E6E6FA;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:13px; font-weight:normal; font-style:normal; }
		.cs9300C452 {color:#000000;background-color:#E6E6FA;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:12px; font-weight:normal; font-style:normal; padding-left:2px;}
		.csD26C59E4 {color:#000000;background-color:#E6E6FA;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:13px; font-weight:bold; font-style:normal; padding-left:2px;}
		.csC470A470 {color:#000000;background-color:#E6E6FA;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:13px; font-weight:bold; font-style:normal; padding-left:2px;padding-right:2px;}
		.csEF230374 {color:#000000;background-color:#E6E6FA;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:13px; font-weight:normal; font-style:normal; }
		.csA7F4ED36 {color:#000000;background-color:#E6E6FA;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:13px; font-weight:normal; font-style:normal; padding-left:2px;}
		.csDF4C49AD {color:#000000;background-color:#E6E6FA;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; padding-left:2px;}
		.cs2027B3BB {color:#4084BB;background-color:#E6E6FA;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:13px; font-weight:bold; font-style:normal; padding-left:2px;padding-right:2px;}
		.cs551B2CB3 {color:#BB1724;background-color:#E6E6FA;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:9px; font-weight:bold; font-style:normal; padding-left:2px;padding-right:2px;}
		.csC0BC38F {color:#CAB126;background-color:#E6E6FA;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:13px; font-weight:bold; font-style:normal; padding-left:2px;padding-right:2px;}
		.csF7D3565D {height:0px;width:0px;overflow:hidden;font-size:0px;line-height:0px;}
	</style>
</head>
<body leftMargin=10 topMargin=10 rightMargin=10 bottomMargin=10 style="background-color:#FFFFFF">
<table cellpadding="0" cellspacing="0" border="0" style="border-width:0px;empty-cells:show;width:576px;height:286px;position:relative;">
	<tr>
		<td style="height:0px;width:46px;"></td>
		<td style="height:0px;width:10px;"></td>
		<td style="height:0px;width:77px;"></td>
		<td style="height:0px;width:12px;"></td>
		<td style="height:0px;width:7px;"></td>
		<td style="height:0px;width:10px;"></td>
		<td style="height:0px;width:5px;"></td>
		<td style="height:0px;width:14px;"></td>
		<td style="height:0px;width:55px;"></td>
		<td style="height:0px;width:93px;"></td>
		<td style="height:0px;width:44px;"></td>
		<td style="height:0px;width:12px;"></td>
		<td style="height:0px;width:4px;"></td>
		<td style="height:0px;width:57px;"></td>
		<td style="height:0px;width:6px;"></td>
		<td style="height:0px;width:5px;"></td>
		<td style="height:0px;width:13px;"></td>
		<td style="height:0px;width:73px;"></td>
		<td style="height:0px;width:23px;"></td>
		<td style="height:0px;width:10px;"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:10px;"></td>
		<td class="cs625DCC3E" style="width:9px;height:9px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csE08131B5" style="width:77px;height:9px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csE08131B5" style="width:12px;height:9px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csE08131B5" style="width:7px;height:9px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csE08131B5" style="width:10px;height:9px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csE08131B5" style="width:5px;height:9px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csE08131B5" style="width:14px;height:9px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csE08131B5" style="width:55px;height:9px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csE08131B5" style="width:93px;height:9px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csE08131B5" style="width:44px;height:9px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csE08131B5" style="width:12px;height:9px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csE08131B5" style="width:4px;height:9px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csE08131B5" style="width:57px;height:9px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csE08131B5" style="width:6px;height:9px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csE08131B5" style="width:5px;height:9px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csE08131B5" style="width:13px;height:9px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csE08131B5" style="width:73px;height:9px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csE08131B5" style="width:23px;height:9px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs8EC1FD14" style="width:9px;height:9px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:22px;"></td>
		<td class="csF65B41A7" style="width:9px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csE8645E09" colspan="3" rowspan="3" style="width:94px;height:64px;text-align:left;vertical-align:top;"><div style="overflow:hidden;width:94px;height:64px;">
			<img alt="" src="carteetudiant_files/1810692702.jpg" style="width:94px;height:64px;" /></div>
		</td>
		<td class="csEF230374" style="width:10px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:5px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csC470A470" colspan="8" style="width:281px;height:22px;line-height:15px;text-align:center;vertical-align:top;"><nobr>REPUBLIQUE&nbsp;DEMOCRATIQUE&nbsp;DU&nbsp;CONGO</nobr></td>
		<td class="csEF230374" style="width:5px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:13px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csE8645E09" colspan="2" rowspan="3" style="width:94px;height:64px;text-align:left;vertical-align:top;"><div style="overflow:hidden;width:94px;height:64px;">
			<img alt="" src="carteetudiant_files/4195037934.jpg" style="width:94px;height:64px;" /></div>
		</td>
		<td class="cs76386C59" style="width:9px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:22px;"></td>
		<td class="csF65B41A7" style="width:9px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:10px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:5px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:14px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csC470A470" colspan="7" style="width:267px;height:22px;line-height:15px;text-align:center;vertical-align:top;"><nobr>INSTITUT&nbsp;SUPERIEUR&nbsp;DE&nbsp;COMMERCE</nobr></td>
		<td class="csEF230374" style="width:5px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:13px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs76386C59" style="width:9px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:22px;"></td>
		<td class="csF65B41A7" style="width:9px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:10px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:5px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:14px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:55px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs2027B3BB" colspan="3" style="width:145px;height:22px;line-height:15px;text-align:center;vertical-align:top;"><nobr>ISC-GOMA</nobr></td>
		<td class="csEF230374" style="width:4px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:57px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:6px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:5px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:13px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs76386C59" style="width:9px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:22px;"></td>
		<td class="csF65B41A7" style="width:9px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:77px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:12px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csC0BC38F" colspan="13" style="width:321px;height:22px;line-height:15px;text-align:center;vertical-align:top;"><nobr>CARTE&nbsp;D\'ETUDIANT&nbsp;|&nbsp;STUDENT&nbsp;IDENTITY&nbsp;CARD</nobr></td>
		<td class="csEF230374" style="width:73px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:23px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs76386C59" style="width:9px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:12px;"></td>
		<td class="csF65B41A7" style="width:9px;height:12px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:77px;height:12px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:12px;height:12px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:7px;height:12px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:10px;height:12px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:5px;height:12px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:14px;height:12px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:55px;height:12px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:93px;height:12px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:44px;height:12px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:12px;height:12px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:4px;height:12px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:57px;height:12px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:6px;height:12px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:5px;height:12px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:13px;height:12px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:73px;height:12px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:23px;height:12px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs76386C59" style="width:9px;height:12px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:22px;"></td>
		<td class="csF65B41A7" style="width:9px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csE8645E09" colspan="4" rowspan="4" style="width:104px;height:82px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:5px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csDF4C49AD" colspan="3" style="width:160px;height:22px;line-height:18px;text-align:left;vertical-align:top;"><nobr>Nom,Postnom,Prenom</nobr></td>
		<td class="csEF230374" style="width:44px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]-->'.$row['etudiant'].'</td>
		<td class="csEF230374" style="width:12px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:4px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:57px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:6px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:5px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:13px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csE8645E09" colspan="2" rowspan="3" style="width:94px;height:68px;text-align:left;vertical-align:top;"><div style="overflow:hidden;width:94px;height:68px;">
			<!--[if lt IE 7]><img alt="" src="carteetudiant_files/4133685977.gif" style="width:94px;height:68px;filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src=\'carteetudiant_files/4087041852.png/,sizingMethod=scale\');" /><div style="display:none"><![endif]--><img alt="" src="carteetudiant_files/4087041852.png" style="width:94px;height:68px;" /><!--[if lt IE 7]></div><![endif]--></div>
		</td>
		<td class="cs76386C59" style="width:9px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:26px;"></td>
		<td class="csF65B41A7" style="width:9px;height:26px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:5px;height:26px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csA7F4ED36" colspan="9" style="width:288px;height:26px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:13px;height:26px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs76386C59" style="width:9px;height:26px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:22px;"></td>
		<td class="csF65B41A7" style="width:9px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:5px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csDF4C49AD" colspan="4" style="width:204px;height:22px;line-height:18px;text-align:left;vertical-align:top;"><nobr>Filiere&nbsp;d\'etude&nbsp;|&nbsp;Study&nbsp;program</nobr></td>
		<td class="csEF230374" style="width:12px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]-->'.$row['options'].'</td>
		<td class="csEF230374" style="width:4px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:57px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:6px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:5px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:13px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs76386C59" style="width:9px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:14px;"></td>
		<td class="csF65B41A7" style="width:9px;height:14px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:5px;height:14px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csA7F4ED36" colspan="9" rowspan="2" style="width:288px;height:24px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:13px;height:14px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:73px;height:14px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:23px;height:14px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs76386C59" style="width:9px;height:14px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:10px;"></td>
		<td class="csF65B41A7" style="width:9px;height:10px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:77px;height:10px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:12px;height:10px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:7px;height:10px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:10px;height:10px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:5px;height:10px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:13px;height:10px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:73px;height:10px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:23px;height:10px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs76386C59" style="width:9px;height:10px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:2px;"></td>
		<td class="csF65B41A7" style="width:9px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:77px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:12px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:7px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:10px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:5px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:14px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:55px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:93px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:44px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:12px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:4px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:57px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:6px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:5px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:13px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:73px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:23px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs76386C59" style="width:9px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:20px;"></td>
		<td class="csF65B41A7" style="width:9px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs9300C452" rowspan="2" style="width:75px;height:22px;line-height:13px;text-align:left;vertical-align:top;"><nobr>Promotion</nobr></td>
		<td class="cs9300C452" colspan="8" style="width:238px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]-->'.$row['promotion'].'</td>
		<td class="csEF230374" style="width:12px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:4px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:57px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csD26C59E4" colspan="4" rowspan="2" style="width:95px;height:22px;line-height:15px;text-align:left;vertical-align:top;"><nobr>Laissez-passer</nobr></td>
		<td class="csEF230374" style="width:23px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs76386C59" style="width:9px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:2px;"></td>
		<td class="csF65B41A7" style="width:9px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:12px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:7px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:10px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:5px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:14px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:55px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:93px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:44px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:12px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:4px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:57px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:23px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs76386C59" style="width:9px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:11px;"></td>
		<td class="csF65B41A7" style="width:9px;height:11px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:77px;height:11px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:12px;height:11px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:7px;height:11px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:10px;height:11px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:5px;height:11px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:14px;height:11px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:55px;height:11px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:93px;height:11px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:44px;height:11px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:12px;height:11px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:4px;height:11px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs551B2CB3" colspan="6" rowspan="3" style="width:173px;height:49px;line-height:10px;text-align:center;vertical-align:top;"><nobr>les&nbsp;autorites&nbsp;tant&nbsp;civil&nbsp;que&nbsp;militaire&nbsp;et&nbsp;celles</nobr><br/><nobr>de&nbsp;la&nbsp;police&nbsp;nationnale&nbsp;sont&nbsp;priees</nobr><br/><nobr>dapporter&nbsp;&nbsp;leur&nbsp;secours&nbsp;au&nbsp;porteur&nbsp;de&nbsp;la</nobr><br/><nobr>presente&nbsp;en&nbsp;cas&nbsp;de&nbsp;necessite.</nobr></td>
		<td class="cs76386C59" style="width:9px;height:11px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:22px;"></td>
		<td class="csF65B41A7" style="width:9px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs9300C452" colspan="4" style="width:104px;height:22px;line-height:13px;text-align:left;vertical-align:top;"><nobr>Annee&nbsp;academique</nobr></td>
		<td class="cs9300C452" colspan="5" style="width:209px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]-->'.$row['anneeAC'].'</td>
		<td class="csEF230374" style="width:12px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:4px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs76386C59" style="width:9px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:16px;"></td>
		<td class="csF65B41A7" style="width:9px;height:16px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:77px;height:16px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:12px;height:16px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:7px;height:16px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:10px;height:16px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:5px;height:16px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:14px;height:16px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:55px;height:16px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:93px;height:16px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:44px;height:16px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:12px;height:16px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEF230374" style="width:4px;height:16px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs76386C59" style="width:9px;height:16px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:9px;"></td>
		<td class="csB4895ADE" style="width:9px;height:8px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csD2E78FC8" style="width:77px;height:8px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csD2E78FC8" style="width:12px;height:8px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csD2E78FC8" style="width:7px;height:8px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csD2E78FC8" style="width:10px;height:8px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csD2E78FC8" style="width:5px;height:8px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csD2E78FC8" style="width:14px;height:8px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csD2E78FC8" style="width:55px;height:8px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csD2E78FC8" style="width:93px;height:8px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csD2E78FC8" style="width:44px;height:8px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csD2E78FC8" style="width:12px;height:8px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csD2E78FC8" style="width:4px;height:8px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csD2E78FC8" style="width:57px;height:8px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csD2E78FC8" style="width:6px;height:8px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csD2E78FC8" style="width:5px;height:8px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csD2E78FC8" style="width:13px;height:8px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csD2E78FC8" style="width:73px;height:8px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csD2E78FC8" style="width:23px;height:8px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csF4C873FA" style="width:9px;height:8px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
</table>
</body>
</html>';

$dompdf = new Dompdf();
$option = new Options();
$option ->set('chroot', realpath(''));
$dompdf = new Dompdf($option);
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('carte d\'etudiant.pdf',['Attachment'=>false]);
?>