<?php include('head.php');?>
<html>
<head>
<title>php</title>
</head>
<body><br><br><br>
<h2 align=center> <font color="blue">ENTER YOUR USERNAME AND PASSWORD</font></h2>
<form align=center action = "up.php" method = "post">
<table align=center>
<tr>
<td>Username:</td>  <td><input type="text" name="username"></td></tr>
<tr>
<td>Password:</td> <td> <input type="text" name="password"></td></tr></table>
<input type ="submit" name = "submit" value = "submit">
</form>
</body>
</html>
<?php
mysql_connect("localhost","root","");
mysql_select_db("quiz");
?>
<?php

if(isset($_POST['submit']))
{  
    
    $searchu = $_POST['username'];
	$searchp = $_POST['password'];
	$query = "select * from register where username='$searchu' AND password='$searchp'";
    $run = mysql_query($query);
   while($row = mysql_fetch_array($run))
   {
	    $username = $row['username'];
	    $password = $row['password'];
			
}
    if($searchu==$username && $searchp==$password){
    echo "<script>alert('Welcome to your QuizApna Profile');
		 window.location.assign('home.php');
		     </script>";
	}
	else
	{
		echo "<script>alert('check username or password');
		window.location.assign('register.php');
		     </script>";
	}
}

?>
