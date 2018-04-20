<?php include('head.php');?>
<html>
<head>
<title>php</title>
</head>
<body><br><br><br>
<h2 align=center> <font color="blue">Register On QuizApna</font></h2>
<form align=center action = "logtest.php" method = "post">
<table align=center>
<tr>
<td>Username:</td>  <td><input type="text" name="username"></td></tr>
<tr>
<td>Password:</td> <td> <input type="password" name="password"></td></tr></table>
<input type ="submit" name = "submit" value = "submit">
Subject:<input type="Checkbox list="subject" value="computer,g.k,ssy">
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
    echo "<script>alert('ready for test');
		 window.location.assign('test.php');
		     </script>";
	}
	else
	{
		echo "<script>alert('check username or password');
		window.location.assign('logtest.php');
		     </script>";
	}
}

?>
