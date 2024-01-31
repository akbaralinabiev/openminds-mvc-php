<?php require_once APPROOT . '/views/inc/header.php'; ?>
<a href="<?php echo URLROOT; ?>" class="btn btn-light mb-3"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
<br>
<h1><?php echo $data['post']->title; ?></h1>
<p><?php echo $data['post']->body; ?></p>
<div class="bg-secondary text-white p-2 mb-3">
  Written by <?php echo $data['user']->name; ?> on <?php echo $data['post']->created_at; ?>
</div>
<?php if($data['post']->user_id == $_SESSION['user_id']) : ?>
<hr>
<a href="<?php echo URLROOT; ?>/posts/edit/<?php echo $data['post']->id; ?>" class="btn btn-dark">
  <i class="fa fa-edit" aria-hidden="true"></i>&nbsp;&nbsp;Edit
</a>
<form class="pull-right" action="<?php echo URLROOT; ?>/posts/delete/<?php echo $data['post']->id; ?>" method="post">
  <input type="submit" class="btn btn-danger" value="Delete">
</form>

<?php endif; ?>

<?php require APPROOT . '/views/inc/footer.php'; ?>
