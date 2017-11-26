<!doctype html>
<html lang="en">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/hamburgers.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,700" rel="stylesheet">
    
  </head>
  <body>
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
            <li><a href="#">Home</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="#">Contact us</a></li>
          </ul>
          <ul class="login"><li><a href="#">Login</a></li></div>
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
                <h2 class="h2">Online Notes App</h2>
                <p>Your Notes wherever you go.
                  Easy to use, protect all your notes!
                </p>
                <button class="button">Sign up</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="forms">
      <div class="wrap-sign-up">
        <form action="#" class="sign-up clearfix" method="get">
          <h2 class="h2">Sign up today and start using our Online Notes App !</h2>
          <div class="input-groupe">
            <label for="username" hidden>Username:</label>
            <input type="text" name="username" placeholder="Username" id="username" class="input">

            <label for="email" hidden>Email:</label>
            <input type="text" name="email" placeholder="Email" id="email" class="input">

            <label for="password" hidden>Password:</label>
            <input type="text" name="password" placeholder="Choose a password" id="password" class="input">

            <label for="confirm" hidden>Confirm:</label>
            <input type="text" name="confirm" placeholder="Confirm a password" id="confirm" class="input">
          </div>
          <div class="button-groupe">
            <input type="submit" name="submit" value="Sign in" class="button sign-in">
            <input type="button" name="cancel" value="Cancel" class="button">
          </div> 
        </form> 
        <!-- login form -->
         <form action="#" class="login-form clearfix" id="login-form" method="get">
          <h2 class="h2">Login:</h2>
          <div class="input-groupe">
            <label for="login" hidden>Login:</label>
            <input type="text" name="login" placeholder="Login" id="login" class="input">

            <label for="login-password" hidden>Password:</label>
            <input type="password" name="password" placeholder="Password" id="login-password" class="input">
            <input type="checkbox" name="checkbox"  id="checkbox" class="input">
            <label for="remember">Remember me</label>
            <a href="#" class="hint">Forgot password?</a>
          </div>
          <div class="button-groupe">
            <input type="button" name="register" value="Register" class="button register">
            <input type="submit" name="login" value="Login" class="button login">
            <input type="button" name="cancel" value="Cancel" class="button">
          </div> 
        </form> 
      <!-- forgot form -->
         <form action="#" class="forgot-form login-form clearfix" id="forgot-form" method="get">
          <h2 class="h2">Forgot password? Enter your email address:</h2>
          <div class="input-groupe">
            <label for="email" hidden>Email:</label>
            <input type="text" name="email" placeholder="Login" id="login" class="input">
          </div>
          <div class="button-groupe">
            <input type="button" name="register" value="Register" class="button register">
            <input type="submit" name="sub" value="Submit" class="button login">
            <input type="button" name="cancel" value="Cancel" class="button">
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