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
                <div class="row">
                    <a href="show?id=<?= $id ?>" class="ml-2"><button class="btn btn-info btn-sm">Show</button></a>
                    <form method="POST" action="update?id=<?= $id ?>"  class="ml-2">
                        <button class="btn btn-warning btn-sm">Update</button>
                    </form>
                    <form method="POST" action="deleteBook?id=<?= $id ?>"  class="ml-2">
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>                
            </td>
        </tr>
    <?php endforeach ?>
</tbody>
</table>

<?php require('partials/footer.php'); ?>