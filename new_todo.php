<?php
  ob_start();

session_start();
include_once('includes/init.php');
include_once('database/category.php');

// Ler dados vindos do post
$description = $_POST['Description'];
$category = $_POST['Category'];

insert_new_toDoList($category,$description);

header("Location: logged.php");

ob_end_flush();

?>