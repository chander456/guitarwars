<!DOCTYPE html>
<html>
  <head>
  <title>login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 </head>
  <body>
    <?php
    require_once "css.php";
     ?>
     <br>
 <div class="hil">
  <img src=" http://a1.mzstatic.com/us/r1000/005/Purple/fe/28/f1/mzm.klaqnhbk.175x175-75.jpg" alt = "" class="img-circle"/>
  <h1>login</h1>
  </div>
  <div class="row">
  <div class="col-md-12 hii"></div>
  </div>
  <form class="form-horizontal">
  <div class="form-group">
    <label for="username" class="col-md-offset-2 col-sm-2 control-label">Username</label>
    <div class="col-sm-4">
    <input type="text" class="form-control" placeholder="enter username here">
    </div>
  </div>
  <div class="form-group">
    <label for="Password" class="col-md-offset-2 col-sm-2 control-label">Password</label>
    <div class="col-sm-4">
  <input type="password"class="form-control" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-4 col-sm-6">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-4 col-sm-6">
    <button type="submit" >Sign in</button>
    <a href="scoreboard.php">signin</a>

    </div>
  </div>
</form>

  </body>
</html>
