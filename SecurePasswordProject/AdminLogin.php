<!DOCTYPE html>
<html>
<head>
	<title>WelCome to Admin Login</title>
</head>
<body>


  <?php 
    @include('style.php');

      // session_start();
    if (isset($_POST['submit'])){
    	if($_POST['password']=="Aliakbar3871"){   //This is Master Password for my website
    		
    		// $_SESSION['Login']="YES";
    		// header('Location:Login.php');
    		header('Location:welcome.php');

    	}
    	else{

    		// $_SESSION['Login']="NO";

    	}
    }
   ?>

<script type="text/javascript">
	function abc(){
      var a=document.getElementById('title').type;
      if (a==='password') {
        document.getElementById('title').type='text';
      }
      else{
        document.getElementById('title').type='password';
      }

    }
</script>

<div class="container">
<form class="form-control-sm container" method="post">
  <div class="form-group form-inline col-sm-10">
    <label>Master Password:</label>
    <input type="password" class="form-control" name="password" id="title">
    <button class="form-control" onclick="abc();return false;">...</button>
  </div>
  <div class="form-group form-inline col-sm-10">
    <input type="submit" class="form-control btn btn-primary" name="submit" id="title" title="Click Submit">
  </div>
</form>
</div>
</body>
</html>