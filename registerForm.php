<form id="register_form" action="register.php" method="POST" style="display: flex; flex-direction: column;">
  <h2>Create Account</h2>

  <?php echo $account->getError(Constans::$usernameError); ?>
  <label for="username">Username</label>
  <input id="username" name="username" type="text" placeholder="Enetr your login" value="<?php $account->getInputValue('username'); ?>" required />

  <?php echo $account->getError(Constans::$firstNameError); ?>
  <label for="name">Name</label>
  <input id="name" name="name" type="text" value="<?php $account->getInputValue('name'); ?>" required />

  <?php echo $account->getError(Constans::$lastNameError ); ?>
  <label for="lastName">Last name</label>
  <input id="lastName" name="lastName" type="text" value="<?php $account->getInputValue('lastName'); ?>" required />

  <?php echo $account->getError(Constans::$emailFormatError); ?>
  <?php echo $account->getError(Constans::$emailsDoNotMatchError); ?>
  <label for="registerEmail">Email</label>
  <input id="registerEmail" name="registerEmail" type="email" value="<?php $account->getInputValue('registerEmail'); ?>" required />

  <label for="confirmEmail">Confirm email</label>
  <input id="confirmEmail" name="confirmEmail" type="email" value="<?php $account->getInputValue('confirmEmail'); ?>" required />

  <label for="description">Desscription</label>
  <textarea id="description" name="description" rows="4" cols="50" placeholder="Write something about yourself"></textarea>

  <?php echo $account->getError(Constans::$passwordsDoNotMatchError); ?>
  <?php echo $account->getError(Constans::$passwordFormatError); ?>
  <?php echo $account->getError(Constans::$passwordLengthError); ?>
  <label for="registerPassword">Password</label>
  <input id="registerPassword" name="registerPassword" type="password" value="<?php $account->getInputValue('registerPassword'); ?>" required />

  <label for="registerConfirmPassword">Confirm password</label>
  <input id="registerConfirmPassword" name="registerConfirmPassword" type="password" value="<?php $account->getInputValue('registerConfirmPassword'); ?>" required />

  <button type="submit" name="registerButton">Register</button>
</form>