
<html>
<head>
<style>
	input{
		border: 2px solid #4CAF50;
		border-radius: 4px;
		height: 30px;
		size: 30
	}
	select{
		width: 20%;
		padding: 16px 20px;
		border: none;
		border-radius: 4px;
		background-color: #f1f1f1;
	}
	input[type=button],input[type=reset],input[type=submit]{
		background-color: #4CAF50;
		border: none;
		color: white;
		padding: 7px 20px;
		text-decoration: none;
		margin: 2px 2px;
		cursor: pointer;
	}
	input[type="text"]{
		padding: 10px;
		border: solid 1px #fff;
		box-shadow: inset 1px 1px 2px O #707070;
		transition: box-shadow 0.3s;
	}
	input,select,textarea{
		font-size: 90%;
	}
	input[type="text"]{
		display: block;
		margin: 0;
		font-family: sans-serif;
		font-size: 21px;
		appearance:none;
		box-shadow: none;
		border-radius: none;
    }
    input[type="text"]:focus{
    	outline: none;
    }


</style>



<script type="text/javascript">
	c=confirm("Sure to buy the product");
	if(c==true)
		alert("Continue buying")
	else
		alert("Look for more product")

</script>
</head>



<body onload=y() background="img\cool-background.jpg" >
<form method="post"><center>
	<h1><font color="yellow" size=7 face="arial"><u>PLACEMENT OF ORDER</u></h1></font>
	<font size="5" color="white">
	<i>
	Name<br><input type="text" name="nm" tabindex="11"><br>
	House No.<br><input type="text" name="ad" tabindex="11"><br>
	City/Town<br>
    <input type="text" name="ct" tabindex="11"><br>
    Pin code
    <br>
   <input type="text" name="pn" tabindex="11"><br>
   Select State<br>
   <select style="height: 28px;" name=sel value=SELECT STATE>
   	<option value="0">Select state</option>
   	<option value="Jammu &amp;Kashmir">Jammu &amp;Kashmir</option>
    <option value="Himachal Pradesh">Himachal Pradesh</option>
   </select>
   <br>
   <hr>
   <input type="submit" name="btn" value="Place order">
   <hr>
</i>
</form>
</body>
<?php
function x()
{
	date_default_timezone_set("Asia/Calcutta");
	$n=$_POST['nm'];
    $a=$_POST['ad'];
    $s=$_POST['sel'];
    $fp=fopen("ord.txt", "a+");
    $r=$n." ".$a." ".$s;
    fwrite($fp,$r."\r\n");
    echo "<center><fieldset><font color=yellow size=6><u><b><legend>ORDER DETAILS</legend></u></b>";
    echo "<font color=white size=5><i>";
    echo "<br><br>Mr./Mrs.".$n." ";
    echo "your order id-"." ".rand()." is placed and will be delivered by next week-date"." ".date('jS F Y',strtotime('+1 week'));
    echo " "."on your doorstep at"." ".$a." ".$s;
    echo "<br>THANK YOU!!!!";
}



if(isset($_POST['btn']))
{
	x();
}
?>
</html>