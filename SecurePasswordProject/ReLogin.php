<!DOCTYPE html>
<html>
<head>

	<title>WelCome to Login Page</title>
  <?php include('style.php'); ?>
	
</head>
<body>
  <!-- Automatically generator of Password -->
  <?php  
    function rand_string( $length ) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        return substr(str_shuffle($chars),0,$length);
      }

     // document.getElementById("pass").value =rand_string(15);
       $result=rand_string(10);
      
  ?>

 <script type="text/javascript">
   //For Password
    function abc(){
      var a=document.getElementById('pass').type;
      if (a==='password') {
        document.getElementById('pass').type='text';
      }
      else{
        document.getElementById('pass').type='password';
      }

    }
    //For Repeat Password
    function abc2(){
      var a=document.getElementById('pass2').type;
      if (a==='password') {
        document.getElementById('pass2').type='text';
      }
      else{
        document.getElementById('pass2').type='password';
      }

    }
    function Prograss(){
      var bar=document.getElementById('file');
      var pass=document.getElementById('pass');
      bar.value=pass.value.length;
    }
 </script>

 <?php
   session_start();

  if ($_SESSION['Login']=="YES") {
  # code...
?>
  
<div class="container">
<form class="form-control-sm container" method="post" action="insertIntoDatabase.php">
  <div class="form-group form-inline col-sm-10">
    <label>Title:</label>
    <input type="text" class="form-control" id="title" name="title" required minlength=8
      value=<?php echo $_SESSION['title']; ?>
    >
  </div>
  <div class="form-group form-inline col-sm-10">
    <label>User name:</label>
    <input type="text" class="form-control" id="user" name="user" value=<?php echo $_SESSION['userName']; ?>>
  </div>
  <div class="form-group form-inline col-sm-10">
    <label>Password:</label>
    <input type="password" minlength=8 maxlength=30 oninput="Prograss();" class="form-control" id="pass" required name="pass" value=<?php echo $_SESSION['password']; ?>>
    <button class="form-control" onclick="abc();return false;">...</button>
  </div>
  <div class="form-group form-inline col-sm-10">
    <label>Repeat:</label>
    <input type="password" class="form-control" minlength=8 maxlength=30 name="pass2" id="pass2" value=<?php echo $_SESSION['password']; ?>>
    <button class="form-control" onclick="abc2();return false;">...</button>
  </div>
  <div class="form-group form-inline col-sm-10">
    <label>Quality:</label>
    <progress id="file" class="strength" min="0" max="80" value=<?php echo (strlen($_SESSION['password'])); ?>> </progress>
  </div>
  <div class="form-group form-inline col-sm-10">
    <label>URL:</label>
    <input type="text" class="form-control" id="url" name="url" required minlength=15 value=<?php echo $_SESSION['url']; ?>>
  </div>
  <div class="form-group form-inline col-sm-10">
    <label>Submit:</label>
    <input type="submit" class="form-control btn btn-primary" name="submit" id="submit" title="Click Submit">
  </div>
</form>
</div>
<?php 
}; ?>
</body>
</html>