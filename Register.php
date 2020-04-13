<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        <link rel="stylesheet" type="text/css" href="style2.css">
       <!--<link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">-->

    </head>
    <body>
        <div class="hero">
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="login()"> Login</button>
                    <button type="button" class="toggle-btn" onclick="register()"> Register</button>
                    
                </div>
            
                <form id="login" class="input-group"  method="post" action="logval.php">
                    <input type="text" name="username" class="input-field" placeholder="Username" required>
                    <input type="password" name="password" class="input-field" placeholder="Password" required>
                    <button type="submit" name="login" class="submit-btn">Log in</button>
                </form>




                <form id="register" class="input-group" method="post" action="regval.php">
                    <input type="text" name="firstname" class="input-field" placeholder="First Name" required>
                    <input type="text" name="lastname" class="input-field" placeholder="Lastname" required>
                    <input type="text" name="username" class="input-field" placeholder="Username" required>
                    <input type="email" name="email"   class="input-field" placeholder="Email" required>
                    <input type="address" name="address"   class="input-field" placeholder="Billing address" required>
                    <input type="password" name="password" class="input-field" placeholder="Password" required>
                    <button type="submit" name="register" class="submit-btn">Register</button>
                </form>
                
            </div>
            
        </div>


        <script>
            var x=document.getElementById("login");
            var y=document.getElementById("register");
            var z=document.getElementById("btn");

            function register(){
                x.style.left="-400px";
                y.style.left="50px";
                z.style.left="110px";
            }

            function login(){
                x.style.left="50px";
                y.style.left="450px";
                z.style.left="0px";
            }
        </script>
    </body>
</html>
