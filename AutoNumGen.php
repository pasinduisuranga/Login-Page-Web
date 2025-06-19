<?php
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
	$conn=mysqli_connect('localhost','root','','bizhub');
	if(!$conn){
				echo'<h2>DATABASE ERROR!</h2>Database is not connected! ' . mysqli_connect_error();
				echo'<a href="index.html"><img src="Image/back.phn" width="35" height="35"></a>';
				}
				else{
						$queCh="SELECT MAX(CSerial)FROM cusreg";
						if(mysqli_query($conn,$queCh)){
														$res=mysqli_query($conn,$queCh);

														if(mysqli_num_rows($res)>0){
															$data=mysqli_fetch_array($res);
															$id=$data['MAX(CSerial)'];
															$id+=1;
														}	
														else{
															$id=1;
														}	
														if($id<'10'){$a='00000';}
														else if($id<'100'){$a='00000';}
														else if($id<'1000'){$a='0000';}
														else if($id<'10000'){$a='000';}
														else if($id<'100000'){$a='00';}
														else if($id<'1000000'){$a='';}

														$_SESSION['cid']='BIZ-'.$a.$id;
														#echo $_SESSION['cid']; #check karanna 
														header("Location: cusReg.php");
														}

					}
?>
<body>
</body>
</html>