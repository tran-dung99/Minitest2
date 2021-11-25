<?php
include_once "PersonList.php";
$personList = new PersonList();
$persons = $personList->loadData();
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
<style>
    table{

        border-collapse: collapse;
    }
    table tr th{
        padding: 20px;
        width: 100px;
        border: 1px solid black;
        background-color: green;
    }
    table tr td{
        padding: 10px;
        text-align: center;
        border: 1px solid black;
    }
</style>
<body leftmargin="600px">
<table>
    <a href="create.php">Add New Person</a><br>
    <a href="sap-xep-tang-dan.php">Sort up ascending </a><br>
    <a href="sap-xep-giam-dan.php">sort descending</a><br>
    <a href="Search.php">Search</a><br>
    <a href="Reset.php">Reset</a>
    <thead>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Age</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($persons as $key => $person):?>
    <tr>
        <td><?php  echo $key + 1 ?></td>
        <td><?php  echo $person->getName() ?></td>
        <td><?php  echo $person->getAge() ?></td>
    </tr>
    <?php endforeach; ?>

    </tbody>
</table>
</body>
</html>
