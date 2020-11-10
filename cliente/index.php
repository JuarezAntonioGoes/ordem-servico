<?php require_once '../php_action/db_connect.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

    <title>Sistema de Cadastro de clientes</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .cabecalho {
        color: white;
        background-color: #424242;
        height: 10vh;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Roboto', sans-serif;

    }

    main {
        min-height: 80vh;
        width: 100%;
        background-color: #fafafa;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    footer {
        color: white;
        background-color: #212121;
        height: 10vh;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Roboto', sans-serif;
    }

    .pesquisa {
        margin-top: 1.5rem;
        width: 80%;
        display: flex;
        flex-direction: column;
        justify-content: center;

    }

    .pesquisa label {
        font-family: 'Roboto', sans-serif;
        font-weight: 500;
        font-style: oblique;
        color: #424242;
        font-size: 1.2rem;
        line-height: 1.8rem;

    }

    .campo {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .search {
        width: 90%;
        height: 3.3rem;
        border-radius: .2rem;
        font-size: 1.2rem;
        padding: .2rem;
        border: solid 1px #222;

    }

    .search-button {
        width: 10%;
        height: 3.3rem;
        margin-left: -3px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        background-color: #424242;
        border: solid 1px #222;
        transition: background-color .2s;
    }

    .search-button:hover {
        background-color: #616161;
    }

    .search-button img {
        width: 2.5rem;
        height: 2.5rem;
    }


    .corpo {
        margin-top: 3.5rem;
        width: 80%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        line-height: 2.5rem;
        font-family: 'Roboto', sans-serif;
        font-weight: 700;
        font-style: oblique;
        color: #424242;
        font-size: 1.5rem;

    }

    @media (max-width: 600px) {
        .pesquisa {
            width: 100%;
        }

        .corpo {
            width: 100%;
        }

    }

    .observacao {
        width: 90%;
        background-color: black;
        margin-bottom: 1rem;
        padding: 1rem;
        border-radius: .4rem;
        display: flex;
        align-items: center;
        background-color: #f5f5f5;
        transition: background-color .2s;
        cursor: pointer;
    }

    .observacao:hover {
        background-color: #e0e0e0;
    }

    .status {
        margin-top: 1rem;
        margin-bottom: 1.5rem;
        border: 1px dashed #222;
        padding: 1.2rem;
        border-radius: 1rem;
    }

    .logo-whats {
        height: 5rem;
        width: 5rem;
        position: fixed;
        bottom: 4.5rem;
        right: 4rem;
        cursor: pointer;
        transition: transform .2s;
    }

    .logo-whats:hover{
        transform: scale(1.3);
    }
</style>

<body>
    <header class="cabecalho">
        <a style="color: white; text-decoration: none;" href="http://localhost/tcc/cliente/"><h1>JobManager</h1></a>
    </header>

    <main>




        <div class="pesquisa">
            <label for="id">Visualizar status do pedido:</label>
            <div class="campo">
                <input type="text" id="id" class="search" placeholder="Digite o ID do produto..."><a href="http://localhost/tcc/cliente/id?" type="button" class="search-button"> <img src="./images/lupa.png" alt="Botao pesquisar"></a>
            </div>
        </div>

        <div class="corpo">

            <?php if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $sql = "SELECT * FROM observacao_servico WHERE id_servico = '$id'";
                $result = mysqli_query($connect, $sql);

                if (mysqli_num_rows($result) > 0) {
                    echo "<h3 style='margin-top:1.5rem; margin-bottom:1rem'>Informações do produto</h3>";

                    while ($dados = mysqli_fetch_array($result)) {
                        echo '<div class="observacao">' . $dados['observacao'] . '</div>';
                    }
                }


                $sql = "SELECT * FROM adicionar_servico WHERE id = '$id'";
                $result = mysqli_query($connect, $sql);

                if (mysqli_num_rows($result) > 0) {

                    while ($dados = mysqli_fetch_array($result)) {
                        echo "<h3 style='margin-top:1.5rem'>Status</h3>";
                        $situacao = $dados['situacao_pedido'];
                        if ($situacao == 0) {
                            echo '<div class="status" style="color: #ff3d00;"> Verificando o defeito... </div>';
                        } elseif ($situacao == 1) {
                            echo '<div class="status" style="color: #d50000"> O conserdo do produto foi cancelado, qualquer dúvida entre em contato conosco. </div>';
                        } elseif ($situacao == 2) {
                            echo '<div class="status" style="color: #ffd600"> O produto está em conserto. </div>';
                        } elseif ($situacao == 3) {
                            echo '<div class="status" style="color: #00e676"> O produto foi consertado já está disponível para a retirada. </div>';
                        }
                    }
                }
            ?>
            <?php } else { ?>
                <h2>Seja Bem vindo!</h2>
                <span>Qualquer dúvida entre em contato pelo whatsApp...</span>
            <?php } ?>
        </div>

        <a target="_blanck" href="https://api.whatsapp.com/send?phone=35997157647&text=Olá informe sua dúvida e atenderemos assim que possível!"><img src="./images/logo-whatsapp-1024.png" alt="Logo WhatsApp" class="logo-whats"></a>
    </main>

    <footer>

    </footer>

    <script>
        function atualizarPag() {
            const link = 'http://localhost/tcc/cliente/index.php?id=';

            const button = document.querySelector('.search-button');

            button.addEventListener('click', (e) => {
                e.preventDefault();
                const id = document.querySelector('.search').value;
                window.location.replace(link + id);
            })
        }

        atualizarPag();
    </script>
</body>



</html>