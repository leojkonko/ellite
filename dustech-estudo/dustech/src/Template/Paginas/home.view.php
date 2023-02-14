<main class="overflow-hidden">
    <section class="ratio ratio-6x9 ratio-lg-21x9">
        <picture>
            <source srcset="<?= asset('images/backgrounds/img_principal.svg') ?>" media="(min-width: 992px)">
            <img class="object-fit-cover w-100 h-100" src="<?= asset('images/backgrounds/img_principal.svg') ?>" alt="">
        </picture>
    </section>
    <section class="produtos-destaques py-2 py-lg-4">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-12 texto">
                    <h2>Produtos Destaques</h2>
                    <button class="btn btn-custom">Veja Todos</button>
                </div>
                <div class="col-md-10 col-sm-12">
                    <div class="swiper produtos-destaque-swiper">
                        <div class="swiper-wrapper">

                            <?php
                            $cards = [
                                asset('images/banners/card1.svg'),  
                                asset('images/banners/card2.svg'),
                                asset('images/banners/card3.svg'),
                                asset('images/banners/card4.svg'),
                            ]
                            ?>

                            <?php foreach ($cards as $card) : ?>
                                <div class="swiper-slide h-100">
                                    <div class="slide-img">
                                        <div class="cor">
                                            <span>Cor Sólida</span>
                                        </div>
                                        <img src="<?= $card ?>" alt="">
                                        <div class="span bg-white">
                                            <span>A001</span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="section-treinamento">
        <div class="row coluna">
            <div class=" col-md-6 col-sm-6 col-12">
                <img src="<?= asset('images/banners/pistola.png') ?>" width="90%" alt="">
            </div>
            <div class="col-md-6 col-sm-6 col-12 text-primary text-consultoria">
                <div class="d-flex justify-content-start div-h2">
                    <h2>Treinamento <br><span class="">e Consultoria</span></h2>
                </div>
                <img src="<?= asset('images/banners/in-company-sect3.svg') ?>" class="mt-5" alt="">
                <div class="d-flex justify-content-start div-button">
                    <button class="btn btn-custom">Saiba Mais</button>
                </div>
            </div>
        </div>
    </section>

    <section class="catalogo py-2 py-lg-4">
        <div class="img-bg">
            <div class=" container">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center div-catalogo">
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-center align-items-center">
                                <h2>Conheça a linha completa <br> de produtos em nosso <span>catálogo</span>
                                    <img src="<?= asset('images/banners/catalogo.svg') ?>" alt="">
                                </h2>
                            </div>
                            <div class="col-md-12 d-flex">
                                <button class="btn btn-black button1"></button>
                                <button class="btn btn-black button2"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="diferenciais py-2 py-lg-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center text-diferenciais">Diferenciais</div>
                <div class="col-lg-4 col-md-6 icones d-flex justify-content-center">
                    <div class="row conteudo">
                        <div class="col-md-12 d-flex justify-content-center icone">
                            <img src="<?= asset('images/icones/icon1.svg') ?>" alt="">
                        </div>
                        <div class="col-md-12 titulo">
                            <h2>Estoque pronta entrega</h2>
                        </div>
                        <div class="col-md-12">
                            <p>Produtos da linha premium a pronta entrega</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 icones">
                    <div class="row conteudo">
                        <div class="col-md-12 d-flex justify-content-center">
                            <img src="<?= asset('images/icones/icon2.svg') ?>" alt="">
                        </div>
                        <div class="col-md-12 titulo">
                            <h2>Desenvolvimento Ágil</h2>
                        </div>
                        <div class="col-md-12">
                            <p>Laboratório moderno e tecnologias na busca de padrões únicos</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 icones">
                    <div class="row conteudo">
                        <div class="col-md-12 d-flex justify-content-center">
                            <img src="<?= asset('images/icones/icon3.svg') ?>" alt="">
                        </div>
                        <div class="col-md-12 titulo">
                            <h2>Suporte técnico</h2>
                        </div>
                        <div class="col-md-12">
                            <p>Saiba dicas de utilização das tintas,pintura e saiba as novidades sobre</p>
                        </div>
                    </div>
                </div>

                <!--baner-->

                <swiper-container class="mySwiper" navigation="true">
                    <swiper-slide>
                        <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                            <div class="row conteudo">
                                <div class="col-md-12 d-flex justify-content-center icone">
                                    <img src="<?= asset('images/icones/icon1.svg') ?>" alt="">
                                </div>
                                <div class="col-md-12 titulo">
                                    <h2>Estoque pronta entrega</h2>
                                </div>
                                <div class="col-md-12">
                                    <p>Produtos da linha premium a pronta entrega</p>
                                </div>
                            </div>
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="col-lg-4 col-md-6">
                            <div class="row conteudos">
                                <div class="col-md-12 d-flex justify-content-center">
                                    <img src="<?= asset('images/icones/icon2.svg') ?>" alt="">
                                </div>
                                <div class="col-md-12 titulo">
                                    <h2>Desenvolvimento Ágil</h2>
                                </div>
                                <div class="col-md-12">
                                    <p>Laboratório moderno e tecnologias na busca de padrões únicos</p>
                                </div>
                            </div>
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="col-lg-4 col-md-6">
                            <div class="row conteudo">
                                <div class="col-md-12 d-flex justify-content-center">
                                    <img src="<?= asset('images/icones/icon3.svg') ?>" alt="">
                                </div>
                                <div class="col-md-12 titulo">
                                    <h2>Suporte técnico</h2>
                                </div>
                                <div class="col-md-12">
                                    <p>Saiba dicas de utilização das tintas,pintura e saiba as novidades sobre</p>
                                </div>
                            </div>
                        </div>
                    </swiper-slide>
                </swiper-container>
            </div>
        </div>
    </section>

    <section class="banner">
        <swiper-container class="mySwiper" navigation="true">
            <swiper-slide>
                <div class="col-lg-2 col-md-3 col-sm-6 logo1">
                    <img src="<?= asset('images/logos/logo-banner.svg') ?>" alt="">
                </div>
            </swiper-slide>

        </swiper-container>
    </section>

</main>