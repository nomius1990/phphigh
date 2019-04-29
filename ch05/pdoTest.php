<?php

$dsn = "mysql:host=localhost;dbname=test";
$org_name = '成都海创药业有限公司';
$id='347H';
$db = new PDO($dsn,'root','9fdf5923c711896b');
$sql = "SELECT * FROM bs_gb_expert WHERE org_name=:org_name AND id>:id";
//$sql = "SELECT * FROM bs_gb_expert WHERE org_name=:org_name";
$query = $db->prepare($sql);
$query->bindParam(':org_name',$org_name,PDO::PARAM_STR);
$query->bindParam(':id',$id,PDO::PARAM_INT);
$query->execute();

var_dump($query->fetchAll(PDO::FETCH_ASSOC));

exit('1');
?>