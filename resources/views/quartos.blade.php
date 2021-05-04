<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Hotel 4Life</title>
    <link href="css/style_qua.css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet ">

</head>

<body>
    <div class="hero">
        <div class="navbar">
            <nav>
                <ul>
                    <li><a href="inicio">Inicio</a></li>
                    <li><a href="sociais">Sociais</a></li>
                    <li><a href="sobre">Sobre</a></li>
                    <li><a href="atividades">Atividades</a></li>
                </ul>
            </nav>
            <img src="img/menu.png" class="menu-icon">
        </div>

        <div class="btn-box">
            <button id="btn1" onclick="open1Estrela()"><i class="fa fa-star-o"></i>1 Estrela</button>
            <button id="btn2" onclick="open2Estrela()"><i class="fa fa-star-o"></i>2 Estrelas</button>
            <button id="btn3" onclick="open3Estrela()"><i class="fa fa-star-o"></i>3 Estrelas</button>
        </div>

        <div id="content1" class="content">
            <div class="content-left">
                <h1>R$ 100,00</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris i ut aliquip ex ea commodo consequat. Duis aute irure dolor
                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa officia deserunt mollit anim id est laborum.
                </p>
                <a href="pagamento">Reservar</a>
            </div>
            <div class="content-right">
                <img src="img/quarto3.jpg">
            </div>

        </div>

        <div id="content2" class="content">
            <div class="content-left">
                <h1>R$ 200,00</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris i ut aliquip ex ea commodo consequat. Duis aute irure dolor
                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa officia deserunt mollit anim id est laborum.
                </p>
                <a href="pagamento">Reservar</a>
            </div>
            <div class="content-right">
                <img src="img/quarto2.jpg">
            </div>
        </div>

        <div id="content3" class="content">
            <div class="content-left">
                <h1>R$ 300,00</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris i ut aliquip ex ea commodo consequat. Duis aute irure dolor
                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa officia deserunt mollit anim id est laborum.
                </p>
                <a href="pagamento">Reservar</a>
            </div>
            <div class="content-right">
                <img src="img/quarto1.jpg">
            </div>
        </div>
    </div>

    <script src="js/quartos.js"></script>

</body>

</html>
