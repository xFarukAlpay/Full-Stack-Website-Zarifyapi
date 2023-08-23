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
    <meta name="twitter:site" content="@Zarif Yapı" />
    <meta name="twitter:image" content="assets/images/logo75px.png" />
    <meta name="twitter:creator" content="@Zarif Yapı" />
    <meta name="robots" content="index, follow" />
    <meta http-equiv="Strict-Transport-Security" content="max-age=31536000; includeSubDomains">
    <link rel="canonical" href="<?php echo $lang_array['home-url']; ?>" />
    <link rel="icon" href="assets/images/logo75px.png" type="image/x-icon">
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

        <br><br><br><br><br>
        <div class="solust-resim-container">
            <a href="assets/images/3d-somine/ayflame_1000l3-min.jpg" data-lightbox="resim" data-title="Resmin Başlığı">
                <img loading="lazy" class="solust-resim" src="assets/images/3d-somine/ayflame_1000l3-min.jpg"
                    alt="Sol Üst Resim">
            </a>
        </div>
        <!-- Küçük resimler -->
        <div class="kucuk-resim-container">
            <a href="assets/images/3d-somine/ayflame_m7001-min.jpg" data-lightbox="resim" data-title="Küçük Resim 1">
                <img loading="lazy" class="kucuk-resim" src="assets/images/3d-somine/ayflame_1000l1-min.jpg"
                    alt="Küçük Resim 1">
            </a>
            <a href="assets/images/3d-somine/ayflame_m7003-min.jpg" data-lightbox="resim" data-title="Küçük Resim 2">
                <img loading="lazy" class="kucuk-resim2" src="assets/images/3d-somine/ayflame_1000l4-min.jpg"
                    alt="Küçük Resim 2">
            </a>
            <a href="assets/images/3d-somine/ayflame_m7005-min.jpg" data-lightbox="resim" data-title="Küçük Resim 3">
                <img loading="lazy" class="kucuk-resim3" src="assets/images/3d-somine/ayflame_m7005-min.jpg"
                    alt="Küçük Resim 3">
            </a>
            <a href="assets/images/3d-somine/ayflame_m7002-min.jpg" data-lightbox="resim" data-title="Küçük Resim 4">
                <img loading="lazy" class="kucuk-resim4" src="assets/images/3d-somine/ayflame_m7002-min.jpg"
                    alt="Küçük Resim 4">
            </a>
        </div>
        <!-- Content -->
        <main>
            <section>
                <div class="container">
                    <div class="sag-liste-kapsayici">
                        <ul class="sag-liste">
                            <h4>A700</h4>
                            <li>Görsel alev simülasyonu</li>
                            <li>Nemlendirme özelliği</li>
                            <li>Uzaktan kumanda</li>
                            <li>alev yüksekliği ayarlanabilir.</li>
                        </ul>
                    </div>
                </div>
            </section>
        </main>
        <link rel="stylesheet" href="assets/css/product.css" />
        <!-- Footer -->
        <?php include("assets/includes/footer.php"); ?>
        <!-- End Footer -->
        <!-- Lightbox2 CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css"
            integrity="sha512-9ABMcXdDQ1OcVx06G+Isfv5EF/4rCz5LjN7roBmF+P7ff7+mjiqbuR45/54c2SmBj1NEf/AG5ylEa1cG4X25A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Lightbox2 JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"
            integrity="sha512-pDlRYbwZ4NIMDITZrWu8UdnS2u3g80+zJz1nfrfWxFYV6qAjM4qH0yX8oX5J94BsQrTwtys43blNPmQuNxdkQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <?php include("assets/includes/scripts.php"); ?>
        <script src="assets/js/home.js"></script>
        <!-- End JS -->
    </body>

    </html>