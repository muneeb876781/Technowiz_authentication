<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Technowiz</title>
</head>

<body>
    <div class="main">
        <div class="bodyContainer">
            <div class="stats">
                <div class="statscontent">
                    <div class="statscontentmenubar">
                        <ul>
                            <li><a class="active" href="#hero"><i class="fas fa-user"></i></a></li>
                        </ul>
                    </div>
                    <div class="statscontentbody">
                        <div class="logindiv">

                            @guest
                                <div class="loginform">
                                    <h1><span>all you can</span> Play</h1>
                                    <form action="{{ route('login') }}" method="POST">
                                        @csrf
                                        <label for="phone_number">Enter Your Jazz Number Here:</label>
                                        <input type="text" id="phone_number" name="phone_number" required
                                            pattern="03[0-9]{9}" placeholder="03xxxxxxxx">
                                        <button type="submit">Login</button>
                                    </form>
                                </div>
                            @endguest
                            @auth
                                <div class="loginform">
                                    <h1><span>Welcome,</span> {{ auth()->user()->phone_number }}!</h1>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit">Logout</button>
                                    </form>
                                </div>
                            @endauth


                        </div>
                        <div class="gamesdiv">
                            <h1>Games</h1>
                            <div class="games">
                                <div class="gamecard">
                                    <img src="../images/g1.avif" alt="">
                                    <h2>Game</h2>
                                </div>
                                <div class="gamecard">
                                    <img src="../images/g2.avif" alt="">
                                    <h2>Game</h2>
                                </div>
                                <div class="gamecard">
                                    <img src="../images/g3.avif" alt="">
                                    <h2>Game</h2>
                                </div>
                                <div class="gamecard">
                                    <img src="../images/g4.avif" alt="">
                                    <h2>Game</h2>
                                </div>
                                <div class="gamecard">
                                    <img src="../images/g5.avif" alt="">
                                    <h2>Game</h2>
                                </div>
                                <div class="gamecard">
                                    <img src="../images/g6.avif" alt="">
                                    <h2>Game</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>
