<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Belajar Login</title>
        <link rel="icon" href="assets/images/favicon.png">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/floating-labels.css">
        <script src="assets/js/jquery.min.js"></script>  
        
        <script >
        function Login(){
        var email=document.getElementById("email").value;
        var password=document.getElementById("password").value;
        
            if (email=="admin@gmail.com" && password=="123"){
            alert("Selamat anda berhasil login");
            }
            else{
            alert("Email atau password anda salah!");
            }
        };
        
        </script>
   
    </head>    
    <body>
        <div class=" container form-signin jumbotron">
            <div class="text-center mb-4">
                <img class="mb-4" width="72" height="72" src="assets/images/Logo.png">
                <h1>Loginku</h1>
                <p>Belajar Membuat Form</p>
            </div>
            
            <div class="form-label-group">
                <input class="form-control" type="email" name="email" id="email" required="" placeholder="Email Address" autofocus="yes" autocomplete="no">
                <label for="email">Email Address</label>
            </div>
            <div class="form-label-group">
                <input class="form-control" type="password" name="password" required="yes" id="password" placeholder="password">
                <label for="email">Password</label>
            </div>
            <div class="checkbox mb-4">
                <label>
                <input type="checkbox">
                Remember me
                </label>
            </div>
            
            <button onclick= "Login()" class="btn btn-lg btn-primary btn-block" type="submit">SIGN IN</button>
                            
        </div>
        <!-- Javascript -->
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
    </body>
</html>
