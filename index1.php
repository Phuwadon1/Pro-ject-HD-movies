
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="content">
            <h2 class="logo" ><i class='bx bxs-camera-movie'></i>Heddee.com</h2>

            <div class="text-sci">
                <h2>Welcome!<br><spen>To Our New Website.</spen></h2><br>

                <p>Welcome.</p><br>

                <div class="social-icons">
                    <a href="#"><i class='bx bx-link-alt'></i></a>
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                </div>
            </div>
        </div>

        <div class="logreg-box">
            <div class ="form-box login">
                <form action="#">
                    <h2>Sign In<i class='bx bx-cool bx-tada bx-rotate-90' ></i></h2>

                  
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope' ></i></span>
                        <input type="email" required>
                        <label>Email</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                        <input type="password" required>
                        <label>Password</label>
                    </div>

                    <div class="remember-forgot">
                        <label><input type="checkbox"> Remember me</label>
                        <a href="#">Forgot password?</a>

                    </div>

                    <button type="submit" class="btn">Sign In</button>
                    <div class="login-register">
                        <p>Don't have an account?<a href="#" class="register-link"> Sign up</a></p>
                    </div>

                </form>
            </div>

            <div class ="form-box register">
                <form action="#">
                    <h2>Sign Up<i class='bx bx-happy-heart-eyes bx-tada bx-flip-horizontal' ></i></h2>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-user' ></i></span>
                        <input type="text" required>
                        <label>UserName</label>
                    </div>

                    
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope' ></i></span>
                        <input type="email" required>
                        <label>Email</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                        <input type="password1" required>
                        <label>Password</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                        <input type="password2" required>
                        <label>confirm password</label>
                    </div>


                    <button type="submit" class="btn">Sign Up</button>
                    <div class="login-register">
                        <p>Already have an account?<a href="#" class="login-link"> Sign in</a></p>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script src="cat.js"></script>

</body>

</html>