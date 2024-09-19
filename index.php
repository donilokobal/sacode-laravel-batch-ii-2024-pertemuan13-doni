<?php
// $email = $_POST['email'];
// $password = $_POST['password'];

// echo '<h1 class="bg-dark text-white">'. $email . '</h1> <br>';
// echo '<h1 class="bg-dark text-white">'. $password . '</h1> <br>';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body{
            background-image: url('https://img.freepik.com/free-photo/milky-way-galaxy-shines-tranquil-pond-generated-by-ai_188544-22770.jpg?t=st=1726759154~exp=1726762754~hmac=8f9c34a33f79919a66a6e776f6e1168b88273caa880d5c8f65b65f74b334a00c&w=740');
            background-size: cover;
            background-position: center;
            height: 100vh;
        }

        .border {
            background-color: transparent;
             border: none;
    outline: none;
    border: 2px solid rgba(255, 255, 255, .2);
    border-radius: 40px;
    font-size: 16px;
    color: #fff;
    padding: 20px 45px 20px 20px;
    width: 100;
        }
    </style>

</head>
<body class="">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow;" style="max-width : 300px; width: 100%; background: transparent;  border-radius: 12px;
  color: #fff;
  border: 2px solid rgba(255, 255, 255, .2);  backdrop-filter: blur(10px);">
            <h3 class="text-center mb-4 fw-bold ">LOGIN</h3>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">Email </label>
                    <input class="border" type="email" name="email" class="form-control" id="email" placeholder="donilokobal@gmail.com"  required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password </label>
                    <input class="border" type="password" name="password" class="form-control" id="password" placeholder="Your Password" required>
                </div>
                <button type="submit"  class="btn btn-primary w-100"> Login</button>
            </form>
            <div class="mt-3 text-center">
                <p>Belum Punya Akun ?? <a href="">Daftar</a></p>
            </div>
        </div>
    </div>    

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
