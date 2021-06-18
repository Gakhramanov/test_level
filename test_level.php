<body style="background-color: grey;">
<center style="margin-top: 300px;">
<form method="post">
<p>Введите номер</p>
<input type="text" name="text">
<input type="submit">
</form>
</body>

<?php
$id = $_POST['text'];
$level = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$percent = ['50%', '33%', '25%', '20%', '16%', '14%', '12%', '11%', '10%'];

if ($_POST['text'] == '') {
    echo "Ваш номер: 0<br><br>Ваш уровень: 0<br><br>Ваш процент: 0%";
    exit();
}
if ($id <= 10) {
    echo "Ваш номер: $id<br><br>Ваш уровень: $level[1]<br><br>Ваш процент: $percent[0]";
    exit();
}
if (($id >= 11) && ($id <= 100)) {
    echo "Ваш номер: $id<br><br>Ваш уровень: $level[2]<br><br>Ваш процент: $percent[1]";
    exit();
}
if (($id >= 101) && ($id <= 1000)) {
    echo "Ваш номер: $id<br><br>Ваш уровень: $level[3]<br><br>Ваш процент: $percent[2]";
    exit();
}
if (($id >= 1001) && ($id <= 10000)) {
    echo "Ваш номер: $id<br><br>Ваш уровень: $level[4]<br><br>Ваш процент: $percent[3]";
    exit();
}
if (($id >= 10001) && ($id <= 100000)) {
    echo "Ваш номер: $id<br><br>Ваш уровень: $level[5]<br><br>Ваш процент: $percent[4]";
    exit();
}
if (($id >= 100001) && ($id <= 1000000)) {
    echo "Ваш номер: $id<br><br>Ваш уровень: $level[6]<br><br>Ваш процент: $percent[5]";
    exit();
}
if (($id >= 1000001) && ($id <= 10000000)) {
    echo "Ваш номер: $id<br><br>Ваш уровень: $level[7]<br><br>Ваш процент: $percent[6]";
    exit();
}
if (($id >= 10000001) && ($id <= 100000000)) {
    echo "Ваш номер: $id<br><br>Ваш уровень: $level[8]<br><br>Ваш процент: $percent[7]";
    exit();
}
if (($id >= 100000001) && ($id <= 1000000000)) {
    echo "Ваш номер: $id<br><br>Ваш уровень: $level[9]<br><br>Ваш процент: $percent[8]";
    exit();
}
?>
</center>