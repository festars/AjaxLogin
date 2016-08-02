<?php
include_once("config.php");
//echo $_POST['username'].$_POST['password'].$_POST['contact'].$_POST['email'].$_POST['btn'];
if(isset($_POST['btn'])=="Signup")
{
	$query="select username,email from profile where username='".$_POST['username']."' and email='".$_POST['email']."'";
	$result=$con->query($query) or die("Error".$con->connect_errno.$con->connect_error);
	if(mysqli_fetch_row($result)>0)
	{
		echo "Email id or username is already registered &phi;, Please try another !";
	}
	else
	{
		$query2="insert into profile(username,password,contact,email) values('".$_POST['username']."','".md5($_POST['password'])."','".$_POST['contact']."','".$_POST['email']."')";
		$result2=$con->query($query2) or die("Error".$con->connect_errno.$con->connect_error);
		if($result2)
		{
			echo "Signup Successfull";
		}
		else
		{
			echo "Try Again";
		}
	}
	
}
else
{
	header("Location:index.php?msg=Error in Connection");
}

?>