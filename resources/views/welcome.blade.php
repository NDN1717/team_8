<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tatts by Tatts</title>
    
    <!-- Link to Google font (for Gothic style) -->
    <link href="https://fonts.googleapis.com/css2?family=UnifrakturMaguntia&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'UnifrakturMaguntia', cursive; /* Gothic Font */
            background-color: #0a0a0a; /* Dark background */
            background-image: url('{{ asset('images/p1.jpg') }}'); /* Background image */
            background-size: cover;
            background-position: center;
            color: #f4f4f4; /* Light text for contrast */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .header {
            text-align: center;
        }

        .team-name {
            font-size: 4rem; /* Font size */
            color: #f4f4f4;
            text-shadow: 2px 2px 4px #000; /* Subtle shadow for gothic effect */
        }

        .quote-below-team {
            font-size: 1.5rem; /* Font size */
            color: #c7d1ca; /* Light greenish text */
            font-style: italic;
            text-shadow: 1px 1px 2px #000; /* Shadow for a gothic feel */
        }

        .top-right-buttons {
            position: absolute;
            top: 20px;
            right: 20px;
            display: flex;
            gap: 10px;
        }

        .btn {
            background-color: #1b2a24; /* Dark, muted green */
            border: none;
            color: #f4f4f4;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            font-size: 18px;
            cursor: pointer;
            border-radius: 5px;
            box-shadow: 0 5px #16211b; /* 3D shadow effect */
            transition: all 0.3s ease;
        }

        .btn:hover {
            background-color: #0f1a16; /* Darker on hover */
            box-shadow: 0 3px #16211b;
            transform: translateY(-2px); /* Hover effect */
        }
    </style>
</head>
<body>
    <!-- Login and Register buttons at the top-right -->
    <div class="top-right-buttons">
        <a href="{{ route('login') }}"><button class="btn">Login</button></a>
        <a href="{{ route('register') }}"><button class="btn">Register</button></a>
    </div>

    <!-- Main content centered -->
    <div class="header">
        <!-- Team name -->
        <div class="team-name">
            <h1>Tatts by Tatts</h1>
        </div>

        <!-- Breaking the stigma quote below the team name -->
        <div class="quote-below-team">
            <p>"Breaking the stigma"</p>
        </div>
    </div>
</body>
</html>
