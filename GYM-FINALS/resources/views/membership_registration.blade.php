<!-- resources/views/membership_registration.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Rework Fitness Gym Membership Registration">
    <meta name="keywords" content="Gym, fitness, registration, html, css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rework Fitness Gym</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
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
            margin-bottom: 8px;
            font-size: 14px;
        }

        input,
        select,
        button {
            width: 93%;
            padding: 12px;
            margin-top: 5px;
            border: 1px solid crimson;
            border-radius: 5px;
            background-color: #ecf0f1;
            color: crimson;
            font-size: 14px;
        }

        select {
            width: 100%;
        }

        button {
            width: 100%;
            background-color: crimson;
            color: white;
            cursor: pointer;
        }

        .success-message {
            margin-top: 20px;
            text-align: center;
            color: green;
        }

        .error-message {
            margin-top: 20px;
            text-align: center;
            color: red;
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
        <div class="card-header">Membership Registration</div>

        <div class="card-body">
            @if(session('success'))
            <div class="success-message">
                {{ session('success') }}
            
            </div>
            @endif

            @if(session('error'))
            <div class="error-message">
                {{ session('error') }}
            </div>
            @endif

            <form method="post" action="{{ route('membership_registration') }}">
                @csrf

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" required autocomplete="name">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input id="password" type="password"
                        class="form-control @error('password') is-invalid @enderror" name="password" required
                        autocomplete="new-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="membership_duration_start">Membership Duration:</label>
                    <select id="membership_duration_start" class="form-control" name="membership_duration_start"
                        required onchange="updateMembershipDuration()">
                        <option value="3">3 Months</option>
                        <option value="6">6 Months</option>
                        <option value="9">9 Months</option>
                    </select>
                    @error('membership_duration_start')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <input type="hidden" id="membership_duration_end" name="membership_duration_end"
                    value="{{ old('membership_duration_end') }}" />

                    <div style="text-align: center; margin-top: 20px;">
    <a href="{{ route('login') }}" class="primary-btn" style="color: crimson;">Already have an account? Click here.</a>
</div>



                <div class="form-group mb-0">
                    <button type="submit">Register</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
