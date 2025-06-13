<?php
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style type="text/css">
body {
	background-color: #6FF;
}
</style>
</head>

<body>
	<?php
    $logUser=$_SESSION['RN'];
	$conn=mysqli_connect('localhost','root','','bizhub');
	if(!$conn){
		echo'<h2>DATABASE ERROR!</h2>Database is not connected!'.mysqli_error($conn);
		echo'<a href="Login.html"><img src="Image/back.png" width="35" height="35"></a>';
				}
				else{
					$queOut="SELECT MAX(LogSerial)FROM logsch GROUP BY RealName HAVING RealName='$logUser'";
					$data=mysqli_query($conn,$queOut);
					
					$resVal=mysqli_fetch_assoc($data);
					$sNo=$resVal["MAX(LogSerial)"];
					#echo $sNo;
					$queUp="UPDATE logsch SET Logout=(now())WHERE LogSerial='$sNo'";
					if(mysqli_query($conn,$queUp)){
						header("Location:index.html");
					}	
				}
			
	?>
</body>
</html>