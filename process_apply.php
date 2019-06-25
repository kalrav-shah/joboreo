<?php session_start();
	if(empty($_GET))
	{
		header("location:login.php");
	
	}
	$link=mysqli_connect("localhost","root","","user")or die("can not connect");
	$q="insert into applicants (a_uid,a_jid)values(".$_SESSION['eeid'].",".$_GET['jid'].")";

	mysqli_query($link,$q) or die("wrong query");
	header("location:login.php");
	
?>