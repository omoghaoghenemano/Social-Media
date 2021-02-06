<script>
function getcity(id) {
			xhr = new XMLHttpRequest();
			xhr.open('GET' , 'test.php?idd='+id, true);
			xhr.send();
			xhr.onreadystatechange = function() {
				if (xhr.readyState == 4 && xhr.status==200){
					document.getElementById("city_display").innerHTML = xhr.responseText;
					}
			
				}
 
 
}
 
function getEmail(emailid){
 
			email  = new XMLHttpRequest();
			email.open('GET' , 'test2.php?email='+emailid, true);
			email.send();
			email.onreadystatechange = function(){
				if (email.readyState == 4 && email.status == 200)
				{
					
					document.getElementById('emailDiv').innerHTML = email.responseText;
					}
				
				}
	
	
	}
	
	
	function password (pass){
	var a =	document.getElementById('pass1').value;
	//	document.write(a);
		var b = document.getElementById('pass2').value;
		if (a == b ){
			document.getElementById('cnfrmpass').innerHTML = "<font color='#00CC00'>Matched</font>";
			}
			else {
				
				document.getElementById('cnfrmpass').innerHTML = "<font color='red'>Miss matched</font>";
				}
		}
 
</script>
 
<?php
include_once('config.php');
$result = mysqli_query($conn, 'select * from country');
if (!$result) {
    echo 'query failed';
}
?>
 
 
<?php
if (isset($_GET['logout_successfully'])) {
?><?php
    echo $_GET['logout_successfully'];
?>
<?php
}
?>
<table><tr>
<td colspan="2"><center><h1>Registeration</h1></td></tr><tr>
<form method="post" action="insert.php">
<td>Name : </td><td><input type="text" name="name" /></td></tr><tr>
<td>Email : </td><td><input type="email" name="email" onBlur="getEmail(this.value)" /></td><td><div id="emailDiv"></div></td>
</tr><tr>
 
 
 
<td>country : </td><td><select name="country">
<?php
while ($row = mysqli_fetch_assoc($result)) {
?>
<option value="<?php
    echo $row['country_id'];
?>"> <?php
    echo $row['country_name'];
?>
</option>
 
<?php
}
?>
</select></td><td><div id="city_display"></div>
</td></tr><tr>
 
<td>Password : </td><td><input type="password" name="pass1" id="pass1"/></td></tr><tr><br />
<td>Confirm Password : </td><td><input type="password" name="pass2" id="pass2" onblur="password()" /></td><td>
<div id="cnfrmpass"></div></td></tr><tr>
<td colspan="2"><center><input type="submit" name="sbt" /></td></table></form> <br /><br />
<?php
if (isset($_GET['registeration_successfull'])) {
?><?php
    echo $_GET['registeration_successfull'];
?>
<?php
}
?>
 