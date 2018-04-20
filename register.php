<?php include('head.php');?>
<html>
<head>
<title>php</title>
</head>
<body bgcolor=majenta ><br><br><br>
<h2 align=center> <font color="blue">Register On QuizApna</font></h2>
<table align=center border="1">
<form align=center action = "register.php" method = "post" enctype= "multipart/form-data">
<tr><td>Name:</td><td>  <input type="text" name="name"></td></tr>
<tr><td> College Name:</td><td>  <input type="text" name="college"></td></tr>
<tr><td>Email id :</td><td>  <input type="text" name="email"></td></tr>
<tr><td>Username:</td><td>  <input type="text" name="username"></td></tr>
<tr><td>Password:</td><td> <input type="password" name="password"></td></tr>
<tr><td>Image:</td><td> <input type="file" name="pic"></td></tr>
<tr><td align=center colspan="2"><input type ="submit" name = "submit" value = "submit"></td></tr>
</form></table>
</body>
</html>
<?php
mysql_connect("localhost","root","");
mysql_select_db("quiz");

if(isset($_POST['submit']))
{
   // $id = $_POST['id'];
	$stname = $_POST['name'];
	 $cname = $_POST['college'];
	 $email = $_POST['email'];
	 $user = $_POST['username'];
	 $pass = $_POST['password'];
	 $pic_name = $_FILES['pic']['name'];
	 $pic_type = $_FILES['pic']['type'];
	 $pic_size = $_FILES['pic']['size'];
	 $pic_tmp = $_FILES['pic']['tmp_name'];
	 if($stname=='' or $cname=='' or $email=='' or $user=='' or $pass==''){
		 echo "<script>alert('please fill all required fields')</script>";
		 exit();
	 if($pic_type=="pic/jpeg" or $pic_type=="pic/png"){
		 if($pic_size<=50000){
		move_uploaded_file($pic_tmp,"pic/$pic_name");
		 }
		 else {
			 echo "<script>alert('image type should be jpeg and less than 50kb')</script>";
		 }
	 }
}
	$query = "insert into register (name,college,email,username,password,pic) values ('$stname','$cname','$email','$user','$pass','$pic_name')";
    if(mysql_query($query))  
	{
		echo "<script>alert('Thank you for registration');
		 window.location.assign('home.php');
		     </script>";

			 
	}
}

?>
