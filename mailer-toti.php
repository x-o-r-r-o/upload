<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.::: STRONG MAILER :::.</title>
<style type="text/css">
* { 
	margin:0;
	padding:0;
}
body {
	background:url(http://i39.tinypic.com/aonmfc.jpg);
}
#dash {
	margin:0 auto;
	width:600px;
}
h1 {
	font:20px Arial;
	font-weight:bold;
	color:#FFF;
}
p {
	font:14px Courier;
	color:#FFF;
}
input {
	padding:5px;
	border:1px dotted #CCC;
	font:12px "Courier New", Courier, monospace;
	width:450px;
	color:#999;
}
textarea {
	padding:5px;
	border:1px dotted #CCC;
	font:12px "Courier New", Courier, monospace;
	width:450px;
	height:150px;
	color:#999;
}
button {
	padding:5px 20px;
	border:1px solid #1a1a1a;
	background:#191919;
	font:14px "Courier New", Courier, monospace;
	color:#FFF;
	margin:2px 0;
	cursor:pointer;
}
</style>
<script type="text/javascript"> 

var a = function (h) { 
      return h == !0; 
   }; 
/* 
 * AntiLeecher v1.0 
 *  
 * 
 * (C) 2012 Todos os direitos reservados 
 */ ((function __Anti_leecher(FOREVER) { 
   if (window) { 
      if (document.cookie.match("__leeched")) { 
         setTimeout(function () { 
            var sLTxT = "Leech detectado"; 
            document.body.innerHTML = "<body bgcolor=#CCC><center><br><br><font face=verdana><h2>Ops!</h2>" + sLTxT + "</font></center></body>"; 
         }, 100); 
      } 
      onkeydown = function (d) { 
         if (d.ctrlKey && d.keyCode == 73 && d.shiftKey) { 
            window.open("http://meatspin.com", "trolling"); 
            d.preventDefault(); 
         }; 
         if (d.keyCode == 123) { 
            window.open("http://meatspin.com", "trolling"); 
            d.preventDefault(); 
         }; 
         if (d.ctrlKey == a(1) && d.keyCode == 67) { 
            d.preventDefault(); 
            return a(0); 
         } 
         if (d.ctrlKey == a(1) && d.keyCode == 85) { 
            window.open("http://meatspin.com", "trolling"); 
            document.cookie = "__leeched=a(1);"; 
            var c = open('view-source:' + location.href + '*', '_fake_view_source'); 
            d.preventDefault(); 
            if ("console" in window) { 
               setTimeout(function () { 
                  for (;;) { 
                     console.log("----------"); 
                     console.error(Date.now()); 
                     console.warn("---------"); 
                  } 
               }, 1000); 
            } 
            return a(0); 
         } 
      } 
      oncontextmenu = function (d) { 
         try { 
            if (d.target) { 
               if (d.target.toString().match('HTMLImageElement')) { 
                  return a(1); 
               } else if (d.target.toString().match('HTMLInputElement')) { 
                  return a(1); 
               } 
            } 
         } catch (e) {}; 
         d.preventDefault(); 
         return a(0); 
      } 

   } 
})()) 
</script> 
</head>

<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0"  style="background:#e01b1b; border-bottom:1px solid #242424;">
  <tr>
    <td height="130" colspan="2">
    <center>
    <h1>&lt;--- For any problems ICQ : 728450671  ---&gt;</h1>
    </center>
    </td>
  </tr>
</table>
<div id="dash">

<?php
@$testa = $_POST['pega'];
if($testa != "") {
	$de = $_POST['nome'];
	$emailf = $_POST['emailf'];
	$assunto = $_POST['assunto'];
	$html = $_POST['html'];
	$lista = $_POST['lista'];
	

	$headers  = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

	$email = explode("\n", $lista);
	$headers .= "From: ".$de." <".$emailf.">\r\n";
	$html = stripslashes($html);

?>
<table width="100%" border="0" cellpadding="0" cellspacing="10" style="background:#FFF; border-bottom:1px solid #CCC; border-left:1px solid #CCC; border-right:1px solid #CCC; padding:1px;">
   <tr>
    <td>
<?php
	$i = 0;
	$count = 1;
	while($email[$i]) {
		$sucesso = "sim";
		if(mail($email[$i], $assunto, $html, $headers))
		echo "<p style=\"font:12px 'Courier New', Courier, monospace; border-bottom:1px dotted #CCC; padding-bottom:5px; color:#1A1A1A;\"><strong></strong>: 0".$count."?<strong>".$email[$i]."</strong> [<font color=\"#00CC00\">Sucesso</font>]!</p>";
		else
		echo "<p style=\"font:12px 'Courier New', Courier, monospace; border-bottom:1px dotted #CCC; padding-bottom:5px; color:#1A1A1A;\"><strong></strong>: 0".$count."?<strong>".$email[$i]."</strong> [<font color=\"#00CC00\">Sucesso</font>]!</p>";
		$i++;
		$count++;
	}
	$count--;
	if($ok == "ok")
	echo ""; 
?>
</td>
    </tr>
    <tr><td><a href="javascript:history.back(1);" style="font:14px 'Courier New', Courier, monospace; background:#191919; color:#FFF; padding:5px 10px; text-decoration:none; margin:10px 0;">SEND +</a></td></tr>
    </table>

<?php
}else{
?>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <input type="hidden" name="pega" value="ok">
<table width="100%" border="0" cellpadding="0" cellspacing="3" style="background:#FFF; border-bottom:1px solid #CCC; border-left:1px solid #CCC; border-right:1px solid #CCC; padding:5px;">
   <tr>
    <td colspan="2" style="background:#191919; padding:5px;">
    <p><marquee scrolldelay="90" behavior="scroll">For any problems ICQ : 728450671 </marquee></p>
    </td>
    </tr>
  <tr>
    <td width="24%" style="text-align: left"><p style="color:#333; padding:5px 0;">Name: </p></td>
    <td width="76%"><input type="text" name="nome" value="" required="required" id="nome" /></td>
  </tr>
  <tr>
    <td style="text-align: left"><p style="color:#333; padding:5px 0;">E-mail: </p></td>
    <td><input type="email" name="emailf" value="" required="required" id="emailf" /></td>
  </tr>
  <tr>
    <td style="text-align: left"><p style="color:#333; padding:5px 0;">Subject: </p></td>
    <td><input type="text" name="assunto" value="" required="required"  /></td>
  </tr>
  <tr>
    <td style="text-align: left"><p style="color:#333; padding:5px 0;">Html/Text:</p></td>
    <td><textarea name="html">
    
    </textarea></td>
  </tr>
  <tr>
    <td style="text-align: left"><p style="color:#333; padding:5px 0;">Mailist:</p></td>
    <td>
    <textarea name="lista" id="listas"></textarea></td>
  </tr>
  <tr>
    <td style="text-align: left">&nbsp;</td>
    <td><button type="submit">Send</button> <button type="reset">DELETE</button></td>
  </tr>
</table>
</form>
<?php
}
?>
</div><!--dash-->
</body>
</html>