<!DOCTYPE html>
<html>
<head>
	<title>Mailer</title>
	<style type="text/css">
	#Container{
		width: 80%;
		margin:0 auto;
		background: #eee;
		padding: 5px;
	}
	.full{
		width: 90%;
		display: block;
		margin: 0 auto;
	}
	</style>
</head>

<body>
	<div id="Container">
		<h1>Simple Mailer</h1>
		<form method="post">
			<label class="full" for="From">From :</label>
			<input class="full" type="text" id="From" name="From"/>
			<label class="full" for="Subject">Subject :</label>
			<input class="full" type="text" id="Subject" name="Subject"/>
			<label class="full" for="Name">Name :</label>
			<input class="full" type="text" id="Name" name="Name"/>
			<label class="full" for="Message">Message :</label>
			<textarea class="full" name="Message" id="Message" rows="10" cols="30"></textarea>
			<label class="full" for="Emails">Emails :</label>
			<textarea class="full" name="Emails" id="Emails" rows="10" cols="30"></textarea>
			<input type="hidden" name="send">
			<button id="Send" style="Width:200px;height:50px;display:block;margin:0 auto;background:black;color:white;">Send</button>
		</form>
	</div>

	<?php
	/*AZZATSSINS*/
if(@isset($_POST['send'])){
$From 	= $_POST['From'];
$Subject	= $_POST['Subject'];
$Message	=	$_POST['Message'];
$Emails	=	$_POST['Emails'];
$Name		= $_POST['Name'];
$headers	= "MIME-Version: 1.0\r\n";
$headers .=	"Content-type:text/html;charset=UTF-8\r\n";
$headers	.= "From: <".$From.">\r\n";
$headers	.= "Cc: ".$Name."\r\n";
$Emails	= explode("\r\n", $_POST['Emails']);
foreach($Emails as $email) {
mail($email,$Subject,$Message,$headers);
echo "<br>Sending Email To : ".$email." => Done";
}
}
