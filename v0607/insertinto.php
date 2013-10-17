<?php
$database="todo";
$user="user";
$password="password";
$dns="mysql:host=localhost;dbname=$database";

try {
	$pdo = new PDO($dns,$user,$password);
	} catch(PDOException $e){
		die ("No connection to Database <br /> $e");
		}


function insertInto($contentToDo){
	$sql="INSERT INTO 'todos'('content', 'state') VALUES ('$contentToDo','open')";
	$pdo->execute($sql);
}

echo insertInto($_GET['contentToDo']);
?>