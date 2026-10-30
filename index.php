<?php
session_start();

if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

$message = $_SESSION['flash'] ?? '';
$messageType = $_SESSION['flash_type'] ?? 'error';
$activeForm = $_SESSION['active_form'] ?? 'login';

unset($_SESSION['flash'], $_SESSION['flash_type'], $_SESSION['active_form']);

if (!in_array($activeForm, ['login', 'register', 'forgot'], true)) {
    $activeForm = 'login';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register</title>
</head>
<body>

<div class="container">

  <div class="logo">YakkPay</div>
  <p class="subtitle">Welcome to YakkPay</p>

  <!-- LOGIN -->
  <form id="login" class="form <?php echo $activeForm === 'login' ? 'active' : ''; ?>" action="login.php" method="POST">
    <h2>Login</h2>

    <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token'], ENT_QUOTES, 'UTF-8'); ?>">

    <div class="input-group">
      <label>Email Address</label>
      <input type="email" id="loginEmail" name="email" placeholder="Enter email" required>
    </div>

    <div class="input-group">
      <label>Password</label>
      <div class="password-box">
        <input type="password" id="loginPassword" name="password" placeholder="Enter password" required>
        <span class="toggle" onclick="togglePassword('loginPassword',this)">SHOW</span>
      </div>
    </div>

    <div style="text-align:right;margin-bottom:12px">
      <a onclick="showForm('forgot')" style="color:#6254d9;cursor:pointer;font-size:13px">
        Forgot Code?
      </a>
    </div>

    <button type="submit" >Login</button>

    <div class="links">
      Don't have an account?
      <a onclick="showForm('register')">Register</a>
    </div>
  </form>

  <!-- REGISTER -->
  <form id="register" class="form <?php echo $activeForm === 'register' ? 'active' : ''; ?>" action="register.php" method="POST">
    <h2>Create Account</h2>

    <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token'], ENT_QUOTES, 'UTF-8'); ?>">

    <div class="input-group">
      <label>Full Name</label>
      <input type="text" id="regName" name="name" placeholder="Enter your name" required>
    </div>

    <div class="input-group">
      <label>Email Address</label>
      <input type="email" id="regEmail" name="email" placeholder="Enter email" required>
    </div>

    <div class="input-group">
      <label>Password</label>
      <div class="password-box">
        <input type="password" id="regPassword" name="password" minlength="6" placeholder="Create password" required>
        <span class="toggle" onclick="togglePassword('regPassword',this)">SHOW</span>
      </div>
    </div>

    <div class="input-group">
      <label>Confirm Password</label>
      <input type="password" id="confirmPassword" name="confirm" placeholder="Confirm password" required>
    </div>

    <button type="submit">Create Account</button>

    <div class="links">
      Already have an account?
      <a onclick="showForm('login')">Login</a>
    </div>
  </form>

  <!-- FORGOT PASSWORD -->
  <form id="forgot" class="form <?php echo $activeForm === 'forgot' ? 'active' : ''; ?>" action="forgot.php" method="POST">
    <h2>Forgot Code?</h2>

    <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token'], ENT_QUOTES, 'UTF-8'); ?>">

    <p style="color:#777;font-size:14px;margin-bottom:20px">
      Enter your registered email to reset your password.
    </p>

    <div class="input-group">
      <label>Email Address</label>
      <input type="email" id="forgotEmail" name="email" placeholder="Enter registered email" required>
    </div>

    <button type="submit">Reset Password</button>

    <div class="links">
      Remember your password?
      <a onclick="showForm('login')">Login</a>
    </div>
  </form>

  <p id="message" class="message" style="color:<?php echo $messageType === 'success' ? 'green' : '#d33'; ?>">
    <?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?>
  </p>

</div>

<script>

// FORM SWITCHING
function showForm(name) {
  document.querySelectorAll('.form').forEach(form => {
    form.classList.remove('active');
  });

  document.getElementById(name).classList.add('active');
  document.getElementById('message').textContent = '';
}

// SHOW / HIDE PASSWORD
function togglePassword(id, element) {
  const input = document.getElementById(id);

  if (input.type === 'password') {
    input.type = 'text';
    element.textContent = 'HIDE';
  } else {
    input.type = 'password';
    element.textContent = 'SHOW';
  }
}

</script>

<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: Arial, sans-serif;
}

body {
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background: linear-gradient(135deg,#171c40,#6254d9);
  padding: 20px;
}

.container {
  background: white;
  width: 100%;
  max-width: 400px;
  padding: 35px 28px;
  border-radius: 20px;
  box-shadow: 0 15px 40px #0004;
}

.logo {
  text-align: center;
  font-size: 32px;
  font-weight: bold;
  color: #6254d9;
  margin-bottom: 8px;
}

.subtitle {
  text-align: center;
  color: #777;
  margin-bottom: 25px;
}

h2 {
  margin-bottom: 20px;
  color: #222;
}

.form {
  display: none;
}

.form.active {
  display: block;
}

.input-group {
  margin-bottom: 16px;
}

label {
  display: block;
  margin-bottom: 7px;
  font-size: 14px;
  font-weight: bold;
  color: #444;
}

input {
  width: 100%;
  padding: 13px;
  border: 1px solid #ddd;
  border-radius: 9px;
  outline: none;
  font-size: 15px;
}

input:focus {
  border-color: #6254d9;
}

.password-box {
  position: relative;
}

.password-box input {
  padding-right: 55px;
}

.toggle {
  position: absolute;
  right: 12px;
  top: 13px;
  cursor: pointer;
  color: #6254d9;
  font-size: 12px;
}

button {
  width: 100%;
  padding: 14px;
  border: none;
  background: #6254d9;
  color: white;
  font-size: 16px;
  font-weight: bold;
  border-radius: 9px;
  cursor: pointer;
  margin-top: 8px;
}

button:hover {
  background: #483bb5;
}

.links {
  text-align: center;
  margin-top: 20px;
  font-size: 14px;
  color: #666;
}

.links a {
  color: #6254d9;
  font-weight: bold;
  text-decoration: none;
  cursor: pointer;
}

.message {
  margin-top: 15px;
  font-size: 13px;
  text-align: center;
  color: #d33;
}

@media(max-width:450px) {
  .container {
    padding: 28px 20px;
  }
}
</style>

</body>
</html>