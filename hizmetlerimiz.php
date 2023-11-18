<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tazminatsor | Hizmetlerimiz</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="collective.css">
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

        .main-content2-cardbody h4,
        .main-content2-cardbody p {
            display: flex;
            padding-left: 1rem;
            color: #178546;
        }

        .main-content2 {
            background-color: transparent;
        }

        .progressbar li::before {
            border: 5px solid #178546;
            color: #178546;
        }

        .progressbar li:after {
            background-color: #178546;
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
                    <li class="breadcrumb-item active" aria-current="page">Hizmetlerimiz</li>
                </ol>
            </nav>
        </div>
    </div> -->
    <div class="container">
        <div class="row">
            <!-- Modal Container -->
            <div class="grid col-md-6 col-lg-4" data-bs-toggle="modal" data-bs-target="#popup1">
                <figure class="effect-honey">
                    <img src="assets/img/hizmetler.jpg" alt="img04" />
                    <figcaption>
                        <h2>Kıdem <br><span>TAZMİNATI</span> <i></i></h2>
                        <a class="button" href="#">Devamını oku</a>
                    </figcaption>
                </figure>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="popup1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Kıdem Tazminatı</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <strong>Kıdem Tazminatı Nedir?</strong>
 Kıdem tazminatı, işçinin belirli bir süre çalışmasının ardından işine son verildiği ya da emekliliği 
dolayısıyla işinden ayrılması durumunda işverence ödenmesi gereken toplu paradır. Bir başka 
ifadeyle işçinin, çalıştığı iş yerinden ayrılırken geçmiş dönemdeki hizmetlerine karşılık işveren 
tarafından kanunen ödenmesi gereken tazminattır. Belirli süreli iş sözleşmelerinde sürenin dolması 
halinde işçi kıdem tazminatı almaya hak kazanamaz. 
 Kıdem tazminatı hakkı, işçinin çalışma hakları arasındaki en temel hakkıdır. Kıdem işçinin 
verimliliğini etkileyen ana unsurdur. Kıdem arttıkça işçinin işverimi yükselmekte ve bu durum 
işverenin kazancını doğrudan etkilemektedir. 
 Kıdem tazminatı; işçinin işverene olan bağlılığının bir sonucu olarak ortaya çıkan, 
<hr><strong>İşçinin Kıdem Tazminatı Alabilmesinin Koşulları Nelerdir?</strong>
 İşçinin aynı işverene bağlı olarak en az bir yıl çalışmış olması gerekir. Bu kıdem tazminatı 
alınabilmesinin ön koşuludur. Bu şart sağlandıktan sonra aşağıdaki şartlardan birinin varlığı halinde 
işçi, kıdem tazminatı alma hakkını elde etmiş olacaktır.
<br>• Emeklilik nedeniyle işten ayrılma
<br>• Askerlik görevi nedeniyle işten ayrılma
<br>• Kadının evlendikten sonraki bir yıl içinde kendi arzusuyla işten ayrılması 
<br>• İşçinin ölümü
<br>• İşverenin iş sözleşmesini haksız nedenlerle feshetmesi
<br>• İşçi tarafından iş sözleşmesinin sağlık, iyiniyet ve ahlak kurallarına aykırılık (haklı fesih nedenleri) 
sebebiyle feshedilmesi
<br>- İşçinin maaşının, fazla mesai alacağının veya başka alacağının ödenmemesi halinde işçi, iş akdini 
feshederek kıdem tazminatına hak kazanır.
<br>- İşverenin işçiye karşı işlediği her suçta işçi, iş akdini feshederek kıdem tazminatına hak kazanır.
<br>- İşçinin iş koşullarında esaslı değişiklik yapılması halinde işçi, iş akdini feshederek kıdem tazminatı 
alabilecektir. 
<br>- Sendika yöneticisi olan işçi, iş akdini askıya alma veya feshetme imkanlarına haizdir. Fesihle iş
akdini sonlandırması durumda işçi, kıdem tazminatı alabilecektir. 
<hr><strong>İşçinin Kıdem Tazminatı Alamayacağı Haller</strong>
<br><strong><font color="red">İşçinin kendi kusuruyla hastalanması veya engelli duruma gelmesi</font></strong>
<br>İşçinin tedavi edilemeyecek nitelikteki bir hastalığa yakalanması durumunda o işyerinde 
çalışmasının sağlığı açısından sakıncalara neden olacağının sağlık kurulu raporuyla ortaya 
konulması halinde işverenin fesih hakkı doğar. İşveren iş akdini feshettiğinde işçi kıdem tazminatı 
alamayacaktır.
 İşçinin tercih ettiği yaşam tarzı veya kastından dolayı engelli duruma gelmesi veyahut 
hastalanması sebebiyle doğacak devamsızlığın 3 iş günü art arda sürmesi veya bir ayda 5 iş günü 
devamsızlık yapması halinde işveren iş akdini feshederse işçi kıdem tazminatına hak kazanamaz.
 İşçinin alkol veya uyuşturucu bağımlılığı sebebiyle üç gün üst üste veya bir ayda beş kez işe 
gelmemesi halinde işveren iş akdini haklı sebeple feshetme imkanı elde eder, işveren feshettiğinde 
işçi kıdem tazminatı alamaz.
<br><strong><font color="red">İşçinin istifa etmesi</font></strong>
<br>Kural olarak, işten kendi rızasıyla istifa eden işçinin kıdem tazminatı talep etme hakkı yoktur. 
Ancak işçi haklı sebeplerden birini ileri sürerek istifa etmişse kıdem tazminatına hak 
kazanacaktır.İşçinin iş sözleşmesini sağlık, iyiniyet ve ahlak kurallarına aykırılık sebebiyle feshetmesi 
haklı sebeple fesihtir. 

<br><strong><font color="red">İşçinin, işverene veya onun ailesine yönelik kötü fiilleri</font></strong>
<br>İşçi, işverenin işinde çalıştığı süreçte iyiniyet ve ahlak kurallarına uymakla mükelleftir. İşçinin 
işveren veya onun aile bireylerinden anne - babası, eşi ve çocukları hakkında şeref ve onurlarını 
rencide edecek davranışlarda bulunur veya kötü sözler söylerse işveren haklı sebeple iş akdini 
feshedebilir. Aynı şekilde işçi, işveren hakkında şeref ve haysiyet kırıcı asılsız ihbar ve isnatlarda 
bulunduğu takdirde de kıdem tazminatı alamaz. 
 
<br><strong><font color="red">İşçinin devamsızlığı</font></strong>
 <br>İşçi işverenden izin almadan veya haklı bir nedene dayanmadan ardı ardına iki işgünü veya 
bir ay içinde iki defa herhangi bir tatil gününden sonraki işgünü veya bir ay içinde toplam üç iş
günü işine devam etmemesi halinde işveren iş akdini feshedebilir ve işçi kıdem tazminatı alamaz. 
İşçinin devamsızlığı haklı bir nedene dayanıyorsa işveren iş akdini devamsızlık gerekçesiyle 
feshedemez. 
 İşverenler devamsızlığı ispat etmek için tutanak tutmaktadırlar. İşçi açısından çözüm, 
tutanağa karşı tanık delili ile devamsızlık yapmadığını ispatlamaktır. 
<br><strong><font color="red">İşçinin gözaltına alınması veya tutuklanması</font></strong>
<br>İşçinin gözaltına alınması veya tutuklanması sebebiyle kıdem tazminatı alamaması halinde 
işçinin kıdem süresine göre bir ayırım yapılmıştır. Buna göre;
6 aylık işçiyse 2 haftadan fazla sürmesi durumunda
6 ay - 1,5 yıl süreleri arasında işçiyse 4 haftadan fazla sürmesi durumunda
1,5 yıl - 3 yıl süreleri arasında işçiyse 6 haftadan fazla sürmesi durumunda 
3 yıldan fazla süreli işçiyse 8 haftadan fazla sürmesi durumunda işveren, iş akdini haklı nedenle 
feshederek işçinin iş akdini sonlandırabilir. Bu durumda işçi kıdem tazminatı alamaz. 
<br><strong><font color="red">İşçinin işyerinde yedi günden fazla hapis cezasını gerektiren veya cezasının ertelenmesinin 
mümkün olmadığı bir suç işlemesi </font></strong>

<br>İşçi, işyerinde 7 günden fazla hapis cezası gerektiren ve cezası ertelenmeyen bir suç işlerse 
işveren, iş akdini feshedebilir ve işçi kıdem tazminatı alamaz. 


<br><strong><font color="red">İşçinin işe girdiği anda işverene yanıltıcı bilgi vermesi </font></strong>
<br>İşçinin iş sözleşmesi yapılırken sözleşmenin esaslı noktalarından biri için lüzumlu nitelikler veya 
şartlar kendisinde olmadığı halde bunların kendisinde bulunduğunu ileri sürmesi veya gerçeğe 
uygun olmayan bilgi veya sözler söyleyerek işvereni yanıltması halinde işveren, iş akdini 
feshedebilir ve işçi kıdem tazminatı alamaz.
 İşçi, iş akdi yapılırken kendisinin nitelikleri, iş bilgisi, yetenekleri ve tecrübesi konusunda 
işverene doğru bilgi vermek zorundadır. İşçinin yanlış bilgi vermesi ve verdiği yanlış bilginin iş
akdinin gereklerinin yerine getirilip getirilmemesi hususunda önem arz etmesi halinde işveren iş
akdini fesheder ve işçi kıdem tazminatı alamaz. İşçinin gerçeğe aykırı olarak verdiği bilgi ve sözler 
işin yürütülmesine bir etkide bulunuyorsa işveren bu maddeye dayanarak iş akdini feshedebilir. İşin 
yürütülmesinde etkisi olmayan yanıltıcı bilgiler feshe konu edilemez.
<br><strong><font color="red">İşçinin sadakat yükümlülüğüne aykırı davranması </font></strong>
 <br>İşçinin sadakatsiz davranışlar sergilemesi, işveren açısından haklı fesih nedenlerinden biridir. 
İşçi sadakat yükümlülüğü ile kastedilen; işverenin menfaatinin korunması ve işverene zarar veren ve 
onu risk altına sokan davranışlardan kaçınılmasıdır. 
 İşçinin işten ayrılmasından sonraki süreçte sadakat yükümlülüğünün yerini rekabet yasağı 
almaktadır.Borçlar Kanunu m.444 düzenlemesi şu şekildedir: “Fiil ehliyetine sahip olan işçi, 
işverene karşı, sözleşmenin sona ermesinden sonra herhangi bir biçimde onunla rekabet 
etmekten, özellikle kendi hesabına rakip bir işletme açmaktan, başka bir rakip işletmede 
çalışmaktan veya bunların dışında, rakip işletmeyle başka türden bir menfaat ilişkisine girişmekten 
kaçınmayı yazılı olarak üstlenebilir. Rekabet yasağı kaydı, ancak hizmet ilişkisi işçiye müşteri çevresi 
veya üretim sırları ya da işverenin yaptığı işler hakkında bilgi edinme imkanı sağlıyorsa ve aynı 
zamanda bu bilgilerin kullanılması, işverenin önemli bir zararına sebep olacak nitelikteyse 
geçerlidir.”

<br><strong><font color="red">İşçinin işverene ait meslek sırlarını açıklaması</font></strong>
 <br>İş ilişkisinde işçi, iş nedeniyle öğrendiği mesleki sırları saklamakla yükümlüdür. Bu yükümlülük 
iş sözleşmesi sona erse bile sürmektedir. İşçinin, iş dolayısıyla öğrendiği sırları açıklamaması 
gerekliliği genel ahlak ve iş hukukundan doğar. 
 İşçi başkalarının öğrenmesini sağlamak amacıyla işverenin mesleki sırlarını açıklarsa işveren, iş
sözleşmesini feshedebilir ve işçi kıdem tazminatı alamaz. 

<br><strong><font color="red">İşçinin çalışmasının işveren açısından zorlayıcı bir sebebi ortaya çıkarması</font></strong>
<br>İşçinin çalışmasının işveren açısından zorlayıcı bir sebebi ortaya çıkarması
 İşçinin işyerinde bir haftadan fazla bir süre çalışmasını engelleyecek zorlayıcı bir sebebin varlığı 
halinde de işveren iş akdini haklı nedenle feshedebilir. 
 
<br><strong><font color="red">İşçinin iş güvenliğini tehlikeye düşürecek eylemlerde bulunması</font></strong>
<br>İşçinin kendi isteği veya ihmali yüzünden iş güvenliğini tehlikeye düşürmesi, işverene ait 
olsun veya olmasın işyerinde bulunan makinaları, tesisatı veya başka malları, kendisinin 30 günlük 
ücretiyle ödenemeyecek şekilde hasara uğratması halinde işveren iş akdini feshedebilir ve işçi, 
kıdem tazminatı almaya hak kazanamaz. 
<hr><strong>Kıdem Tazminatının Hesaplanması</strong>
 Kıdem tazminatı hesaplanırken brüt maaş gözönüne alınır. Kıdem tazminatı, brüt maaş
olarak hesaplanır. Brüt maaş, işçinin yıllık çalışma süresine göre hesaplanır. İşçinin çalışmış olduğu 
süre, 30 günlük brüt ücret ile çarpılır.
 Kıdem tazminatının hesaplanması, son ücret üzerinden yapılır. Parça başı, akort, götürü veya 
yüzde usulü gibi ücretin sabit olmadığı hallerde son bir yıllık süre içinde ödenen ücretin o süre 
içinde çalışılan günlere bölünmesi suretiyle bulunacak ortalama ücret bu tazminatın hesabında 
esas olarak kabul edilir. Fakat son bir yıl içinde işçinin ücretine zam yapıldığı takdirde tazminata 
esas ücret, işçinin işten ayrılma tarihi ile zammın yapıldığı tarih arasında alınan ücretin aynı süre 
içinde çalışılan günlere bölünmesi suretiyle hesaplanır. 
 Kıdem tazminatı hesabında işçinin sürekli ya da aralıklı çalışma süreleri ele alınır. Bu noktada 
önem kazanan husus, işçinin aynı işyerinde ya da aynı işverenin farklı işyerlerinde çalışması 
gerekliliğidir. 
<hr><strong>Kıdem Tazminatının Ödenmesi </strong>
 Kural olarak kıdem tazminatının iş akdinin feshinde peşin bir şekilde ödenmesi gerekir. 
Ancak, işçinin de onay vermesi halinde taksitler halinde ödeme yapılabilir. 
 
<hr><strong>Kıdem Tazminatının Zamanında Ödenmemesi Halinde İşleyen Gecilme Faizi</strong>
 Kıdem tazminatının zamanında ve tam olarak ödenmemesi halinde bankalarca mevduata 
uygulanan en yüksek faizle birlikte ödenmesi gerekmektedir. Kıdem tazminatının zamanında 
ödenmemesi durumunda faizin başlangıcı iş sözleşmesinin fesih tarihidir. Faiz temerrüt tarihinden 
itibaren işlemeye başlayacaktır. Ödenmemiş kıdem tazminatı için faiz, dava açma tarihi esas 
alınarak hesaplanamaz. 
 Kıdem tazminatının taksitler halinde ödenmesini kabul eden işçi, bu konuda iradesinin 
fesada uğratıldığını ileri sürüp kanıtlamadığı sürece faiz hakkından vazgeçmiş sayılır. 
 Kıdem tazminatının ödenmesi ile faiz hakkı da son bulur. Ancak kıdem tazminatının kısmen 
ödenmiş olması durumunda son taksit ödeninceye kadar faiz hakkı saklı tutulabilir. 
 Söz konusu faiz oranının uygulanmasına, kıdem tazminatının zamanında ödenmemesi 
nedeniyle açılacak davanın sonucunda hakim hükmeder. 
<hr><strong>Kıdem Tazminatına İlişkin Dava</strong>
 Kıdem tazminatı davası açılmadan önce arabuluculuk sürecinin olumlu ya da olumsuz olarak 
tamamlanması gerekmektedir. 
 İşçinin, İş Kanunu kapsamındaki bir işyerinde en az bir sene çalıştığı takdirde haklı bir 
nedene dayanılmadan işten çıkarılması veya kendisinin haklı bir nedene dayanarak işten ayrılması 
durumunda mağduriyetinin giderilmesi ve zararının daha fazla olmaması için açtığı davaya kıdem 
tazminatı davası denir. 
 İşçilerin haksız gerekçe ve sebeplerle işten çıkarılmasına karşı önlem niteliğinde olan kıdem 
tazminatı davası, hakkı bulunan ancak hakkını alamayan kişiler tarafından açılmaktadır. 

<hr><strong>Kıdem Tazminatına İlişkin Davalarda Yetkili ve Görevli Mahkeme</strong>
 
 Kıdem tazminatı davasında görevli olan mahkeme, İş Mahkemeleri’dir. Dava açılmak istenen 
yerde İş Mahkemesi bulunmaması durumunda Asliye Hukuk Mahkemesi’nde de dava açılır. 
 Yer açısından ise işçiye karar verebilme imkanı tanınmıştır. İşçi ikâmetgahının bulunduğu yerde 
bu davayı açabileceği gibi işyerinin bulunduğu yerde de açabilir. 
<hr><strong>Kıdem Tazminatında Zamanaşımı Süresi</strong>
 Kıdem tazminatı davası 10 yıl içinde açılmalıdır. Aksi halde zamanaşımı söz konusu 
olacağından dava hakkı iptal olacaktır. 
<hr><strong>İşyerinin Devri veya El Değiştirilmesi Hallerinde Kıdem Tazminatının Akıbeti</strong>
 İşyerlerinin devir veya intikali yahut herhangi bir suretle bir işverenden başka bir işverene 
geçmesi veya başka bir yere nakli, taşınması halinde işçinin kıdemi, işyeri veya işyerlerindeki iş
akitleri sürelerinin toplamı üzerinden hesaplanmaktadır. 12.07.1975 tarihinden önce işyeri 
devredilmişse yeni işveren; sonra devredilmişse iki işveren birlikte sorumludur.
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Container -->
            <div class="grid col-md-6 col-lg-4" data-bs-toggle="modal" data-bs-target="#popup2">
                <figure class="effect-honey">
                    <img src="assets/img/hizmetler2 (1).jpg" alt="img04" />
                    <figcaption>
                        <h2>Değer Kaybı <br><span>TAZMİNATI</span> <i></i></h2>
                        <a class="button" href="#">Devamını oku</a>
                    </figcaption>
                </figure>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="popup2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Değer Kaybı Tazminatı</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <strong>1-	ARAÇ DEĞER KAYBI TAZMİNATI NEDİR?</strong>

Meydana gelen bir trafik kazası sonucunda hasara uğramış aracın, kaza sonucunda tadilat, bakım veya onarım görmüş olsa dahi ikince el olarak satışında kaza öncesindeki değerini koruması mümkün değildir.
Trafik kazası sonucunda oluşan hasar eksiksiz bir şekilde onarılmış olsa dahi ikinci el olarak satışında yapılan onarım ve tramer kayıtları sebebiyle aracın değeri kaza öncesindeki değerinden daha düşük olması kaçınılmazdır.

Araç Değer Kaybı, meydana gelen bir trafik kazası sonucu hasar alan ve onarılan aracın kazadan önceki değeri ile kazadan sonraki değeri arasındaki olumsuz farktır.
Bu durumda meydana gelen trafik kazası sonucu kazada kusursuz veya daha az kusurlu olan taraf, Türk Borçlar Kanunu’nda haksız fiil sorumluluğu hükümlerine dayanarak kusurlu olan taraftan uğradığı zararın tazmini için Araç Değer Kaybı Tazminatı talep hakkı doğacaktır.

<hr><strong>2-	ARAÇ DEĞER KAYBI TAZMİNATI TALEP EDEBİLMEK İÇİN SAĞLANMASI GEREKEN ŞARTLAR?</strong>

Araç değer kaybı tazminatının talep edilebilmesi için kanun koyucunun aradığı bazı şartlar söz konusudur. Araç değer kaybı tazminatının talep edilebilmesi için sağlanması gereken şartlar şunlardır:

<br>1-	Araç değer kaybı tazminatı talebinde bulunacak kişinin aracında, meydana gelen trafik kazası öncesinde ağır hasar kaydı bulunmamalıdır.

<br>2-	Araç değer kaybı tazminatı talebinde bulunacak kişi, meydana gelen trafik kazasında %100 kusurlu olmamalıdır.

<br>3-	Meydana gelen trafik kazasının üzerinden 2 yıl geçmemiş olması gereklidir.

Yukarıda belirtilen şartların herhangi birinin sağlanmaması durumunda araç değer kaybı tazminatını talep etme hakkı doğmayacaktır.


<hr><strong>3-	ARAÇ DEĞER KAYBI TAZMİNATINDAN SORUMLU KİMLER?</strong>

Araç değer kaybı tazminatı talebinde bulunacak kişi, tazminat talebini bir veya birden fazla gerçek ve tüzel kişiye karşı bulunabilir.

Karayolları Trafik Kanunu’nun 85. Maddesinde ‘’bir motorlu aracın bir kimsenin ölümüne veya yaralanmasına yahut bir şeyin zarara uğramasına sebep olması halinde, motorlu aracın bir teşebbüsün unvanı veya işletme adı altında veya bu teşebbüs tarafından kesilen biletle
 
işletilmesi halinde, motorlu aracın işleteni ve bağlı olduğu teşebbüsün sahibi, doğan zarardan müştereken ve müteselsilen sorumlu olur.’’ belirtildiği üzere araç değer kaybı tazminatı talebinde bulunacak kişi ; meydana gelen trafik kazasında kusurlu olan aracın sürücüsüne, aracın malikine(sahibine) ve işletenine karşı talepte bulunabilir.

Araç değer kaybı tazminatından bir diğer sorumlu ise meydana gelen trafik kazasında kusurlu tarafin aracının zorunlu mali mesuliyet sigortasını yani bilinen diğer adıyla zorunlu trafik sigortasını yaptığı sigorta şirketidir. Zorunlu mali sorumluluk sigortası, sigorta şirketinin sigorta ettirilen araç ile üçüncü kişilere verdiği zararların maddi açıdan giderilmesini sağlayan bir teminaSr. Zorunlu mali sorumluluk sigortası bilindiği üzere kanunen her araç sahibi için yaptırılması zorunlu tutulmuştur. Türk Ticaret Kanunu’nun çeşitli maddelerinde belirtildiği üzere meydana gelen bir trafik kazası sonucunda araçta değer kaybı oluşması durumunda kusurlu olan tarafın sJgorta şJrketJ bu değer kaybını karşılamak zorundadır.

Sonuç olarak araç değer kaybı tazmJnatı talebJnde bulunacak kJşJ; araç sürücü, araç malJkJ (sahJbJ), JşletenJ ve kusurlu tarafa bağlı sJgorta şJrketJne de karşı talepte bulunabJlJr. Söz konusu tazmJnattan sayılan tüm gerçek ve tüzel kJşJler müteselsJlen(bJrlJkte) sorumludur.



<hr><strong>4-	ARAÇ DEĞER KAYBI TAZMİNAT TALEBİ ZAMANAŞIMI SÜRESİ?</strong>

Karayolları Trafik Kanunu’nun 109.maddesi ile Türk Borçlar Kanunu’nun 72.maddesi gereğince Araç Değer Kaybı Tazminatı talebi için zararı ve tazminat yükümlüsünün yani kusurlu olan tarafin öğrenildiği tarihten itibaren 2 yıl ve herhalde kaza gününden itibaren 10 yıl zamanaşımı süresine tabidir. Söz konusu süreler içerisinde talepte bulunulmadığı takdirde zamanaşımı gerçekleşecektir.


<hr><strong>5-	ARAÇ DEĞER KAYBI TAZMİNATI NASIL HESAPLANIR?</strong>

Araç Değer Kaybı Tazminatının hesaplanmasında uygulanacak usul ve esaslar 20/03/2020 tarihli resmi gazetede belirlenmiştir. Araç değer kaybı tazminatının hesaplanması tamamen matematiksel verilere dayandırılmıştır.





<hr><strong>6-	ARAÇ DEĞER KAYBI DAVASINDA GÖREVLİ VE YETKİLİ MAHKEME?</strong>

Araç Değer Kaybı Davası genel mahkemelerde çözümlenebileceği gibi sigorta tahkim komisyonunda da çözümlenebilir.

Araç Değer Kaybı davasında sigorta şirketine karşı açılacak davalarda görevli mahkeme Asliye Ticaret Mahkemesi ; araç sürücüsüne veya araç işletenine karşı açılan davalarda ise görevli mahkeme Asliye Hukuk Mahkemesidir.
 
Araç Değer Kaybı Davasında yetkili mahkeme 6100 Sayılı Hukuk Muhakemeleri Kanunu ve Karayolları Motorlu Araçlar Zorunlu Mali Sorumluluk Sigortası Genel Şartlarının 7.maddesi gereğince yetkili mahkeme, kazanın meydana geldiği yer veya zararın meydana geldiği yahut gelme ihtimalinin bulunduğu yer ya da zarar görenin yerleşim yeri mahkemesidir. Sigorta şirketine karşı açılacak davalarda sigorta şirketinin merkezinin veya şubesinin veya sigorta sözleşmesini yapan acentenin bulunduğu yer mahkemesi de yetkilidir.

                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Container -->
            <div class="grid col-md-6 col-lg-4" data-bs-toggle="modal" data-bs-target="#popup3">
                <figure class="effect-honey">
                    <img src="assets/img/hizmetler2 (6).jpg" alt="img04" />
                    <figcaption>
                        <h2>MİRAS Payı <br><span>Hesaplama</span> <i></i></h2>
                        <a class="button" href="#">Devamını oku</a>
                    </figcaption>
                </figure>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="popup3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Miras Payı Hesaplama</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <strong>1-	MİRAS PAYLAŞIMI NEDİR?</strong>
                          Bir kimsenin ölümü veya hakkında gaiplik kararı verilmesi sonucunda geride bıraktığı malvarlığının aktifi ve pasifinin tümüne tereke(miras) adı verilir. Miras bırakanın terekesinin tespiti ile mirasçılar arasında miras payı oranında paylaştırması miras paylaşımı olarak adlandırılır.
                          
                          <hr><strong>2-	MİRAS PAYLAŞIMI NASIL YAPILIR?</strong>
                          Miras paylaşımı iki şekilde yapılabilir. Nasıl yapılacağı konusunda belirleyici olacak unsur ise tüm mirasçıların mutabık olup olmaması hususudur. Tüm mirasçılar terekenin(mirasın) nasıl paylaştırılacağı konusunda hemfikir ise yazılı olarak aralarında yapacağı miras taksimi(paylaştırılması) sözleşmesi ile miras paylaşımını istedikleri gibi gerçekleştirebilir. Ancak bir mirasçının bile paylaşıma ilişkin itirazı bulunuyor ise Türk Medeni Kanunu ilgili maddeler çerçevesinde mal paylaşımı davası açılarak miras paylaşımı gerçekleştirilebilir.
                          Miras paylaşım davasını yalnızca yasal mirasçılar açabilmektedir. Tüm mirasçıların birlikte hareket etme zorunluluğu bulunmamakla birlikte yalnızca bir mirasçı da miras paylaşım davası açabilir.
                          
                          <hr><strong>3-	KiMLER MİRASÇI OLABİLİR?</strong>
                          Miras hukukunda iki tür mirasçı vardır. Bunlar yasal mirasçılar ve atanmış mirasçılardır. Yasal mirasçılar, miras bırakanın iradesine bağlı olmayan ve kanunen mirasçı sayılan; kan hısımları, evlatlık, altsoy ve sağ kalan eştir. Atanmış mirasçılar ise miras bırakanın özgür iradesi ile vasiyetname yoluyla mirasının bir kısmını veya tamamını bıraktığı kişilerdir.
                          Hukukumuzda yasal mirasçılar derece sistemine göre sınıﬂandırılmıştır.
                          
                          <strong>Miras bırakanın birinci derece mirasçıları, altsoyu yani çocukları ve torunlarıdır.
                            Miras bırakanın ikinci derece mirasçıları, miras bırakanın anne ve babası, kardeşleri ve yeğenlerinden oluşur.
                            Miras bırakanın üçüncü derece mirasçıları, miras bırakanın büyükanne ve büyükbabasıdır.</strong>
                          
                          Derece sisteminde birinci derece öncelikli mirasçı olup eğer birinci dereceden mirasçı yok ise ikinci derecedekiler mirasçı olur. Yine ikinci dereceden de mirasçı olmaması halinde miras bırakanın mirası üçüncü derece mirasçılarına geçer.
                          Tüm bu derece sistemindeki yasal mirasçılarla birlikte sağ kalan eş her halükârda mirasçı olmaktadır.
                           
                          <hr><strong>4-	MİRAS PAYLAŞIM (MAL PAYKAŞIM) DAVASI GÖREVLİ VE YETKİLİ MAHKEME?</strong>
                          Miras paylaşım (mal paylaşım) davasında görevli mahkeme, Sulh Hukuk Mahkemesidir. Yetkili mahkeme ise miras bırakanın son yerleşim yeri mahkemesidir.
                          
                          <hr><strong>5-	VASİYETNAME NEDİR?</strong>
                          Vasiyetname, miras bırakanın son istek ve arzularını belirttiği; aynı zamanda ölümü itibariyle mal varlığı üzerindeki tasarrufunu belirttiği belgedir.
                          Vasiyetnamenin geçerliliği konusunda Türk Medeni Kanunu’nda kişinin on beş yaşını doldurmuş olması ve ayırt etme gücüne sahip olması gerektiği şeklinde iki şart düzenlenmiş olup kanunda sayılı şartlar sağlanmadığı takdirde vasiyetname geçerliliğini yitirmektedir.
                          Hukukumuzda üç tür vasiyetname düzenlenebilmektedir. Bunlar; Resmi Vasiyetname, El Yazılı Vasiyetname ve Sözlü Vasiyetnamedir.
                          Resmi memur, sulh hakimi veya noter huzurunda iki tanık katılımıyla birlikte düzenlenen Resmi Vasiyetname ile miras bırakan, ölüme bağlı tasarrufunu hukuken en sağlıklı şekilde gerçekleştirmiş olacaktır.
                          
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Container -->
            <div class="grid col-md-6 col-lg-4" data-bs-toggle="modal" data-bs-target="#popup4">
                <figure class="effect-honey">
                    <img src="assets/img/hizmetler2 (5).jpg" alt="img04" />
                    <figcaption>
                        <h2>İş Kazası <br><span>TAZMİNATI</span> <i></i></h2>
                        <a class="button" href="#">Devamını oku</a>
                    </figcaption>
                </figure>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="popup4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">İş Kazası Tazminatı</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <strong>İŞ KAZASI TAZMİNAT DAVASI</strong>
	İş kazası sebebiyle tazminat davası, bir işverenin işyerinde çalışan işçinin iş ilişkisi nedeniyle yaralanması veya ölmesi halinde, işçiye veya yakınlarına sorumlu işverence tazminat ödenmesi talebiyle açılan bir maddi ve manevi tazminat davası türüdür.
	Bir iş kazası gerçekleştiğinde kazanın gerçekleşmesinden itibaren 3 iş günü içerisinde Sosyal Güvenlik Kurumu’na bildirim yapılmalıdır. Eğer iş kazası işyerinin dışında veya işverenin kontrolünün dışında gerçekleşmişse 3 günlük süre kazanın öğrenildiği tarihten itibaren işlemeye başlar. İşverence bildirim yapılmamışsa işçi tarafından bildirimin yapılması gerekir.
<hr><strong>İş Kazası Sayılan Haller</strong><br>
1-	İşçilerin işyerinde maruz kaldığı kazalar
<br>2-	İşçilerin görevli olarak işyeri dışına gönderilmesi nedeniyle maruz kaldığı kazalar
<br>3-	İşçinin, işverence sağlanan bir taşıtla işe gidiş gelişi sırasında meydana gelen kazalar
<br>4-	Emziren kadın işçinin süt verdiği esnada maruz kaldığı kazalar
<hr><strong>İş Kazası Nedeniyle Tazminat	</strong>
	Kaza sonucunda işçi yaralanmışsa maddi tazminat, geçici iş göremezlik tazminatı, sürekli iş göremezlik tazminatı ve manevi tazminat talep edilebilecektir. Gerçekleşen kaza neticesinde işçi hayatını kaybetmişse işveren aleyhine maddi tazminat ve destekten yoksun kalma tazminatı talep edilebilecektir. 
	İş kazasından dolayı yaralanan işçi maddi kayıpları için maddi tazminat isteminde bulunabilir. İşçinin vefatı durumunda ise yakınları işverenden maddi tazminat talep edebileceklerdir. 	
<hr><strong>İş Kazasının Tespiti Davası</strong>
          İşveren veya işçinin bildirimi üzerine SGK, müfettişler aracılığıyla inceleme yaparak olayın iş kazası olup olmadığını ve kusur durumunu gösteren bir rapor düzenler. Bu raporda olay iş kazası olarak nitelendirilmişse hak sahibi, iş mahkemesinde doğrudan maddi ve manevi tazminat davası açabilir. Ancak olay SGK tarafından iş kazası olarak kabul edilmemişse; SGK ve işverenin davalı olarak gösterileceği bir iş kazasının tespiti davası açılmalıdır. İş kazasının tespiti davası, tazminat davasından bağımsız bir davadır. Tazminat davası, iş kazasının tespiti davasının kesinleşmesine kadar bekler. 
<hr><strong>Zamanaşımı Süresi </strong>
	İş kazası nedeniyle maddi ve manevi tazminat davalarında herhangi bir süre olmamakla birlikte Borçlar Kanunu’ndaki on yıllık zamanaşımı süresi uygulanır. İş kazası sonucunda yaralanma veya ölüm arasında zamanaşımı bakımından herhangi bir fark yoktur. İş kazası nedeniyle bir ceza davası açılmışsa ve ceza davasının zamanaşımı süresi daha fazla ise, iş kazası nedeniyle tazminat davasında da ceza davası zamanaşımı süresi uygulanır.	
<hr><strong>Görevli ve Yetkili Mahkeme</strong>
	İş kazalarına ilişkin tazminat davalarında görevli mahkeme, İş Mahkemeleridir. Yetkili mahkeme ise; iş kazasının meydana geldiği yer mahkemesi veya zarar görenin yerleşim yeri mahkemesidir.

                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Container -->
            <div class="grid col-md-6 col-lg-4" data-bs-toggle="modal" data-bs-target="#popup5">
                <figure class="effect-honey">
                    <img src="assets/img/hizmetler2 (3).jpg" alt="img04" />
                    <figcaption>
                        <h2>Trafik Kazası <br><span>TAZMİNATI</span> <i></i></h2>
                        <a class="button" href="#">Devamını oku</a>
                    </figcaption>
                </figure>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="popup5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Trafik Kazası Tazminatı</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                       <strong>ÖLÜMLÜ VEYA YARALAMALI TRAFİK KAZALARINDA TAZMİNAT DAVASI</strong>
 Trafik kazası nedeniyle açılacak maddi ve manevi tazminat davalarında en az bir 
motorlu aracın bir kazaya karışması şartının yanında kaza neticesinde ölüm, yaralanma 
gibi bedensel zararlar ile üçüncü kişilere ait ev veya araba gibi malvarlıklarında bir zararın 
ortaya çıkması gerekir. Açılacak tazminat davası ile ortaya çıkan zararların giderilmesi 
amaçlanmaktadır. 
 Ölümlü veya yaralamalı trafik kazalarına ilişkin tazminat davalarında hukuki dayanak 
Borçlar Kanunu’nun 49.maddesidir. İlgili hükme göre;”Kusurlu ve hukuka aykırı bir fiille 
başkasına zarar veren, bu zararı gidermekle yükümlüdür. Zarar verici fiili yasaklayan bir 
hukuk kuralı bulunmasa bile, ahlaka aykırı bir fiille başkasına kasten zarar veren de bu 
zararı gidermekle yükümlüdür.”
<hr><strong>Trafik Kazalarında Tazminat Davaların Zamanaşımı Süreleri</strong>
 Trafik kazaları sebebiyle açılacak tazminat davalarında zamanaşımı süreleri, trafik 
kazasının meydana geldiği anda işlemeye başlayacaktır. Trafik kazaları da haksız fiil 
niteliğinde olduğundan dolayı tüm haksız fiillere uygulanan iki zamanaşımı süresinden 
davalının lehine olan zamanaşımı süresi uygulanacaktır. 
 Karayolları Trafik Kanunu’na göre,” Motorlu araç kazalarından doğan maddi 
zararların tazminine ilişkin talepler, zarar görenin, zararı ve tazminat yükümlüsünü 
öğrendiği tarihten başlayacak 2 yıllık zamanaşımı süresi vardır. Her halükarda fiil geç 
öğrenilse bile fiilin işlenmesinden itibaren işleyecek 10 yıllık zamanaşımı da 
bulunmaktadır. 
 Trafik kazası bir suça sebebiyet vermişse ceza zamanaşımı sürelerinin uygulanması 
da mümkün olacaktır. Yaralama durumda taksirle adam yaralama suçu, ölüm neticesinde 
ise taksirle adam öldürme suçu dermeyan olacaktır. Maddi ve manevi tazminat davası 
açma süresi, ceza zamanaşımı süresi kadar olacaktır. Sonuç olarak; ceza davasının 
devamı süresince söz konusu trafik kazası nedeniyle tazminat davası açılabilecektir. 
<hr><strong>Trafik Kazalarında Tazminat Davasını Açabilecek Kişiler</strong>
 Trafik kazası nedeniyle ortaya bir ölüm çıkmışsa, ölen kişinin yaşamında ondan 
destek alan kişiler maddi ve manevi tazminat davası açabilecektir. Ölen kişinin evli veya 
bekar olması durumlarında ikili bir ayırıma gidilir. Buna göre ölen kişi evliyse ondan 
destek alan kişiler eşi ve çocuklarıdır. Ancak ölen kişi bekarsa ondan destek alan kişilerin 
anne ve babası olduğu kabul edilir. Bunların dışındaki bir yakınının tazminat talebi; o 
yakının, ölen kişinin yaşamında ondan destek aldığını ispatlamasına bağlıdır. 
 Trafik kazası sonucunda bir yaralanma olmuşsa, yaralanan kişinin kendisi maddi ve 
manevi tazminat davası açmaya hak kazanacaktır. Maddi tazminat davasında işgücü kaybı 
ileri sürülürken; manevi tazminat davasında ise kaza sebebiyle uğranılan üzüntü, keder ve 
elem ileri sürülmelidir. 
 Kaza neticesinde uzuv kaybı gibi ağır bedensel bir yaralanma ortaya çıkmışsa 
kişinin yakınları da manevi tazminat davası açabilecektirler. Yakını ile kastedilen eşi, 
çocuğu, anne ve babasıdır. 
<hr><strong>Kimlere Yönelik Trafik Kazaları Nedeniyle Tazminat Davası Açılabilir?</strong>
 Trafik kazası sebebiyle tazminat davası; aracın sürücüsüne, aracın sahibine, aracın 
işletenine veya sigorta şirketine yönelik açılabilir. Trafik kazası sebebiyle tazminat davası; 
trafik kazası haksız fiil sayıldığından, haksız fiil sorumlularına yöneltilebilir. 
<hr><strong>Yetkili Mahkeme</strong>
 Ölümlü ve yaralamalı trafik kazalarından doğan maddi ve manevi tazminat davalarına 
bakmaya yetkili mahkemeler birden fazladır. 
 Davalılardan herhangi birisinin ikametgâhı mahkemesinde, trafik kazasının meydana 
geldiği yer mahkemesinde, davacının ikametgâhı mahkemesinde veya trafik sigortası 
şirketinin merkezinin olduğu yer mahkemesinde ilgili tazminat davasının açılması 
mümkündür. 
<hr><strong>Görevli Mahkeme</strong>
 Ölümlü veya yaralamalı trafik kazalarında sebebiyle açılacak maddi ve manevi 
tazminat davalarında kural olarak görevli mahkeme, Asliye Hukuk Mahkemesi’dir.
 Ancak trafik sigortasını yapacak şirkete yönelik açılacak dava, ticari işten 
kaynaklandığından dolayı görevli mahkeme Asliye Ticaret Mahkemesi’nde açılmalıdır. 
Aracın sürücüsüne, sahibine ve sigortalayan sigorta şirketine birlikte dava açılmak 
isteniyorsa bu tazminat davası, Asliye Ticaret Mahkemesi’nde açılmalıdır. 
<hr><strong>Ölümlü Trafik Kazalarında Tazminat Sorumlularından Talep Edilebilecek Zararlar</strong>
 Ölümlü trafik kazasının varlığı halinde maddi ve manevi tazminat davası açılması 
mümkündür.Ölen kişi evliyse eşi ve çocukları manevi tazminat talep edebilecektirler. 
Bunun yanında cenaze giderleri ve ölümünden önceki tedavi giderleri de istenebilecektir. 
 Ölümlü trafik kazası sebebiyle açılacak maddi tazminat davasının görünümü, 
destekten yoksun kalma tazminatıdır. Destekten yoksun kalma tazminatı, ölen kişinin 
yaşamış olması durumunda yakınlarına sağlayacağı desteklerdir. Ölen kişinin yakınları 
destekten yoksun kalma tazminatı talep edebilecektirler. 
<hr><strong>Yaralanmalı Trafik Kazalarında Tazminat Sorumlularından Talep Edilebilecek 
Zararlar</strong>
 
 Trafik kazası sebebiyle yaralanan kişi, haksız fiil sorumlularına yönelik maddi ve 
manevi tazminat davası açabilecektirler. Yaralanan kişinin yakınları, eğer yaralanan kişi 
hayati fonksiyonlarından birini yerine getiremiyorsa veya bir uzvunu kaybetmişse manevi 
tazminat davası açma imkanı elde edebilecektirler. 
 Manevi tazminat davası ile yaralanan kişinin her türlü tedavi gideri, kazanç kaybı, 
çalışma gücünün azalmasından ya da yitirilmesinden doğan kayıpları ve ekonomik 
geleceğinin sarsılmasından doğan kayıpların giderilmesi amaçlanmaktadır. 
<hr><strong>Maddi ve Manevi Tazminatın Belirlenmesi</strong> 
 
 Maddi tazminatın belirlenmesinde kusur oranı ile zarar oranı doğrudan etkilidir. Söz 
konusu kaza aynı zamanda iş kazası ise iş kazası sebebiyle işçiye ödenen ücretler, 
tazminat oranından düşülecektir. 
 Manevi tazminat belirlenirken tarafların sosyal ve ekonomik durumu, olayın 
meydana geliş şekli, tarafların kusur durumu ve hak ve nesafet kuralları yani hakimin 
takdir yetkisi hususları değerlendirilir. Manevi tazminat belirlenirken lehine olan tarafın 
zenginleşmesine yönelik olmaması gerekir
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Container -->
            <div class="grid col-md-6 col-lg-4" data-bs-toggle="modal" data-bs-target="#popup6">
                <figure class="effect-honey">
                    <img src="assets/img/hizmetler2 (4).jpg" alt="img04" />
                    <figcaption>
                        <h2>Fazla Çalışma <br><span>TAZMİNATI</span> <i></i></h2>
                        <a class="button" href="#">Devamını oku</a>
                    </figcaption>
                </figure>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="popup6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Fazla Çalışma Tazminatı</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <strong>1-	FAZLA ÇALIŞMA NEDİR?</strong>

                          İş Kanunu 63. maddesi ile İş Kanununa İlişkin Çalışma Süreleri Yönetmeliği gereğince işçilerin ne kadar süreyle ve ne zaman çalıştırılabileceği bellidir. İş Kanunu 63. maddesine göre normal çalışma süresi haftada en çok 45 saat olmakla beraber günde en çok 11 saat olarak düzenlenmiştir.
                          Fazla Çalışma, İş Kanunu 41.maddesine göre haftalık 45 saati aşan çalışmalardır. İşçi haftada toplamda 45 saatten az çalışmış olsa dahi günde 11 saati aşan çalışmalar da fazla çalışmadır.
                          
                          <hr><strong>2-	FAZLA ÇALIŞMA TAZMİNATI ZAMANAŞIMI SÜRESİ?</strong>
                          
                          Fazla çalışma ücretine hak kazanan işçilerin fazla çalışma tazminatını talep edebilmesi 5 yıllık zamanaşımına tabiidir. İşçi, fazla çalışma ücretini fazla çalışma yaptığı tarihten itibaren 5 yıllık süre içerisinde talep etmediği takdirde hakkı olan tazminatı zamanaşımına uğrayarak kaybedecektir. Söz konusu 5 yıllık zamanaşımı süresi yapılan her fazla çalışma için ayrı ayrı dikkate alınmaktadır.
                          
                          <hr><strong>3-	FAZLA ÇALIŞMA ÜCRETİ HESAPLANMASI?</strong>
                          
                          İş Kanunu 41. Maddesine göre fazla çalışma ücreti, haftalık 45 saati veya günlük 11 saati aşan her bir fazla saat için işçinin saat başı aldığı ücretin %50 yükseltilmesi suretiyle ödenir. Söz konusu düzenleme gereğince işçinin aldığı maaşın saat başı ücreti tespit edildikten sonra 1,5 ile çarpmak suretiyle fazla çalışma ücretine ulaşılabilir.
                          
                          <hr><strong>4-	FAZLA ÇALIŞMA ÜCRETİ ÖDENMEYEN İŞÇİNİN TAZMİNAT HAKKI?</strong>
                          
                          İş Kanunu 24. Maddesine göre İşveren tarafından işçinin ücreti kanun hükümleri veya sözleşme şartlarına uygun olarak hesap edilmez veya ödenmezse işçinin iş sözleşmesini haklı fesih ile sonlandırabileceği düzenlenmiştir. Söz konusu düzenleme gereğince fazla çalışma ücreti ödenmeyen işçi, iş sözleşmesinin haklı feshini gerçekleştirebilir ve hukuki sonuçlarından yararlanabilir.
                           
                          <hr><strong>5-	FAZLA ÇALIŞMA TAZMİNATI DAVASINDA GÖREVLİ VE YETKİLİ MAHKEME?</strong>
                          Fazla Çalışma Ücreti bir işçilik alacağı olmasından ötürü açılacak davada görevli mahkeme, İş Mahkemeleridir. Fazla Çalışma Ücreti tazminatı talep etmek için açılan dava, dava şartı arabuluculuğa tabiidir. Arabuluculuk süreci anlaşma ile sonuçlanmadığı takdirde görevli mahkeme olan İş mahkemelerinde dava açılmalıdır.
                          Fazla Çalışma Ücreti tazminatı talep etmek için açılan davada yetkili mahkeme ise davalı gerçek veya tüzel kişinin davanın açıldığı tarihteki yerleşim yeri mahkemesi ile işin veya işlemin yapıldığı yer mahkemesidir.
                          
                        </div>
                    </div>
                </div>
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
                    <li><a href="#">İş Kazası Tazminatı</a></li>
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
                  <a href="tel:02127060134"
                    ><i class="bi bi-phone"></i>&nbsp (0212) 706 0 134
                  </a>
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