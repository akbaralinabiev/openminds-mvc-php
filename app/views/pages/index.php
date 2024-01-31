<?php require_once APPROOT . '/views/inc/header.php'; ?>
  <div class="content">
    <div>
      <h1 class="display-6 text-center"><?php echo $data['title']; ?></h1>
      <p class="text-center"><?php echo $data['description']; ?></p>
    </div>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>

<style>
  .content{
    padding: 40px 80px;
    background-color: #DDE6ED;
    border-radius: 10px;
  }
  .content p{
    font-size: 18px;
    color: #333;
    font-weight: 600;
    padding: 0 10px;
  }
</style>