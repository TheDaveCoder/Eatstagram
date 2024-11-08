<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../Shared/root-colors.css">
  <link rel="stylesheet" href="registration.css">
  <title>Document</title>
</head>
<body>
  <section>
    <div class="left">
      <div class="left-content">
        <p>CREATE YOUR ACCOUNT AND JOIN US AT <span>EATSTAGRAM</span></p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vestibulum mattis justo in aliquam. Sed ultrices metus in iaculis pharetra. Nam facilisis ornare erat et porta.</p>
      </div>
    </div>
    <div class="right">
      <div class="right-content">
        <p>Join with your email address</p>
        <div class="forms">
          <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M464 64C490.5 64 512 85.49 512 112C512 127.1 504.9 141.3 492.8 150.4L275.2 313.6C263.8 322.1 248.2 322.1 236.8 313.6L19.2 150.4C7.113 141.3 0 127.1 0 112C0 85.49 21.49 64 48 64H464zM217.6 339.2C240.4 356.3 271.6 356.3 294.4 339.2L512 176V384C512 419.3 483.3 448 448 448H64C28.65 448 0 419.3 0 384V176L217.6 339.2z"/></svg></div>
          <form action="..\includes\register.php" id="reg-form" method="post">
            <div class="lcolumn">
              <label for="fullname">Full Name</label>
              <input type="text" id="fullname" name="fullname" required>
              <label for="uname">Username</label>
              <input type="text" id="uname" name="uname" required>
              <label for="uname">Email</label>
              <input type="email" id="email" name="email" required>
            </div>
            <div class="rcolumn">
              <label for="ct">Select Account Type</label>
              <select id="at" name="ct">
                <option value="customer">Customer</option>
                <option value="cook">Cook</option>
              </select>
              <label for="password">Password</label>
              <input type="password" id="password" name="password" minlength="10" required>
              <label for="bday">Birthday</label>
              <input type="date" id="bday" name="bday" required>
            </div>
          </form>
        </div>
        <div class="buttons">
          <p>By pressing the "Create Account" button, you acknowledge that you have read and accepted the</br> Terms of Use Agreement and consent to the Privacy Policy and Video Privacy Policy.</p>
          <button type="submit" name="submit" form="reg-form">Create Account</button>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
