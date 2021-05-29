<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Hotel 4Life</title>
    <link href="css/style_dat.css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet ">

</head>

<body>
    <div class="container">
        <h1>Reserva</h1>

        <h2>Olá! {{session('seuNome')}}, Bem-Vindo!</h2> <br>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br> Sed do eiusmod tempor incididunt ut labore et dolore magna </p>

        <div class="pag-box">
            <div class="pag-left">
                <h3>Escolha uma data para reservar </h3><br>

                <form action="">

                    <div class="input-row">

                        <div class="input-group">
                            <label>Data de chegada</label>
                            <input type="text" name="chegada" placeholder="Data de chegada">
                        </div>

                        <div class="input-group">
                            <label>Data de saída</label>
                            <input type="text" name="saida" placeholder="Data de saída">
                        </div>

                    </div>

                    <div class="input-row">

                        <div class="input-group">
                            <label>Números de Hospede</label>
                            <input type="text"  name="quantidadeHospedes" placeholder="Número de Hospede">
                        </div>

                    </div>

                    <a href="quartos"><button type="button">Reservar</button></a>

                </form>

            </div>
            <div class="pag-right">
                <h3>Dúvidas?</h3>

                <table>

                    <tr>
                        <td>Email:</td>
                        <td>email@email.com</td>
                    </tr>

                    <tr>
                        <td>Telefone:</td>
                        <td>(00) 00000-0000</td>
                    </tr>

                    <tr>
                        <td><h3><a href="{{route('logout')}}">Sair</a></h3></td>
                    </tr>

                </table>

            </div>
        </div>
    </div>

</body>

</html>
