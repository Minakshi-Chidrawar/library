<?php require('partials/head.php'); ?>
    
<h2 class="py-4">Books</h2>

<table class="table table-borderless table-hover">
<thead class="table-primary">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col"></th>
    </tr>
</thead>
<tbody>
    <?php foreach ($books as $book) : ?>
        <?php $id = $book->id; ?>
        <tr>
            <td><?= $book->id ?></td>
            <td><?= $book->name ?></td>
            <td>
                <a href="show.php?id=<?= $id ?>"><button class="btn btn-info btn-sm">Show</button></a>
                <a href="update.php?id=<?= $id ?>"><button class="btn btn-warning btn-sm">Update</button></a>
                <a href="delete.php?id=<?= $id ?>"><button class="btn btn-danger btn-sm">Delete</button></a>
            </td>
        </tr>
    <?php endforeach ?>
</tbody>
</table>

<?php require('partials/footer.php'); ?>