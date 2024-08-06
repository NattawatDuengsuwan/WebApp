<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index.html</title>
    
</head>
<body>
    <h1 style="text-align: center ; color:pink">คาเฟ่ เเมวไม่ได้นอน 🐱</h1>
    <hr>
    หมวดหมู่ : <select name="category">
        <option value="all">--ทั้งหมด--</option>
        <option value="เครื่องดื่ม">เครื่องดื่ม</option>
        <option value="อาหาร">อาหาร</option>
    </select>
    <a href="login.html"style="float:right">เข้าสู่ระบบ🐱</a>
    <ul>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<li><a href='post.php?id=$i'>ห้องนอนที่🛏 $i</a></li>";
        }
        ?>
    </ul>
</body>
</html>