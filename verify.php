<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verify.php</title>

</head>

<body>
    <h1 style="text-align: center ; color:pink">คาเฟ่ เเมวไม่ได้นอน 🐱</h1>
    <hr>

    <div style="text-align: center;">
        เข้าสู่ระบบด้วย <br>
        <?php
        $x = $_POST['Login'];
        $y = $_POST['Password'];
        if ($x == "admin" && $y == "ad1234") {
            echo "ยินดีต้อนรับคุณ ADMIN🐱";
        } else if ($x == "member" && $y == "mem1234") {
            echo "ยินดีต้อนรับคุณ MEMBER🐱";
        } else {
            echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";
        }



        ?>
    </div>
</body>

</html>