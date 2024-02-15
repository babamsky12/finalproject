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

        .back-button {
            display: inline-block;
            background-color: red;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            margin-left: 37rem;
            margin-bottom: 1rem;
        }

        /* Styled Text */
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

.logo {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1000;
}

.logo-img {
    height: 50px; /* adjust the height as needed */
}

        @keyframes typewriter {
            from {
                width: 0;
            }
        }
    </style>
</head>
<body>
<div class="logo">
                    <a href="{{ url('/') }}">
                        <img src="img/logo1.png" alt="">
                    </a>
                </div>
    
    


    <div class="container">
        <div class="card">
            <div></div>
            <div class="card-header">
                Membership Information
            </div>

            <div class="card-body">
                <p id="remainingTime"></p>
            </div>

            <div class="styled-text">
                "Don't waste any time! Go grind!"
    </div>

    <!-- Include the JavaScript code -->
    <script>
        // Get the start and end dates from the server
        var startDate = new Date("{{ $user->membership_duration_start }}");
        var endDate = new Date("{{ $user->membership_duration_end }}");

        // Update the countdown every second
        setInterval(updateCountdown, 1000);

        function updateCountdown() {
            // Get the current date
            var currentDate = new Date();

            // Calculate the remaining time
            var remainingTime = endDate - currentDate;

            // Calculate days, hours, minutes, and seconds
            var days = Math.floor(remainingTime / (1000 * 60 * 60 * 24));
            var hours = Math.floor((remainingTime % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((remainingTime % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((remainingTime % (1000 * 60)) / 1000);

            // Display the remaining time
            document.getElementById("remainingTime").innerHTML =
                "Remaining Membership Time: " + days + " days, " + hours + " hours, " + minutes + " minutes, " + seconds + " seconds";
        }
    </script>
</body>
</html>
