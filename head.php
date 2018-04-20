<html>
<head>
<link href="mystyle.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="head">

<img style="float:left;"src="c2.png" width="100" height="100">
<h1 align=center><font color="red"> QUIZAPNA </font> </H1>
	<?php
date_default_timezone_set("Asia/kolkata");
setcookie('user_visit',date("h:i:s A"));
?>
<?php
if(isset($_COOKIE['user_visit']))
{
	$last_seen = $_COOKIE['user_visit'];
	echo "<html><h3 align=right>$last_seen</h3></html>";
}
?></div>
<div id="menu">
<ul>
<li><a href="home.php">Home</a></li>
<li><a href="#">About</a></li>
<li><a href="register.php">Register</a></li>
<li><a href="#"> Login </a>
<ul>
<li><a href="logtest.php">Go to Quiz</a></li>
<li><a href="up.php">Profile</a></li>
</ul>
</li>
<li><a href="#">forgot Password</a></li>
<li><a href="#">Subjects</a>
<ul>
<li><a href="#">General knowledge</a></li>
<li><a href="#">computer</a></li>
<li><a href="#">english</a></li>
<li><a href="#">IQ test</a></li>
</ul>
</li>
</ul><br><br><br></div>

<?php
//$firstN=array();
//$min = 1;
//$max= 4;
//$num = rand($min,$max);
//for($i=1;$i<=$num;$i++){
   //echo	$firstN[0] = '<img src="Desert.jpg" border="0">';
	//echo $firstN[1] = '<img src="Tulips.jpg" border="0">';
	//echo $firstN[2] = '<img src="Koala.jpg" border="0">';
//}
// echo $firstN[0];
 //echo $firstN[1];
	?>
</BODY>

</HTML>

