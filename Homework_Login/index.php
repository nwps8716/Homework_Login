<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php
$userName = "Guest";
if(isset($_COOKIE["userName"])) {
  $userName = $_COOKIE["userName"];
}

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel=stylesheet type="text/css" href="css/test.css">

<title>Lab - index</title>
</head>

<body>

    <div id="header">
			<p id="name">會員系統 - 首頁 <?php echo "Hello : " . $userName; ?> </p>
			<a href="mailto:nwps8716@gmail.com"><p id="email">Email to me.</p></a>
		</div>
		<div class="left">
		  <?php if (!isset($_COOKIE["userName"])) { ?>
      <a href="login.php">會員登入<br></a>
      <?php } else { ?>
      <a href="login.php?signout=1">會員登出<br></a>
      <?php } ?>
      <a href="secret.php">會員專區</a></td>
		</div>
		<div class="right">
		  <?php if (isset($_COOKIE["userName"])) { ?> 
			<img src="img/cat.jpg" alt="動物-貓" class="img-circle">
			<img src="img/dog.jpg" alt="動物-狗" class="img-circle">
			<?php } ?>
		</div>
		
		<div id="footer">
			<p>Make by Lid</p>
		</div>


</body>
</html>
