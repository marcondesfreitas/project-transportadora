<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <header class="flex">
        <img src="./img/Logo.png" width="300" height="150">
        <menu>
            <a href="#">Enviar</a>
            <a href="#">Receber</a>
            <a href="#">Atendimento</a>
            <a href="#">Informações</a>
        </menu>


        <button>
            <img src="./img/Icone de Usuario.png" width="100" height="100">
            <a href="./backend/pages_php/cadastro/cadastro.php">cadastro</a>
            <a href="./backend/pages_php/login/login.php">login</a>

        </button>
    </header>

    <section class="flex">
        <div class="conteiner-pesquisa">
            <form class="barra-de-pesquisa">
                <input type="text" class="search-input" placeholder="Digite seu codigo de rastreio">
                <button type="submit" class="botao-pesquisa">
                    <img src="./img/pesquisar.webp" alt="Pesquisar">
            </form>
        </div>
    </section>

    <main>
        <section class="cards">
            <img class="padre-cicero" src="./img/Padre Cícero.jpg" width="282" height="501">
            <div class="cards-info">
                <h1>Nossos Serviços</h1>
                <p>Oferecemos soluções de transporte eficientes e seguras para as regiões Norte e Nordeste, adaptadas às
                    necessidades de cada cliente. Nossa equipe altamente qualificada e nossa frota moderna garantem que
                    sua carga chegue ao destino com pontualidade e total segurança. Com um compromisso sólido com a
                    qualidade, trabalhamos para proporcionar tranquilidade e confiança em cada etapa do processo
                    logístico.</p>
            </div>
        </section>
        <section class="cards">
            <div class="cards-info">
                <h1>Transporte Nacional</h1>
                <p>Realizamos envios para diversos estados com total segurança, eficiência e comprometimento. Nossa
                    equipe experiente e dedicada garante que cada transporte seja executado com cuidado, respeitando os
                    prazos acordados e assegurando a integridade de sua carga.</p>
            </div>
            <img class="igreja" src="./img/Igreja Matriz.jpg" width="282" height="501">
        </section>
        <section class="cards">
            <img class="bonecos-de-madeira" src="./img/Bonecos de Madeira.jpg" width="382" height="482">
            <div class="cards-info">
                <h1>Logística</h1>
                <p>Nosso gerenciamento inclui o controle preciso de estoque, transporte, distribuição e armazenamento,
                    sempre priorizando a redução de custos operacionais sem comprometer a qualidade do serviço.
                    Utilizamos ferramentas tecnológicas avançadas para monitoramento em tempo real, o que nos permite
                    antecipar e resolver eventuais problemas, garantindo o cumprimento dos prazos e a satisfação do
                    cliente final.</p>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Transportadora Padre Cícero. Todos os direitos reservados.</p>
        <p><a href="#contato">Entre em contato</a></p>
    </footer>
</body>

</html>