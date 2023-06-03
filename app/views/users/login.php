<?php require APPROOT . '/views/inc/header.php'; ?>
<link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/style.css">

<?php flash('register_success'); ?>

<div class="container">
    <div class="main">
      <div class="h2">
      <h2>Sign In</h2>
      </div>
    <form id="contact-form" action="<?php echo URLROOT; ?>/users/login" method="post" class="contact-form">
      <label id="hello" class="one-label" for="email">Email*</label>
      <input type="email" name="email" class="form-control" <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>
        value="<?php echo $data['email']; ?>">
      <span class="invalid-feedback">
        <?php echo $data['email_err']; ?>
      </span>
      <label class="one-label" for="name">Password*</label>
      <input type="password" name="password" class="form-control" <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?> value="<?php echo $data['password']; ?>">
      <span class="invalid-feedback">
        <?php echo $data['password_err']; ?>
  </span>

  <input type="submit" class="btn" value="Login">

  <a id="register-btn" href="<?php echo URLROOT; ?>/users/register" class="btn">Register</a>


</form>
</div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>


<style>
  
  .btn {
    width: 100%;
    height: 42px;
    display: inline-block;
    font-weight: 400;
    color: #ffffff;
    text-align: center;
    vertical-align: middle;
    user-select: none;
    background-color: #526D82;
    border: 1px solid #ced4da;
    padding: 0.55rem;
    font-size: 1rem;
    font-weight: 600;
    line-height: 1.5;
    border-radius: 4px;
    background-color: #465776;
    border: none;
    margin-bottom: 10px;
    cursor: pointer;
    text-decoration: none;
  }
  .btn:hover{
  background-color: #5a6985;
}
</style>