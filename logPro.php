<?php
    session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    ?>
</body>
</html>