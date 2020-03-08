<?php require('partials/head.php'); ?>
    
<h2 class="py-4">Categories</h2>

<ul>
    <?php foreach ($categories as $category) : ?>
            <a href="booksByCategory.php?category_id=<?php echo $category->id; ?>"><li><?= $category->name ?></li></a>
    <?php endforeach ?>
</ul>

<?php require('partials/footer.php'); ?>