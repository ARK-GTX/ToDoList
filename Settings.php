<?php

include_once 'php/conn.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Plasma/Bootstrap/css/Bootstrap.min.css">
    <link rel="stylesheet" href="Plasma/FontAwesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="Styles.css">
    <script src="Plasma/Bootstrap//js/jquery-3.3.1.slim.min.js"></script>
    <script src="script.js"></script>


    <title>Settings</title>
</head>
<body>

<style>



</style>


        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php">To Do List</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="Settings.php">Settings <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="AboutUs.php">About Us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="#">Future Releases</a>
                    </li>
                  </ul>
                </div>
              </nav>


<div class="modal-body row">
  <div class="col-sm-2">
</div>


<div class="col-sm-8">
<div class="card">


<h5 class="card-header info-color white-text text-center py-4">
  <strong>Settings</strong>
</h5>

<!--Card content-->
<div class="card-body px-lg-5 pt-0">





  <!-- Form -->
  <form class="" style="color: #757575;">


    <!-- Email -->
    <div class="md-form">
      <label for="UserManualLabel" id="UserManualLabel"><h5>User Manual</h5></label>
      <p>To view the full doccumentation of this project. <a href="Readme.docx">click here.</a></p>
    </div>



    <div class="md-form">
        <label for="SystemLabel" id="SystemLabel"><h5>System</h5></label>
    </div>
    
    


   

    </form>
      <form method="POST" action="php/DeleteTasks.php" class="" style="color: #757575;">
      <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" name="submit" type="submit">Delete Data</button>
      <p>Warning! By Clicking Delete, All Tasks in the database will be deleted!.</p>
    </form>






          
                    <div class="col-md-2">
                     


  




                    </div>
               



<script>

function ClearForm(){

    var A = document.getElementById('TasksDate').innerText;
    var B = document.getElementById('TasksTime').innerText;
    var C = document.getElementById('TasksLocation').innerText;
    var D = document.getElementById('TasksDetails').innerText;





}

</script>
    
   

        <script src ="Plasma/Bootstrap/js/popper.min.js"></script>
        <script src = "Plasma/Bootstrap/js/bootstrap.min.js"></script>

</body>
</html>