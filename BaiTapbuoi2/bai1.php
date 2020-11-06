<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; chatset=utf-8" />
<head>
    <title> truyen vao 1 tinh tong tuyen vao 2 la sap xep</title>
<body>
<form method="post">
    <input type="text" name="nhap" placeholder="nhap so">
    <input type="submit" value="check">
    <?php
    $cars = array(6,8,10,5,4,13,18);
    $a = 1;
    $b = 2;
    if ($a == $_POST["nhap"]) {
        echo "<br><br> sum = " .array_sum($cars);
    }
    if ($b == $_POST["nhap"]) {
        sort($cars);
        foreach ($cars as $x) {
            echo "<br><br> $x <br>";
        }
    }

    ?>
</form>
</body>
</head>
</html>
