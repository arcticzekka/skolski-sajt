<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Wed May 10 2023 16:30:12 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6457a9a09f6fe72efb659b17" data-wf-site="6456c2138619102a79ba202a">
<head>
  <meta charset="utf-8">
  <title>О пројекту</title>
  <meta content="project-desc-page" property="og:title">
  <meta content="project-desc-page" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/tehnicka-skola-cacak.webflow.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">
      WebFont.load({
        google: {
          families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic", "Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic", "PT Serif:400,400italic,700,700italic", "Inter:300,regular,500,600,700,800:cyrillic,cyrillic-ext,latin", "Roboto:regular,italic,500,700,700italic,900,900italic:cyrillic,latin"]
        }
      });
    </script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">
      ! function(o, c) {
        var n = c.documentElement,
          t = " w-mod-";
        n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
      }(window, document);
    </script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
</head>
<body>
  <div data-animation="default" class="navbar w-nav" data-easing2="ease" data-easing="ease" data-collapse="all" style="background-color:rgb(255,255,255)" data-w-id="0c94566d-6df6-659c-8c39-634a470a38e8" role="banner" data-no-scroll="1" data-duration="400" data-doc-height="1">
    <div class="container nav-container">
      <a href="index.php" class="w-nav-brand"><img src="images/grb.png" loading="lazy" sizes="(max-width: 479px) 38vw, 90px" srcset="images/grb.png 500w, images/grb.png 800w, images/grb.png 1000w" alt="" class="image-17"></a>
      <div class="nav-wrapper">
        <nav role="navigation" class="nav-menu w-nav-menu">
          <div class="container nav-menu-container">
            <div class="menu-links">
              <a href="index.php" class="menu-link menu-hide w-nav-link">ПОЧЕТНА</a>
              <a href="obrazovni-profili.php" class="menu-link menu-hide w-nav-link">ОБРАЗОВНИ ПРОФИЛИ</a>
              <a href="ucenici.php" class="menu-link menu-hide w-nav-link">ЗА УЧЕНИКЕ</a>
              <a href="takmicenja.php" class="menu-link w-nav-link">ТАКМИЧЕЊА</a>
              <a href="projects-page.php" class="menu-link w-nav-link">НАСТАВНИ МАТЕРИЈАЛИ</a>
              <a href="rasporedi.php" class="menu-link w-nav-link">РАСПОРЕДИ</a>
              <a href="javne-nabavke.php" class="menu-link w-nav-link">ЈАВНЕ НАБАВКЕ</a>
              <a href="finansijski-izvjestaj.php" class="menu-link w-nav-link">ФИНАНСИЈСКИ ИЗВЕШТАЈИ И ПЛАНОВИ</a>
            </div>
            <div class="menu-text-block">©2023 ТЕХНИЧКА ШКОЛА ЧАЧАК</div>
          </div>
        </nav>
        <div style="display:flex" class="nav-links">
          <a href="index.php" class="nav-link w-nav-link">ПОЧЕТНА</a>
          <a href="obrazovni-profili.php" class="nav-link w-nav-link">ОБРАЗОВНИ ПРОФИЛИ</a>
          <a href="ucenici.php" class="nav-link w-nav-link">ЗА УЧЕНИКЕ</a>
        </div>
        <div style="background-color:rgb(255,255,255)" class="menu-button-2 w-nav-button">
          <div class="nav-button">
            <div style="color:rgb(0,0,0)" class="nav-btn-text">ВИШЕ</div><img src="images/arrow.svg" loading="lazy" width="20" style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0deg) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0deg) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0deg) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0deg) rotateY(0) rotateZ(0) skew(0, 0);transform-style:preserve-3d" alt="" class="image">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="project-desc-section wf-section">
      <?php
      include "../classes/vesti.php";
      $vestiClass = new Vesti();
      $id = $_GET["id"];
      $projekat = $vestiClass->selectSekcija($id);
      $slike = $vestiClass->getSekcijaFiles($id);

      ?>
    <h1 class="project-desc-title"><?= $projekat["naziv"] ?></h1>
    <div class="project-img-wrapper"><img src="/uploads/ostalo/<?= $slike[0]["uploadedFileName"] ?>" loading="lazy" sizes="(max-width: 1299px) 100vw, 1299px" srcset="/uploads/ostalo/<?= $slike[0]["uploadedFileName"] ?> 500w, /uploads/ostalo/<?= $slike[0]["uploadedFileName"]?> 800w, /uploads/ostalo/<?= $slike[0]["uploadedFileName"]?> 1080w, /uploads/ostalo/<?= $slike[0]["uploadedFileName"]?> 1299w" alt="" class="image-12"></div>
    <div class="p-desc"><?= $projekat["opis"] ?></div>
      <br>
      <?php
      foreach($slike as $index => $slika) {
          if($index == 0) continue;
      ?>
    <div class="project-img-wrapper"><img src="/uploads/ostalo/<?= $slika["uploadedFileName"] ?>" loading="lazy" sizes="(max-width: 1299px) 100vw, 1299px" srcset="/uploads/ostalo/<?= $slika[$index]["uploadedFileName"] ?> 500w, /uploads/ostalo/<?= $slika[$index]["uploadedFileName"] ?> 800w, /uploads/ostalo/<?= $slika[$index]["uploadedFileName"] ?> 1080w, /uploads/ostalo/<?= $slika[$index]["uploadedFileName"] ?> 1299w" alt="" class="image-12"></div>
    <?php } ?>
      <div class="project-img-wrapper"><img src="images/xmwkzipz-1.png" loading="lazy" sizes="(max-width: 511px) 100vw, 511px" srcset="images/xmwkzipz-1-p-500.png 500w, images/xmwkzipz-1.png 511w" alt="" class="image-13"></div>
  </div>
  <div class="container">
    <div data-delay="4000" data-animation="slide" class="slider slider-p slider-2 w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true">
      <div class="mask mask-p w-slider-mask">
        <div class="slide slide-p w-slide">
          <div class="card-page1 card-project slide-card-project">
            <div class="card-content card-content-projects"><img src="images/Rectangle-24.png" loading="lazy" sizes="(max-width: 479px) 76vw, (max-width: 991px) 77vw, 38vw" srcset="images/Rectangle-24-p-500.png 500w, images/Rectangle-24.png 696w" alt="" class="card-img card-img-project">
              <div class="card-projects-text-wrapper">
                <div class="op-section-list project-title">ПРОЈЕКАТ ЕРАЗМУС + &quot;Мобилношћу до...</div>
                <div class="text-block-2">Lorem ipsum dolor sit amet, consectetur adipiscingelit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua.</div>
                <a data-w-id="c308a38d-3e2e-e2db-974f-0ceac941abbc" href="#" class="op-btn-wrapper prica-btn projects-btn w-inline-block"><img src="images/Component-1.png" loading="lazy" style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0, 0);transform-style:preserve-3d" alt="" class="op-img">
                  <div class="projects-page-btn">Научите више о ПРОЈЕКАТ ЕРАЗ...</div>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="slide slide-p w-slide">
          <div class="card-page1 card-project slide-card-project">
            <div class="card-content card-content-projects"><img src="images/Rectangle-24.png" loading="lazy" sizes="(max-width: 479px) 76vw, (max-width: 991px) 77vw, 38vw" srcset="images/Rectangle-24-p-500.png 500w, images/Rectangle-24.png 696w" alt="" class="card-img card-img-project">
              <div class="card-projects-text-wrapper">
                <div class="op-section-list project-title">ПРОЈЕКАТ ЕРАЗМУС + &quot;Мобилношћу до...</div>
                <div class="text-block-2">Lorem ipsum dolor sit amet, consectetur adipiscingelit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua.</div>
                <a data-w-id="43ce28b8-c3fc-8c90-c469-50cb237c8d0b" href="#" class="op-btn-wrapper prica-btn projects-btn w-inline-block"><img src="images/Component-1.png" loading="lazy" style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0, 0);transform-style:preserve-3d" alt="" class="op-img">
                  <div class="projects-page-btn">Научите више о ПРОЈЕКАТ ЕРАЗ...</div>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="slide slide-p w-slide">
          <div class="card-page1 card-project slide-card-project">
            <div class="card-content card-content-projects"><img src="images/Rectangle-24.png" loading="lazy" sizes="(max-width: 479px) 76vw, (max-width: 991px) 77vw, 38vw" srcset="images/Rectangle-24-p-500.png 500w, images/Rectangle-24.png 696w" alt="" class="card-img card-img-project">
              <div class="card-projects-text-wrapper">
                <div class="op-section-list project-title">ПРОЈЕКАТ ЕРАЗМУС + &quot;Мобилношћу до...</div>
                <div class="text-block-2">Lorem ipsum dolor sit amet, consectetur adipiscingelit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua.</div>
                <a data-w-id="f0be91de-9f9f-8812-91f3-352fdab79634" href="#" class="op-btn-wrapper prica-btn projects-btn w-inline-block"><img src="images/Component-1.png" loading="lazy" style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0, 0);transform-style:preserve-3d" alt="" class="op-img">
                  <div class="projects-page-btn">Научите више о ПРОЈЕКАТ ЕРАЗ...</div>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="slide slide-p w-slide">
          <div class="card-page1 card-project slide-card-project">
            <div class="card-content card-content-projects"><img src="images/Rectangle-24.png" loading="lazy" sizes="(max-width: 479px) 76vw, (max-width: 991px) 77vw, 38vw" srcset="images/Rectangle-24-p-500.png 500w, images/Rectangle-24.png 696w" alt="" class="card-img card-img-project">
              <div class="card-projects-text-wrapper">
                <div class="op-section-list project-title">ПРОЈЕКАТ ЕРАЗМУС + &quot;Мобилношћу до...</div>
                <div class="text-block-2">Lorem ipsum dolor sit amet, consectetur adipiscingelit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua.</div>
                <a data-w-id="88d19eee-5125-3f59-a64c-dc773ee1594e" href="#" class="op-btn-wrapper prica-btn projects-btn w-inline-block"><img src="images/Component-1.png" loading="lazy" style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0, 0);transform-style:preserve-3d" alt="" class="op-img">
                  <div class="projects-page-btn">Научите више о ПРОЈЕКАТ ЕРАЗ...</div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="left-arrow w-slider-arrow-left">
        <div class="icon-2 w-icon-slider-left"></div>
      </div>
      <div class="right-arrow w-slider-arrow-right">
        <div class="icon-2 w-icon-slider-right"></div>
      </div>
      <div class="slide-nav slide-nav-p w-slider-nav w-round w-num"></div>
    </div>
  </div>
  <div class="w-embed">
    <style>
        .w-slider-dot {
          background: #eee;
          width: 45px;
          height: 3px;
          color: transparent;
        }
        .w-slider-dot.w-active {
          background: #020A4E;
        }
      </style>
  </div>
  <div class="all-sections footer wf-section">
    <h2 class="projects-title-heading footer-heading">Ваше место за напредак!</h2>
    <div class="container-2">
      <div class="w-row">
        <div class="column-7 w-col w-col-2">
          <div class="projets-title-line footer-line"></div><img src="images/grb.png" loading="lazy" sizes="(max-width: 479px) 50vw, (max-width: 767px) 120px, (max-width: 991px) 14vw, 120px" srcset="images/grb.png 500w, images/grb.png 800w, images/grb.png 1000w" alt="" class="image-16">
        </div>
        <div class="column-7 w-col w-col-2">
          <div class="projets-title-line footer-line"></div><img src="images/grbCacka.png" loading="lazy" alt="" class="image-18">
        </div>
        <div class="column-9 w-col w-col-2">
          <a href="index.php" class="footer-link">Почетна</a>
          <a href="kontakt-informacije.php" class="footer-link">Контакт информације</a>
          <a href="skola.php" class="footer-link">Наша прича</a>
          <div class="projets-title-line footer-line"></div>
          <a href="projects-page.php" class="footer-link">Пројекти</a>
        </div>
        <div class="column-10 w-col w-col-2">
          <a href="web-tim.php" class="footer-link">веб тим</a>
          <a href="skola.php" class="footer-link">Школа</a>
          <a href="obrazovni-profili.php" class="footer-link">Образовни профили</a>
          <div class="projets-title-line footer-line"></div>
          <a href="#aktuelnosti" class="footer-link">Актуелно</a>
          <a href="takmicenja.php" class="footer-link">Такмичења</a>
          <a href="ucenici.php" class="footer-link">За ученике</a>
        </div>
        <div class="column-13 w-col w-col-2">
          <a href="projects-page.php" class="footer-link">Наставни материјал</a>
          <a href="rasporedi.php" class="footer-link">Распореди</a>
          <a href="javne-nabavke.php" class="footer-link">Јавне набавке</a>
          <a href="finansijski-izvjestaj.php" class="footer-link">Финансијски извештаји</a>
        </div>
        <div class="column-8 w-col w-col-2">
          <a href="index.php" class="footer-link">Инстаграм</a>
          <a href="index.php" class="footer-link">Фацебоок</a>
          <a href="index.php" class="footer-link">Емаил</a>
        </div>
      </div>
    </div>
    <div class="text-block-3">©2023 ТЕХНИЧКА ШКОЛА ЧАЧАК</div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6456c2138619102a79ba202a" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
</body>
</html>