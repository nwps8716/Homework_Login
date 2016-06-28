<?php
if (isset($_GET["signout"])) {
  setcookie("userName","",time()-60*60*24);
  header("location: index.php");
  exit();
}

if (isset($_POST["btnOK"])) {
  if ($_POST["txtUserName"] != ""){
    setcookie("userName", $_POST["txtUserName"]);
    if (isset($_COOKIE["lastpage"])) 
    header("location:" . $_COOKIE["lastpsge"]);
    else
    header("location: index.php");
    exit();
  }
}

if (isset($_POST["btnHome"])) {
  header("location:index.php"); 
}
      

?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel=stylesheet type="text/css" href="css/bootstrap.css">
	<title>Lab - Login</title>
</head>
<body>

<form id="form1" name="form1" method="post" action="login.php" class="form-horizontal" >
 
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">帳號</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" name="txtUserName" id="txtUserName" placeholder="User ID">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">密碼</label>
    <div class="col-sm-3">
      <input type="password" class="form-control" name="txtPassword" id="txtPassword" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-3" align="center">
      <input type="submit" name="btnOK" class="btn btn-danger" id="btnOK" value="登入" />
      <input type="reset" name="btnReset" class="btn btn-info" id="btnReset" value="清除資料" />
      <input type="submit" name="btnHome" class="btn btn-info" id="btnHome" value="回到首頁"  />
    </div>
  </div>

</form>


</body>
</html>