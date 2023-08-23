<!DOCTYPE html>
<html lang="en">
<main>
  <meta property="og:site_name" content="<?php echo $lang_array['site-name']; ?>" />
  <meta property="og:title" content="<?php echo $lang_array['home-title']; ?>" />
  <meta property="og:description" content="<?php echo $lang_array['home-description']; ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="assets/images/logo75px.png" />
  <meta property="og:url" content="<?php echo $lang_array['home-url']; ?>" />
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:title" content="<?php echo $lang_array['home-title']; ?>" />
  <meta name="twitter:description" content="<?php echo $lang_array['home-description']; ?>" />
  <meta name="twitter:site" content="@Zarif yapı" />
  <meta name="twitter:image" content="assets/images/logo75px.png" />
  <meta name="twitter:creator" content="@Zarif yapı" />
  <meta name="robots" content="index, follow" />
  <link rel="canonical" href="<?php echo $lang_array['home-url']; ?>" />
  <link rel="stylesheet" href="assets/css/lightbox.css" />
  <title>
    <?php echo $lang_array['home-title']; ?>
  </title>
  <meta name="description" content="<?php echo $lang_array['home-description']; ?>" />
  <meta name="keywords" content="<?php echo $lang_array['home-keywords']; ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <body>
    <?php include("assets/includes/head.php"); ?>
    <?php include("assets/includes/preloader.php"); ?>
    <?php include("assets/includes/header.php"); ?>




    <section>
      <div style="position: relative; display: inline-block;">
        <img loading="lazy" src="assets/images/somine-hazneleri.jpg" class="img-fluid" alt="...">
        <div class="urunbaslik" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
          <h1 style="color: white; animation: myAnimationn 2s infinite;">Brio Döküm Odun Sobası</h1>
        </div>
        <div style="position: absolute; top: 90%; left: 50%; transform: translate(-50%, -50%);">

        </div>
      </div>
    </section> <br><br><br><br>
    <section class="our-wedding-feature container">
      <div class="our-wedding-grid">
        <div class="our-wedding-grid-item couple">
          <div class="our-wedding-card">
            <img loading="lazy" src="assets/images/soba/Brio Sur B/C1-BRIO-SUR-BANC.jpg" alt="düğün fotoğrafları"
              class="our-wedding-card-img-top">
            <div class="our-wedding-card-body">
              <h5 class="our-wedding-card-title">Brio Sur Banc Döküm Odun Sobası</h5>
              <p class="our-wedding-card-text">Ürün Detayları Ve Uygulama Görselleri İçin Tıklayınız..
              </p>
              <a href="briobasic.php" class="btn btn-primary">Detaylar İçin</a>
            </div>
          </div>
        </div>
        <div class="our-wedding-grid-item event">
          <div class="our-wedding-card">
            <img loading="lazy" src="assets/images/soba/Brio Sur P/briopied.jpeg" class="our-wedding-card-img-top"
              alt="couple">
            <div class="our-wedding-card-body">
              <h5 class="our-wedding-card-title">Brio Sur Pied Döküm Odun Sobası</h5>
              <p class="our-wedding-card-text">Ürün Detayları Ve Uygulama Görselleri İçin Tıklayınız.</p>
              <a href="briosur.php" class="btn btn-primary">Detaylar İçin</a>
            </div>
          </div>
        </div>
        <div class="our-wedding-grid-item event">
          <div class="our-wedding-card">
            <img loading="lazy" src="assets/images/soba/Brio Basic/WhatsApp-Image-2021-08-14-at-10.54.02.jpeg"
              class="our-wedding-card-img-top" alt="couple">
            <div class="our-wedding-card-body">
              <h5 class="our-wedding-card-title">Brio Döküm Odun Sobası</h5>
              <p class="our-wedding-card-text">Ürün Detayları Ve Uygulama Görselleri İçin Tıklayınız.</p>
              <a href="briosurpied.php" class="btn btn-primary">Detaylar İçin</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <br><br><br><br>
    <link rel="stylesheet" href="assets/css/urun.css" />

  </body>
  <link rel="stylesheet" <!-- Lightbox2 JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"
    integrity="sha512-pDlRYbwZ4NIMDITZrWu8UdnS2u3g80+zJz1nfrfWxFYV6qAjM4qH0yX8oX5J94BsQrTwtys43blNPmQuNxdkQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <?php include("assets/includes/scripts.php"); ?>
  <script src="assets/js/home.js"></script>

</html>