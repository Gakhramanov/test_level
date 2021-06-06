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
if ($id <= 10) {
    echo "Ваш номер: $id<br><br>Ваш уровень: $level[1]";
    exit();
}
if (($id >= 11) && ($id <= 100)) {
    echo "Ваш номер: $id<br><br>Ваш уровень: $level[2]";
    exit();
}
if (($id >= 101) && ($id <= 1000)) {
    echo "Ваш номер: $id<br><br>Ваш уровень: $level[3]";
    exit();
}
if (($id >= 1001) && ($id <= 10000)) {
    echo "Ваш номер: $id<br><br>Ваш уровень: $level[4]";
    exit();
}
if (($id >= 10001) && ($id <= 100000)) {
    echo "Ваш номер: $id<br><br>Ваш уровень: $level[5]";
    exit();
}
if (($id >= 100001) && ($id <= 1000000)) {
    echo "Ваш номер: $id<br><br>Ваш уровень: $level[6]";
    exit();
}
if (($id >= 1000001) && ($id <= 10000000)) {
    echo "Ваш номер: $id<br><br>Ваш уровень: $level[7]";
    exit();
}
if (($id >= 10000001) && ($id <= 100000000)) {
    echo "Ваш номер: $id<br><br>Ваш уровень: $level[8]";
    exit();
}
if (($id >= 100000001) && ($id <= 1000000000)) {
    echo "Ваш номер: $id<br><br>Ваш уровень: $level[9]";
    exit();
}
?>
</center>