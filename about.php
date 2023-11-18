<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tazminatsor | Hakkımızda</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        #header {
            top: 0;
            left: 0;
            right: 0;
            height: 100%;
        }

        .container {
            max-width: 75rem !important;
        }

        .head_container {
            max-width: 75rem !important;
            margin: auto !important;
            width: 100% !important;
        }

        .top {
            position: relative;
            display: flex;
            justify-content: flex-end;
            height: 2.5rem;
            background: #219752;
            box-shadow: 0 0.0625rem 0.125rem #004e801a, 0 0.25rem 0.5rem #00000021;
        }

        .not-sticky-bar {
            height: 2.5rem;
        }

        .not-sticky-bar ul li a {
            font-weight: 400;
            font-size: 0.95rem;
            color: #fff;
            font-family: neuemedium;
            cursor: pointer;
            text-decoration: none;
        }

        .not-sticky-bar ul li {
            display: inline-block;
        }

        .collapse ul li a {
            margin-left: 1.25rem;
            margin-right: 1.25rem;
            font-family: neuemedium;
            color: black;
            text-decoration: none;
            cursor: pointer;
            font-size: 1.2rem;
            font-weight: 400;
        }

        .collapse ul li a:hover {
            color: #178546;
        }

        .not-sticky-bar ul li a:hover {
            color: #c1e3cc;
        }

        .form-label {
            font-size: 1.75rem;
            line-height: 2.25rem;
            font-weight: 400;
            letter-spacing: normal;
            font-family: neuemedium;
        }

        #navbar {
            background-color: #fff;
            color: black;
            transition: background-color 0.5s ease, color 0.5s ease;
            /* padding: 10px; */
            z-index: 10;
            top: 0;
            left: 0;
            right: 0;
            width: 100%;
            box-shadow: 0 0.0625rem 0.125rem #004e801a, 0 0.25rem 0.5rem #00000021;

        }

        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
            box-shadow: 0 0.0625rem 0.125rem #004e801a, 0 0.25rem 0.5rem #00000021;
            transition-delay: 1s !important;
            /* margin: 0 !important; */
        }

        .collapse>ul .dropdown-item {
            color: black;
        }

        .nav-pills>li {
            font-size: 1.75rem;
            line-height: 2.25rem;
            font-weight: 500;
            letter-spacing: normal;
            margin-top: 20px;
            font-family: neuemedium;
        }

        .navbar-brand img {
            width: 180px;
        }

        /* .breadcrumb-top {
            background: transparent;
        }

        .breadcrumb-item a {
            font-family: neueregular;
        }

        .breadcrumb-item {
            font-family: neueregular;
        } */

        .card-about {
            background-color: #dff3f8;
            border-radius: 8px;
            padding: 2.5rem;
            margin-bottom: 1.5rem;
            height: 250px;
            border: #fff;
        }

        .title-about {
            font-size: 1.25rem;
            line-height: 1.75rem;
            font-weight: 400;
            letter-spacing: normal;
            font-family: neuemedium;
        }

        .contact-ask {
            background-color: #178546;
            padding: 3rem;
            margin-top: 3rem;
        }

        .contact-ask .row p {
            color: #fff;
            font-family: "neuemedium", sans-serif;
        }
    </style>
</head>


<body>
    <header id="header" class="header-page">
        <div class="top-navbar">
            <div class="top--navbar">
                <div class="top d-none d-md-block">
                    <div class="head_container container">
                        <nav class="not-sticky-bar navbar navbar-expand-lg bg-body-tertiary" style="
                      display: flex;
                      justify-content: flex-end;
                      align-items: center;
                    ">
                            <div class="d-none d-md-block d-lg-none">
              <ul class="top-navbar-nav top-navbar-nav-md navbar-nav" style="padding: 0;">
                <li class="nav-item">
                  <a href="tel:02127060134" class="nav-link" style="padding: 0;">(0212) 706 0 134</a>
                </li>
              </ul>
              </div>
              <div class="d-none d-lg-block">
              <ul class="top-navbar-nav navbar-nav">
                <li class="nav-item">
                  <a href="tel:02127060134" class="nav-link">(0212) 706 0 134</a>
                </li>
                <li class="nav-item">
                  <a href="about.php" class="nav-link">Hakkımızda</a>
                </li>
                <li class="nav-item">
                  <a href="contact-form.php" class="nav-link">Size Ulaşalım</a>
                </li>
              </ul>
              </div>
                        </nav>
                    </div>
                </div>
                <div class="down down-page" id="navbar">
                    <div class="container head_container">
                        <!-- tam width için down ve head_container componentleri uçurulacak -->
                        <nav class="navbar navbar-expand-lg bg-body-tertiary">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="index.php"><img src="/assets/img/PNG.png" alt="" /></a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNavDropdown"
                                    style="justify-content: flex-end">
                                    <ul class="navbar-nav">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Tazminat Sor
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="wizard-kidem.php">Kıdem
                                                        Tazminatı</a></li>
                                                <li><a class="dropdown-item" href="#">İş Kazası Tazminatı</a></li>
                                                <li><a class="dropdown-item" href="wizard.php">Değer Kaybı
                                                        Tazminatı</a></li>
                                                <li><a class="dropdown-item" href="wizard-trafik.php">Trafik Kazası
                                                        Tazminatı</a></li>
                                                <li><a class="dropdown-item" href="wizard-miras.php">Miras Payı
                                                        Hesaplama</a></li>
                                                <li><a class="dropdown-item" href="wizard-mesai.php">Fazla Çalışma
                                                        Tazminatı</a></li>
                                            </ul>
                                        </li>
                                        <!-- <li class="nav-item">
                                            <a class="nav-link" href="#">Hizmetler</a>
                                        </li> -->
                                        <li class="nav-item">
                                            <a class="nav-link" href="hizmetlerimiz.php">Hizmetler</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="howto.php">Nasıl Çalışır?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="contact.php">İletişim</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- <div class="breadcrumb-top">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Ana Sayfa</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Hakkımızda</li>
                </ol>
            </nav>
        </div>
    </div> -->
    <main>
        <section>
            <div class="container head_container">
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block" style="margin-top: 20rem;">
                        <h2 class="main-content-title">Hakkımızda</h2>
                        <p style="font-size: 1rem;
                            line-height: 1.5rem;
                            font-weight: 400;
                            letter-spacing: .25px;">Tazminatsor.com olarak en büyük amacımız, hakları olduğunu düşünen
                            kişilerin
                            kolayca haklarını öğrenebilmesini ve öğrendiği haklarını alabilmesi için hızlı ve
                            güvenli bir süreç sağlamaktır. Hakları olduğunu düşünen kişilerin, bilgiye ve
                            tecrübeye ulaşım sıkıntısının önüne geçerek alanında uzman kişilerle
                            buluşmasını sağlıyor ve tüm süreci onlar için yönetiyoruz.</p>

                    </div>
                    <div class="col-lg-6 d-block d-lg-none">
                        <h2 class="main-content-title">Hakkımızda</h2>
                        <p style="font-size: 1rem;
                            line-height: 1.5rem;
                            font-weight: 400;
                            letter-spacing: .25px;">Tazminatsor.com olarak en büyük amacımız, hakları olduğunu düşünen
                            kişilerin
                            kolayca haklarını öğrenebilmesini ve öğrendiği haklarını alabilmesi için hızlı ve
                            güvenli bir süreç sağlamaktır. Hakları olduğunu düşünen kişilerin, bilgiye ve
                            tecrübeye ulaşım sıkıntısının önüne geçerek alanında uzman kişilerle
                            buluşmasını sağlıyor ve tüm süreci onlar için yönetiyoruz.</p>

                    </div>
                    <div class="col-lg-6">
                        <img src="assets/img/9.png" style="width: 100%;" alt="">
                    </div>
                </div>
                <div class="row" style="margin-top: 4rem;">
                    <h2 class="main-content-title d-flex justify-content-center">İlkelerimiz</h2>
                    <div class="col-lg-4">
                        <div class="card card-about">
                            <p class="title-about">Hızlılık</p>
                            <p class="description-about">Müvekkiller için süreci en hızlı şekilde tamamlıyoruz.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-about">
                            <p class="title-about">Kolaylık</p>
                            <p class="description-about">Müvekkilleri minimum çabayla haklarına kavuşturuyoruz.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-about">
                            <p class="title-about">''tazminatsor.com'' Güvencesi</p>
                            <p class="description-about">Hukuki süreç boyunca bilgilerinizi gizli tutuyor ve sizi
                                kanunlar çerçevesinde
                                koruyoruz.</p>
                        </div>
                    </div>
                </div>
                <div class="d-none d-md-block">
                    <div class="contact-ask">
                        <div class="contact-text">
                            <h1 class="card-title d-flex justify-content-center" style="font-family: neuemedium; color: #fff;">
                                Tazminat Almanın En Kolay Yolu</h1>
                            <div class="container">
                                <div class="row pt-5">
                                    <div class="col-8 offset-2">
                                        <p><i class="bi bi-caret-right-fill"></i>&nbsp; Ücretsiz hizmetimiz sayesinde, siz
                                            haklarınızı almadığınız sürece bizde bir ücret
                                            almıyoruz.</p>
                                    </div>
                                    <div class="col-8 offset-2">
                                        <p><i class="bi bi-caret-right-fill"></i>&nbsp; Müşteri hizmetlerimize tüm iş günlerinde
                                            ulaşabilir sizde tazminatınız veya
                                            dosyanızla ilgili bilgi alabilirsiniz.</p>
                                    </div>
                                    <div class="col-8 offset-2">
                                        <p><i class="bi bi-caret-right-fill"></i>&nbsp; Ekibimizde bulunan birçok uzman
                                            sayesinde, alanınızda en uzman kişiyi bulup
                                            haklarınızı onunla aramanızı sağlıyoruz.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-md-none">
                    <div class="contact-ask">
                        <div class="contact-text">
                            <h1 class="card-title d-flex justify-content-center" style="font-family: neuemedium; color: #fff;">
                                Tazminat Almanın En Kolay Yolu</h1>
        
                            <div class="row pt-5">
                                <div class="col-12">
                                    <p><i class="bi bi-caret-right-fill"></i>&nbsp; Ücretsiz hizmetimiz sayesinde, siz
                                        haklarınızı almadığınız sürece bizde bir ücret
                                        almıyoruz.</p>
                                </div>
                                <div class="col-12">
                                    <p><i class="bi bi-caret-right-fill"></i>&nbsp; Müşteri hizmetlerimize tüm iş günlerinde
                                        ulaşabilir sizde tazminatınız veya
                                        dosyanızla ilgili bilgi alabilirsiniz.</p>
                                </div>
                                <div class="col-12">
                                    <p><i class="bi bi-caret-right-fill"></i>&nbsp; Ekibimizde bulunan birçok uzman sayesinde,
                                        alanınızda en uzman kişiyi bulup
                                        haklarınızı onunla aramanızı sağlıyoruz.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="security-section" style="background-color: #e5f4ea; padding: 3rem;">
                  <h1 class="justify-content-center d-flex" style="font-family: neuemedium; color: #178546;">"tazminatsor.com"
                      Güvencesi</h1>
                  <div class="row justify-content-center d-flex pt-5">
                      <div class="col-lg-8">
                          <div class="row">
                              <div class="col-lg-4">
                                  <p class="title-about" style="color: #178546;">Hızlılık</p>
                                  <p class="description-about">Müvekkiller için süreci en hızlı şekilde tamamlıyoruz.
                                  </p>
                              </div>
                              <div class="col-lg-4">
                                  <p class="title-about" style="color: #178546;">Kolaylık</p>
                                  <p class="description-about">Müvekkilleri minimum çabayla haklarına kavuşturuyoruz.
                                  </p>
                              </div>
                              <div class="col-lg-4">
                                  <p class="title-about" style="color: #178546;">''tazminatsor.com'' Güvencesi</p>
                                  <p class="description-about">Hukuki süreç boyunca bilgilerinizi gizli tutuyor ve sizi
                                      kanunlar çerçevesinde
                                      koruyoruz.
                                  </p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div> -->
            </div>
        </section>
    </main>
    <footer class="d-none d-lg-block">
        <div class="footer">
          <div class="footer-links">
            <div class="footer-container head_container container">
              <div class="row">
                <div class="col">
                  <a href="#"><img src="/assets/img/PNG.png" alt="" /></a>
                </div>
                <div class="footer-column col">
                  <ul>
                    <li>
                      <h5>Hizmetlerimiz</h5>
                    </li>
                    <li><a href="wizard-kidem.php">Kıdem Tazminatı</a></li>
                    <li><a href="wizard-is.php">İş Kazası Tazminatı</a></li>
                    <li><a href="wizard.php">Değer Kaybı Tazminatı</a></li>
                    <li>
                      <a href="wizard-trafik.php">Trafik Kazası Tazminatı</a>
                    </li>
                    <li><a href="wizard-miras.php">Miras Payı Hesaplama</a></li>
                    <li>
                      <a href="wizard-mesai.php">Fazla Çalışma Tazminatı</a>
                    </li>
                  </ul>
                </div>
                <div class="footer-column col">
                  <ul>
                    <li>
                      <h5>Destek</h5>
                    </li>
                    <li><a href="about.php">Hakkımızda</a></li>
                    <li><a href="howto.php">Nasıl Çalışır</a></li>
                    <li><a href="contact.php">Bize Ulaşın</a></li>
                    <li><a href="#">Sıkça Sorulan Sorular</a></li>
                  </ul>
                </div>
                <div class="footer-social col">
                  <ul>
                    <li>
                      <a
                        href="https://www.facebook.com/profile.php?id=100086926898072&mibextid=LQQJ4d"
                        target="_blank"
                        ><i class="bi bi-facebook"></i
                      ></a>
                      <a href="https://twitter.com/tazminatsorcom" target="_blank"
                        ><i class="bi bi-twitter"></i
                      ></a>
                      <a
                        href="https://instagram.com/tazminatsorcom?igshid=YmMyMTA2M2Y="
                        target="_blank"
                        ><i class="bi bi-instagram"></i
                      ></a>
                      <a
                        href="https://www.youtube.com/@tazminatsor/featured"
                        target="_blank"
                        ><i class="bi bi-youtube"></i
                      ></a>
                    </li>
                  </ul>
                  <a href="tel:02127060134"><i class="bi bi-phone"></i>&nbsp; (0212) 706 0 134</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr />
        <div class="container">
          <div class="copywright">
            <p>Copyright © 2023 tazminatsor.com, Tüm Hakları Saklıdır</p>
          </div>
        </div>
      </footer>
      <footer class="d-block d-lg-none">
        <div class="footer">
          <div class="footer-links">
            <div class="footer-container head_container container">
              <div class="row">
                <div
                  class="col d-flex justify-content-center"
                  style="margin-bottom: 1rem"
                >
                  <a href="#"><img src="/assets/img/PNG.png" alt="" /></a>
                </div>
  
                <div class="accordion accordion-flush" id="accordionFlushExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                      <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne"
                        aria-expanded="false"
                        aria-controls="flush-collapseOne"
                      >
                        Hizmetlerimiz
                      </button>
                    </h2>
                    <div
                      id="flush-collapseOne"
                      class="accordion-collapse collapse"
                      aria-labelledby="flush-headingOne"
                      data-bs-parent="#accordionFlushExample"
                    >
                      <a href="wizard-kidem.php" class="accordion-body"
                        >Kıdem Tazminatı</a
                      >
                    </div>
                    <div
                      id="flush-collapseOne"
                      class="accordion-collapse collapse"
                      aria-labelledby="flush-headingOne"
                      data-bs-parent="#accordionFlushExample"
                    >
                      <a href="#" class="accordion-body">İş Kazası Tazminatı</a>
                    </div>
                    <div
                      id="flush-collapseOne"
                      class="accordion-collapse collapse"
                      aria-labelledby="flush-headingOne"
                      data-bs-parent="#accordionFlushExample"
                    >
                      <a href="wizard.php" class="accordion-body"
                        >Değer Kaybı Tazminatı</a
                      >
                    </div>
                    <div
                      id="flush-collapseOne"
                      class="accordion-collapse collapse"
                      aria-labelledby="flush-headingOne"
                      data-bs-parent="#accordionFlushExample"
                    >
                      <a href="wizard-trafik.php" class="accordion-body"
                        >Trafik Kazası Tazminatı</a
                      >
                    </div>
                    <div
                      id="flush-collapseOne"
                      class="accordion-collapse collapse"
                      aria-labelledby="flush-headingOne"
                      data-bs-parent="#accordionFlushExample"
                    >
                      <a href="wizard-miras.php" class="accordion-body"
                        >Miras Payı Hesaplama</a
                      >
                    </div>
                    <div
                      id="flush-collapseOne"
                      class="accordion-collapse collapse"
                      aria-labelledby="flush-headingOne"
                      data-bs-parent="#accordionFlushExample"
                    >
                      <a href="wizard-mesai.php" class="accordion-body"
                        >Fazla Çalışma Tazminatı</a
                      >
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                      <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo"
                        aria-expanded="false"
                        aria-controls="flush-collapseTwo"
                      >
                        Destek
                      </button>
                    </h2>
                    <div
                      id="flush-collapseTwo"
                      class="accordion-collapse collapse"
                      aria-labelledby="flush-headingTwo"
                      data-bs-parent="#accordionFlushExample"
                    >
                      <a href="about.php" class="accordion-body"
                        >Hakkımızda</a
                      >
                    </div>
                    <div
                      id="flush-collapseTwo"
                      class="accordion-collapse collapse"
                      aria-labelledby="flush-headingTwo"
                      data-bs-parent="#accordionFlushExample"
                    >
                      <a href="howto.php" class="accordion-body"
                        >Nasıl Çalışır?</a
                      >
                    </div>
                    <div
                      id="flush-collapseTwo"
                      class="accordion-collapse collapse"
                      aria-labelledby="flush-headingTwo"
                      data-bs-parent="#accordionFlushExample"
                    >
                      <a href="contact-form.php" class="accordion-body"
                        >Size Ulaşalım</a
                      >
                    </div>
                    <div
                      id="flush-collapseTwo"
                      class="accordion-collapse collapse"
                      aria-labelledby="flush-headingTwo"
                      data-bs-parent="#accordionFlushExample"
                    >
                      <a href="contact-form.php" class="accordion-body"
                        >Sıkça Sorulan Sorular</a
                      >
                    </div>
                  </div>
                  <!-- <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                      <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree"
                        aria-expanded="false"
                        aria-controls="flush-collapseThree"
                      >
                        Nasıl Çalışır?
                      </button>
                    </h2>
                    <div
                      id="flush-collapseThree"
                      class="accordion-collapse collapse"
                      aria-labelledby="flush-headingThree"
                      data-bs-parent="#accordionFlushExample"
                    >
                      <p class="accordion-body">
                        1. Hesaplamanı Tamamla Verilen tazminat seçeneklerinden
                        sizi ilgilendiren hesaplamayı yapın ve uzmanlarımız
                        hesaplanan tutarı alabilmeniz için sizi arasın. <br />2.
                        Uzmanlarımız Tarafından Aran Uzmanlarımız süreç ile ilgili
                        bilgilendirme yapmak için formun sonunda vermiş olduğunuz
                        numaradan sizlere ulaşsın. <br />3. Hukuki Süreç
                        Tarafımızca Yürütülsün Uzmanlarla görüşmenin ardından bize
                        vereceğiniz yetkiyle hukuki süreci başlatalım ve sonlanana
                        kadar takip edelim. <br />4. Paran Hesabına Yatsın Hukuki
                        süreç sonunda hükmedilen kesin tazminatlar tahsil
                        edilerek, paylaştığınız hesap bilgilerine %15 oranında
                        hizmet bedeli kesildikten sonra aktarılsın.
                      </p>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFour">
                      <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseFour"
                        aria-expanded="false"
                        aria-controls="flush-collapseFour"
                      >
                        Hakkımızda
                      </button>
                      <div
                        id="flush-collapseFour"
                        class="accordion-collapse collapse"
                        aria-labelledby="flush-headingFour"
                        data-bs-parent="#accordionFlushExample"
                      >
                        <p class="accordion-body">
                          Tazminatsor.com olarak en büyük amacımız, hakları
                          olduğunu düşünen kişilerin kolayca haklarını
                          öğrenebilmesini ve öğrendiği haklarını alabilmesi için
                          hızlı ve güvenli bir süreç sağlamaktır. Hakları olduğunu
                          düşünen kişilerin, bilgiye ve tecrübeye ulaşım
                          sıkıntısının önüne geçerek alanında uzman kişilerle
                          buluşmasını sağlıyor ve tüm süreci onlar için
                          yönetiyoruz.
                        </p>
                      </div>
                    </h2>
                  </div> -->
                </div>
                <div class="footer-social col">
                  <ul>
                    <li>
                      <a
                        href="https://www.facebook.com/profile.php?id=100086926898072&mibextid=LQQJ4d"
                        target="_blank"
                        ><i class="bi bi-facebook"></i
                      ></a>
                      <a href="https://twitter.com/tazminatsorcom" target="_blank"
                        ><i class="bi bi-twitter"></i
                      ></a>
                      <a
                        href="https://instagram.com/tazminatsorcom?igshid=YmMyMTA2M2Y="
                        target="_blank"
                        ><i class="bi bi-instagram"></i
                      ></a>
                      <a
                        href="https://www.youtube.com/@tazminatsor/featured"
                        target="_blank"
                        ><i class="bi bi-youtube"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    <script type="text/javascript" src="custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>

</html>