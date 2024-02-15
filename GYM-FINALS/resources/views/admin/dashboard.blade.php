<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rework Fitness Gym</title>
    <!-- Include the CSS styles -->
    <style>
        body {
            background-color: #151515;
            font-family: 'Arial', sans-serif;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            width: 80%;
            margin-top: 20px; /* Add margin at the top for better spacing */
        }

        .card {
            border: 1px solid #dc143c;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden; /* Hide overflow to prevent shadows from overflowing */
        }

        .card-header {
            background-color: #dc143c;
            color: white;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            padding: 15px;
            text-align: center; /* Center the text */
            font-size: 18px;
        }

        .card-body {
            text-align: center;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border-bottom: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: white;
        }

        .styled-text {
            font-size: 24px;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            white-space: nowrap;
            overflow: hidden;
            animation: typewriter 1s steps(40) .5s infinite;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 25vh; /* Adjust as needed */
        }

        @keyframes typewriter {
            from {
                width: 0;
            }
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
                    <img src="{{ asset('img/logo1.png') }}" alt="Logo">

                    </a>
                </div>
    <div class="container">
        <div class="card">
            <div></div>
            <div class="card-header">
                Membership Information
            </div>

            <div class="card-body">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Days Left</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            @php
                                $startDate = new DateTime($user->membership_duration_start);
                                $endDate = new DateTime($user->membership_duration_end);
                                $remainingTime = $endDate->diff(new DateTime());
                                $daysLeft = $remainingTime->days;
                            @endphp
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $startDate->format('Y-m-d') }}</td>
                                <td>{{ $endDate->format('Y-m-d') }}</td>
                                <td>{{ $daysLeft }} days</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
