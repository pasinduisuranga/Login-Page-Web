<?php
    session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My test</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <?php
        $un=$_POST['txtUserName'];
		$pw=$_POST['txtPassword'];
		$conn=mysqli_connect('localhost','root','','bizhub');

        if (!$conn) {
            echo'<h2>Database connection failed</h2>'.mysqli_error(!$conn);
            echo'<a href="index.html"><ion-icon name="arrow-back"></ion-icon></a>';
        }
        else{
            $queSel="SELECT RealName FROM users WHERE UserName='$un' AND Password='$pw'";
            $res=mysqli_query($conn,$queSel);
            if(mysqli_num_rows($res)>0){
                $data=mysqli_query($conn,$queSel);
                $value=(mysqli_fetch_assoc($data));
				$_SESSION['RN']=$value["RealName"];
				$rn=$value['RealName'];
											
				$queLogUp="INSERT INTO logsch(RealName,Login)VALUES('$rn',(now()))";
				if(mysqli_query($conn,$queLogUp)){
				header("Location:Homepage.php");
                }
            }
            else{
                echo'<h2>Invalid Username or Password</h2>';
                echo'<a href="index.html"><ion-icon name="arrow-back"></ion-icon></a>';
            }
        }
    ?>
</body>
</html>