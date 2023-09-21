<?php
    session_start();
    include('config.php');
?>

<!doctype html>
<html lang="en">
<head>

  <title>Webleb</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">

</head>
<body>

<div id="stars"></div>
<div id="stars2"></div>
<div id="stars3"></div>
<div class="section">
  <div class="container">
    <div class="row full-height justify-content-center">
      <div class="col-12 text-center align-self-center py-5">
        <div class="section pb-5 pt-5 pt-sm-2 text-center">
          <div class="card-3d-wrap mx-auto">
            <div class="card-3d-wrapper">

                <div class="center-wrap">
                  <div class="section text-center">

                        <form action="register.php" method="post"><br>
                        <h1 class="mb-3 pb-3">Sign Up</h1>
                        <div class="form-group">
                            <input type="text" class="form-style" placeholder="Full Name" name="name" required>
                            <i class="input-icon uil uil-user"></i>
                        </div>
                        <div class="form-group mt-2">
                            <input type="email" class="form-style" placeholder="Email" name="email">
                            <i class="input-icon uil uil-at"></i>
                        </div>
                        <div class="form-group mt-2">
                            <input type="password" class="form-style" placeholder="Password" name="pass">
                            <i class="input-icon uil uil-lock-alt"></i>
                        </div>
                        <button type="submit"
                            class="btn mt-4" name="send">Sign up</button><br><br>
                            <p><h7>กลับไปหน้า<a href="login.php" class="">Login</a></h7></p>
                        </form>
                        </div> 
                        </form>

                  </div>
                </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>