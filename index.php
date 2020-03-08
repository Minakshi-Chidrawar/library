<?php

$database = require 'core/bootstrap.php';

$books = $database->selectAll('books');

require 'views/index.view.php';