<?php include('head.php'); ?>
<html>
<body align=center>
<form align=center action = "test.php" method = "post">
<?php
mysql_connect("localhost","root","");
mysql_select_db("quiz");
?>

<?php
$query = "select * from gkqa";
$run = mysql_query($query);
while($row = mysql_fetch_array($run)) 
{
	$qn = $row['qn'];
	$oa = $row['opa'];
    $ob = $row['opb'];
	$oc = $row['opc'];
    $od = $row['opd'];
}
?>
	<table align=center style="background-color:plum" border="1" cellpadding=80>
<tr>
<td style="text-align:left height:200px;width:600px"><b><font size=6><?php echo $qn;?>?</font><b></td></tr></table><br><br><br>
<input type ="submit" style="background-color:orange; height:100px;width:160px" name = "submit" value =<?php echo $oa;?>>
<input type ="submit" style="background-color:orange; height:100px;width:160px" name = "submit" value =<?php echo $ob;?>><br><br>
<input type ="submit" style="background-color:orange; height:100px;width:160px" name = "submit" value =<?php echo $oc;?>>
<input type ="submit" style="background-color:orange; height:100px;width:160px" name = "submit" value =<?php echo $od;?>>
<?php

?>
<?php
if(isset($_POST['submit']))
{  
    //$qno = $i;
	$mans = $_POST['submit'];
	$quer= "select * from gkqa where ans='$mans'";
    $ru = mysql_query($quer);
   while($row = mysql_fetch_array($ru))
   {
	 //  $no = $rows['no'];
		$ans = $row['ans'];
			
}
    if($mans==$ans){
		echo "<script>alert('answer is correct');
	      </script>";
	}
    else 
	{
		echo "<script>alert('wrong');
	      </script>";
	}
}
?>
<?php

?>

 </form>
 </body>
 </html>
 

 