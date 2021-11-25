<?php
include_once "PersonList.php";
$personList = new PersonList();
$personList->reset();
header("location: index.php");
?>
