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
<a id="softDev"><h2 class="text-center" style="color: green">Software Development</h2></a>
<div class="container">
  <div class ="row">
    <div class="list-group-item list-group-item-action">      
      <ul class="list-group">
      <?php
        $result = show_vlog_softwaredev();
        while($row = mysqli_fetch_assoc($result))
        { 
      ?>
        <li class="d-flex w-100 justify-content-between">  
          <div class="pull-left" style="width: 30%">                
            <h5 class="mb-1"><?php echo $row['title'];?></h5>
            <small><?php echo $row['date'];?></small>
          </div>
          <div class="pull-left" style="width: 55%">
            <p class="mb-1"><?php echo $row['description'];?></p>
          </div>
          <div class="pull-left" style="width: 15%">
            <?php 
              echo '<a href = "'. $row['link'] . '">';
              $thumb = "http://img.youtube.com/vi/". $row['thumbnail']. "/maxresdefault.jpg";                
              echo '<img src="'. $thumb . '" style="height: 90px; width: 150px">';
            ?>
            </a>
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
<a id="educ"><h2 class="text-center" style="color: green">Educational</h2></a>
<div class="container">
  <div class ="row">
    <div class="list-group-item list-group-item-action">      
      <ul class="list-group">
      <?php
        $result = show_vlog_educational();      
        while($row = mysqli_fetch_assoc($result))
        {
      ?>
        <li class="d-flex w-100 justify-content-between">  
          <div class="pull-left" style="width: 30%">
            <h5 class="mb-1"><?php echo $row['title'];?></h5>
            <small><?php echo $row['date'];?></small>
          </div>
          <div class="pull-left" style="width: 55%">
            <p class="mb-1"><?php echo $row['description'];?></p>
          </div>
          <div class="pull-left" style="width: 15%">
            <?php 
              echo '<a href = "'. $row['link'] . '">';
              $thumb = "http://img.youtube.com/vi/". $row['thumbnail']. "/maxresdefault.jpg";                
              echo '<img src="'. $thumb . '" style="height: 90px; width: 150px">';
            ?>
            </a>
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
<a id="gameMod"><h2 class="text-center" style="color: green">Game Modding</h2></a>
<div class="container">
  <div class ="row">
    <div class="list-group-item list-group-item-action">      
      <ul class="list-group">
      <?php
        $result = show_vlog_gamemodding();             
        while($row = mysqli_fetch_assoc($result))
        {
      ?>
        <li class="d-flex w-100 justify-content-between">  
          <div class="pull-left" style="width: 30%">                
            <h5 class="mb-1"><?php echo $row['title'];?></h5>
            <small><?php echo $row['date'];?></small>
          </div>
          <div class="pull-left" style="width: 55%">
            <p class="mb-1"><?php echo $row['description'];?></p>
          </div>
          <div class="pull-left" style="width: 15%">
            <?php 
              echo '<a href = "'. $row['link'] . '">';
              $thumb = "http://img.youtube.com/vi/". $row['thumbnail']. "/maxresdefault.jpg";                
              echo '<img src="'. $thumb . '" style="height: 90px; width: 150px">';
            ?>
            </a>
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
<a id="dataScience"><h2 class="text-center" style="color: green">Data Science</h2></a>
<div class="container">
  <div class ="row">
    <div class="list-group-item list-group-item-action">      
      <ul class="list-group">
      <?php
        $result = show_vlog_datascience();             
        while($row = mysqli_fetch_assoc($result))
        {
      ?>
        <li class="d-flex w-100 justify-content-between">  
          <div class="pull-left" style="width: 30%">                
            <h5 class="mb-1"><?php echo $row['title'];?></h5>
            <small><?php echo $row['date'];?></small>
          </div>
          <div class="pull-left" style="width: 55%">
            <p class="mb-1"><?php echo $row['description'];?></p>
          </div>
          <div class="pull-left" style="width: 15%">
            <?php 
              echo '<a href = "'. $row['link'] . '">';
              $thumb = "http://img.youtube.com/vi/". $row['thumbnail']. "/maxresdefault.jpg";                
              echo '<img src="'. $thumb . '" style="height: 90px; width: 150px">';
            ?>
            </a>
          </div>
        </li>
        <?php
          }
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