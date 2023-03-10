<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="150 words" />
    <meta name="keywords" content="your tags" />
    <meta name="author" content="Agência Ellite Digital">

    <?php /* ==== Favicons ==== */ ?>
    <link rel="apple-touch-icon" sizes="57x57" href="<?= asset('images/favicons/apple-icon-57x57.png') ?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= asset('images/favicons/apple-icon-60x60.png') ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= asset('images/favicons/apple-icon-72x72.png') ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= asset('images/favicons/apple-icon-76x76.png') ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= asset('images/favicons/apple-icon-114x114.png') ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= asset('images/favicons/apple-icon-120x120.png') ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= asset('images/favicons/apple-icon-144x144.png') ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= asset('images/favicons/apple-icon-152x152.png') ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= asset('images/favicons/apple-icon-180x180.png') ?>">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= asset('images/favicons/android-icon-192x192.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= asset('images/favicons/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= asset('images/favicons/favicon-96x96.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= asset('images/favicons/favicon-16x16.png') ?>">
    <link rel="manifest" href="<?= asset('images/favicons/manifest.json') ?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?= asset('images/favicons/ms-icon-144x144.png') ?>">
    <meta name="theme-color" content="#ffffff">

    <title><?= !empty($title) ? $title . " | Projeto Padrão" : "Projeto Padrão" ?></title>

    <?php /* ==== Stylesheets ==== */ ?>
    <link rel="stylesheet" href="<?= asset('css/bootstrap.css') ?>"> <?php /* ==== Arquivo do bootstrap ==== */ ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@7/swiper-bundle.min.css" />

    <link rel="stylesheet" href="<?= asset('css/main.css') ?>"> <?php /* ==== Arquivo do front ==== */ ?>
    <?php
    /* ==== Arquivo para o pessoal do back end ==== 
    <link rel="stylesheet" href="webroot/site/dist/css/custom.css"> 
    */ ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@200;300;400;500;600&display=swap" rel="stylesheet">

</head>

<body>

    <?php ob_start() ?>
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-8 col-sm-6 col-7 logo">
                    <a href="/" class="">
                        <img src="<?= asset('images/logos/logo.svg') ?>" width="75%" alt=""></a>
                </div>
                <div class="col-lg-8 col-md-1 col-sm-1 col-2 d-flex justify-content-center align-items-center menu-div">
                    <ul class="d-flex align-items-center menu d-lg-flex d-md-none d-sm-none d-xs-none ">
                        <li><a href="/">Empresa</a></li>
                        <li class="dropdown">
                            <button class="dropdown-button">Produtos</button>
                            <ul class="dropdown-content">
                                <li href="#"><a href="">Cores sólidas</a></li>
                                <li href="#"><a href="">Cores metálicas</a></li>
                            </ul>
                        </li>
                        <li><a href="/">Treinamento</a></li>
                        <li><a href="/">Blog</a></li>
                        <li><a href="/">Contato</a></li>
                    </ul>
                    <button class="btn d-lg-none d-xl-none d-md-flex d-sm-flex d-xs-flex " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="4" y="4" width="16" height="4" fill="white" />
                            <rect x="4" y="12" width="16" height="4" fill="white" />
                            <rect x="4" y="20" width="16" height="4" fill="white" />
                        </svg>
                    </button>
                </div>

                <div class="col-lg-1 col-md-2 col-sm-1 col-2 d-flex align-items-center div-menulateral">
                    <button class="btn " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <img src="<?= asset('images/icones/lupa.svg') ?>" alt="">
                    </button>
                </div>
            </div>
        </div>

    </header>
    <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
        <div class="offcanvas-header">
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="">
                <ul>
                    <li><a href="/">Empresa</a></li>
                    <li><a href="/">Produtos</a>
                        <div class="mt-1">
                            <button class="btn btn-light text-dark">Cor sólida</button>
                            <button class="btn  btn-outline-light ">Cor metálica</button>
                        </div>
                    </li>
                    <li><a href="/">Treinamento</a></li>
                    <li><a href="/">Blog</a></li>
                    <li><a href="/">Contato</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">


            <button type="button" class="btn-close text-reset text-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>

            <div class="offcanvas-body">
                <ul class="lista justify-content-center d-flex" id="menu">
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-end img-cards">
                            <img src="<?= asset('images/banners/cards-menu.svg') ?>" alt="">
                        </div>
                        <div class="col-lg-12 busca">
                            <h2 class="busca ">Busca</h2>
                            <p>Busque produtos por tipo e/ou código</p>
                            <input type="text" class="form-control" placeholder="Digite o código">
                        </div>
                        <div class="col-lg-12 mt-1 buttons">
                            <button class="btn btn-light text-dark">Cor sólida</button>
                            <button class="btn  btn-outline-light ">Cor metálica</button>
                            <button class="btn btn-custom"><img src="<?= asset('images/icones/lupa.svg') ?>" width="20px" alt=""></button>
                        </div>
                    </div>

                </ul>
            </div>
        </div>
    </div>
    <?php
    $header = ob_get_contents();
    ob_end_clean();
    ?>

    <?php if ($pagina_atual === "home") : ?>
        <?= $header ?>
    <?php else : ?>
        <div class="header-wrapper">
            <?= $header ?>
            <?php if (!empty($breadcrumbs)) : ?>
                <section class="breadcrumb-wrapper py-lg-4 bg-primary">
                    <?php if (!empty($title)) : ?>
                        <h1 class="h2 text-center text-white lh-1 mb-1">
                            <?= $title ?>
                        </h1>
                    <?php endif; ?>
                    <nav class="breadcrumb justify-content-center">
                        <?php
                        $i = -1;
                        $breadcrumbsLength = count($breadcrumbs) - 1;
                        foreach ($breadcrumbs as $breadcrumb) :
                            $i++;
                        ?>
                            <?php if ($i !== $breadcrumbsLength) : ?>
                                <a class="breadcrumb-item" href="<?= !empty($breadcrumb['url']) ? $breadcrumb['url'] : "#"  ?>">
                                    <span>
                                        <?= !empty($breadcrumb['title']) ? $breadcrumb['title'] : "Página"  ?>
                                    </span>
                                </a>
                            <?php else : ?>
                                <span class="breadcrumb-item active" aria-current="page">
                                    <span>
                                        <?= !empty($breadcrumb['title']) ? $breadcrumb['title'] : "Página"  ?>
                                    </span>
                                </span>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </nav>
                </section>
            <?php endif; ?>
        </div>
    <?php endif; ?>