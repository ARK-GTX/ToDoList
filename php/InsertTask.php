<?php



/*
$con = mysqli_connect('localhost','root','');

if(!$con){
    echo "Not connected to server!";
}

if(!mysqli_select_db($con, 'tasktable')){
    echo "database not selected!";
}

$TaskDate = $_POST['DateOfTask'];
$TaskTime = $_POST['TimeOfTask'];
$TaskLocation = $_POST['LocationOfTask'];
$TaskDetail = $_POST['DetailOfTask'];


$sql = "INSERT INTO tasktable (taskdate, tasktime, tasklocation, taskdetail)
 VALUES ('$TaskDate','$TaskTime','$TaskLocation','$TaskDetail')";

 if(!mysqli_query($con, $sql)){
     echo "unable to insert";
 }else{
     echo "data insertion successful";
 }


 */

$TaskDate = $_POST['DateOfTask'];
$TaskTime = $_POST['TimeOfTask'];
$TaskLocation = $_POST['LocationOfTask'];
$TaskDetail = $_POST['DetailOfTask'];


 include_once 'conn.php';


 $sql = "INSERT INTO tasktable (taskdate, tasktime, tasklocation, taskdetail)
 VALUES ('$TaskDate','$TaskTime','$TaskLocation','$TaskDetail')";



mysqli_query($conn, $sql);

header("Location: ../index.php?signup=Success");


?>