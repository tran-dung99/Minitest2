<?php
include_once "PersonList.php";
$personList = new PersonList();
$personList->sortDown();
header("location: index.php");
?>
