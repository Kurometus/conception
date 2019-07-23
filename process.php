<?php 
 $action = '';

 if(isset($_GET['action'])){
 	$action = $_GET['action'];
 }

 if($action == 'read'){
 	$json = file_get_contents('assets/prhases.json');
	$json_data = json_decode($json);
 	$result['prhases'] = $json_data;
 }
 
 echo json_encode($result);
?>