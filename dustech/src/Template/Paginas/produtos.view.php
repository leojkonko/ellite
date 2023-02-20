<main id="produto" class="py-3 py-lg-4" style="background: #F0F0F0;">

<section class="catalogo-produtos my-4">
    <div class="container opa">
        <div class="row">
            <div class="col-12 d-flex justify-content-start align-items-center div-titulo">
                <h2>Conheça a linha completa de produtos em nosso <img
                        src="<?= asset('/images/banners/catalogo.svg') ?>" alt=""></h2>
            </div>
            <div class="col-12 d-flex justify-content-start div-buttons align-items-center">
                <button class="btn btn-black button1"></button>
                <button class="btn btn-black button2"><i class="ml-5 fa fa-download"></i></button>
            </div>
        </div>
    </div>
</section>
<section class="busca">
    <div class="container">
        <div class="row">
            <div class="div-button2 ">
                <button class="btn btn-outline-black">
                    <img src="<?= asset('images/icones/filtro.svg') ?>" alt=""> Filtre sua
                    Busca</button>
            </div>
            <div class="col-12 d-flex alinhamento">
                <div class="div-input">
                    <input type="text" name="" id="" placeholder="Busque por código">
                    <img src="<?= asset('/images/icones/lupa-produtos.svg') ?>" alt="">
                </div>
                <div class="div-button">
                    <button class="btn btn-outline-black">
                        <img src="<?= asset('/images/icones/filtro.svg') ?>" alt=""> Filtre sua
                        Busca</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cards">
    <div class="container">
        <div class="row">
            <?php foreach(range(0,14) as $i) : ?>
                    <div class="col-2 cards-conteudo">
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
            <?php endforeach; ?>         
        </div>
    </div>
</section>
</main>