<html>
<head>
<style>
input {
    border: 2px solid #4CAF50 ;
    border-radius: 4px;
      height:20px;
       size="32"
}
td{
font-size:120%;
}
input, select, textarea { 
font-size: 90%; 
}
select {
    width: 60%;
    padding: 16px 20px;
    border: none;
    border-radius: 4px;
    background-color: white;
}
input[type=button],  input[type=reset], input[type=submit]{
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}
input[type="text"] {
  padding: 10px;
  border: solid 1px #fff;
  box-shadow: inset 1px 1px 2px 0 #707070;
  transition: box-shadow 0.3s;
}
.style-5 input[type="text"]:focus,
.style-5 input[type="text"].focus {
  box-shadow: inset 1px 1px 2px 0 #c9c9c9;
}
input {
  width: 375px;
  display: block;
  border: 1px solid #ffcc00;
  height: 47px;
  -webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
  -moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
}
input[type="text"] {
  display: block;
  margin: 0;

  font-family: sans-serif;
  font-size: 21px;
  appearance: none;
  box-shadow: none;
  border-radius: none;
}
input[type="text"]:focus {
  outline: none;
}

font{
    text-shadow: 1px 1px 2px black, 0 0 25px white, 0 0 5px black;
}
table { border-collapse: collapse; }
tr { border: none; }
td {
  border-right: solid 1px #f00; 
  border-left: solid 1px #f00;
 border-color:navy;
}
input[type=radio] {
    border: 0px;
    width: 50%;
    height: 1em;
}
input[type=checkbox] {
    border: 0px;
    width: 10%;
    height: 1em;
}
}
</style>
</head>
<body background="img\cool-background.jpg" >
<!logo>
<div style="position:absolute; top:0;">
<img src="img\logo.png" width="200" height="200">
</div>
<!end logo>

<font size=7 color=yellow><center><u>SIGN UP / REGISTER</u><br>
<b><font  size=4 COLOR=white>ALREADY REGISTERED <a href="login.php"><i><font color=lightgreen size=7>sign in</font</i></a></font><br>
</center><br><table><form name=dcf method=post>
<br>
<br>
<br>
<font size=5 ><i>
<tr><td  style="border-left:none;border-right:none;color:red;font-size:30px;">FIRST NAME                                                         <br>                                             
<input type=text name=fn>
  <td style="border-left:none;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<tR><td  style="border-left:none;border-right:none;color:red;font-size:30px;">LAST NAME                                                                      <br>  
<input name=ln type=text>
                  <td style="border-left:none;color:red;font-size:30px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp                                                                                            <br>
        <div style="position:absolute;left:650;top:150;">
              <img src="img\fb.jpg" width=350 height=70>
           </div>
<tr><td style="border-left:none;border-right:none;color:red;font-size:30px;">EMAIL 
<input name=em type=text >  
  <td style="border-left:none;border-right:none">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp                                                          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
<td style="border-left:none;border-right:none;color:red;font-size:30px;"><font size=6>OR</font>
                                                                                                                       &nbsp&nbsp
</td>
                     <div style="position:absolute;left:650;top:300;">
                         <img src="img\go.png" width=350 height=70>
                       </div>
<tr><td  style="border-left:none;border-right:none;color:red;font-size:30px;">PASSWORD<br>
<input name=ps type=password >
                                                               <td style="border-left:none;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp                                                            
<tr><td style="border-left:none;border-right:none;color:red;font-size:20px;">MALE<input type=radio name=rd>
FEMALE<input type=radio name=rd>
<BR><input type=checkbox >
</table>
<font size=1>I AGREE TO RECEIVE INFORMATION 
<br>ABOUT EXCITING OFFERS LIKE FLAT 90% OFF, RS.99 DEALS ON SMS

<br><br><br><input  type="submit"  value="SIGN UP" name=btn  tabindex="17, "/>
</form>
<?php
function x()
{
$f=$_POST['fn'];
$l=$_POST['ln'];
$e=$_POST['em'];
$p=$_POST['ps'];


$conn=new mysqli("localhost","root","sunbeam","signin");
$qr="insert into details(fname,lname,email,password) values('$f','$l','$e','$p')";
if($conn->query($qr)==true)
echo "<center><font size=7 color=red>YOU ARE SIGNED IN...";
else{
echo "Error:".$qr."<br>".$conn->error;}
$conn->close();
}
if(isset($_POST['btn']))
{
x();
}
?>

