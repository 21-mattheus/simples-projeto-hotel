<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Hotel 4Life</title>
    <link href="css/style_log.css" rel="stylesheet" />

</head>

<body>
    <div class="hero">

        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="entrar()">Entrar</button>
                <button type="submit" values="Cadastrar-se" class="toggle-btn" onclick="cadastrar()">Cadastrar</button>
            </div>

            <div class="social-icons">
                    <tr>
                        <td>
                            <a href="https://www.facebook.com/" target="_blank"><img src="img/fb.png"></a>
                            <a href="https://twitter.com/login?lang=pt" target="_blank"><img src="img/tw.png"></a>
                            <a href="https://www.google.com/intl/pt-PT/gmail/about/#" target="_blank"><img src="img/gp.png"></a>
                        </td>
                    </tr>
            </div>

            @if(session('erro'))

            <div class="alerta error">
                <strong>Erro!</strong> {{session('erro')}}
            </div>

            @endif

            <form action="{{route('logar')}}" method="POST" id="entrar" class="input-group">
                @csrf

                <br />
                <label for="campo_email"></label>
                <input type="text"  name="email" class="input-field" placeholder="Email" required><br />

                <label for="campo_senha"></label>
                <input type="password" name="senha" class="input-field" placeholder="Senha" required><br />

                <input type="checkbox" class="chech-box"><span>Lembrar Senha.</span><br />
                <button type="submit" class="submit-btn">Entrar</button>
            </form>

            <form action="{{route('cadastrado')}}" method="POST" id="cadastrar" action="adiciona" class="input-group">
                @csrf

                <label for="nome"></label>
                <input type="text" name="nome" class="input-field" placeholder="Nome" required/><br />

                <label for="email"></label>
                <input type="text" name="email" class="input-field" placeholder="Email" required/><br />

                <label for="cpf"></label>
                <input type="text" name="cpf" class="input-field" placeholder="CPF" required/><br />

                <label for="senha"></label>
                <input type="password" name="senha" class="input-field" placeholder="Senha" required/><br />

                <input type="checkbox" class="chech-box"><span>Aceito Todos os Termos & Condições.</span>
                <button type="submit" class="submit-btn">Cadastrar</button>
            </form>
        </div>
    </div>

    <script src="js/login.js"></script>

</body>

</html>
