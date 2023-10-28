<?php
$konn = mysqli_connect(
			'localhost',    //host 
			'root',    		//username
			'qwerty',		//password
			'chat'		//nama database 
		);

$query = $konn->query('SELECT * FROM msg');
$data = $query->fetch_all(MYSQLI_ASSOC);
$pesan = [
	'msg'=>'Data berhasil diambil',
	'success'=>true,
	'data'=>$data,
];
sleep(2);
echo json_encode($pesan,JSON_PRETTY_PRINT);

?>