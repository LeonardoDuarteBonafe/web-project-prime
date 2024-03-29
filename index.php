<!doctype html>
<html lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="style.css" rel="stylesheet">
    <script type="text/javascript" src="main.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <script src="https://smtpjs.com/v3/smtp.js"></script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <link rel="stylesheet" type="text/css" href="lightbox.min.css">
    <script type="text/javascript" src="lightbox-plus-jquery.min.js"></script>

    <link rel="icon" href="Images/icon.webp">
    <title>Prime</title>

    <body class="index-page">

        <?php
        include 'php/navbar.html'
        ?>

        <div id="top-carousel" class="carousel vert slide top-carousel" data-ride="carousel" data-interval="5000" data-pause="false">
            <ol class="carousel-indicators">
                <li data-target="#top-carousel" data-slide-to="0" id="0" class="active"></li>
                <li data-target="#top-carousel" data-slide-to="1"></li>
                <li data-target="#top-carousel" data-slide-to="2"></li>
                <li data-target="#top-carousel" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <section class="big">
                        <!--<p class="title">environment 1</p>-->
                        <img class="d-block mx-auto img-fluid" src="Images/Carousel-Top/banner1.webp">
                        <div class="image">
                            <img src="Images/Carousel-Top/bloquinho1.webp">
                        </div>
                        <div class="info">
                            <h2>cala <br> catta</h2>
                            <p>LUXO E MODERNIDADE</p>
                        </div>
                    </section>
                    <section class="small">
                        <img class="d-block mx-auto img-fluid" src="Images/Carousel-Top/bloco1.webp"><!--
<p>slab 1</p>-->
                    </section>
                </div>
                <div class="carousel-item">
                    <section class="big">
                        <!--<p class="title">environment 2</p>-->
                        <img class="d-block mx-auto img-fluid" src="Images/Carousel-Top/banner2.webp">
                        <div class="image">
                            <img src="Images/Carousel-Top/bloquinho2.webp">
                        </div>
                        <div class="info">
                            <h2>taj <br> mahal</h2>
                            <p>BELEZA ATEMPORAL</p>
                        </div>
                    </section>
                    <section class="small">
                        <img class="d-block mx-auto img-fluid" src="Images/Carousel-Top/bloco2.webp"><!--
<p>slab 2</p>-->
                    </section>
                </div>
                <div class="carousel-item">
                    <section class="big">
                        <!--<p class="title">environment 3</p>-->
                        <img class="d-block mx-auto img-fluid" src="Images/Carousel-Top/banner3.webp">
                        <div class="image">
                            <img src="Images/Carousel-Top/bloquinho3.webp">
                        </div>
                        <div class="info">
                            <h2>blue <br> nile</h2>
                            <p>QUALIDADE E CLASSE</p>
                        </div>
                    </section>
                    <section class="small">
                        <img class="d-block mx-auto img-fluid" src="Images/Carousel-Top/bloco3.webp"><!--
<p>slab 3</p>-->
                    </section>
                </div>
                <div class="carousel-item">
                    <section class="big">
                        <!--<p class="title">environment 3</p>-->
                        <img class="d-block mx-auto img-fluid" src="Images/Carousel-Top/banner4.webp">
                        <div class="image">
                            <img src="Images/Carousel-Top/bloquinho4.webp">
                        </div>
                        <div class="info">
                            <h2>antartic <br> white</h2>
                            <p>PARA PROJETOS OUSADOS</p>
                        </div>
                    </section>
                    <section class="small">
                        <img class="d-block mx-auto img-fluid" src="Images/Carousel-Top/bloco4.webp"><!--
<p>slab 3</p>-->
                    </section>
                </div>
            </div>
        </div>

        <section class="industria" id="industria">
            <img class="fundo" src="Images/Industria/fundo.webp">
            <div class="info" data-aos="fade-right"
                 data-aos-anchor-placement="center-bottom">
                <h2>nossa</h2>
                <h1>industria</h1>
                <p>
                    A Prime Granitos e Mármores é uma empresa que busca 
                    agregar qualidade , compromisso e excelência em seus 
                    materiais e serviços no setor de beneficiamento de mármores e granitos para as mais diversas aplicações. 
                    Nossa missão é ser referência no mercado de rochas 
                    com profissionais comprometidos tendo como principal 
                    objetivo a sua satisfação. Temos grande variedade de 
                    produtos disponíveis de alta qualidade para atender 
                    tanto mercado interno quanto o mercado externo. Fale 
                    com um de nossos vendedores, conheça nossos materiais e surpreenda-se
                </p>
            </div>
            <div class="images">
                <div class="big" data-aos="fade-left"
                     data-aos-anchor-placement="center-bottom">
                    <img src="Images/Industria/banner1.webp" id="1">
                </div>
                <div class="small" data-aos="fade-left"
                     data-aos-anchor-placement="center-bottom">
                    <div>
                        <img src="Images/Industria/banner2.webp" id="2">
                    </div>
                    <div>
                        <img src="Images/Industria/banner3.webp" id="3">
                    </div>
                    <div>
                        <img src="Images/Industria/banner4.webp" id="4">
                    </div>
                    <div>
                        <img src="Images/Industria/banner5.webp" id="5">
                    </div>
                </div>
            </div>
        </section>

        <div class="materiais" id="materiais">
            <div class="titulo" data-aos="fade-right">
                <p>luxurous and classic</p>
                <h2>materiais</h2>
            </div>
            <div class="itens">
                <div class="item">
                    <a id="blue_nile">
                        <img src="Images/Materiais/blue_nile.webp">
                        <p>BLUE NILE</p>
                    </a>
                </div>
                <div class="item">
                    <a id="everest_mist">
                        <img src="Images/Materiais/everest_mist.webp">
                        <p>EVEREST MIST</p>
                    </a>
                </div>
                <div class="item">
                    <a id="nero_mist_negresco">
                        <img src="Images/Materiais/nero_mist_negresco.webp">
                        <p>NERO MIST / NEGRESCO</p>
                    </a>
                </div>
                <div class="item">
                    <a id="white_orion">
                        <img src="Images/Materiais/white_orion.webp">
                        <p>WHITE ORION</p>
                    </a>
                </div>
                <div class="item">
                    <a id="bianco_supreme">
                        <img src="Images/Materiais/bianco_supreme.webp">
                        <p>BIANCO SUPREME</p>
                    </a>
                </div>
                <div class="item">
                    <a id="amarello_ornamental">
                        <img src="Images/Materiais/amarello_ornamental.webp">
                        <p>AMARELLO ORNAMENTAL</p>
                    </a>
                </div>
            </div>
        </div>

        <section class="equipe">
            <div class="titulo" data-aos="fade-right">
                <h2>conheça nossa</h2>
                <h1>equipe</h1>
            </div>
            <div class="swiper mySwiper swiperEquipe swiper1" data-aos="fade-left">
                <div class="swiper-wrapper imagens">
                    <div class="swiper-slide">
                        <div class="box">
                            <h3>Pablo Lemos</h3>
                            <img src="Images/Equipe/pablo.webp">
                            <p>+55 (27) 99731-5324</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <h3>VInicius Sobral</h3>
                            <img src="Images/Equipe/vinicius.webp">
                            <p>+55 (27) 98835-4606</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <h3>Sebastião Félix</h3>
                            <img src="Images/Equipe/sebastiao.webp">
                            <p>+55 (27) 99296-7507</p>
                        </div>
                    </div><!--
                    <div class="swiper-slide">
                        <div class="box">
                            <h3>Alencar Ribeiro</h3>
                            <p>+55 (27) 99977-1987</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <h3>Ramon Velmer</h3>
                            <p>+55 (27) 99866-3745</p>
                        </div>
                    </div>-->
                </div>
            </div>
            
            <div class="swiper mySwiper swiperEquipe swiper2" data-aos="fade-left">
                <div class="swiper-wrapper imagens">
                    <div class="swiper-slide">
                        <div class="box">
                            <h3>Alencar Ribeiro</h3>
                            <p>+55 (27) 99977-1987</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <h3>Ramon Velmer</h3>
                            <p>+55 (27) 99866-3745</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </section> 

        <div id="quarry-carousel" class="carousel vert slide" data-ride="carousel" data-interval="5000" data-pause="false">
            <ol class="carousel-indicators">
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active"><!--
<div class="nome">
<p>P E D R E I R A 1</p>
</div>-->
                    <img class="texto" src="Images/Pedreira/imagem1.webp">
                    <img class="d-block mx-auto img-fluid" src="Images/Pedreira/banner1.webp">
                    <img class="image" src="Images/Pedreira/imagem.webp">
                </div>
                <div class="carousel-item">
                    <img class="texto" src="Images/Pedreira/imagem1.webp">
                    <img class="d-block mx-auto img-fluid" src="Images/Pedreira/banner2.webp">
                    <img class="image" src="Images/Pedreira/imagem.webp">
                </div>
            </div>
        </div>

        <?php
            include 'php/footer.html'
        ?>

    </body>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</html>
