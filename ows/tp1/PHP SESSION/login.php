<?php

session_start();
if (isset($_SESSION['username'])) {
    header("Location: index.php"); // إعادة التوجيه إلى صفحة التسجيل
    exit();
}

$conn = mysqli_connect('localhost','root','','db_login') or die ('Unable to connect')


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style>
    body{
        text-align: center;
    }
    .field{
        margin-bottom: 20px;
    }
   </style>
</head>
<body>
    <h2>please login</h2>
    <div>
        <form action = "login.php" method="post">
            <input type="text" class="field"  name="username" placeholder="Username" required =""><br/>
            <input type="password" class="field"  name="pass" placeholder="password" required =""><br/>
            <input type="submit"  class="field" name="login" value="login"><br/>
        </form>
    </div>
    <?php

if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $pass = trim($_POST['pass']);
 //print_r($_POST); exit;
    // استعلام التحقق من عدم تكرار المستخدم
    $check_user = mysqli_query($conn, "SELECT * FROM tb_login WHERE username = '$username' AND PASS = '$pass'");
    if (mysqli_num_rows($check_user) > 0) {
            
            // إنشاء جلسة وتوجيه المستخدم إلى صفحة الترحيب
            $_SESSION['username'] = $username;
            header("Location: index.php");
            exit();
        } 
        
    echo "Error: " . mysqli_error($conn);
        
    
}
?>

</body>
</html>