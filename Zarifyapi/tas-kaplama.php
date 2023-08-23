<!DOCTYPE html>
<html lang="en">

<head>
    <!---optimize edildi--->

    <title>
        <?php echo $lang_array['home-title']; ?>
    </title>
    <!-- Diğer meta etiketleri buraya eklenecek -->
    <link rel="stylesheet" href="assets/css/urun.css" /> <!-- Bu satır, CSS dosyanızı ekler -->
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
<link rel="canonical" href="<?php echo $lang_array['home-url']; ?>" /><link rel="icon" href="assets/images/logo75px.png" type="image/x-icon">    <link rel="stylesheet" href="assets/css/lightbox.css" />
</head>

<body>
    <?php include("assets/includes/head.php"); ?>
    <?php include("assets/includes/preloader.php"); ?>
    <?php include("assets/includes/header.php"); ?>

    <main>
        <section>
            <div style="position: relative; display: inline-block;">
                <img loading="lazy" src="assets/images/kultur-tasi.png" class="img-fluid" alt="...">
                <div class="urunbaslik"
                    style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                    <h1 style="color: white; animation: myAnimationn 2s infinite;">Taş kaplama</h1>
                </div>
            </div>
        </section>

        <section class="bolum1 container text-center">
            <div class="row">
                <div class="col-12">
                    <div class="baslik">
                        <h2>ürünlerimiz</h2>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="kart">
                        <img loading="lazy" src="assets/images/ahsap-beton.jpg" alt=""
                            style="width: 300px; height: 300px;">
                        <div class="kart-baslik">
                            <h4 style="color: white;">ahşap brüt beton</h4>
                        </div>
                        <p>Ahşap brüt beton, ahşap ve betonun estetik bir kombinasyonunu temsil eder.</p>
                        <a href="ahsap-taslar.php"
                            class="btn-eff-01 btn-eff-02-pre me-md-4 me-3 my-md-0 my-3 animated di-2"
                            data-animation="fadeInUp">Keşfet</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="kart">
                        <img loading="lazy" src="assets/images/kultur-tasi.jpg" alt=""
                            style="width: 300px; height: 300px;">
                        <div class="kart-baslik">
                            <h4 style="color: white;">Kültür Taşı</h4>
                        </div>
                        <p>Kültür taşı, doğal ve görsel olarak çekici bir malzeme olan taşın estetik bir
                            kullanımını ifade eder.</p>
                        <a href="kultur-tasi.php"
                            class="btn-eff-01 btn-eff-02-pre me-md-4 me-3 my-md-0 my-3 animated di-2"
                            data-animation="fadeInUp">Keşfet</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="kart">
                        <img loading="lazy" src="assets/images/kultur-tuglasi.jpg" alt=""
                            style="width: 300px; height: 300px;">
                        <div class="kart-baslik">
                            <h4 style="color: white;">Kültür Tuğlası</h4>
                        </div>
                        <p>Kültür tuğlası, rustik ve sıcak bir görünüm sağlayan tuğla malzemesinin dekoratif kullanımını
                            temsil eder..</p>
                        <a href="kultur-tuglasi.php"
                            class="btn-eff-01 btn-eff-02-pre me-md-4 me-3 my-md-0 my-3 animated di-2"
                            data-animation="fadeInUp">Keşfet</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="kart">
                        <img loading="lazy" src="assets/images/patlatma-tas.jpg" alt=""
                            style="width: 300px; height: 300px;">
                        <div class="kart-baslik">
                            <h4 style="color: white;">PATLATMA TAŞ</h4>
                        </div>
                        <p>Patlatma taşı, doğal ve rustik bir görünüm sunan taş çeşitlerini ifade eder.</p>
                        <a href="patlatma-tas.php"
                            class="btn-eff-01 btn-eff-02-pre me-md-4 me-3 my-md-0 my-3 animated di-2"
                            data-animation="fadeInUp">Keşfet</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="kart">
                        <img loading="lazy" src="assets/images/yer-tasi.jpg" alt=""
                            style="width: 300px; height: 300px;">
                        <div class="kart-baslik">
                            <h4 style="color: white;">Yer Taşı</h4>
                        </div>
                        <p>Yer taşı, doğal ve sağlam bir malzeme olan taşın zemin kaplamalarında kullanılan bir çeşidini
                            ifade eder.</p>
                        <a href="yer-tasi.php" class="btn-eff-01 btn-eff-02-pre me-md-4 me-3 my-md-0 my-3 animated di-2"
                            data-animation="fadeInUp">Keşfet</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="kart">
                        <img loading="lazy" src="assets/images/dogal-tas.jpg" alt=""
                            style="width: 300px; height: 300px;">
                        <div class="kart-baslik">
                            <h4 style="color: white;">İnce doğal taş</h4>
                        </div>
                        <p>İnce doğal taş, zarif ve doğal bir görünüm sağlayan ince kesilmiş taşları ifade eder.</p>
                        <a href="dogal-tas.php"
                            class="btn-eff-01 btn-eff-02-pre me-md-4 me-3 my-md-0 my-3 animated di-2"
                            data-animation="fadeInUp">Keşfet</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="bolum1 container text-center">
            <div class="row">
                <div class="col-12">
                    <div class="baslik">
                        <span class="text-brown">ZARİF YAPI</span>
                        <h2>TAŞ kaplama</h2>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
            <div class="row content services-grids">
                <div class="col col-lg-4 col-sm-6">
                    <div class="grid">
                        <div class="icons">
                            <i class="fa fa-hammer"></i>
                        </div>
                        <h3>Neden Zarif Yapı?</h3>
                        <p><span>Zarif yapı, estetik ve şık tasarım anlayışıyla müşterilerine görsel açıdan çekici
                                çözümler sunar. Yüksek kaliteli ürünleri ve uzman ekibiyle güvenilir ve memnuniyet
                                odaklı hizmet sağlar. Müşteri ihtiyaçlarına odaklanarak özel ve kişiselleştirilmiş
                                çözümler sunar.</span></p>
                    </div>
                </div>
                <div class="col col-lg-4 col-sm-6">
                    <div class="grid">
                        <div class="icons">
                            <i class="fa fa-igloo"></i>
                        </div>
                        <h3>Taş Duvar Kaplama</h3>
                        <p><span>Eviniz, işyeriniz, bahçeniz, şömineniz için, hayal ettiğiniz veya aklınızda olan her
                                konsepte uygun bir kültür taşı veya kültür tuğlasını Stonewrap’da bulabilirsiniz.</span>
                        </p>
                    </div>
                </div>
                <div class="col col-lg-4 col-sm-6">
                    <div class="grid">
                        <div class="icons">
                            <i class="fa fa-border-none"></i>
                        </div>
                        <h3>Taş Kaplama Seçimi</h3>
                        <p><span>Zarif Yapı Taş Kaplama Seçiminizde konusunda deneyimli uzman mühendis ve iç
                                mimarlarımız
                                siz değerli müşterilerimize her zaman yardımcı olacaktır.</span></p>
                    </div>
                </div>
                <div class="col col-lg-4 col-sm-6">
                    <div class="grid">
                        <div class="icons">
                            <i class="fa fa-chess-board"></i>
                        </div>
                        <h3>Tuğla Kaplama</h3>
                        <p><span>Zarif Yapı Kültür Tuğlaları 9 farklı doku ve 50 farklı renk seçeneği ile karşımıza
                                çıkıyor. Tüm tuğla modellerimiz hem iç mekanlarda hem de dış cephelerde gönül
                                rahatlığıyla uygulanabilir.</span></p>
                    </div>
                </div>
                <div class="col col-lg-4 col-sm-6">
                    <div class="grid">
                        <div class="icons">
                            <i class="fa fa-handshake"></i>
                        </div>
                        <h3>Uzman Ekip</h3>
                        <p><span>Bünyemizde barındırdığımız konusunda uzman montaj ekiplerimiz ile gerek perakende
                                bazında, gerekse proje bazında tüm uygulamalara, optimal terminlerle hizmet
                                vermekteyiz.</span></p>
                    </div>
                </div>
                <div class="col col-lg-4 col-sm-6">
                    <div class="grid">
                        <div class="icons">
                            <i class="fa fa-lightbulb"></i>
                        </div>
                        <h3>Ücretsiz Keşif</h3>
                        <p><span>Talebiniz doğrultusunda, konusunda uzman mühendislerimiz ile, ölçülendirme, mekan
                                analizi, konsept tasarımı, renk ve malzeme seçimi konusunda ücretsiz destek
                                vermekteyiz.</span></p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include("assets/includes/footer.php"); ?>
    <?php include("assets/includes/scripts.php"); ?>
    <script src="assets/js/home.js" defer></script>
</body>

</html>