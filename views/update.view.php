
<?php require('partials/head.php'); ?>

<div class="ml-n3">
    <a href="index.php"><button class="btn btn-info btn-sm m-3">List of all books</button></a>
</div>

<div class="card">
    <div class="card-header">
        <h4>Update details of the book: <small><?= $book->name ?></small></h4>
    </div>

    <div class="card-body">            
        <form action="updated?id=<?= $book->id ?>" method="POST">
            <div class="col-md-9 text-center">
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input name="name" 
                            value="<?= $book->name ?>" 
                            class="form-control" 
                            id="name" 
                            placeholder="Name"
                            required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="link" class="col-sm-2 col-form-label">Link</label>
                    <div class="col-sm-10">
                        <input name="link" 
                            value="<?= $book->link ?>" 
                            class="form-control" 
                            id="link" 
                            placeholder="Link"
                            required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="content" class="col-sm-2 col-form-label">Content</label>
                    <div class="col-sm-10">
                        <textarea name="content"
                            class="form-control"
                            id="content"
                            rows="10"
                            placeholder="content"
                            required>
                            <?= $book->content ?>
                        </textarea>                        
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" name="submit" class="btn btn-primary ml-5 mt-3">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php require('partials/footer.php'); ?>