<?php require APPROOT . '/views/inc/header.php';?>
    <a href="<?= URLROOT; ?>/posts" class="btn btn-light">Back</a>
    <div class="card card-body bg-light mt-5">
        <h2>Add Post</h2>
        <p>Create a post with a form</p>
        <form action="<?php echo URLROOT; ?>/users/login" method="post">
              <div class="form-group">
                    <label for="title">Title: <sup>*</sup></label>
                    <input type="text" name="title"
                        class="form-control form-control-lg <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>"
                        value="<?php echo $data['title']; ?>">
                    <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
              </div>
              <div class="form-group">
                    <label for="body">Body: <sup>*</sup></label>
                    <textarea name="body"
                        class="form-control form-control-lg <?php echo (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>">
                            <?= $data['body']?>
                        </textarea>
                    <span class="invalid-feedback"><?php echo $data['body_err']; ?></span>
              </div>
              <input type="submit", value="Submit" class="btn btn-success mt-3">
        </form>
    </div>
<?php require APPROOT . '/views/inc/footer.php';?>

