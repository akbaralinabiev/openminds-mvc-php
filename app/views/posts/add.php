<?php require APPROOT . '/views/inc/header.php'; ?>

<a href="<?php echo URLROOT; ?>" class="btn btn-light"><i class="fa fa-backward" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Back</a>
      <div class="card card-body bg-light mt-5">
        <h2>Share your Thoughts</h2>

        <p>Create your article with this form below</p>

        <form action="<?php echo URLROOT; ?>/posts/add" method="post">

          <div class="form-group">
              <label>Title<sup>*</sup></label>
              <input type="text" name="title" class="form-control form-control-lg <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['title']; ?>" placeholder="Add a title...">
              <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
          </div>    
          <div class="form-group">
              <label>Body<sup>*</sup></label>
              <textarea name="body" class="form-control form-control-lg <?php echo (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>" placeholder="Add your article here..."><?php echo $data['body']; ?></textarea>
              <span class="invalid-feedback"><?php echo $data['body_err']; ?></span>
          </div>
          <div>
          <input type="submit" class="btn btn-success"  value="Post now">
          </div>
        </form>
      </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>


<style>
  .btn{
    width: 100px;
    font-weight: 600;
  }

  .btn-success{
    cursor: pointer;
  }
</style>