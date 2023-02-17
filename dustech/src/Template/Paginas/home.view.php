

<section>
    <img src="<?= asset('/images/backgrounds/img_principal.svg') ?>" width="100%" height="100%" alt="">
</section>

<section class="produtos-destaques py-2 py-lg-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-12 col-sm-12 texto">
                    <div>
                        <h2>Produtos Destaques</h2>
                    </div>
                    <div>
                        <button class="btn btn-custom">Veja Todos</button>
                    </div>
                </div>
                <div class="col-lg-10 col-md-12 col-sm-12">
                    <div class="swiper produtos-destaque-swiper">
                        <div class="swiper-wrapper">
                            <?php foreach(range(0,9) as $i) : ?>
                                <div class="swiper-slide h-100">
                                    <div class="slide-img">
                                    <a href="http://google.com.br">
                                        <div class="cor">
                                            <span>Cor Sólida</span>
                                        </div>
                                        
                                            <img src="<?= asset('images/banners/card1.svg') ?>" alt="">
                                        
                                        <div class="span bg-white">
                                            <span>A001</span>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination swiper-pagination1 d-xs-flex d-sm-none d-md-none d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-treinamento">
        <div class="row coluna">
            <div class=" col-md-6 col-sm-6 col-xs-12 col-12">
                <img class="pistola" src="<?= asset('images/banners/pistola.png') ?>" width="90%" alt="">
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 col-12 text-primary text-consultoria">
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

    <section class="catalogo ">
        <div class=" container" >
                <div class="row" >
                    <div class="col-md-6 d-flex align-items-center div-catalogo">
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-center align-items-center">
                                <h2>Conheça a linha completa <br> de produtos em nosso <span>catálogo</span>
                                    <img src="<?= asset('images/banners/catalogo.svg') ?>" alt="">
                                </h2>
                            </div>
                            <div class="col-md-12 d-flex">
                                <button class="btn btn-black button1"></button>
                                <button class="btn btn-black button2"><i class="ml-5 fa fa-download"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
 
 


<!--
    <section class="diferenciais py-2 py-lg-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-start text-diferenciais">Diferenciais</div>
                <div class="col-lg-4 col-md-6 icones d-flex justify-content-center">
                    <div class="row conteudo">
                        <div class="col-md-12 d-flex justify-content-center icone">
                            <img src="<?= asset('images/icones/icon1.svg') ?>" alt="">
                        </div>
                        <div class="col-md-12 d-flex justify-content-center titulo">
                            <h2>Estoque pronta entrega</h2>
                        </div>
                        <div class="col-md-12 d-flex justify-content-center">
                            <p>Produtos da linha premium a pronta entrega</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 icones d-flex justify-content-center">
                    <div class="row conteudo">
                        <div class="col-md-12 d-flex justify-content-center icone">
                            <img src="<?= asset('images/icones/icon1.svg') ?>" alt="">
                        </div>
                        <div class="col-md-12 d-flex justify-content-center titulo">
                            <h2>Estoque pronta entrega</h2>
                        </div>
                        <div class="col-md-12 d-flex justify-content-center">
                            <p>Produtos da linha premium a pronta entrega</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 icones d-flex justify-content-center">
                    <div class="row conteudo">
                        <div class="col-md-12 d-flex justify-content-center icone">
                            <img src="<?= asset('images/icones/icon1.svg') ?>" alt="">
                        </div>
                        <div class="col-md-12 d-flex justify-content-center titulo">
                            <h2>Estoque pronta entrega</h2>
                        </div>
                        <div class="col-md-12 d-flex justify-content-center">
                            <p>Produtos da linha premium a pronta entrega</p>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </section>
                            -->
<section class="diferenciais">
    <!-- Swiper -->
   
            <!--
            <?php foreach(range(0,9) as $i) : ?>
                        <div class="swiper-slide">
                            <div class="d-flex justify-content-center">
                                <img src="<?= asset('images/icones/icon1.svg') ?>" alt="">
                            </div>
                            <div class="d-flex justify-content-center titulo">
                                 <h2>Estoque pronta entrega</h2>
                            </div>
                            <div class="d-flex justify-content-center">
                                  <p>Produtos da linha premium a pronta entrega</p>
                            </div>
                        </div>
                        <?php endforeach; ?>
            -->




<section class="banner-teste diferenciais">
    <!-- Swiper -->
<div class="">
    <div class="col-md-12 d-flex justify-content-start text-diferenciais">Diferenciais</div>        
              <div class="swiper mySwiper-banner-teste col-10">
                 <div class="swiper-wrapper">

                        <?php foreach(range(0,9) as $i) : ?>
                                    <div class="swiper-slide">
                                        <div class="d-flex justify-content-center icone">
                                            <img src="<?= asset('images/icones/icon1.svg') ?>" alt="">
                                        </div>
                                        <div class="conteudo">
                                            <div class="d-flex justify-content-center titulo">
                                                <h2>Estoque pronta entrega</h2>
                                            </div>
                                            <div class="d-flex justify-content-center p">
                                                <p>Produtos da linha premium a pronta entrega</p>
                                            </div>
                                        </div>
                                    </div>
                        <?php endforeach; ?>
                     </div>   
                  <div class="swiper-button-next button-next"></div>
                <div class="swiper-button-prev button-prev"></div>
            <div class="swiper-pagination"></div>
            </div>
        </div>
</section>


<section class="banner">
    <div class="container">
    <!-- Swiper -->
        <div class="swiper mySwiper-banner">
            <div class="swiper-wrapper text-dark">
            <?php foreach(range(0,9) as $i) : ?>               
                <div class="swiper-slide d-flex justify-content-center">
                    <img src="<?= asset('images/logos/logo-banner.svg') ?>" alt="">
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    
  </div>
</section>



</body>
</html>