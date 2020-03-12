<?php

//$database = require 'core/bootstrap.php';

$categories = $database->selectAll('categories');

require 'views/categories.view.php';