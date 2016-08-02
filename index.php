<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Check Data</title>
<script src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript">
function ajax_data()
{
	//create a XMLHttpRequest
	var con=new XMLHttpRequest();
	//store the variable 
	var name=document.getElementById('username').value;
	var pass=document.getElementById('password').value;
	var contact=document.getElementById('contact').value;
	var email=document.getElementById('email').value;
	var formSubmit=document.getElementById('submit').value;
	var url="action.php";
	var data="username="+name+"&password="+pass+"&contact="+contact+"&email="+email+"&btn="+formSubmit;
	con.open("POST",url,true);
	con.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	con.onreadystatechange=function()
	{
		if(con.readyState==4 && con.status==200)
		{
			var return_data=con.responseText;
			document.getElementById('result').innerHTML=return_data;
		}

	}
			//send the data to php file;
			con.send(data); //excute the request
			document.getElementById('status').innerHTML="Processing...";
}
</script>
</head>
<body>
 <!-- <form action="" method="post"> -->
 <div style="margin:auto;height:auto;width:600px;text-align:center;">
 <h1 style="color:gray;text-align:center;font-family:roboto;">Login Application with Ajax</h1>
 <p id="result" style="color:red;text-align:center;font-family:verdana;">
 <?php if(isset($_GET['msg'])){ echo @$_GET['msg']; }?>
 </p>
<p>Username:<input type="text" name="uname" id="username"/></p>
<p>Password:<input type="password" name="password" id="password"/></p>
<p>Contact: <input type="tel" name="tel" id="contact" maxlength="10"/></p>
<p>Email:  <input type="email" name="email" id="email"/></p>
<p><input type="submit" name="submit" id="submit" value="Signup" onClick="ajax_data()"/></p>
<p id="status"></p>
</div>
<!-- </form> -->
</body>
</html>