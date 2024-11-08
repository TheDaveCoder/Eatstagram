<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../Shared/root-colors.css">
  <link rel="stylesheet" href="home-style.css">
  <title>Eatstagram - Login</title>
</head>
<body>
  <section>
    <img src="logo.png" alt="" class="logo">
    <p class="introductory-text">Login to <span id="eats">Eats</span><span id="tagram">tagram</span></p>
    <div class="login-portal-container">
      <div class="login-portal customer-portal">
        <div class="login-portal-header">
          <div class="login-logo username-logo"></div>
          <p class="login-portal-name">Customer Login</p>
          <p class="sign-up-link">Not a member yet? <a class="link" href="..\Register\registration.php">Sign Up!</a></p>
        </div>
        <form action="..\includes\customer_login.php" method="post">
          <div class="form-input-container">
            <label for="username" class="label-class">Username</label>
            <div class="icon-and-inputbox">
              <div class="username-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z"/></svg>
              </div>
              <input type="text" placeholder="Enter Username" name="username" class="text-box" id="username" required>
            </div>
          </div>
          <div class="form-input-container">
            <label for="password" class="label-class">Password</label>
            <div class="icon-and-inputbox">
              <div class="username-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M282.3 343.7L248.1 376.1C244.5 381.5 238.4 384 232 384H192V424C192 437.3 181.3 448 168 448H128V488C128 501.3 117.3 512 104 512H24C10.75 512 0 501.3 0 488V408C0 401.6 2.529 395.5 7.029 391L168.3 229.7C162.9 212.8 160 194.7 160 176C160 78.8 238.8 0 336 0C433.2 0 512 78.8 512 176C512 273.2 433.2 352 336 352C317.3 352 299.2 349.1 282.3 343.7zM376 176C398.1 176 416 158.1 416 136C416 113.9 398.1 96 376 96C353.9 96 336 113.9 336 136C336 158.1 353.9 176 376 176z"/></svg>
              </div>
              <input type="password" placeholder="Enter Password" name="password" class="text-box" id="password" minlength="10" required>
            </div>
          </div>
          <button type="submit" name="submit" class="login-submit">Login</button>
        </form>
      </div>
      <div class="login-portal cook-portal">
        <div class="login-portal-header">
          <div class="login-logo cook-logo"></div>
          <p class="login-portal-name">Cook Login</p>
          <p class="sign-up-link">Not a member yet? <a class="link" href="..\Register\registration.php">Sign Up!</a></p>
        </div>
        <form action="..\includes\cook_login.php" method="post">
          <div class="form-input-container">
            <label for="username" class="label-class">Username</label>
            <div class="icon-and-inputbox">
              <div class="username-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z"/></svg>
              </div>
              <input type="text" placeholder="Enter Username" name="username" class="text-box" id="username" required>
            </div>
          </div>
          <div class="form-input-container">
            <label for="password" class="label-class">Password</label>
            <div class="icon-and-inputbox">
              <div class="username-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M282.3 343.7L248.1 376.1C244.5 381.5 238.4 384 232 384H192V424C192 437.3 181.3 448 168 448H128V488C128 501.3 117.3 512 104 512H24C10.75 512 0 501.3 0 488V408C0 401.6 2.529 395.5 7.029 391L168.3 229.7C162.9 212.8 160 194.7 160 176C160 78.8 238.8 0 336 0C433.2 0 512 78.8 512 176C512 273.2 433.2 352 336 352C317.3 352 299.2 349.1 282.3 343.7zM376 176C398.1 176 416 158.1 416 136C416 113.9 398.1 96 376 96C353.9 96 336 113.9 336 136C336 158.1 353.9 176 376 176z"/></svg>
              </div>
              <input type="password" placeholder="Enter Password" name="password" class="text-box" id="password" minlength="10" required>
            </div>
          </div>
          <button type="submit" name="submit" class="login-submit">Login</button>
        </form>
      </div>
    </div>
  </section>
</body>
</html>
