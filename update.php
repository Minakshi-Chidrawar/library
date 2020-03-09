<?php

$database = require 'core/bootstrap.php';

$id = $_GET['id'];

if (! ($id > 0 && is_numeric($id))) {
   die("Something went wrong");
}

$book = $database->book('books', $id);

// if ($_POST['submit'])
// {
//     die('It is');
// }
require 'views/update.view.php';