<?php require_once APPROOT . '/views/inc/header.php'; ?>
<link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/style.css">

<div class="main">

  <div class="h2">
    <h2>Sign Up</h2>
  </div>

  <div class="para">
    <h6 class="text-center">Please fill in the required information below to create your account. All fields marked with
      <span class="star">*</span> are mandatory.
    </h6>
  </div>
  <form class="form-1" action="<?php echo URLROOT; ?>/users/register" method="post">
    <div class="form-div">
      <label class="one-label" for="name">Name*</label>
      <input type="text" name="name"
        class="form-control <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?> value=" <?php echo $data['name']; ?>>
      <span class="invalid-feedback">
        <?php echo $data['name_err']; ?>
      </span>

      <label class="one-label" for="email">Email*</label>
      <input type="email" name="email"
        class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>"
        value="<?php echo $data['email']; ?>">
      <span class="invalid-feedback">
        <?php echo $data['email_err']; ?>
      </span>

      <label class="one-label" for="password">Password*</label>
      <input type="password" name="password"
        class="form-control psw <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>"
        value="<?php echo $data['password']; ?>">
      <span class="invalid-feedback">
        <?php echo $data['password_err']; ?>
      </span>

      <label class="one-label" for="confirm_password">Confirm Password*</label>
      <input type="password" name="confirm_password"
        class="form-control psw <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>"
        value="<?php echo $data['confirm_password']; ?>">
      <span class="invalid-feedback">
        <?php echo $data['confirm_password_err']; ?>
      </span>
      <div class="privacy-div">
        <input type="checkbox" name="checbox" id="checkbox">
        <p>I agree to the <a href="#0">Terms</a> and <a href="#0">Conditions</a> and the <a href="#0">Privacy Policy</a></p>
      </div>

      <input type="submit" class="btn" value="Create Account">

      <a href="<?php echo URLROOT; ?>/users/login" class="btn" id="register-btn">Already have an account? Login</a>
    </div>
  </form>

</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>




<style>

  .privacy-div {
    display: flex;
    flex-direction: row;
    gap: 10px;
    text-align: left;
  }

  .privacy-div a {
    text-decoration: none;
    font-size: 17px;
    font-weight: 500;
    cursor: pointer;
  }

  .privacy-div p {
    font-size: 16px;
  }

  .privacy-div input {
    width: 20px;
    margin-bottom: 35px;
    cursor: pointer;
  }
  .privacy-div #checkbox{
    outline: none;
    border: none;
  }

  .privacy-logo {
    font-weight: 500;
    font-size: 18px;
  }

  .form-control {
    margin-top: 0px;
  }

  .star {
    font-weight: 900;
    color: #212121;
  }

  h6 {
    margin-top: 30px;
    opacity: 0.8;
    font-weight: 400;
    font-size: 16px;
  }

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
    font-size: 16px;
    font-weight: 600;
    line-height: 1.5;
    border-radius: 4px;
    background-color: #465776;
    border: none;
    margin-bottom: 10px;
    cursor: pointer;
    text-decoration: none;
  }

  .btn:hover {
    background-color: #5a6985;
  }
</style>