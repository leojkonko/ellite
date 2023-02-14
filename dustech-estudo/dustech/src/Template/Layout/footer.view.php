<footer class="footer">
    <div class="footer-div">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-3 col-sm-12 d-flex align-items-center justify-content-center logo-footer">
                    <img src="<?= asset('images/logos/logo.svg') ?>" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6 col-6 d-flex align-items-center justify-content-center">
                    <ul class="links-site">
                        <li>Empresa</li>
                        <li>Cores sólidas</li>
                        <li>Cores metálicas</li>
                        <li>Treinamentos</li>
                        <li>Blog</li>
                        <li>Contato</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-12 d-flex align-items-center justify-content-center">
                    <ul class="infos">
                        <li>
                            <a href="">
                                <img src="<?= asset('images/icones/localizacao.svg') ?>" alt="">
                                BR 470, Km222 | Pavilhão 1 - Garibaldina, Garibaldi - RS, 95720-000
                            </a>
                        </li>
                        <li><a href=""><img src="<?= asset('images/icones/telefone.svg') ?>" alt=""></a>+55
                            (54) 3698-6555</li>
                        <li>
                            <a href="" class="d-flex align-items-center gap-0-50">
                                <img src="<?= asset('images/icones/email.svg') ?>" alt="">
                                contato@dustech.com.br
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-2 col-xs-6 col-6 d-flex align-items-center justify-content-center">
                    <ul class="infos redes">
                        <li>
                            <a href="">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M24 12.073C24 18.062 19.606 23.027 13.87 23.928V15.565H16.659L17.19 12.105H13.87V9.86C13.87 8.913 14.334 7.991 15.82 7.991H17.329V5.045C17.329 5.045 15.959 4.811 14.65 4.811C11.916 4.811 10.13 6.468 10.13 9.467V12.104H7.091V15.564H10.13V23.927C4.395 23.025 0 18.061 0 12.073C0 5.446 5.373 0.072998 12 0.072998C18.627 0.072998 24 5.445 24 12.073Z" fill="white" fill-opacity="0.7" />
                                </svg>
                            </a>
                        </li>
                        <li><a href=""><img src="<?= asset('images/icones/instagram.svg') ?>" alt=""></a>
                        </li>
                        <li><a href=""><img src="<?= asset('images/icones/youtube.svg') ?>" alt=""></a>
                        </li>
                        <li><a href=""><img src="<?= asset('images/icones/linkedin.svg') ?>" alt=""></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php /* ==== Scripts ==== */ ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="<?= asset('js/vendors/jquery.mask.min.js') ?>"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@7/swiper-bundle.min.js"></script>

<?php /* Scripts opcionais
// GSAP
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/ScrollTrigger.min.js"></script>
*/ ?>

<script src="<?= asset('js/vendors/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= asset('js/main.js') ?>"></script>

<?php
/* ==== Arquivo para o pessoal do back end ==== 
<script src="<?= asset('js/custom.js') ?>"></script>  
*/ ?>

</body>

</html>