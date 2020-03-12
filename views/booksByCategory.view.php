<?php require('partials/head.php'); ?>
    
<h2 class="py-4">Category: 
    <small>
        <?php if (count($books) > 0): ?>
            <?= $books[0]->categoryName ?>
        <?php else : ?>
            <?= "No Category" ?>
        <?php endif ?>
    </small>
</h2>

<ul>
    <?php if (count($books) > 0) : ?>
        <?php foreach($books as $book) : ?>
            <a href="show?id=<?= $book->bookId ?>"><li><?= $book->bookName ?></li></a>
        <?php endforeach ?>
    <?php else : ?>
        <?= "There are no records" ?>
    <?php endif ?>
</ul>

<div class="">
    <a href="/"><button class="btn btn-info">List of all books</button></a>
</div>

<?php require('partials/footer.php'); ?>