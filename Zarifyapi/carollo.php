<!DOCTYPE html>
<html lang="en">
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

<!-- #Social Media End -->

<title>
  <?php echo $lang_array['home-title']; ?>
</title>

<meta name="description" content="<?php echo $lang_array['home-description']; ?>" />

<meta name="keywords" content="<?php echo $lang_array['home-keywords']; ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">





<!-- End Header -->
<!-- Content -->

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


    




    <!-- End Header -->
    <section>
      <div style="position: relative; display: inline-block;">
        <img loading="lazy" src="assets/images/somine-hazneleri.jpg" class="img-fluid" alt="...">
        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
          <h1 class="urunbaslik" style="color: white; animation: myAnimationn 2s infinite;"> Döküm Odun Sobası</h1>
        </div>

        <div style="position: absolute; top: 90%; left: 50%; transform: translate(-50%, -50%);">
          <div class="col-12">
            <ul id="filter" class="d-flex flex-wrap list-unstyled my-3">
              <li data-filter="*" class="active mr-2">HEPSİ</li>
              <li data-filter=".couple" class="mr-2">Döküm Odun Sobası</li>
              <li data-filter=".event" class="mr-2">Zen Döküm Odun Sobası</li>
            </ul>
          </div>

        </div>
      </div>

    </section>
    <br><br><br><br><br><br><br><br>

    <section class="our-wedding-feature container">

      <div class="our-wedding-grid">
        <div class="our-wedding-grid-item couple">
          <div class="our-wedding-card">
            <img loading="lazy" src="assets/images/soba/Carolo D/carolo12.jpeg" alt="düğün fotoğrafları"
              class="our-wedding-card-img-top">
            <div class="our-wedding-card-body">
              <h5 class="our-wedding-card-title">Döküm Odun Sobası</h5>
              <p class="our-wedding-card-text">Ürün Detayları Ve Uygulama Görselleri İçin Tıklayınız..
              </p>
              <a href="carollobasic.php" class="btn btn-primary">Detaylar İçin</a>
            </div>
          </div>
        </div>
        <div class="our-wedding-grid-item event">
          <div class="our-wedding-card">
            <img loading="lazy" src="assets/images/soba/Carolo Z/carolo-zen.jpg" class="our-wedding-card-img-top"
              alt="couple">
            <div class="our-wedding-card-body">
              <h5 class="our-wedding-card-title">Zen Döküm Odun Sobası</h5>
              <p class="our-wedding-card-text">Ürün Detayları Ve Uygulama Görselleri İçin Tıklayınız.</p>
              <a href="carollobasic.php" class="btn btn-primary">Detaylar İçin</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <br><br><br><br>
    <link rel="stylesheet" href="assets/css/urun.css" />
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const allFilter = document.querySelector("#filter [data-filter='*']");
        const coupleFilter = document.querySelector("#filter [data-filter='.couple']");
        const eventFilter = document.querySelector("#filter [data-filter='.event']");
        const musicFilter = document.querySelector("#filter [data-filter='.music']");
        const honeymoonFilter = document.querySelector("#filter [data-filter='.honeymoon']");
        const photographyFilter = document.querySelector("#filter [data-filter='.photography']");

        const gridItems = document.querySelectorAll(".our-wedding-grid-item");

        allFilter.addEventListener("click", function () {
          gridItems.forEach(function (item) {
            item.style.display = "block";
          });
        });

        coupleFilter.addEventListener("click", function () {
          gridItems.forEach(function (item) {
            item.style.display = item.classList.contains("couple") ? "block" : "none";
          });
        });

        eventFilter.addEventListener("click", function () {
          gridItems.forEach(function (item) {
            item.style.display = item.classList.contains("event") ? "block" : "none";
          });
        });

        musicFilter.addEventListener("click", function () {
          gridItems.forEach(function (item) {
            item.style.display = item.classList.contains("music") ? "block" : "none";
          });
        });

        honeymoonFilter.addEventListener("click", function () {
          gridItems.forEach(function (item) {
            item.style.display = item.classList.contains("honeymoon") ? "block" : "none";
          });
        });

        photographyFilter.addEventListener("click", function () {
          gridItems.forEach(function (item) {
            item.style.display = item.classList.contains("photography") ? "block" : "none";
          });
        });

        allFilter.click();
      });
    </script> <!-- End Content --> <!-- Footer -->

    <?php include("assets/includes/footer.php"); ?>

    <!-- End Footer -->
    <!-- JS -->

    <?php include("assets/includes/scripts.php"); ?>
    <script src="assets/js/home.js"></script>

    <!-- End JS -->

  </body>

</html>