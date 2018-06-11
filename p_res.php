
<!DOCTYPE HTML5>
<html>
<head>
<title>Reset Password</title>
<style>
body {color: purple;background-color: powderblue; }

h1{
	color:Red ;
	font- size :25px;
	font-family : Helvetica;
	}
}	 
</style>
</head>
<body>
<script>

function validateform(){

var a =document.f1.uname.value;
var b =document.f1.email.value;
var c =document.f1.psw.value;
var d =document.f1.cpsw.value;

if(a==""||b==""||c==""||d==""){
   
   alert("Can't update.Fields are empty"); 
   return false;   
} 

if(c!=d){
	alert("Password doesn't matches");
   return false;   
}

if(c.length>10 || d.length>10){
	  alert("password more then 10 character's")
  } 

else{  
     return true;  
	} 
}
</script>
<body background color="Red">
<table align="center" >
<form name= "f1"  action="p_res2.php"  method="POST" onSUBMIT="return validateform()">
<h1 align="center" background color="Red">Reset Your Password</h1> 

       
<tr>
<td><label for="user_name">User_Name:</label></td>
<td><input type="text" name="uname" id="uname" placeholder="Enter USER NAME"></td>
</tr>

<tr>
<td>Email:</td>
<td><input type="email" name="email" placeholder="Enter Email"></td>
</tr>

<tr>
<td> Enter New password</td>
<td><input type ="password" name="psw" placeholder="*******" /></td>
</tr>

<tr>
<td> Confirm New password</td>
<td><input type ="password" name="cpsw" placeholder="*******" /></td>
</tr>
<br/>

<tr>
<td>SUBMIT <input type="submit" name ="submit" value="UPDATE PASSWORD"  ></td><br/><br />
</tr>
<tr>
<td>CANCEL<input type="RESET" name="reset" value="CANCEL"></td> </br/>
</tr>
</table>
</form>
</body>
</html>









