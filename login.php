<?php
session_start();
if (isset($_SESSION['id'])) {
    header("location:index.php");
    die();
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login.html</title>
</head>

<body>
    <form action="verify.php" method="post">
        <h1 style="text-align: center ; color:pink;">คาเฟ่ เเมวไม่ได้นอน 🐱</h1>
        <hr>
        <table style="border: 2px solid black; width: 40px;" align="center">
            <tr>
                <td colspan="2" align="center" style="background-color:#6cd2fe;">เข้าสู่ระบบ🐱</td>
            </tr>
            <tr>
                <td>Login</td>
                <td><input type="text" name="Login"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="Password"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Login"></td>
            </tr>
        </table>
    </form>

    <br>
    <div style="text-align: center;">
        ถ้ายังไม่ได้เป็นสมาชิก 👉 <a href="register.php">กรุณาสมัครสมาชิก</a>
    </div>

</body>

</html>