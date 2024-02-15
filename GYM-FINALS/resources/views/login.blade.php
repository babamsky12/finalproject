<!-- resources/views/login.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rework Fitness Gym</title>
    <style>
        body {
            background-color: #151515;
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .card {
            background-color: #fff;
            border: 2px solid crimson;
            border-radius: 10px;
            width: 100%;
            max-width: 400px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: crimson;
            color: white;
            text-align: center;
            padding: 15px;
            border-radius: 8px 8px 0 0;
            font-size: 18px;
        }

        label {
            color: crimson;
            display: block;
            margin-bottom: 10px;
            font-size: 14px;
        }

        input {
            width: 93%;
            padding: 14px;
            margin-top: 6px;
            border: 1px solid crimson;
            border-radius: 5px;
            background-color: #ecf0f1;
            color: crimson;
            font-size: 14px;
        }

        input[type="checkbox"] {
            width: auto;
        }

        button {
            width: 100%;
            padding: 12px;
            margin-top: 10px;
            background-color: crimson;
            color: white;
            border: 1px solid crimson;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        .error-message {
            margin-top: 20px;
            text-align: center;
            color: red;
        }

        .success-message{
            margin-top: 20px;
            text-align: center;
            color: 
            red;
        }

        .logo {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1000;
}

.logo-img {
    height: 50px; /* adjust the height as needed */
}

        
    </style>
</head>
<body>
<div class="logo">
                    <a href="{{ url('/') }}">
                        <img src="img/logo1.png" alt="">
                    </a>
                </div>
    <div class="card">
        <div class="card-header">Gym Membership Login</div>

        <form method="POST" action="{{ route('login') }}" style="margin-top: 20px;">
            @csrf

            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required autofocus>
            </div>

            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>

            <div style="text-align: center; margin-top: 20px;">
                <a href="{{ route('membership_registration') }}" class="primary-btn" style="color: crimson;">Don't have an account? Click here.</a>
            </div>

            <div>
                <button type="submit" class="primary-btn">Login</button>
            </div>
        </form>
        
        @if(session('error'))
        <div class="error-message">
            {{ session('error') }}
        </div>
        @endif
        @if(session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif
    </div>
</body>
</html>
