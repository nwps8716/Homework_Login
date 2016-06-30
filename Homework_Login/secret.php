<?php

if (!isset($_COOKIE["userName"])) {
  setcookie("lastpage", "secret.php");
  header("location: login.php");
  exit();
}

if (isset($_POST["btnHome"])) {
  header("location:index.php"); 
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel=stylesheet type="text/css" href="css/test.css">
<link rel=stylesheet type="text/css" href="css/bootstrap.css">
<title>Lag - Member Page</title>
</head>
<body>

<table width="600" height="200" border="0" align="center" cellpadding="5">
  <tr>
    <td height="50" align="center" bgcolor="#0fbff2"><font size="12px" color="#FFFFFF">會員系統 － 會員專區</font></td>
  </tr>
  <tr>
    <td align="center" ><font size="12px">This page for member only.</font></td>
  </tr>
</table>

<form id="form1" name="form1" method="post" action="secret.php">
  <div align="center">
    <input type="submit" name="btnHome" class="btn btn-info" id="btnHome" value="回到首頁"  />
  </div>
</form>

</body>
</html>
