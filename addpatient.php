<?php
session_start()
?>

<?php
$id=$_POST['id'];
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$occupation=$_POST['occupation'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
##$con=@mysql_connect("localhost","root","root") or die(mysql_error());
$con=@mysql_connect("localhost","root") or die(mysql_error()); ## with out password
$db=@mysql_select_db("hms",$con)or die(mysql_error());
$str="insert into patients values('$id', AES_ENCRYPT('$name','passw'), AES_ENCRYPT('$age','passw'),AES_ENCRYPT('$gender','passw'), AES_ENCRYPT('$occupation','passw'), AES_ENCRYPT('$mobile','passw'),AES_ENCRYPT('$address','passw'))";  
$res=@mysql_query($str)or die(mysql_error());
if($res>=0)
{
echo'<br><br><b>Patient added !!<br>';
}

?>
<html>
<body style="background-image:url(background4.jpg)">
<br>
<a href="home.html"><b>Click here to return to the home page</b></a>
</body></html>
