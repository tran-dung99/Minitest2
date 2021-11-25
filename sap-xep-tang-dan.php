<?php
include_once "PersonList.php";
$personList = new PersonList();
$personList->sortUp();
header("location: index.php");
?>

