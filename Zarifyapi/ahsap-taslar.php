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
  <!-- #Social Media End -->
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
          <h1 style="color: white; animation: myAnimationn 2s infinite;">Ahsap brüt taşlar</h1>
        </div>
      </div>
    </section>
    <br><br><br>
    <section class="our-wedding-feature container">

      <div class="our-wedding-grid">
        <div class="our-wedding-grid-item couple">
          <div class="our-wedding-card">
            <img loading="lazy" src="assets/images/tas/ahsap-beton-akkun-min.jpg" alt="düğün fotoğrafları"
              class="our-wedding-card-img-top">
            <div class="our-wedding-card-body">
              <h5 class="our-wedding-card-title">ahsap brüt beton</h5>
              <p class="our-wedding-card-text">Diğer renk seçenekleri ve uygulama görselleri için tıklayabilirsiniz.
              </p><a href="ahsap-taslar-brut.php"
                class="btn-eff-01 btn-eff-02-pre me-md-4 me-3 my-md-0 my-3 animated di-2" data-animation="fadeInUp">Dafa
                Fazlası</a>
            </div>
          </div>
        </div>
        <div class="our-wedding-grid-item event">
          <div class="our-wedding-card">
            <img loading="lazy" src="assets/images/tas/eskitme-ahsap-pamir-min.jpg" class="our-wedding-card-img-top"
              alt="honeymoon">
            <div class="our-wedding-card-body">
              <h5 class="our-wedding-card-title">eskitme ahşap beton</h5>
              <p class="our-wedding-card-text">Diğer renk seçenekleri ve uygulama görselleri için tıklayabilirsiniz.</p>
              <a href="ahsap-taslar-eskitme.php"
                class="btn-eff-01 btn-eff-02-pre me-md-4 me-3 my-md-0 my-3 animated di-2" data-animation="fadeInUp">Dafa
                Fazlası</a>
            </div>
          </div>
        </div>

      </div>
    </section>
    <br><br>
    <link rel="stylesheet" href="assets/css/urun.css" />
    <?php include("assets/includes/footer.php"); ?>
    <?php include("assets/includes/scripts.php"); ?>
    <script src="assets/js/home.js"></script>

    <!-- End JS -->

  </body>

</html>