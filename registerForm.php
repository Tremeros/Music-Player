<form id="register_form" action="register.php" method="POST">
  <h2>Create Account</h2>

  <label for="registerUsername">Login</label>
  <input id="login" name="login" type="text" placeholder="Enetr your login" required />

  <label for="name">Name</label>
  <input id="name" name="name" type="text" required />

  <label for="lastName">Last name</label>
  <input id="lastName" name="name" type="text" required />

  <label for="email">Email</label>
  <input id="email" name="email" type="email" required />

  <label for="confirmEmail">Confirm email</label>
  <input id="confirmEmail" name="confirmEmail" type="email" required />

  <label for="description">Desscription</label>
  <textarea id="description" name="description" rows="4" cols="50" placeholder="Write something about yourself"></textarea>

  <label for="registerPassword">Password</label>
  <input id="registerPassword" name="registerPassword" type="password" required />

  <label for="registerConfirmPassword">Confirm password</label>
  <input id="registerConfirmPassword" name="registerConfirmPassword" type="password" required />

  <button type="submit" name="registerButton">Register</button>
</form>