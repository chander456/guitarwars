<!DOCTYPE html>
<html>
  <head>
  <title>signup</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 </head>
  <body>
    <?php
    require_once "css.php";
     ?>
     <h1>sign up form</h1>
     <div class="row"></div><br>
     <div class="row">
     <div class="col-md-12 "></div>
     </div>
     <form class="form-horizontal">
     <div class="form-group">
       <label for="name" class="col-md-offset-2 col-sm-2 control-label">Name</label>
       <div class="col-sm-4">
       <input type="text" class="form-control" placeholder="enter name here">
       </div>
     </div>
     <div class="form-group">
       <label for="username" class="col-md-offset-2 col-sm-2 control-label">Username</label>
       <div class="col-sm-4">
     <input type="text"class="form-control"placeholder="enter username here">
       </div>
     </div>
     <div class="form-group">
       <label for="email" class="col-md-offset-2 col-sm-2 control-label">Email</label>
       <div class="col-sm-4">
     <input type="text"class="form-control"placeholder="enter email here">
       </div>
     </div>
     <div class="form-group">
       <label for="password" class="col-md-offset-2 col-sm-2 control-label">Password</label>
       <div class="col-sm-4">
     <input type="password"class="form-control"placeholder="Password">
       </div>
     </div>
     <div class="form-group">
       <label for="pic" class="col-md-offset-2 col-sm-2 control-label">profilepic</label>
       <div class="col-sm-4">
     <input type="file" name="profilepic" >
       </div>
     </div>
     <div class="form-group">
       <div class="col-sm-offset-4 col-sm-6">
      <button type="submit" class="btn btn-default">Sign up</button>
       </div>
     </div>
