<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós</title>
    <link rel="stylesheet" href="<?=URL?>/public/css/sobre_nos_user.css">
</head> 
<body>

<?php include '../App/Views/usuarios/menu_user.php'; ?>

    <!-- CONTEÚDO PRINCIPAL -->
    <main class="conteudo">
        <!-- CABEÇALHO -->
        <section class="cabecalho-pagina">
            <h1>Sobre Nós</h1>
            <p>Conheça nossa equipe e história.</p>
        </section>

        <!-- MOTIVO DESENVOLVIMENTO -->
        <section class="motivo">
            <h2>Motivo para o desenvolvimento do sistema</h2>
            <p>
                O desenvolvimento do site se dá pela necessidade de preservação e valorização
                do patrimônio cultural imaterial da região de Guajará-Mirim - Rondônia (RO), caracterizada pela
                expressiva diversidade étnica e cultural, resultante da intensa interação social por seu caráter
                de fronteira.
                O acervo conta com narrativas disponíveis nas seguintes línguas: português brasileiro, espanhol latino 
                (Bolívia) e Wari' Oro Nao.
            </p>
        </section>

        <!-- EQUIPE -->
        <section class="equipe">
            <!-- INTEGRANTE 1 -->
            <div class="integrante">
                <div class="foto-integrante">
                    <img src="<?=URL?>/public/img/darli.png" alt="Darliane Arza de Oliveira é uma menina de 18 anos, tem a pele morena clara, cabelo preto e ondulado, repartido ao meio. Seus olhos também são escuros, assim como suas sobrancelhas, que são finas e retas.">
                </div>
                <p>
                    Darliane Arza <br> de Oliveira
                </p>
            </div>

            <!-- INTEGRANTE 2 -->
            <div class="integrante">
                <div class="foto-integrante">
                    <img src="<?=URL?>/public/img/jose.png" alt="Jose Javiar Paz é um menino de 17 anos, pele negra, cabelo castanho escuro e liso, cortado baixo. Suas sobrancelhas são escuras, semiarredondadas e grossas, já seus olhos são de um castanho bem profundo.">
                </div>
                <p>
                    Jose Javiar <br> Paz Vaca
                </p>
            </div>

            <!-- INTEGRANTE 3 -->
            <div class="integrante">
                <div class="foto-integrante">
                    <img src="<?=URL?>/public/img/kal.png" alt="Kalondra Avaroma Vieira é uma menina de 17 anos, tem a pele branca, o cabelo castanho com mechas loiras, levemente ondulado e repartido ao meio com uma franja lateral. Suas sobrancelhas são castanhas e arredondadas e seus olhos são castanhos.">
                </div>
                <p>
                    Kalondra <br> Avaroma Vieira
                </p>
            </div>

            <!-- INTEGRANTE 4 -->
            <div class="integrante">
                <div class="foto-integrante">
                    <img src="<?=URL?>/public/img/lais.png" alt="Laís Carvalho de Lima é uma menina de 17 anos, de pele branca, cabelo longo e cachos escuros, preso em um penteado meio solto. Suas sobrancelhas são retas com a ponta curvada e seus olhos alongados.">
                </div>
                <p>
                    Laís Carvalho <br> de Lima
                </p>
            </div>

            <!-- INTEGRANTE 5 -->
            <div class="integrante">
                <div class="foto-integrante">
                    <img src="<?=URL?>/public/img/levi.png" alt="Levi dos Santos Oliveira é um menino de 17 anos de pele clara, cabelo cacheado escuro e volumoso. Seus olhos são castanho escuro e usa óculos retangulares. Suas sobrancelhas são finas e escuras.">
                </div>
                <p>
                    Levi dos Santos <br> de Oliveira
                </p>
            </div>

            <!-- INTEGRANTE 6 -->
            <div class="integrante">
                <div class="foto-integrante">
                    <img src="<?=URL?>/public/img/quelly.png" alt="Raquelly Tuye Hortiz é uma menina de 17 anos, é parda, tem o cabelo preto com mechas frontais vermelhas e olhos castanhos cor de mel. Suas sobrancelhas são retas e castanhas.">
                </div>
                <p>
                    Raquelly Tuye <br> Hortiz
                </p>
            </div>
        </section>
    </main>

    <?php include '../App/Views/usuarios/footer_user.php'; ?>
</body>
</html>
