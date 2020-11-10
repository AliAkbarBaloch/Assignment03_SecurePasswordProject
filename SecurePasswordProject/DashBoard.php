<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php  include('style.php'); ?>
</head>
<body>
   <?php
        $servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "assignment03";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}

		if (isset($_POST['submit'])) {

			$query = "SELECT title,userName,password,url FROM a3 ";
						$results = mysqli_query($conn, $query);
					
			
			# code...
		}
	?>
	<script type="text/javascript">
		
		function goNextPage(){
			location.replace('ReLogin.php');
			
		}
	</script>
<table class="table table-sm table-dark">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">UserName</th>
      <th scope="col">Password</th>
      <th scope="col">URL</th>
    </tr>
  </thead>
  <tbody>
  	<?php 

  	      session_start();
  	      $_SESSION['Login']="YES";
         while ($rows=mysqli_fetch_array( $results)) {

  	  ?>
    <tr>
      <td class="bg-primary" ondblclick="goNextPage();"><?php echo $rows['title'];$_SESSION['title']=$rows['title'];?></a></td>
      <td class="bg-success"><?php echo $rows['userName'];$_SESSION['userName']=$rows['userName'];?></td>
      <td class="bg-warning"><?php echo $rows['password'];$_SESSION['password']=$rows['password']; ?></td>
      <td class="bg-danger"><?php echo $rows['url'];$_SESSION['url']=$rows['url']; ?></td>
    </tr>
    <?php }; ?>
  </tbody>
</table>
</body>
</html>