<!DOCTYPE html>
<html>
    <head>
        <title>Al-Maul Booking</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link href="{{ URL::asset('css/app.css') }}" rel='stylesheet'>
        <style>
            .login-box-container {
                background-image: url('/images/bg_2.jpg'); 
                background-size: cover; 
                background-position: center; 
                height: 100vh; 
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .login-box {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                background-color: rgba(255, 255, 255, 0.7); /* Tambahkan transparansi ke kotak login */
                padding: 20px;
                border-radius: 10px;
            }

            .login-right {
                text-align: center;
            }
        </style>
    </head>
    <body>
        @error('login_gagal')
            <div class="alert alert-danger" role="alert" id="msg-box">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                {{ $message }}
            </div>
        @enderror
        <div class="login-box-container">
            <div class="container-fluid">
                <div class="login-box">
                    <div class="login-right">
                        <h2 style="color: #5EACCD">WELCOME !</h2>
                        <p class="bold">Silahkan login terlebih dahulu</p>
                        <form action="{{ route('login_action') }}" method="POST">
                            @csrf
                            <input id="email" class="login-form" type="email" name="email" placeholder="Email">
                            <input class="login-form" type="password" name="password" placeholder="Password">
                            <input class="orange-button" type="submit" value="Login" style="margin-top: 7%">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
