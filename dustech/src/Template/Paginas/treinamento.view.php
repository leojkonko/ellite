<main id="treinamento">
    <section class="treinamento py-lg-4 py-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-12 d-flex justify-content-center banner">
                    <div class="swiper mySwiper-empresa">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide ratio ratio-16x9">
                                <img src="<?= asset('images/banners/card1.svg') ?>" alt="">
                            </div>
                            <div class="swiper-slide ratio ratio-16x9">
                                <img src="<?= asset('images/banners/card1.svg') ?>" alt="">
                            </div>
                            <div class="swiper-slide ratio ratio-16x9">
                                <img src="<?= asset('images/banners/card1.svg') ?>" alt="">
                            </div>
                            <div class="swiper-slide ratio ratio-16x9">
                                <img src="<?= asset('images/banners/card1.svg') ?>" alt="">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="col-12 justify-content-center py-lg-4 py-2">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center titulo">
                            <h2>Lorem ipsum dolor sit amet</h2>
                        </div>
                        <div class="col-lg-6 col-md-10 col-12 p py-1">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde nostrum velit nemo ea, ut, porro, 
                                ducimus cupiditate adipisci at nam assumenda vel! Accusamus earum deserunt, necessitatibus ullam enim 
                                cum quas!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde nostrum velit nemo ea, ut, porro, 
                                ducimus cupiditate adipisci at nam assumenda vel! Accusamus earum deserunt, necessitatibus ullam enim 
                                cum quas!</p>
                                <img src="<?= asset('images/banners/pistola.png') ?>" width="80%" alt="">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde nostrum velit nemo ea, ut, porro, 
                                ducimus cupiditate adipisci at nam assumenda vel! Accusamus earum deserunt, necessitatibus ullam enim 
                                cum quas!</p>
                        </div>
                        <div class="d-flex justify-content-center py-2">
                            <button class="btn btn-custom" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                               Tenho interesse!
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Entraremos em contato com você!</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="">
                                        <input type="text" placeholder="Nome *" class="w-100 mt-1">
                                        <input type="email" placeholder="Email *" class="w-100 mt-1">
                                        <input type="number" placeholder="Número *" class="w-100 mt-1">
                                        <textarea name="" id="" Placeholder="Mensagem" class="w-100 mt-1" cols="30" rows="10"></textarea>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-custom">Enviar</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </section>
</main>