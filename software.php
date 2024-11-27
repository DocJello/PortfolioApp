<?php
require_once 'config/db.php';
require_once 'config/functions.php';
include "config/header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rguzone Portfolio WebSite</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">    
    <link rel="stylesheet" href="style.css"> 
</head>
<body>

<br>
<a id="business"><h2 class="text-center" style="color: green">Business Softwares</h2></a>
<div class="container">
  <div class ="row">
    <div class="list-group-item list-group-item-action">      
      <ul class="list-group">
      <?php
        $result = show_software_business();
        while($row = mysqli_fetch_assoc($result))
        { 
      ?>
        <li class="d-flex w-100 justify-content-between">  
          <div class="pull-left" style="width: 20%">                
            <h5 class="mb-1"><?php echo $row['title'];?></h5>
            <small ><?php echo $row['date'];?></small>
          </div>
          <div class="pull-left" style="width: 55%">
            <p class="mb-1"><?php echo $row['description'];?></p>
          </div>
          <div class="pull-left" style="width: 25%">
              <?php
                $linkage = "./assets/img/software/" . $row['image'] . "/";                
                echo '<img src="'. $linkage . '" style="height: 150px; width: 250px">';
              ?>
          </div>
        </li>
        <?php
          }
        ?>
      </ul>
    </div>
  </div>
</div>

<br>
<a id="gameDev"><h2 class="text-center" style="color: green">Game Development Softwares</h2></a>
<div class="container">
  <div class ="row">
    <div class="list-group-item list-group-item-action">      
      <ul class="list-group">
      <?php
        $result = show_software_gamedev();
        while($row = mysqli_fetch_assoc($result))
        { 
      ?>
        <li class="d-flex w-100 justify-content-between">  
          <div class="pull-left" style="width: 20%">              
            <h5 class="mb-1"><?php echo $row['title'];?></h5>
            <small><?php echo $row['date'];?></small>
          </div>
          <div class="pull-left" style="width: 55%">
            <p class="mb-1"><?php echo $row['description'];?></p>
          </div>
          <div class="pull-left" style="width: 25%">
              <?php
                $linkage = "./assets/img/software/" . $row['image'] . "/";                
                echo '<img src="'. $linkage . '" style="height: 150px; width: 250px">';
              ?>
          </div>
        </li>
        <?php
          }
        ?>
      </ul>
    </div>
  </div>
</div>

<br>
<a id="is"><h2 class="text-center" style="color: green">Intelligent Systems</h2></a>
<div class="container">
  <div class ="row">
    <div class="list-group-item list-group-item-action">      
      <ul class="list-group">
      <?php
        $result = show_software_ai();
        while($row = mysqli_fetch_assoc($result))
        { 
      ?>
        <li class="d-flex w-100 justify-content-between">  
          <div class="pull-left" style="width: 20%">                
            <h5 class="mb-1"><?php echo $row['title'];?></h5>
            <small><?php echo $row['date'];?></small>
          </div>
          <div class="pull-left" style="width: 55%">
            <p class="mb-1"><?php echo $row['description'];?></p>
          </div>
          <div class="pull-left" style="width: 25%">
              <?php
                $linkage = "./assets/img/software/" . $row['image'] . "/";                
                echo '<img src="'. $linkage . '" style="height: 150px; width: 250px">';
              ?>
          </div>
        </li>
        <?php
          }
        ?>
      </ul>
    </div>
  </div>
</div>

<br>
<a id="educ"><h2 class="text-center" style="color: green">Educational Technology Softwares</h2></a>
<div class="container">
  <div class ="row">
    <div class="list-group-item list-group-item-action">      
      <ul class="list-group">
      <?php
        $result = show_software_edutech();
        while($row = mysqli_fetch_assoc($result))
        { 
      ?>
        <li class="d-flex w-100 justify-content-between">
          <div class="pull-left" style="width: 20%">                
            <h5 class="mb-1"><?php echo $row['title'];?></h5>
            <small><?php echo $row['date'];?></small>
          </div>
          <div class="pull-left" style="width: 55%">
            <p class="mb-1"><?php echo $row['description'];?></p>
          </div>
          <div class="pull-left" style="width: 25%">
              <?php
                $linkage = "./assets/img/software/" . $row['image'] . "/";                
                echo '<img src="'. $linkage . '" style="height: 150px; width: 250px">';
              ?>
          </div>
        </li>
        <?php
          }
          mysqli_free_result($result);
          mysqli_close($con);
        ?>
      </ul>
    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>