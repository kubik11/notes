<!doctype html>
<html lang="en">
  <head>
    <title>Profile</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/hamburgers.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,700" rel="stylesheet">
    
  </head>
  <body class="profile">
    <div class="overlay"></div>
    <header>
        <div class="container-fluid">
          <div class="top-line">
          <a href="#" class="logo">Online Notes</a>
           <button class="hamburger hamburger--collapse" type="button">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button>
          <nav class="nav" id="nav">
          <ul class="navigation">
            <li class="active-item"><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="#">Contact us</a></li>
            <li><a href="#">My Notes</a></li>
          </ul>
          <ul class="login">
            <li><a href="#">Logged in as <b>user</b></a></li>
            <li><a href="#" id="to-login">Log out </a></li>
          </ul>
        </nav>
        </div>
      </div>
    </header>
    <section class="sc-main">
      <div class="main-inner">
        <div class="container">
          <div class="row">
            <div class="col-md-6 offset-md-3">
              <div class="caption">
               <h2 class="h2">General Account Setting:</h2>
               <table class="table table-bordered table-hover table-striped thead-light">
                 <tr id="UserID" class="t-row">
                   <td>Username</td>
                   <td>value</td>
                 </tr>
                 <tr id="EmailID" class="t-row">
                   <td>Email</td>
                   <td>value</td>
                 </tr>
                 <tr id="PasswordID" class="t-row">
                   <td>Password</td>
                   <td>value</td>
                 </tr>
               </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="forms">
      <div class="wrap-sign-up">
        <form action="#" class="clearfix" id="username-change" method="get">
          <h2 class="h2">Edit Username</h2>
          <div class="input-groupe">
            <label for="username" hidden>Username:</label>
            <input type="text" name="username" placeholder="Username" id="user-changed" class="input">
          </div>
          <div class="button-groupe">
            <input type="submit" name="submit" value="Submit" class="button submit">
            <input type="button" name="cancel" value="Cancel" class="button" id="cancel-username">
          </div> 
        </form> 
        <!-- EMAIL form -->
         <form action="#" class="email-form clearfix" id="email-change" method="get">
          <h2 class="h2">Enter new email:</h2>
          <div class="input-groupe">
            <label for="login" hidden>Login:</label>
            <input type="text" name="login" placeholder="Email" id="new-email" class="input">
          </div>
          <div class="button-groupe">
            <input type="submit" name="submit" value="Login" class="button email">
            <input type="button" name="cancel" value="Cancel" class="button" id="cancel-email">
          </div> 
        </form> 
      <!-- Password form -->
         <form action="#" class="password-form clearfix" id="password-change" method="get">
          <h2 class="h2">Enter current and new password:</h2>
          <div class="input-groupe">
            <label for="password" hidden>Current password:</label>
            <input type="password" name="password" placeholder="Your current password" id="current-password" class="input">
             <label for="new-password" hidden>New password:</label>
            <input type="password" name="new-password" placeholder="Your new password" id="new-password" class="input">
             <label for="confirm-password" hidden>Confirm password:</label>
            <input type="password" name="new-password" placeholder="Confirm your password" id="confirm-password" class="input">
          </div>
          <div class="button-groupe">
            <input type="submit" name="submit" value="Submit" class="button">
            <input type="button" name="cancel" value="Cancel" class="button" id="cancel-new-password">
          </div> 
        </form> 
      </div>
    </section>
    <footer>
      <div class="container">
        <div class="footer-content">
          <div class="row">
            <div class="col-md-6 offset-md-3 copy">Copyriot @
              <?php
                $today = date('Y');
                echo "$today";
              ?>
            </div>
            <div class="col-md-3 gunter">Gunter</div>
          </div>
        </div>
      </div>
    </footer>
    <link rel="stylesheet" href="css/style.css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>