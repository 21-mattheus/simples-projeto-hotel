<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Hotel 4Life</title>
    <link href="css/style_ini.css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet ">
</head>

<body>

    <div class="container">

        <div class="navbar">
            <nav>
                <ul>
                    <li><a href="inicio">Inicio</a></li>
                    <li><a href="sociais">Sociais</a></li>
                    <li><a href="login">Login</a></li>
                    <li><a href="atividades">Atividades</a></li>
                    <li><a href="sobre">Sobre</a></li>
                </ul>
            </nav>
            <img src="img/menu.png" class="menu-icon">
        </div>

        <div class="row">
            <div class="col">
                <h1>4Life</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                <a href="login"><button type="button">Reserve</button></a>


            </div>
            <div class="col">
                <div class="card card1">
                    <h5>Piscina</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="card card2">
                    <h5>Vista</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="card card3">
                    <h5>Natureza</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="card card4">
                    <h5>Quarto</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/blip-chat-widget" type="text/javascript">
    </script>
    <script>
        (function () {
            window.onload = function () {
                new BlipChat()
                .withAppKey('cHJvamV0b2hvdGVsOjMzYWNlOGUyLTEzMmYtNDVkNy05MWIyLWJhZGQ1MWQ1YTJmNw==')
                .withButton({"color":"#ff7846;","icon":""})
                .withCustomCommonUrl('https://chat.blip.ai/')
                .build();
            }
    })();
    </script>

</body>

</html>
