<!DOCTYPE html>
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <title>score borad</title>
  </head>
  <body class = "by">
    <?php
    require_once "css.php";
    ?>
    <div class="container-fiuld">
      <div class=" row">
        <div class="col-md-offset-1 hi">
          <div class="col-md-3"><a class="" href="">score board</a></div>
        <div class="col-md-3"><a class="" href="playerlist.php">playerlist </a></div>
        <div class="col-md-3"><a class="" href="myprofile.php">my profile</a></div>
        <div class="col-md-2"><a class="" href="home.php">logout</a></div>
      </div>
    </div>
    </div>
      <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="row">
          <div class="col-sm-2 ">
        <img src=" http://a1.mzstatic.com/us/r1000/005/Purple/fe/28/f1/mzm.klaqnhbk.175x175-75.jpg" alt = "" class=" img-responsive"/></div>
        <div class=" col-sm-2">
              highest score player<br>
              score 5000<br>
            follows5000
          </div>
      </div>
      <div class="row">
      <div class="col-sm-2  ">
      <img src="  http://a1.mzstatic.com/us/r1000/005/Purple/fe/28/f1/mzm.klaqnhbk.175x175-75.jpg" alt = " " class="img-responsive"/>
      </div>
      <div class="col-sm-2">
              player <br>
              score 45000<br>
            follows3000
      </div>
      </div>
      <div class="row">
      <div class="col-sm-2  ">
        <img src=" http://a1.mzstatic.com/us/r1000/005/Purple/fe/28/f1/mzm.klaqnhbk.175x175-75.jpg" alt = "" class="img-responsive"/></div>
        <div class=" col-sm-2">
            player<br>
            score 40000<br>
            follows2100
          </div>
      </div>
    </div>
    <div class="col-md-4">
  <p class="score"> update score</p>
  <input type="" name="score" value=""><br>
  <input type="file" name="pic" value=""><br>
  <button type="button" name="submit">submit</button>

    </div>
    </div>
    </div>
      </body>
      </html>
