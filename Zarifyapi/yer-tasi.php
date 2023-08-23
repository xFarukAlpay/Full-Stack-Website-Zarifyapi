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
        <img loading="lazy" src="assets/images/kultur-tasi.png" class="img-fluid" alt="...">
        <div class="urunbaslik" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
          <h1 style="color: white; animation: myAnimationn 2s infinite;">YER TASİ</h1>
        </div>
      </div>
    </section>
    <br><br><br><br>
    <section class="our-wedding-feature container">
      <div class="our-wedding-grid">
        <div class="our-wedding-grid-item darkyellow">
          <div class="our-wedding-card"> <a href="assets/images/yertasi/sienna-darkyellow.jpg" data-lightbox="resim"
              data-title="Resmin Başlığı">
              <img loading="lazy" src="assets/images/yertasi/sienna-darkyellow.jpg" alt="düğün fotoğrafları"
                class="our-wedding-card-img-top"></a>
            <div class="our-wedding-card-body">
              <h5 class="our-wedding-card-title">DARK YELLOW</h5>
              </p>
            </div>
          </div>
        </div>
        <div class="our-wedding-grid-item gray">
          <div class="our-wedding-card"> <a href="assets/images/yertasi/sienna-gray.jpg" data-lightbox="resim"
              data-title="Resmin Başlığı">
              <img loading="lazy" src="assets/images/yertasi/sienna-gray.jpg" class="our-wedding-card-img-top"
                alt="couple"></a>
            <div class="our-wedding-card-body">
              <h5 class="our-wedding-card-title">sienna-gray</h5>

            </div>
          </div>
        </div>
        <div class="our-wedding-grid-item red">
          <div class="our-wedding-card"> <a href="assets/images/yertasi/sienna-red.jpg" data-lightbox="resim"
              data-title="Resmin Başlığı">
              <img loading="lazy" src="assets/images/yertasi/sienna-red.jpg" class="our-wedding-card-img-top"
                alt="music"></a>
            <div class="our-wedding-card-body">
              <h5 class="our-wedding-card-title">sienna-red</h5>

            </div>
          </div>
        </div>
        <div class="our-wedding-grid-item travertine">
          <div class="our-wedding-card"> <a href="assets/images/yertasi/sienna-travertine.jpg" data-lightbox="resim"
              data-title="Resmin Başlığı">
              <img loading="lazy" src="assets/images/yertasi/sienna-travertine.jpg" class="our-wedding-card-img-top"
                alt="honeymoon"></a>
            <div class="our-wedding-card-body">
              <h5 class="our-wedding-card-title">sienna-travertine</h5>

            </div>
          </div>
        </div>
      </div>
    </section>
    <link rel="stylesheet" href="assets/css/urun.css" />
    <?php include("assets/includes/footer.php"); ?>
    <?php include("assets/includes/scripts.php"); ?>
    <script src="assets/js/home.js"></script>
  </body>

</html>