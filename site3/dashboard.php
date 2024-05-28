<?php
    session_start();
    if(empty($_SESSION)){
        print "<script>location.href='log.php'</script>";
    }
    ?>
 <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xenohunter - Sua loja de games.</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

        <div class="banner">        
    <div class="container">
<div class="navbar">
    <div class="logo">
        <img src="img/logo2.png.png" alt="Xenohunter" width="125px">
        </div>
            <nav>
                <ul id="MenuItens">
                    <li><a href="dashboard.php" title="">Inicio</a></li>
                    <li><a href="promocoes.php" title="">Promoções</a></li>
                    <li><a href="" title="">Fale conosco</a></li>
                </ul>
            </nav>

            <img src="img/controle.png" alt="" width="30px" height="30px">
 
</div>

            <div class="linha">
                    <div class="col-2">
                        <h1>Um novo mundo <br>dos jogos.</h1>
                        <p>O melhor site para compra de games do mercado com preços super acessiveis, além das grandes promoções que ocorrem. <br>Também vendemos chaves da steam para a sua jogatina.</p>
                        <a href="" class="btn">Mais informações &#8594;</a>
                    </div>

                <div class="col-2">
                    <img src="img/per46.png" alt="">
                </div>
            </div>

    </div>
        </div>

        <div class="categorias">

            <div class="corpo-categorias">
                <div class="linha">
                    <div class="col-3">
                        <img src="img/ghost.png" alt="">
                    </div>
                    <div class="col-3">
                        <img src="img/elden.jpg" alt="">
                    </div>
                    <div class="col-3">
                        <img src="img/thew.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="corpo-categorias">
            <h2 class="titulo">Festival da promoção</h2>
            <div class="linha">
                <div class="col-4">
                    <img src="img/city.jpg" alt="">
                    <h4>Cities Skylines II</h4>
                    <div class="classificacao">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star-half"></ion-icon>
                    </div>
                    <p>R$29,99</p>
                </div>
                <div class="col-4">
                    <img src="img/walking.jpg" alt="">
                    <h4>The Walking Dead Season Two</h4>
                    <div class="classificacao">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                    </div>
                    <p>R$7,99</p>
                </div>
                <div class="col-4">
                    <img src="img/red.jpg" alt="">
                    <h4>Red Dead Redemption 2</h4>
                    <div class="classificacao">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                    </div>
                    <p>R$19,99</p>
                </div>
            </div>
            <h2 class="titulo">Novidades</h2>
            <div class="linha">
                <div class="col-4">
                    <img src="img/2k.webp" alt="">
                    <h4>NBA 2k24</h4>
                    <div class="classificacao">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star-half-outline"></ion-icon>
                        <ion-icon name="star-outline"></ion-icon>
                        <ion-icon name="star-outline"></ion-icon>
                    </div>
                    <p>R$32,79</p>
                </div>
                <div class="col-4">
                    <img src="img/ea.jpg" alt="">
                    <h4>EA FC 24</h4>
                    <div class="classificacao">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star-outline"></ion-icon>
                        <ion-icon name="star-outline"></ion-icon>
                    </div>
                    <p>R$80,99</p>
                </div>
                <div class="col-4">
                    <img src="img/fear.jpg" alt="">
                    <h4>Enigma do Medo</h4>
                    <div class="classificacao">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star-half-outline"></ion-icon>
                    </div>
                    <p>R$64,90</p>
                </div>
                <div class="col-4">
                    <img src="img/ghost.png" alt="">
                    <h4>Ghost of Tsushima</h4>
                    <div class="classificacao">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                    </div>
                    <p>R$99,89</p>
                </div>
                <div class="col-4">
                    <img src="img/silk.webp" alt="">
                    <h4>Hollow Knight Silksong</h4>
                    <div class="classificacao">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                    </div>
                    <p>R$79,89</p>
                </div>
                <div class="col-4">
                    <img src="img/elden.jpg" alt="">
                    <h4>Elden Ring</h4>
                    <div class="classificacao">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                    </div>
                    <p>R$199,99</p>
                </div>
            </div>
        </div>
        <footer class="rodape">

            <div class="container">
                <div class="linha">
                    <div class="rodape-col-1">
                    <h3>Baixe o nosso app</h3>
                    <p>Baixe nosso aplicativo nas melhores plataformas.</p>
                        <div class="app-logo">
                            <img src="img/play.png" alt="">
                            <img src="img/aaaa.webp" alt="">
                        </div>
                    </div>
                    <div class="rodape-col-2">
                    <img src="img/logo2.png.png" alt="">
                    <p>O melhor site de compra de jogos e diversas outras coisas.</p>
                    </div>

                    <div class="rodape-col-4">
                        <h3>Redes Sociais</h3>
                        <ul>
                            <li>Facebook</li>
                            <li>Instagram</li>
                            <li>Twitter</li>
                            <li>TikTok</li>
                        </ul>
                    </div>
                </div>
            </div>

        </footer>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <scripts src="js/app.js"></scripts>
</body>
</html>