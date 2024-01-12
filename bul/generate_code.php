<?php 

try{
	$db = new PDO('mysql:host=127.0.0.1;charset=utf8;dbname=affectation_db','root','');
  } catch (PDOException $ex){
	echo 'Erreur :'. $ex;
	die();
  }


if(isset($_POST) && !empty($_POST)) {
	include('library/phpqrcode/qrlib.php'); 
	$codesDir = "codes/";	
	$codeFile = date('d-m-Y-h-i-s').'.png';
	//  $formData = $_POST['formData'];Staff_ID
	//  $formData = $_POST['Staff_ID'];
	$formData = htmlspecialchars($_POST['Staff_ID']);
	
	$img="";
	// generating QR code
	// QRcode::png($formData, $codesDir.$codeFile, $_POST['ecc'], $_POST['size']); 
	QRcode::png($formData, $codesDir.$codeFile); 
	// $rec=$db->prepare("INSERT INTO jet(Staff_ID,codeFile) VALUES (:Staff_ID,:codeFile)");
	// $rec->execute(array(
    //  'Staff_ID' => $formData,
	//  'codeFile' => $codeFile
	 
	// ));

	$idinscription='';
	$scanecode='';

	$rec1=$db->prepare("SELECT idinscription from vinscription  WHERE idinscription=:Staff_ID");
                                          
	$rec1->execute(array(
     'Staff_ID' => $formData
	 
	));
	$infos = $rec1->fetchAll();
	 foreach($infos as $i){
		$idinscription = $i['idinscription'];
	 }

	// if ($rec) {
	// 	echo "valider";
	// }else{
	// 	echo "err";
	// }
	// display generated QR code
	// echo '<img class="img-thumbnail" src="bul/'.$codesDir.$codeFile.'" />';
	// $img= '<img class="img-thumbnail" src="'.$codesDir.$codeFile.'" />';
	$img='<img alt="" src="'.$codesDir.$codeFile.'" style="width:108px;height:103px;filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src="rpt_service_files/3429462021.png",sizingMethod="scale");" /><div style="display:none"><![endif]--><img alt="" src="rpt_service_files/3429462021.png" style="width:108px;height:103px;" /><!--[if lt IE 7]></div><![endif]--></div>
	';

} else {
	header('location:./');
}
?>

<?php 
	$type='Content-Type';
	$cont='text/html; charset=utf-8';
	$out ='
	<table cellpadding="0" cellspacing="0" border="0" style="border-width:0px;empty-cells:show;width:717px;height:374px;position:relative;">
	<tr style="vertical-align:top;">
		<td style="width:62px;height:10px;"></td>
		<td style="width:51px;"></td>
		<td style="width:94px;"></td>
		<td style="width:11px;"></td>
		<td style="width:111px;"></td>
		<td style="width:32px;"></td>
		<td style="width:43px;"></td>
		<td style="width:16px;"></td>
		<td style="width:18px;"></td>
		<td style="width:21px;"></td>
		<td style="width:50px;"></td>
		<td style="width:27px;"></td>
		<td style="width:19px;"></td>
		<td style="width:13px;"></td>
		<td style="width:6px;"></td>
		<td style="width:88px;"></td>
		<td style="width:14px;"></td>
		<td style="width:18px;"></td>
		<td style="width:2px;"></td>
		<td style="width:21px;"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:27px;"></td>
		<td class="cs101A94F7" style="width:51px;height:27px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:94px;height:27px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:11px;height:27px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:111px;height:27px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:32px;height:27px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:43px;height:27px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:16px;height:27px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:18px;height:27px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:21px;height:27px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:50px;height:27px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:27px;height:27px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:19px;height:27px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:13px;height:27px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:6px;height:27px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:88px;height:27px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:14px;height:27px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:18px;height:27px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:2px;height:27px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:21px;height:27px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:5px;"></td>
		<td class="cs101A94F7" style="width:51px;height:5px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" colspan="9" rowspan="2" style="width:396px;height:66px;text-align:left;vertical-align:top;"><div style="overflow:hidden;width:396px;height:66px;">
			<img alt="" src="rpt_service_files/3570632418.png" style="width:141px;height:61px;filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src="rpt_service_files/3570632418.png",sizingMethod="scale");" /><div style="display:none"><![endif]--><img alt="" src="rpt_service_files/3570632418.png" style="width:141px;height:61px;" /><!--[if lt IE 7]></div><![endif]--></div>
		</td>
		<td class="cs101A94F7" style="width:27px;height:5px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:19px;height:5px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:13px;height:5px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:6px;height:5px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:88px;height:5px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:14px;height:5px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:18px;height:5px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:2px;height:5px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:21px;height:5px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:61px;"></td>
		<td class="cs101A94F7" style="width:51px;height:61px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:27px;height:61px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:19px;height:61px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" colspan="6" style="width:141px;height:61px;text-align:left;vertical-align:top;"><div style="overflow:hidden;width:141px;height:61px;">
			<img alt="" src="rpt_service_files/3570632418.png" style="width:141px;height:61px;filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src="rpt_service_files/3570632418.png",sizingMethod="scale");" /><div style="display:none"><![endif]--><img alt="" src="rpt_service_files/3570632418.png" style="width:141px;height:61px;" /><!--[if lt IE 7]></div><![endif]--></div>
		</td>
		<td class="cs101A94F7" style="width:21px;height:61px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:5px;"></td>
		<td class="cs101A94F7" style="width:51px;height:5px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:94px;height:5px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:11px;height:5px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:111px;height:5px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:32px;height:5px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:43px;height:5px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:16px;height:5px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:18px;height:5px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:21px;height:5px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:50px;height:5px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:27px;height:5px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:19px;height:5px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:13px;height:5px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:6px;height:5px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:88px;height:5px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:14px;height:5px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:18px;height:5px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:2px;height:5px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:21px;height:5px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:22px;"></td>
		<td class="cs101A94F7" style="width:51px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs76A8F069" colspan="8" style="width:344px;height:22px;line-height:20px;text-align:left;vertical-align:top;"><nobr>CARTE&nbsp;DE&nbsp;SERVICE|SERVICY&nbsp;IDENTITY&nbsp;CARD</nobr></td>
		<td class="cs101A94F7" style="width:50px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:27px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:19px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:13px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:6px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:88px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:14px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:18px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:2px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:21px;height:22px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:19px;"></td>
		<td class="cs101A94F7" style="width:51px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:94px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:11px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:111px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:32px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:43px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:16px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:18px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:21px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:50px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:27px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:19px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:13px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:6px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:88px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:14px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:18px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:2px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:21px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:18px;"></td>
		<td class="cs101A94F7" style="width:51px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" rowspan="7" style="width:94px;height:103px;text-align:left;vertical-align:top;"><div style="overflow:hidden;width:94px;height:103px;">
			<img alt="" src="img/.$photo." style="width:94px;height:103px;" /></div>
		</td>
		<td class="cs101A94F7" style="width:11px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs5EF44DE8" colspan="2" style="width:141px;height:18px;line-height:16px;text-align:left;vertical-align:top;"><nobr>Matricule|Roll&nbsp;number</nobr></td>
		<td class="cs101A94F7" style="width:43px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:16px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:18px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:21px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:50px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:27px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:19px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:13px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" colspan="3" rowspan="7" style="width:108px;height:103px;text-align:left;vertical-align:top;"><div style="overflow:hidden;width:108px;height:103px;">
			
		'.$img.'
		</td>
		<td class="cs101A94F7" style="width:18px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:2px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:21px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:18px;"></td>
		<td class="cs101A94F7" style="width:51px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:11px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs42125499" colspan="7" style="width:289px;height:18px;line-height:16px;text-align:left;vertical-align:top;"><nobr>'.$matricule.'</nobr></td>
		<td class="cs101A94F7" style="width:27px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:19px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:13px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:18px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:2px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:21px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:19px;"></td>
		<td class="cs101A94F7" style="width:51px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:11px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs5EF44DE8" colspan="2" style="width:141px;height:19px;line-height:16px;text-align:left;vertical-align:top;"><nobr>Sevice|Servicy</nobr></td>
		<td class="cs101A94F7" style="width:43px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:16px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:18px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:21px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:50px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:27px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:19px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:13px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:18px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:2px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:21px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:18px;"></td>
		<td class="cs101A94F7" style="width:51px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:11px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs42125499" colspan="7" style="width:289px;height:18px;line-height:16px;text-align:left;vertical-align:top;"><nobr>'.$service.'</nobr></td>
		<td class="cs101A94F7" style="width:27px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:19px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:13px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:18px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:2px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:21px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:1px;"></td>
		<td class="cs101A94F7" style="width:51px;height:1px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:11px;height:1px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:111px;height:1px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:32px;height:1px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:43px;height:1px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:16px;height:1px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:18px;height:1px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:21px;height:1px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:50px;height:1px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:27px;height:1px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:19px;height:1px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:13px;height:1px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:18px;height:1px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:2px;height:1px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:21px;height:1px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:18px;"></td>
		<td class="cs101A94F7" style="width:51px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:11px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs5EF44DE8" colspan="5" style="width:218px;height:18px;line-height:16px;text-align:left;vertical-align:top;"><nobr>Fonction|Fonction</nobr></td>
		<td class="cs101A94F7" style="width:21px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:50px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:27px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:19px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:13px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:18px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:2px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:21px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:11px;"></td>
		<td class="cs101A94F7" style="width:51px;height:11px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:11px;height:11px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs42125499" colspan="7" rowspan="2" style="width:289px;height:18px;line-height:16px;text-align:left;vertical-align:top;"><nobr>'.$fonction.'</nobr></td>
		<td class="cs101A94F7" style="width:27px;height:11px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:19px;height:11px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:13px;height:11px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:18px;height:11px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:2px;height:11px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:21px;height:11px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:7px;"></td>
		<td class="cs101A94F7" style="width:51px;height:7px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:94px;height:7px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:11px;height:7px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:27px;height:7px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:19px;height:7px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:13px;height:7px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:6px;height:7px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:88px;height:7px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:14px;height:7px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:18px;height:7px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:2px;height:7px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:21px;height:7px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:10px;"></td>
		<td class="cs101A94F7" style="width:51px;height:10px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:94px;height:10px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:11px;height:10px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:111px;height:10px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:32px;height:10px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:43px;height:10px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:16px;height:10px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:18px;height:10px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:21px;height:10px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:50px;height:10px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:27px;height:10px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:19px;height:10px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:13px;height:10px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:6px;height:10px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:88px;height:10px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:14px;height:10px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:18px;height:10px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:2px;height:10px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:21px;height:10px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:20px;"></td>
		<td class="cs101A94F7" style="width:51px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs9BFF0026" colspan="6" style="width:305px;height:20px;line-height:17px;text-align:left;vertical-align:top;"><nobr>Nom&nbsp;&amp;&nbsp;Postnom&nbsp;&amp;&nbsp;Prenom&nbsp;|&nbsp;Name&nbsp;&amp;&nbsp;Surname</nobr></td>
		<td class="cs101A94F7" style="width:18px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:21px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:50px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:27px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:19px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:13px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:6px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:88px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:14px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:18px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:2px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:21px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:18px;"></td>
		<td class="cs101A94F7" style="width:51px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs42125499" colspan="5" style="width:289px;height:18px;line-height:16px;text-align:left;vertical-align:top;"><nobr>'.$nom.' '.$postnom.' '.$prenom.'</td>
		<td class="cs101A94F7" style="width:16px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:18px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:21px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:50px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:27px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs9BFF0026" colspan="6" rowspan="2" style="width:156px;height:20px;line-height:17px;text-align:left;vertical-align:top;"><nobr>Numero&nbsp;ID&nbsp;|&nbsp;Servicy&nbsp;ID</nobr></td>
		<td class="cs101A94F7" style="width:2px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:21px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:2px;"></td>
		<td class="cs101A94F7" style="width:51px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:94px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:11px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:111px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:32px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:43px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:16px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:18px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:21px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:50px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:27px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:2px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:21px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:18px;"></td>
		<td class="cs101A94F7" style="width:51px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs9BFF0026" colspan="3" rowspan="2" style="width:214px;height:20px;line-height:17px;text-align:left;vertical-align:top;"><nobr>Date&nbsp;&amp;&nbsp;Lieu&nbsp;de&nbsp;Naissance</nobr></td>
		<td class="cs101A94F7" style="width:32px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:43px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:16px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:18px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:21px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:50px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:27px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:19px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:13px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:6px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs42125499" style="width:86px;height:18px;line-height:16px;text-align:left;vertical-align:top;"><nobr>'.$Staff_ID.'</nobr></td>
		<td class="cs101A94F7" style="width:14px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:18px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:2px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:21px;height:18px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:2px;"></td>
		<td class="cs101A94F7" style="width:51px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:32px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:43px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:16px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:18px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:21px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:50px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:27px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:19px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:13px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:6px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:88px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:14px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:18px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:2px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:21px;height:2px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:19px;"></td>
		<td class="cs101A94F7" style="width:51px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs42125499" colspan="5" style="width:289px;height:19px;line-height:16px;text-align:left;vertical-align:top;"><nobr>'.$date_naissance.' à '.$lieu_naissance.'</nobr></td>
		<td class="cs101A94F7" style="width:16px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:18px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:21px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:50px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:27px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:19px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:13px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:6px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:88px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:14px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:18px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:2px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:21px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="height:26px;"></td>
		<td class="cs101A94F7" style="width:51px;height:26px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:94px;height:26px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:11px;height:26px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:111px;height:26px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:32px;height:26px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:43px;height:26px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:16px;height:26px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:18px;height:26px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:21px;height:26px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:50px;height:26px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:27px;height:26px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:19px;height:26px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:13px;height:26px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:6px;height:26px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:88px;height:26px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:14px;height:26px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:18px;height:26px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:2px;height:26px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs101A94F7" style="width:21px;height:26px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
</table>
	';
?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0014)about:internet -->
<html>
<head>
	<title></title>
	<meta HTTP-EQUIV='.$type.' CONTENT='.$cont.'/>
	<style type="text/css">
		.cs5EF44DE8 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Segoe UI; font-size:12px; font-weight:bold; font-style:normal; padding-left:2px;}
		.cs9BFF0026 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Segoe UI; font-size:13px; font-weight:bold; font-style:normal; padding-left:2px;}
		.cs101A94F7 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:13px; font-weight:normal; font-style:normal; }
		.cs42125499 {color:#FF0000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Segoe UI; font-size:12px; font-weight:bold; font-style:normal; padding-left:2px;}
		.cs76A8F069 {color:#FF4500;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Segoe UI; font-size:15px; font-weight:bold; font-style:normal; padding-left:2px;}
		.csF7D3565D {height:0px;width:0px;overflow:hidden;font-size:0px;line-height:0px;}
	</style>
</head>
<body onload="window.print()" leftMargin=10 topMargin=10 rightMargin=10 bottomMargin=10 style="background-color:#FFFFFF">
	<?=$out; ?>
</body>
</html>
	
	

