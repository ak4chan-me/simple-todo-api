<?php
$konn = mysqli_connect(
			'localhost',    //host 
			'root',    		//username
			'qwerty',		//password
			'chat'		//nama database 
		);

//print_r($_POST);
$data = $_POST['data'];
$query = $konn->query('INSERT INTO msg SET 
   msgDate    = "'.$data['msgDate'].'",
   msgMessage = "'.$data['msgMessage'].'",
   msgUser    = "'.$data['msgUser'].'"
');
echo 'sukses';
/**/
?>