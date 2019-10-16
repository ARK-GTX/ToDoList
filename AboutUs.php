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


    <title>Document</title>
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
                      <a class="nav-link" href="Settings.php">Settings </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="AboutUs.php">About Us <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="#">Future Releases</a>
                    </li>
                  </ul>
                </div>
              </nav>




              <div class="modal-body row">
                    <div class="col-sm-6">
                      <!-- Your first column here -->

<!-- Material form login -->
<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
      <strong>Tasks</strong>
    </h5>
  
    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">
  
      <!-- Form -->
      <form method="POST" action="php/InsertTask.php" class="text-center" style="color: #757575;">
  
        <!-- Email -->
        <div class="md-form">
          <label for="materialLoginFormEmail" id="DateLabel">Date:</label>
          <input type="date" name="DateOfTask" id="TasksDate" class="form-control">
        </div>
        <div class="md-form">
            <label for="materialLoginFormEmail" id="TimeLabel">Time:</label>
            <input type="time" name="TimeOfTask" id="TasksTime" class="form-control">
        </div>
        <div class="md-form"> 
            <label for="materialLoginFormEmail" >Location:</label>

          <div class="input-group mb-3">
          
            <div class="input-group-append">
                <span class="input-group-text" id="basic-addon1" onclick="ToggleMap()"><i class="fa fa-globe" aria-hidden="true"></i></span>
          </div>
          <input type="text" name="LocationOfTask" id="TasksLocation" onchange="InputLocationToMap()" class="form-control">
          </div>
           
          </div>    









        <div class="md-form">
            <label for="materialLoginFormEmail" id="DetailLabel">Detail:</label>
            <input type="text" name="DetailOfTask" id="TasksDetails" class="form-control" style="height:200px; width:100%;">
        </div>
        


  
        <!-- Sign in button -->
        <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" name="submit" type="submit">Assign Task</button>
        <button class="btn btn-outline-warning btn-rounded btn-block my-4 waves-effect z-depth-0" onclick="ClearForm()">Reset</button>
  
       
  
      </form>
      <!-- Form 


      
      <div class="mapouter">
      <div class="gmap_canvas">
      <iframe width="511" height="500" id="gmap_canvas" 
      src="https://maps.google.com/maps?q=Raamba&t=k&z=13&ie=UTF8&iwloc=&output=embed"
      frameborder="0" scrolling="yes" marginheight="0" marginwidth="0">
      </iframe>
      </div>
      <style>
      .mapouter{position:relative; text-align:right;
       height:500px;width:511px;}
      .gmap_canvas {overflow:hidden;background:none!important;
       height:500px;width:511px;}</style>
       </div>
    
       -->




    </div>
  
  </div>



  <!-- Material form login -->

                    </div>
                    <div class="col-md-6">
                      <!-- Your second column here -->








<?php

$connection = mysqli_connect($DbServerName,$DbUsername,$DbPassword);
$database = mysqli_select_db($connection, $DbName);

$query = "SELECT * FROM $TableName";
$query_run = mysqli_query($connection, $query);
?>


<div class="GlobeMap" id="GlobeMap" style="display:none;">
<div id="OpenMapOuter" class="mapouter">
      <div id="OpenMapCanvas" class="gmap_canvas">
      <iframe width="511" height="500" id="gmap_canvas" 
      src="https://maps.google.com/maps?q=[]&t=k&z=13&ie=UTF8&iwloc=&output=embed"
      frameborder="0" scrolling="yes" marginheight="0" marginwidth="0">
      </iframe>
      </div>
      <style>
      .mapouter{position:absolute; text-align:right; 
       height:500px;width:511px;}
      .gmap_canvas {overflow:hidden;background:none!important;
       height:500px;width:511px;}</style>
</div>
</div>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Task ID</th>
      <th scope="col">Task Date</th>
      <th scope="col">Task Time</th>
      <th scope="col">Task Location</th>
      <th scope="col">Task Details</th>
    </tr>
  </thead>

  <?php
if($query_run){

  foreach($query_run as $row)
  {

  ?>


  <tbody>

    <tr>
      <th scope="row"><?php echo $row['taskid']; ?></th>
      <td><?php echo $row['taskdate']; ?></td>
      <td><?php echo $row['tasktime']; ?></td>
      <td><?php echo $row['tasklocation']; ?></td>
      <td><?php echo $row['taskdetail']; ?></td>
    </tr>

    
  </tbody>

  <?php
  }
  
}

else
  {
    echo"No records found";
  }

?>

</table>







  




                    </div>
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