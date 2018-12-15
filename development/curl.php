<?php
$url = 'https://development.autopilotstore.co.id/api_all_bo.php';

$data = array("tipe" => "USERLOGIN","useremail" => "a@a.com", "userpass" => 'a' );

$data_string = json_encode($data);

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_COOKIEFILE, true);
curl_setopt($ch, CURLOPT_COOKIEJAR, true);
$result = curl_exec($ch);
$result = json_decode($result,true);
curl_close($ch);
// print_r($result);
// echo $result['message'];
$url = 'https://development.autopilotstore.co.id/api_all_bo.php';
$data = array("tipe" => "GET_USEROUTLET");
$data_string = json_encode($data);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_COOKIEFILE, true);
curl_setopt($ch, CURLOPT_COOKIEJAR, true);

$result = curl_exec($ch);
$result = json_decode($result,true);
curl_close($ch);
print_r($result);
foreach ($result['listuseroutlet'] as $data) {
	echo $data['IDOUTLET'];
}
// echo $result['listuseroutlet'][0]['IDOUTLET'];

?>