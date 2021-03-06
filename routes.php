<?php

$router->get('', 'controllers/index.php');
$router->get('show', 'controllers/show.php');
$router->get('categories', 'controllers/categories.php');
$router->get('booksByCategory', 'controllers/booksByCategory.php');

$router->get('apibooks', 'controllers/allbooks.php');
$router->get('book', 'controllers/book.php');

$router->post('update', 'controllers/update.php');
$router->post('updated', 'controllers/updated.php');
$router->post('deleteBook', 'controllers/deleteBook.php');