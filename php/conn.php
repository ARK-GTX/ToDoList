<?php

$DbServerName ="localhost";
$DbUsername = "root";
$DbPassword = "";

$DbName = "tododb";
$TableName="tasktable";

$conn = mysqli_connect($DbServerName, $DbUsername, $DbPassword, $DbName) or die();




/*

CREATE TABLE tasktable( 
 taskid INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
 taskdate DATE,
 tasktime varchar(15),
 tasklocation varchar (100),
 taskdetail varchar (1000) 

);


INSERT INTO tasktable (taskdate,tasktime,tasklocation,taskdetail) 
VALUES 
('2019-11-10',
'04:00:00:01',
'Artificial Beach',
'Spend time alone?');



SELECT * FROM tasktable


*/


?>



