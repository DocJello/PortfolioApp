<?php
require_once 'config/db.php';
require_once 'config/functions.php';
include "config/header.html";
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
<a id="journal"><h2 class="text-center" style="color: green">Journals</h2></a>
<div class="container">
  <div class ="row">
    <div class="list-group-item list-group-item-action">       
      <ul class="list-group">
      <?php
        $result = show_pub_journal();
        while($row = mysqli_fetch_assoc($result))
        { 
      ?> 
        <li class="d-flex w-100 justify-content-between">  
          <div class="pull-left" style="width: 30%">                
            <h5 class="mb-1"><?php echo $row['publisher'];?></h5>
            <small ><?php echo $row['date'];?></small>
          </div>
          <div class="pull-left" style="width: 35%">
            <?php echo '<a href = "'. $row['link'] . '">'; ?>
                <p class="mb-1"><?php echo $row['title'];?></p>
            </a>
          </div>
          <div class="pull-left" style="width: 10%">
            <p class="mb-1"><?php echo $row['role'];?></p>
          </div>
          <div class="pull-left" style="width: 10%">
            <?php echo $row['level'];?>
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
<a id="courseware"><h2 class="text-center" style="color: green">Coursewares</h2></a>
<div class="container">
  <div class ="row">
    <div class="list-group-item list-group-item-action">     
      <ul class="list-group">
      <?php
        $result = show_pub_courseware();
        while($row = mysqli_fetch_assoc($result))
        { 
      ?> 
        <li class="d-flex w-100 justify-content-between">  
          <div class="pull-left" style="width: 30%">                
              <h5 class="mb-1"><?php echo $row['publisher'];?></h5>
              <small ><?php echo $row['date'];?></small>
          </div>
          <div class="pull-left" style="width: 35%">
            <p class="mb-1"><?php echo $row['title'];?></p>
          </div>
          <div class="pull-left" style="width: 10%">
            <p class="mb-1"><?php echo $row['role'];?></p>
          </div>            
          <div class="pull-left" style="width: 10%">
            <?php echo $row['level'];?>
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
<a id="labManual"><h2 class="text-center" style="color: green">Lab Manuals</h2></a>
<div class="container">
  <div class ="row">
    <div class="list-group-item list-group-item-action">    
      <ul class="list-group">
      <?php
        $result = show_pub_labManual();
        while($row = mysqli_fetch_assoc($result))
        {
      ?>
        <li class="d-flex w-100 justify-content-between">  
          <div class="pull-left" style="width: 30%">
            <h5 class="mb-1"><?php echo $row['publisher'];?></h5>
            <small ><?php echo $row['date'];?></small>
          </div>
          <div class="pull-left" style="width: 35%">
            <p class="mb-1"><?php echo $row['title'];?></p>
          </div>
          <div class="pull-left" style="width: 10%">
            <p class="mb-1"><?php echo $row['role'];?></p>
          </div>
          
          <div class="pull-left" style="width: 10%">
            <?php echo $row['level'];?>
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
<a id="conference"><h2 class="text-center" style="color: green">Conferences</h2></a>
<div class="container">
  <div class ="row">
    <div class="list-group-item list-group-item-action">       
      <ul class="list-group">
      <?php
        $result = show_pub_conference();
        while($row = mysqli_fetch_assoc($result))
        { 
      ?>
        <li class="d-flex w-100 justify-content-between">    
          <div class="pull-left" style="width: 30%">                
            <h5 class="mb-1"><?php echo $row['publisher'];?></h5>
            <small ><?php echo $row['date'];?></small>
          </div>
          <div class="pull-left" style="width: 35%">
            <?php echo '<a href = "'. $row['link'] . '">'; ?>
            <p class="mb-1"><?php echo $row['title'];?></p>
            </a>
          </div>
          <div class="pull-left" style="width: 10%">
            <p class="mb-1"><?php echo $row['role'];?></p>
          </div>
          <div class="pull-left" style="width: 10%">
            <?php echo $row['level'];?>
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
<a id="bookArticle"><h2 class="text-center" style="color: green">Book Articles</h2></a>
<div class="container">
  <div class ="row">
    <div class="list-group-item list-group-item-action">      
      <ul class="list-group">
      <?php
        $result = show_pub_bookArticle();
        while($row = mysqli_fetch_assoc($result))
        { 
      ?>
        <li class="d-flex w-100 justify-content-between">
          <div class="pull-left" style="width: 30%">                
            <h5 class="mb-1"><?php echo $row['publisher'];?></h5>
            <small ><?php echo $row['date'];?></small>
          </div>
          <div class="pull-left" style="width: 35%">
            <p class="mb-1"><?php echo $row['title'];?></p>
          </div>
          <div class="pull-left" style="width: 10%">
            <p class="mb-1"><?php echo $row['role'];?></p>
          </div>
          <div class="pull-left" style="width: 10%">
            <?php echo $row['level'];?>
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