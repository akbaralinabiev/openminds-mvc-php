<link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/style.css">
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class=" logo" href=""><?php echo SITENAME; ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
      <?php if(isset($_SESSION['user_id'])) : ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/users/logout"></i> Logout</a>
        </li>
      <?php else : ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/users/register">Register</a>
        </li>
        <li class="nav-item">
          <a class="ulli nav-link" href="<?php echo URLROOT; ?>/users/login">Login</a>
        </li>
      <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>

<style>
  .logo{
    text-decoration: none;
    font-weight: 400;
    text-decoration: none;
    color: white;
    font-size: 19px;
  }
  .logo:hover{
    text-decoration: none;
    color: white;
  }

  .navbar{
    /* position: fixed; */
  }
</style>