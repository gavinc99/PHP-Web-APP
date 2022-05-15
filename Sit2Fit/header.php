<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Meta Description Example, will often show up in search results.">
    <meta name=viewport content="width=device-width, initial-scale=1">

    <title>
      Sit2Fit
    </title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">

    <body>
<header>
    </div>
  </div>

    <!--Navigation bar-->
    <nav class="navbar navbar-expand-md ">
      <a class="navbar-brand" href="index.html">S2F</a>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav">

          <!--Navigation Headings and Links-->
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Home</a>
          </li>

        </li class="nav-item">
          <a class="nav-link"href="#">Account</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Classes</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Workout</a>
          </li>

        </ul>

        <div class="login">
          <!--link to login php file-->
          <form action="includes/login.inc.php" method="post"><!--1. '.inc' is just for naming reasons, stands for 'includes'. 2. 'Post' method is better for security instead of 'Get' method. 3. Pages in the 'includes' file will not be acessible or seen by users.-->

            <!-- inputs and buttons to store and retrieve user input-->
            <input type="text" name="mailuid" placeholder="Username/E-mail..."> <!--'mailuid' will allow us to grab the information from the user input when logging in-->
            <input type="password" name="pwd" placeholder="Password..."> <!-- 'password' will create star symbols when the user types -->
            <button type="submit" name="login-submit">Login</button><!--button that submits form-->

          </form>

          <a href="signup.php">Signup</a>

            <!--link to logout php file-->
            <form action="includes/logout.inc.php" method="post">
              <button type="submit" name="logout-submit">Logout</button><!--button that submits form-->
            </form>

        </div>

      </nav>


    <div class="space">
    </div>


  </div>




  </div>

    </div>




</div>
</div>
  </header>
    





    </body>
