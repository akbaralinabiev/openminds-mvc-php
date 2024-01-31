<?php require APPROOT . '/views/inc/header.php'; ?>
  <?php flash('post_message'); ?>
  <div class="row mb-3">
    <div class="col-md-6">
    <h1>Today's Articles</h1>
    </div>
    <div class="col-md-6">
      <a class="share-button pull-right" href="<?php echo URLROOT; ?>/posts/add"><i class="fa fa-pencil" aria-hidden="true"></i> Share your Thoughts</a>
    </div>
  </div>
  <?php foreach($data['posts'] as $post) : ?>
    <div class="card card-body mb-3">
      <h5 class="card-title"><?php echo $post->title; ?></h5>
      <p class="card-text"><?php echo $post->body; ?></p>
      <a class="btn more-button pull-center" href="<?php echo URLROOT; ?>/posts/show/<?php echo $post->postId; ?>">More</a>
    </div>
  <?php endforeach; ?>
<?php require_once APPROOT . '/views/inc/footer.php'; ?>


<style>
  .share-button{
    padding: 8px 43px;
    background-color: #465776;
    text-decoration: none;
    color: #fff;
    border-radius: 4px;
  }
  .share-button:hover{
    color: white;
    opacity: 0.9;
    text-decoration: none;
  }
  .card-text{
    font-weight: 500;
    color: gray;
    line-height: 25px;
  }
  .more-button{
    width: 120px;
    padding: 8px 40px;
    background-color: #465776;
    text-decoration: none;
    color: white;
    border-radius: 4px;
  }
  .more-button:hover{
    color: white;
    opacity: 0.9;
    text-decoration: none;
  }
</style>