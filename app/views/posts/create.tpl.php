<?php
require VIEWS . '/incs/header.php';
/**
 * @var \myfrm\Validator $validaiton
 */
?>
    <main class="main py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h1>Create new post</h1>

            <form action="/beginphp/posts" method="post">
              <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="<?= old('title') ?>">
                <?= isset($validation) ? $validation->listErrors('title') : '' ?>
              </div>
              <div class="mb-3">
                <label for="excerpt" class="form-label">Excerpt</label>
                <textarea class="form-control" id="excerpt" name="excerpt" rows="2" placeholder="excerpt"><?= old('excerpt')?></textarea>
                <?= isset($validation) ? $validation->listErrors('excerpt') : '' ?>
              </div>
              <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" name="content" rows="5"placeholder="content"><?= old('content')?></textarea>
                <?= isset($validation) ? $validation->listErrors('content') : '' ?>
              </div>
              <button type="submit" class="btn btn-primary">Create</button>
            </form>
          </div>
          
        </div>
      </div>
    </main>
<?php require VIEWS . '/incs/footer.php' ?>