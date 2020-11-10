<!DOCTYPE html>
<html>
<head>
	<title>Insert into Database</title>
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
       //Data Insertion portion
       if (isset($_POST['submit'])) {

       	 if (!isset($_POST['title'])) {
       	 	$_POST['title']="NULL";
       	 	# code...
       	 }

       	   $title=$_POST['title'];
       	   $userName=$_POST['user'];
       	   $password=$_POST['pass'];
       	   $password2=$_POST['pass2'];
       	   $url=$_POST['url'];

       	   
       	   if ($password==$password2) {

	       	   	if (preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$#", $password))
	       	   	{
					echo "Your password is good.<br>";
					$_POST['pass']=password_hash($password,PASSWORD_DEFAULT);

					$query = "SELECT title FROM a3";
						$results = mysqli_query($conn, $query);

						while ($rows=mysqli_fetch_array($results)) {
							$Check=$rows['title'];
						}
					
						if ($Check!=$_POST['title']) {

							# code...
							$sql = "INSERT INTO a3 (title, userName,password,url)
								VALUES ('".$_POST['title']."','".$_POST['user']."',
		                                    '".$_POST['pass']."','".$_POST['url']."');";

								if ($conn->query($sql) == TRUE) {
								  echo "<br>New record created successfully<br>";
								  echo "<td><a href='Login.php'>Go to Form</a></td><br>";
								  echo "<td><a href='Searching.php'>Go to Searching....</a></td>";
								} else {
								  		echo "<br>Error: " . $sql . "<br>" . $conn->error;
									}
						}else{
							echo "<br>Title is available in Database<br>";
							echo "<td><a href='Login.php'>Create New Title ?</a></td>";

						}


                    

					} else {
					echo "<br>Your password is bad.<br>"; 
					echo "<td><a href='Login.php'>Create New Password</a></td>";

				}
       	   
       	   }
       	   else{
       	   		echo "<script>alert('Hello')</script>";
       	   	 header('Location:Login.php');

       	   }


				

       	   // echo $password;

       	   // echo $password2;

				
          	# code...
          }   
          $conn->close();
      ?>
</body>
</html>