<?php
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
<div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2">
  <div id="carouselExampleIndicators" class="carousel carousel-dark slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img style="width: 100%;" src="assets/img/publication/Certificate - HNICEM 2023 ITS.png" class="img-thumbnail" alt="ITS">
          
      </div>
      <div class="carousel-item">
        <img style="width: 100%;" src="assets/img/software/PIPS.gif" class="img-thumbnail" alt="PIPS">
          
      </div>
      <div class="carousel-item">
        <img style="width: 100%;" src="assets/img/publication/Certificate - HNICEM 2023 - DSA.png" class="img-thumbnail" alt="DSA">
          
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<a id="about">
  <section class="my-4">
    <div class="py-4">
      <h2 class="text-center" style="color: green">About</h2>
    </div>
    <div class="container-fluid">
      <p class="mb-1">Welcome to my personal website where you can find information about my recent and past software projects for multiple platforms. I developed my programming skills while I was a college student, and I gained experience in using Microsoft products to create applications ranging from simple to complex solutions.</p>
      <p class="mb-1">During my time in college as a Computer Science student, I excelled as a C++ programmer. I enjoyed developing small, dynamic applications for a 24-bit computer. I was particularly fascinated by algorithms and enjoyed implementing them in my applications. Later, I expanded my skills by learning Microsoft Visual Basic 6.0, which allowed me to develop applications through object-oriented and event-driven programming. For my thesis, I used this programming language in conjunction with Microsoft Access 2007. Even after graduation, I continued to advance my programming skills by creating programs using the latest Microsoft Visual Basic.NET and attempting to connect them to the robust database management system known as MySQL.</p>
      <p class="mb-1">After learning PHP and ASP programming languages, I pursued a Master's degree in Information Technology (MIT) with the help of my friends, family, and God. For my thesis, I developed a desktop tactical role-playing game (TRPG) using Unity game engine. I believe I was the first Filipino developer to create a game of this genre based on my research. Additionally, I assisted a former colleague in developing an interactive and dynamic management information system with radio frequency identifier (RFID) for his own Master's degree in Information Technology in 2017.</p> 
      <p class="mb-1">Last year (2023), I earned a Doctor of Information Technology (DIT) degree. During my studies, I created an Intelligent Tutoring System (ITS) designed to identify tinkering behavior in novice C programmers.</p>
    </div>
  </section>
</a>

<a id="publication">
  <section class="my-4">
    <div class="py-4">
      <h2 class="text-center" style="color: green">Publications</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <a href="publication.php#journal" class=thumbnail><img src="assets/img/publication/journals.png" class="img-thumbnail" alt="journals" style="height: 300px; width: 200px"></a>          
          <div class="caption">
                <h5>Journals</h5>
                <p>
                    Visit the journals I have published through the years of being an active researcher.
                </p>
                <p>
                    <a href="publication.php#journal" class="btn btn-success">
                        View More
                    </a>
                </p>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <a href="publication.php#conference" class=thumbnail><img src="assets/img/publication/conferences.jpg" class="img-thumbnail" alt="conferences" style="height: 300px; width: 200px"></a>
          <div class="caption">
                <h5>Conferences</h5>
                <p>
                    View all the conferences I have attended to present my research papers.
                </p>
                <p>
                    <a href="publication.php#conference" class="btn btn-success">
                        View More
                    </a>
                </p>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <a href="publication.php#labManual" class=thumbnail><img src="assets/img/publication/Books.jpg" class="img-thumbnail" alt="books" style="height: 300px; width: 200px"></a>
          <div class="caption">
                <h5>Lab Manuals</h5>
                <p>
                    View all the laboratory manuals I have published either as a laboratory manual or for teaching.   
                </p>
                <p>
                    <a href="publication.php#labManual" class="btn btn-success">
                        View More
                    </a>
                </p>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <a href="publication.php#bookArticle" class=thumbnail><img src="assets/img/publication/Book Chapters.jpg" class="img-thumbnail" alt="book chapters" style="height: 300px; width: 200px"></a>
          <div class="caption">
                <h5>Book Articles</h5>
                <p>
                    Shows all the article I prepared for a certain book of abstract.
                </p>
                <p>
                    <a href="publication.php#bookArticle" class="btn btn-success">
                        View More
                    </a>
                </p>
            </div>
        </div>
      </div>
    </div>
  </section>
</a>

<a id="vlogs">
  <section class="my-4">
    <div class="py-4">
      <h2 class="text-center" style="color: green">Vlogs</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <a href="vlog.php#softDev" class=thumbnail><img src="assets/img/vlog/softdev.jpg" class="img-thumbnail" alt="softdev" style="height: 200px; width: 300px"></a>
          <div class="caption">
                <h5>Software Development</h5>
                <p>
                    View all the videos for software projects  I have undertaken for my clients.
                </p>
                <p>
                    <a href="vlog.php#softDev" class="btn btn-success">
                        View More
                    </a>
                </p>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <a href="vlog.php#dataScience" class=thumbnail><img src="assets/img/vlog/datascience.jpg" class="img-thumbnail" alt="datascience" style="height: 200px; width: 300px"></a>
          <div class="caption">
                <h5>Data Science</h5>
                <p>
                    Shows all my videos related to Data Science topics.
                </p>
                <p>
                    <a href="vlog.php#dataScience" class="btn btn-success">
                        View More
                    </a>
                </p>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <a href="vlog.php#educ" class=thumbnail><img src="assets/img/vlog/educational.jpg" class="img-thumbnail" alt="educational" style="height: 200px; width: 300px"></a>
          <div class="caption">
                <h5>Educational</h5>
                <p>
                    Shows all the videos I prepared as supplementary to my teaching activities.
                </p>
                <p>
                    <a href="vlog.php#educ" class="btn btn-success">
                        View More
                    </a>
                </p>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <a href="vlog.php#gameMod" class=thumbnail><img src="assets/img/vlog/gamemods.jpg" class="img-thumbnail" alt="gamemods" style="height: 200px; width: 300px"></a>
          <div class="caption">
                <h5>Game Modding</h5>
                <p>
                    Shows all my videos related to my hobby on modding PC games.
                </p>
                <p>
                    <a href="vlog.php#gameMod" class="btn btn-success">
                        Video More
                    </a>
                </p>
            </div>
        </div>
      </div>
    </div>
  </section>
</a>

<a id="softwares">
  <section class="my-4">
    <div class="py-4">
      <h2 class="text-center" style="color: green">Softwares</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <a href="software.php#business" class=thumbnail><img src="assets/img/software/RFID.gif" class="img-thumbnail" alt="business" style="height: 200px; width: 300px"></a>
          <div class="caption">
                <h5>Business Softwares</h5>
                <p>
                    Check out my softwares developed for certain companies.
                </p>
                <p>
                    <a href="software.php#business" class="btn btn-success">
                        View More
                    </a>
                </p>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <a href="software.php#educ" class=thumbnail><img src="assets/img/software/CAI.gif" class="img-thumbnail" alt="edutech" style="height: 200px; width: 300px"></a>
          <div class="caption">
                <h5>Educational Technology</h5>
                <p>
                    See my applications developed for selected Institution.
                </p>
                <p>
                    <a href="software.php#educ" class="btn btn-success">
                        View More
                    </a>
                </p>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <a href="software.php#gameDev" class=thumbnail><img src="assets/img/software/encantasya.gif" class="img-thumbnail" alt="gamedev" style="height: 200px; width: 300px"></a>
          <div class="caption">
                <h5>Game Development</h5>
                <p>
                    See all of my game softwares developed.
                </p>
                <p>
                    <a href="software.php#gameDev" class="btn btn-success">
                        View More
                    </a>
                </p>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <a href="software.php#is" class=thumbnail><img src="assets/img/software/ITS.gif" class="img-thumbnail" alt="ai" style="height: 200px; width: 300px"></a>
          <div class="caption">
                <h5>Intelligent Systems</h5>
                <p>
                    View all of my deployed machine learning models on softwares.
                </p>
                <p>
                    <a href="software.php#is" class="btn btn-success">
                        View More
                    </a>
                </p>
            </div>
        </div>
      </div>
    </div>
  </section>
</a>

<a id="contactus">
  <section class="my-4">
    <div class="py-4">
      <h2 class="text-center" style="color: green">Contact Us</h2>
    </div>
    <div class="container-fluid" style="height: 300px; width: 500px">
      <form action="contactus.php" method="post">
        <div class=form-group>
          <label>Name: </label>
          <input type="text" name="name" class="form-control">
        </div>
        <div class=form-group>
          <label>Email: </label>
          <input type="text" name="email" class="form-control">
        </div>
        <div class=form-group>
          <label>Mobile Number: </label>
          <input type="text" name="mobileno" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
  </section>
</a>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>