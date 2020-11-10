<!DOCTYPE html>
<html>
<head>
	<title>Searching.....</title>
    <style type="text/css">
    	form{
    		text-align: center;
    		margin-top: 20%;
    	}
    </style>
</head>
<body>

   <form class="form-control-sm container" method="post" action="DashBoard.php"> 
	  <div class="form-group form-inline col-sm-10" id="div">
	    <label>Find:</label>
	    <input type="text" name="find" id="find" placeholder="Search with Title"> </input>
	  </div>
	<br>
	   Search in<br id="formInput">
	    <input type="checkbox" value="title" name="title"><label>Title</label> </input>
	    <input type="checkbox" value="url" name="url"><label>URL</label> </input>
	    <input type="checkbox" value="userName" name="userName"><label>userName</label> </input>
	    <input type="checkbox" value="password" name="password"><label>Password</label> </input><br>
	    <input type="submit" name="submit" class="btn btn-primary">
  </form>
	  
	
	
</body>
</html>