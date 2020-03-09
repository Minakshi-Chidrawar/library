
<?php require('partials/head.php'); ?>

<div class="card my-5">
    <div class="card-header">
        <h4 class="py-4">Book: <small><?= $book->name ?></small></h4>
    </div>
    <div class="card-body">
        <p><strong>Link</strong>: <?= $book->link ?></p>
        <p><strong>Content</strong>: <?= $book->content ?></p>
    </div>
</div>

<div class="">
    <a href="index.php"><button class="btn btn-info">List of all books</button></a>
</div>

<?php require('partials/footer.php'); ?>