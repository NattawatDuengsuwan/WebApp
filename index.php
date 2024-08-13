<?php
session_start();
?>
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
    <div>
        หมวดหมู่ : <select name="category">
            <option value="all">--ทั้งหมด--</option>
            <option value="เครื่องดื่ม">เครื่องดื่ม🧋</option>
            <option value="อาหาร">อาหาร🥣</option>
        </select>
        <?php
        if (!isset($_SESSION['id'])) {
            echo "<a href=login.php style='float: right'; color: blueviolet;><ins>เข้าสู่ระบบ🐱</ins></a>";
        } else {
            echo "<div style='float : right'>";
            echo "ผู้ใช้งานระบบ : $_SESSION[username]&nbsp;&nbsp;";
            echo "<a href=logout.php>ออกจากระบบ🚪</a>";
            echo "</div><br>";
            echo "<a href=newpost.php>สร้างกระทู้ใหม่📖</a>";
        }
        ?>
    </div>

    <ul>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<li><a href='post.php?id=$i'>ห้องนอนที่🛏 $i</a></li>";

            if (isset($_SESSION['role']) && $_SESSION['role'] == 'a') {
                echo "<a href=delete.php?id=$i>ลบ🗑</a>";
            }
            echo "</li>";
        }
        ?>
    </ul>
</body>

</html>