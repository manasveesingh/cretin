<html>
<body background="cool-background.jpg">
<!logo>
<div style="position:absolute; top:0;">
<img src="logo.png" width="200" height="200">
</div>
<!end logo>
<br>
<br>
<br>
<br>
<br>
<br>
<center>
<table  cellpadding="12" border="1" bordercolor=white >
<tr><td colspan="2">
<center>
<h1><i><font color="red" size=7><u>
<b>LoginArea</b></u>
</i></h1>
</center></td></tr>

<tr><td><h1><i><b><font color=yellow>UserID:</b></i></h1></td><td>
<form method=post>
<input name=id type="text">
</td></tr>
<tr><td><h1><i><b><font color=yellow>Password:</b></i></h1></td>
<td>
<input name="pass" type="password">
</td></tr>
<tr><td><center>

<input type=submit value="Login" name="btn">

</center></td><td><center><br>
<input type="Reset">
</form>
</td>
</tr>
</table></center> 
<?php
function xyz()
{
$f=mysqli_real_escape_string($_POST['id']);
$l=mysqli_real_escape_string($_POST['pass']);


$conn=new mysqli("localhost","root","sunbeam","signin");

$sql="SELECT email,password FROM details WHERE email=$f and password=$l";

$result=$conn->query($sql);

while($row=$result->fetch_assoc())
{
$m=$row['password'];
}
if($l==$m)
echo "<script type='text/javascript'>alert('you are logged in')</script>";
else
echo "<script type='text/javascript'>alert('user password not matched')</script>";


$conn->close();
}
if(isset($_POST['btn']))
{
xyz();
}
?>

