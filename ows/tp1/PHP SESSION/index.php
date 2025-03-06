<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'db_login') or die('Unable to connect');
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // إعادة التوجيه إلى صفحة التسجيل
    exit();
}

    $username = $_SESSION['username'] ;
  // التحقق من اسم المستخدم وكلمة المرور
    $query = "SELECT * FROM tb_login WHERE username = '$username' ";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style> 
        body {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Welcome, <?php echo htmlspecialchars($row['name']); ?>! 😊</h2>

    <!-- زر تسجيل الخروج -->
    <form method="post" action="logout.php">
        <button type="submit">Logout</button>
    </form>
</body>
</html>
