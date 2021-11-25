<?php
include_once "PersonList.php";
$personList = new PersonList();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <a href="index.php">Quay lại trang chủ</a><br>
    <label><input type="text" name="name" placeholder="Nhập tên"></label>
    <button type="submit">Search</button>
</form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $personList->searchName($_REQUEST);
}
?>