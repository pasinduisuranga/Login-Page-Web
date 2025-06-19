<?php
	session_start();
	if(isset($_SESSION['RN'])){
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>BizHubt</title>

<link rel="stylesheet" type="text/css" media="all" href="CSS/mystyle.css">

</head>

<body>
	<?php
    	echo'<div class="wrapper">
			<div class="box header"><img src="Image/head.jpg" width="100%"></div>
			<div class="box msg"><p align="right" style="fontsize:14px">Welcome to BizHub System,'.$_SESSION['RN'].' (Logout <a href="Login.html"><img src="Image/switch.jpg" width="20" height="20"></a>)</p></div>
			<div class="box sidebar"><p align="left" style="background:#000033;color:#ffffff;padding:4px">REGISTRATION</p>
				<p align="right"><a href="AutoNumGen.php" style="width:75%">CUSTOMER</a></p>
				<p align="right"><a href="bbb.php" style="width:75%">SERVICE</a></p>
				<p align="left" style="background:#000033;color:#ffffff;p/adding:4px">SEARCH</p>
				<p align="right"><a href="SearchCus.php" style="width:75%">CUSTOMER</a></p>
				</div>
			<div class="box content"><img src="Image/home.jpg" width="100%"></div>
			<div class="box footer"><p align="center" style="font-size:9px">All Rights Reserved by HND COM SE 037</p></div> 
				</div>';
			}
	?>
</body>
</html>