<?php
  ob_start();

include_once('includes/session_start.php');
include_once('includes/init.php');
include_once('database/category.php');

// Ler dados vindos do post
$name = $_POST['name'];
$category = $_POST['category'];

$result= insert_new_toDoList($category,$name);
echo $result;
ob_end_flush();

?>