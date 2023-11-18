<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tazminatsor | Kıdem</title>
  <link rel="stylesheet" href="collective.css" />
  <link rel="stylesheet" href="main.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <style>
  @font-face {
    font-family: neuemedium;
    src: url(/assets/font/neue-haas-display-7.ttf);
  }

  @font-face {
    font-family: neuethin;
    src: url(/assets/font/neue-haas-display-xx.ttf);
  }

  @font-face {
    font-family: neuethin2x;
    src: url(/assets/font/neue-haas-display-x.ttf);
  }

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
    color: #178546 !important;
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

  .next,
  .prev,
  .first {
    margin-top: 2.5em;
    box-shadow: 0 0.125rem 0.25rem #004e801a, 0 0.5rem 1rem #00000021 !important;
    padding: 0.75rem 1.75rem !important;
    border-radius: 0.5rem !important;
    line-height: 1 !important;
    transform: translate3d(0, 0, 0) !important;
    transition: background 400ms cubic-bezier(0.25, 0.8, 0.25, 1),
      box-shadow 280ms cubic-bezier(0.4, 0, 0.2, 1) !important;
  }

  .next {
    background: #178546;
    color: #fff;
    border: transparent;
  }

  .next:hover {
    background: #219752;
    color: #fff;
  }

  .next:focus {
    background: #219752 !important;
    color: #fff !important;
  }

  .prev {
    background: #fff;
    color: red;
    border: red;
    margin-right: 1rem;
  }

  .prev:hover {
    background: red;
    color: #fff;
  }

  .prev:focus {
    background: red !important;
    color: #fff !important;
  }

  .btn:disabled {
    background-color: gray !important;
  }

  .done {
    display: flex;
  }

  .form-control {
    margin-top: 1em;
  }

  .progress {
    margin: 2rem 0;
    height: 10px;
  }

  .progress-bar {
    background-color: #78cce3 !important;
  }

  .form-control {
    margin-top: 1em;
  }

  .progress {
    margin-top: 2.5em;
  }

  .progress-bar {
    background-color: #78cce3 !important;
  }

  .wizard-btn-check {
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 1rem;
    display: grid;
  }

  .wizard-btn-check label {
    border: 1px solid #219752 !important;
    border-radius: 0.25rem !important;
    padding: 0.6875rem 0.25rem !important;
    background: none !important;
    color: black !important;
    font-family: inherit !important;
    font-size: 100% !important;
    font-weight: inherit !important;
    line-height: 1.15 !important;
    margin: 0 !important;
  }

  .wizard-btn-check label:hover,
  .wizard-btn-check label:focus {
    background: #e5f4ea !important;
    cursor: pointer !important;
  }

  .wizard-btn-check input[type='radio'] {
    position: absolute;
    opacity: 0;
  }

  .wizard-btn-check input[type='radio']:checked+.btn-check-wizard {
    background-color: #178546 !important;
    color: #fff !important;
    transition: background-color 0.5s ease, color 0.5s ease !important;
  }

  .wizard-input {
    font: inherit !important;
    background: transparent !important;
    color: currentColor !important;
    padding: 0.8rem;
    outline: none !important;
    vertical-align: bottom !important;
    text-align: inherit !important;
    box-sizing: content-box !important;
  }

  .wizard-input:hover {
    border-color: #178546 !important;
  }

  .wizard-input:focus {
    box-shadow: none !important;
    border-color: #176839 !important;
  }

  /* .breadcrumb-top {
        background: #f1f3f4;
        padding: 0.75rem 0;
      }

      .breadcrumb {
        margin: 0;
      }

      .breadcrumb-item {
        font-size: 1rem;
        line-height: 1.5rem;
        font-weight: 400;
        letter-spacing: 0.25px;
        font-family: neuemedium;
        color: #1b1c1d !important;
        text-decoration: none !important;
      }

      .breadcrumb-item a {
        font-size: 1rem;
        line-height: 1.5rem;
        font-weight: 400;
        letter-spacing: 0.25px;
        font-family: neuemedium;
        color: #1b1c1d !important;
        text-decoration: none !important;
      } */

  .tab-content {
    margin-bottom: 7em;
  }

  .contact-text {
    display: flex;
    flex-direction: column;
  }

  .phone {
    color: #178546 !important;
    text-decoration: none !important;
    display: flex;
    align-items: center;
  }

  .formbold-mb-5 {
    margin-bottom: 20px;
  }

  .formbold-pt-3 {
    padding-top: 12px;
  }

  .formbold-main-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
  }

  .formbold-form-wrapper {
    margin: 0 auto;
    max-width: 550px;
    width: 100%;
    background: white;
  }

  .formbold-form-label {
    display: block;
    font-weight: 500;
    font-size: 16px;
    color: #07074d;
    margin-bottom: 12px;
  }

  .formbold-form-label-2 {
    font-weight: 600;
    font-size: 20px;
    margin-bottom: 20px;
  }

  .formbold-form-input {
    width: 100%;
    padding: 12px 24px;
    border-radius: 6px;
    border: 1px solid #e0e0e0;
    background: white;
    font-weight: 500;
    font-size: 16px;
    color: #6b7280;
    outline: none;
    resize: none;
  }

  .formbold-form-input:focus {
    border-color: #6a64f1;
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }

  .formbold-btn {
    text-align: center;
    font-size: 16px;
    border-radius: 6px;
    padding: 14px 32px;
    border: none;
    font-weight: 600;
    background-color: #6a64f1;
    color: white;
    cursor: pointer;
  }

  .formbold-btn:hover {
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }

  .formbold--mx-3 {
    margin-left: -12px;
    margin-right: -12px;
  }

  .formbold-px-3 {
    padding-left: 12px;
    padding-right: 12px;
  }

  .flex {
    display: flex;
  }

  .flex-wrap {
    flex-wrap: wrap;
  }

  .w-full {
    width: 100%;
  }

  @media (min-width: 540px) {
    .sm\:w-half {
      width: 50%;
    }
  }
  </style>
</head>

<body>
  <!-- Modal 1 - Hüküm ve Koşullar -->
  <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"
    aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel1">Hüküm ve Koşullar</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          </button>
        </div>
        <div class="modal-body">
          <!-- Hüküm ve Koşullar İçeriği Buraya Gelecek -->
          <p>GİZLİLİK SÖZLEŞMESİ

            KİŞİSEL VERİLERİN KORUNMASI KANUNU(6698 S.K.) KAPSAMI VE GENEL GİZLİLİK SÖZLEŞMESİ


            1- TARAFLAR
            Bir tarafta ‘’TAZMİNATSOR.COM’’ ve grup şirketleri (bu sözleşmede kısaca
            “İŞVEREN” olarak anılacaktır.)
            Diğer tarafta, veri paylaşılan, müşteriler ve vekil tayin edilenler, çalışanlar, çalışan
            adayları, stajyerler, servis sağlayıcıları ve danışmanlar (bu sözleşmede kısaca
            “ÇALIŞANLAR VE DİĞERLERİ” olarak anılacaktır.) aralarında aşağıdaki koşullarda
            anlaşmışlardır.

            2- SÖZLEŞMENİN KONUSU

            Taraflar arasından akdedilen yazılı veya sözlü hizmet sözleşmesinin (bundan böyle
            “HİZMET SÖZLEŞMESİ” olarak anılacaktır.) eki niteliğindeki işbu sözleşmenin konusu,
            hizmet sözleşmesi kapsamında işçiler ve diğerleri tarafından yürütülen çalışmalar ile
            ilgili olarak işçiler ve diğerlerine işveren (Veri Sorumlusu) tarafından verilen bilgi
            ve belgelerin işverenin onayı veya işçiler ve diğerlerinin açık rıza beyanı olmaksızın
            kişisel verilerin, özel nitelikli kişisel verilerin ve genel verilerin herhangi bir
            üçüncü gerçek ve/veya tüzel kişiye açıklanmasının, erişmesinin, verilmesinin,
            sızdırılmasının önüne geçecek olan gizliliğin sınırlarının ve koşullarının
            belirlenmesidir.

            3- GİZLİ BİLGİNİN TANIMI
            Kişisel Verilerin Korunması Kanunu kapsamında tanımını bulan kişiye ait bilgiler ile
            Kimliği belirli veya belirlenebilir gerçek kişiye ilişkin her türlü bilgi, Kimliği
            belirli veya belirlenebilir gerçek kişiye ilişkin her türlü sağlık bilgisi, Kişilerin
            ırkı, etnik kökeni, siyasi düşüncesi, felsefi inancı, dini, mezhebi veya diğer
            inançları, kılık ve kıyafeti, dernek, vakıf ya da sendika üyeliği, sağlığı, cinsel
            hayatı, ceza mahkûmiyeti ve güvenlik tedbirleriyle ilgili verileri ile biyometrik ve
            genetik veriler.
            Hizmet sözleşmesinde tanımlanan işler/görevler/hizmetler esnasında işveren tarafından
            işçiye açıklanan fikir, proje, uzmanlık bilgileri, tasarım, buluş, iş metodu ve patent,
            telif hakkı, marka, ticari sır ya da diğer yasal korunmaya konu olan ya da olmayan her
            türlü yenilik ve çalışma esnasında öğrenilecek yazılı veya sözlü tüm ticari, mali,
            teknik bilgiler ve iletişim yöntemleri gizli bilgi olarak kabul edilir.

            4- TARAFLARIN YÜKÜMLÜLÜKLERİ
            4.1. İşveren hizmet sözleşmesi kapsamında işçiye işini tam ve eksiksiz olarak yerine
            getirebilmesi ve gerekli her türlü bilgi ve belgeyi işçiye vermeyi taahhüt eder.

            4.2. İşveren işçiye ve diğerlerine açıklanan gizli bilgilerin eksik ya da hatalı olması
            sebebiyle ortaya çıkabilecek olan eksiklik, gecikme veya aksaklıklardan dolayı işçinin
            sorumlu tutulamayacağını kabul ve taahhüt eder.

            4.3 İşçi ve diğerlerine işveren tarafından kendisine açıklanan bilgi ve belgelerin gizli
            olduğunu bildiğini ve bu nedenle söz konusu gizli bilgileri sadece kendisinin bileceğini
            ve işin yerine getirilmesi aşamasında katkıda bulunması muhtemel üçüncü kişi, kurum ya
            da kuruluşların gizli bilgilerden sadece işin gereği kadar haberdar olacaklarını, işbu
            bilgi ve belgelerin hiçbir şekilde işverenin izni olmaksızın üçüncü gerçek ve/veya tüzel
            kişi ve kuruluşlara çalışma amaçları dışında açıklanmayacağını kabul ve taahhüt eder.
            1


            4.4. İşçi ve diğerleri işin yerine getirilmesi aşamasında katkıda bulunması muhtemel
            üçüncü kişi, kurum ya da kuruluşların işbu sözleşmede öngörülen gizlilik ilkelerine
            aykırı davranışlarından dolayı sorumlu olacağını, söz konusu üçüncü kişi, kurum ya da
            kuruluşların gizlilik ilkelerine riayet edeceğini, aykırılık hallerinden haberdar olduğu
            takdirde, derhal ve yazılı olarak işverene söz konusu aykırılık durumunu bildireceğini
            kabul ve taahhüt eder.

            4.5. Gizli bilgilerin ve kişisel verilerin işbu sözleşmeye aykırı olarak açıklanması,
            erişilmesine imkan sağlanması, sızdırılması veya benzeri davranışlarla bilgilerin ele
            geçirilmesine ortam sağlanması halinde işveren, masrafları işçiye ait olmak kaydıyla tüm
            yasal yollara başvurma ve uğradığı her türlü zararın giderimini işçiden ve diğerlerinden
            talep etme hakkına sahiptir.

            5- SÜRE
            5.1. Hizmet sözleşmesinin eki niteliğindeki işbu sözleşme, taraflarca imzalandığı
            tarihte yürürlüğe girecek olup, işbu sözleşmeden doğan yükümlülükler hizmet
            sözleşmesinin geçerliliğini koruduğu müddetçe devam edecektir.

            5.2. Hizmet sözleşmesinin sona ermesi halinde dahi işbu sözleşme, hizmet sözleşmesinin
            sona erme tarihinden itibaren işletmeye ve ürünlere ait bilgiler ile kişisel verilerin
            anonim hale getirilmiş olanları ve işverenliğin izni olan bilgiler hariç ve kişisel veri
            sahibinin rızası hariç kişisel verilerin süresiz olarak gizliliği ve korunması olarak
            geçerliliğini koruyacaktır.

            6- SÖZLEŞME DEĞİŞİKLİĞİ
            İşbu sözleşme taraflarca daha önce özellikle gizlilik konusunda yapılmış olabilecek
            yazılı ve/veya sözlü tüm sözleşmelerin (burada sayılmamış bilgiler ve patent ve benzeri
            buluş sözleşmeleri hariç) yerine geçer. Sözleşme değişiklikleri ancak yazılı
            yapılabilir.

            7- TEBLİGAT
            Tarafların işbu sözleşmenin atıfta bulunduğu sözleşmelerde, belge ve metinlerde
            belirttikleri adresleri tebligata elverişli adresleri olup herhangi bir değişiklik karşı
            tarafa yazılı olarak bildirilmemiş bulundukça bu adreslere yöneltilecek tebligatlar
            hukuken geçerli addolunacaktır.

            8- YÜRÜRLÜK
            İşbu sözleşme 8 (sekiz) maddeden oluşmakta olup taraflar arasında düzenlenmiş özgür
            iradeleriyle okunup kabul edilmiştir.
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="kapatModal(1)">Kapat</button>
          <button type="button" class="btn btn-primary" onclick="onayla(1)">Okudum ve
            Onaylıyorum</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 2 - KVKK -->
  <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2"
    aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel2">KVKK</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          </button>
        </div>
        <div class="modal-body">
          <!-- KVKK İçeriği Buraya Gelecek -->
          <p>KİŞİSEL VERİLERİN KORUNMASI AYDINLATMA METNİ

            ‘’tazminatsor.com’’ (“Veri sorumlusu”, “tazminatsor.com”) olarak;

            6698 sayılı Kişisel Verilerin Korunması Kanunu (“Kanun”, “KVKK”) ve ilgili mevzuat
            uyarınca kişisel verilerinizi işliyor, aynı zamanda kanunlarda öngörülen teknik ve idari
            tedbirleri alarak bu verilerinizin korunması için elimizden gelen tüm çabayı
            gösteriyoruz. Bu metin ile kişisel verilerinizin işlenme süreçleri hakkında sizleri
            detaylıca bilgilendirmek istiyoruz.

            Bu kapsamda, ‘’tazminatsor.com’’, gerekli olan tüm teknik ve idari tedbirleri almak
            suretiyle kişisel verilerinizi; Türkiye Cumhuriyeti Anayasası, ülkemizin taraf olduğu
            uluslararası sözleşmeler ve KVKK başta olmak üzere, kişisel verilerin korunması ile
            ilgili tüm mevzuatın öngördüğü sınırlar çerçevesinde, KVKK’nın 4. maddesinde yer alan;

            • Hukuka ve dürüstlük kurallarına uygun olma,
            • Doğru ve gerektiğinde güncel olma,
            • Belirli, açık ve meşru amaçlar için işlenme,
            • İşleme amaçlarıyla bağlantılı, sınırlı ve ölçülü olma,
            • İlgili mevzuatta öngörülen veya işlendikleri amaç için gerekli olan süre kadar
            muhafaza edilme ilkelerine uygun olarak işleyecektir.


            KİŞİSEL VERİLERİNİZİN İŞLENME AMAÇLARI
            ‘’tazminatsor.com’’ kullanıcıların izniyle Kişisel Bilgileri aşağıdaki amaçlar için
            kullanacaktır, hiçbir durumda öngörülen amacın dışında kullanmayacaktır.

            • Tazminat hesaplamanızı yapmak
            • Ürün ve hizmetlerimizi sunmak
            • Ödemelerinizi gerçekleştirmek
            • Hizmetler hakkında bilgi verme ve pazarlama amacıyla sizinle irtibata geçmek
            • Bilgilerinizi güncellemek
            • 3. şahısların teknik, lojistik ve benzeri diğer işlevlerini bizim adımıza yerine
            getirmelerini sağlamak
            • Alacağınız hukuki danışmanlık sürecinde yönlendirme yapmak
            • Yayınlar göndermek
            • Elektronik posta ile bülten göndermek ya da bildirimler de bulunmak
            • Sorularınızı cevaplamak ve etkin bir müşteri hizmeti sunmak
            • Yeni içerikler hakkında bilgi vermek.

            1. ‘’www.tazminatsor.com’’ internet sitesi hesaplaması kapsamında “Hesapla” sekmesi
            aracılığıyla işlenecek olan;
            • Kimlik verisi kategorisinde değerlendirilen; ad ve soyadınız, ‘’tazminatsor.com’’
            internet sitesi sisteminde ayırt edilebilirliğinizin sağlanabilmesi, tarafınıza ticari
            elektronik ileti gönderilmesine onay vermeniz halinde onayınızın hukuka uygun olarak
            alınabilmesi,
            • İletişim verisi kategorisinde değerlendirilen; telefon numaranız, yaşadığınız şehir
            ‘’tazminatsor.com’’ internet sitesi üzerinden verilen hizmet ile ilgili konularda
            sizinle iletişim kurulmasının gerekmesi halinde size ulaşılabilmesi, sunulan hizmet
            kapsamında sürecin yönetilmesi adına, sunulan hizmet ve ürünlerle ilgili sizi
            bilgilendirmenin sağlanabilmesi, tarafınıza ticari elektronik ileti gönderilmesine onay
            vermeniz halinde elektronik posta kanalıyla reklam ve tanıtıcı içeriklerinin
            gönderilebilmesi amacıyla verileriniz işlenecektir.


            KİŞİSEL VERİLERİNİZİN TOPLANMASININ YÖNTEMİ VE HUKUKİ SEBEBİ

            Kişisel verileriniz; tamamen otomatik olan / olmayan yollarla,
            ‘’www.tazminatsor.com’’ internet sitesi hesaplaması kapsamında “Hesapla” sekmesi
            aracılığıyla paylaştığınız ‘’ad soyadınız’’, ‘’telefon numaranız’’, ‘’yaşadığınız
            şehir’’ bilgileri,

            ‘’www.tazminatsor.com’’ internet sitesi üzerinde aktif olarak kullanılan çerezler
            aracılığı ile toplanmaktadır. Yukarıda işlenme amaçları ve elde edilme yöntemleri
            tarafınıza sunulan kişisel verileriniz, KVKK’nin 5. maddesinde belirtilen;

            • Danışmanlık hizmeti verilmesi veya ifasıyla doğrudan doğruya ilgili olması sebebiyle
            kişisel verilerinizin işlenmesinin gerekli olması,
            • ‘’www.tazminatsor.com’’ hukuki yükümlülüğünü yerine getirebilmesi için kişisel veri
            işlemesinin zorunlu olması,
            • Temel hak ve özgürlüklerinize zarar vermemek kaydıyla, ‘’www.tazminatsor.com’’ un
            meşru menfaatleri için kişisel verilerinizi işlemenin zorunlu olması hukuki sebeplerine
            dayanılarak işlenebilecektir.

            KİŞİSEL VERİLERİNİZİN AKTARILMASI

            Kişisel verileriniz;

            • Avukatlar, denetçiler, vergi danışmanları ile danışmanlık ve hizmet aldığımız diğer
            üçüncü kişilere; iş süreçlerimizi hukuka ve meşru menfaatlerimize uygun olarak
            yürütebilmemiz, olası bir yargı sürecinde savunma hakkımızı kullanabilmemiz,
            • Tarafınızca yetki verilmiş olan vekil ve temsilcilerinize; hukuki yükümlülüklerimizi
            yerine getirebilmemiz,
            • Düzenleyici ve denetleyici kurumlar ile mahkeme ve icra müdürlükleri gibi sair resmî
            kurumlar ve kişisel verilerinizi talep etmeye yetkili olan diğer kamu kurum veya
            kuruluşlarına; hukuki yükümlülüklerimizi yerine getirebilmemiz,
            • Hizmet aldığımız iş ortaklarımız, ifa yardımcılarımıza hizmetlerimizin
            geliştirilebilmesi, altyapı ve güvenlik süreçlerinin geliştirilebilmesi amaçları ile
            KVKK’nın 8. ve 9. maddelerinde belirtilen kişisel veri işleme şartları ve amaçları
            çerçevesinde yurt içine ve yurt dışına aktarılabilecektir.
            • Yine, kişisel verileriniz, sunulan hizmetten yararlanmanız halinde verilen hizmet
            kapsamında yukarıda belirtilen işlenme amaçları dahilinde aldığınız hizmetin etkin
            şekilde gerçekleşmesi için ‘’www.tazminatsor.com’’un program ortakları, hizmet
            sağlayıcılarına aktarılabilir. Sunulan hizmet kapsamında toplanan kişisel veriler,
            Alınan hizmetin hizmet alan kişilerce veya ‘’www.tazminatsor.com’’ tarafından
            sonlandırılmasının ardından, ilgili mevzuat tarafından öngörülen süreler saklı kalmak
            kaydıyla hizmet alan kişinin talebi veya ‘’www.tazminatsor.com’’ tarafından re’sen
            silinir, yok edilir veya anonimleştirilir.

            VERİ GÜNLÜĞÜ

            • Başvuru İnternet Sitesinin URL’si
            • Giriş Zamanı ve Tarihi
            • Tarayıcı Tipi ve Versiyonu
            • IP Adresi
            • İşletim Sistemi
            • İnternete Erişim Sağlayıcınızın Alan Adı
            • İletilen Veri Miktarı

            Yukarıda listelenmiş olan veri günlüğü olarak tanımlanan verileriniz
            ‘’www.tazminatsor.com’’ internet sitesine giriş yaptığınız zaman ağ tarayıcınız
            tarafından internet sunucumuza otomatik olarak aktarılmakta olup onay gerektirmeksizin
            veri günlüğü kayıtlarına kaydedilmektedir. Veri günlüğü kayıtları
            ‘’www.tazminatsor.com’’ tarafından etkin bir şekilde hizmet sunabilmek adına
            kullanılmakta olup verileriniz kalıcı olarak saklanmamaktadır.

            KİŞİSEL VERİLERİNİZİN KORUNMASINA YÖNELİK HAKLARINIZ

            Kişisel verilerinizle ilgili olarak;
            a. Kişisel veri işlenip işlenmediğini öğrenme,
            b. Kişisel verileri işlenmişse buna ilişkin bilgi talep etme,
            c. Kişisel verilerin işlenme amacını ve bunların amacına uygun kullanılıp
            kullanılmadığını öğrenme,
            d. Yurt içinde veya yurt dışında kişisel verilerin aktarıldığı üçüncü kişileri bilme,
            e. Kişisel verilerin eksik veya yanlış işlenmiş olması hâlinde bunların düzeltilmesini
            isteme,
            f. KVKK 7. maddede öngörülen şartlar çerçevesinde kişisel verilerin silinmesini veya yok
            edilmesini isteme,
            g.(e) ve (f) bentleri uyarınca yapılan işlemlerin, kişisel verilerin aktarıldığı üçüncü
            kişilere bildirilmesini isteme,
            h. İşlenen verilerin münhasıran otomatik sistemler vasıtasıyla analiz edilmesi suretiyle
            kişinin kendisi aleyhine bir sonucun ortaya çıkmasına itiraz etme,
            ı. Kişisel verilerin kanuna aykırı olarak işlenmesi sebebiyle zarara uğraması hâlinde
            zararın giderilmesini talep etme haklarına sahipsiniz.

            Belirtilen haklarınız kapsamında taleplerinizi, yazılı olarak veya kayıtlı elektronik
            posta (KEP) adresi, güvenli elektronik imza, mobil imza ya da daha önce bize
            bildirdiğiniz ve sistemimizde kayıtlı bulunan elektronik posta adresiniz var ise
            elektronik posta adresinizi kullanmak suretiyle bize ulaşarak iletebilirsiniz.
            Başvurunuz KVKK'da öngörülen ilgili hükümler doğrultusunda cevaplandırılacak olup
            başvuru sahibinin, ilgili kişi olduğunun teyit edilmesi amacıyla ‘’www.tazminatsor.com’’
            sizden bazı doğrulayıcı bilgiler talep edebilecektir; bu bilgiler yalnızca ilgili
            kişinin kimliğinin tespit edilmesi ve başvuru sonuçlarının doğru kişiyle paylaşılması
            adına talep edilecektir.
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="kapatModal(2)">Kapat</button>
          <button type="button" class="btn btn-primary" onclick="onayla(2)">Okudum ve
            Onaylıyorum</button>
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="d-sm-block d-md-none">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <a href="https://wa.me/+908502424535" class="wp-float" target="_blank">
      <i class="fa fa-whatsapp my-float"></i>
    </a>
  </div> -->
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
                  data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                  aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown" style="justify-content: flex-end">
                  <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Tazminat Sor
                      </a>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="wizard-kidem.php">Kıdem Tazminatı</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="wizard-is.php">İş Kazası Tazminatı</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="wizard.php">Değer Kaybı Tazminatı</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="wizard-trafik.php">Trafik Kazası Tazminatı</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="wizard-miras.php">Miras Payı Hesaplama</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="wizard-mesai.php">Fazla Çalışma Tazminatı</a>
                        </li>
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
            <li class="breadcrumb-item active" aria-current="page">
              Kıdem Tazminatı Hesaplama
            </li>
          </ol>
        </nav>
      </div> -->
  </div>
  <div class="container" id="myWizard">
    <div class="progress">
      <div class="progress-bar bg-info step-counter" role="progressbar" aria-valuenow="1" aria-valuemin="1"
        aria-valuemax="6" style="width: 20%">
        <!-- Adım 1 - 8 -->
      </div>
    </div>
    <div class="navbar">
      <div class="navbar-inner">
        <ul class="nav nav-pills">
          <!-- <li>1 dakikada aracının değer kaybı tazminatını öğren!</li> -->
        </ul>
      </div>
    </div>
    <div class="tab-content needs-validation">
      <div class="tab-pane" id="step1">
        <div class="well">
          <div class="row g-3">
            <div class="col-md-6">
              <!-- <br/> -->
              <div class="done">
                <label class="form-label">İşe Giriş Tarihiniz ve İşten Çıkış Tarihiniz?</label>
              </div>
              <label for="startDate">Giriş</label>
              <input id="start-date" class="form-control wizard-input input-lg" type="date" name="date" value="" />
              <label for="endDate">Çıkış</label>
              <input id="end-date" class="form-control wizard-input input-lg" type="date" name="date" value="" />
            </div>
          </div>
        </div>
        <button type="button" class="btn btn-info next" onclick="kıdemStep1()">
          İleri
        </button>
      </div>
      <div class="tab-pane" id="step3">
        <div class="well">
          <div class="row g-3">
            <!-- <br /> -->
            <div class="col-md-6">
              <!-- <br/> -->
              <div class="done">
                <label class="form-label">Aylık Brüt Maaşınız?:</label>
              </div>
              <input class="form-control wizard-input input-lg" type="text" value="" placeholder="Brüt Maaşınız"
                id="input-number" />
            </div>
          </div>
          <button type="button" class="btn btn-info prev backButton">
            Geri
          </button>
          <button type="button" class="btn btn-info next" onclick="kıdemStep2()">
            İleri
          </button>
        </div>
      </div>
      <div class="tab-pane" id="step4">
        <div class="well">
          <div class="row g-3">
            <!-- <br /> -->
            <div class="col-md-6">
              <!-- <br/> -->
              <div class="done">
                <label class="form-label">Aylık Ek Ücretler?:</label>
              </div>
              <input class="form-control wizard-input input-lg" type="text" value=""
                placeholder="Ek Ücretler (Yoksa İlerleyiniz)" id="input-number-2" />
            </div>
          </div>
          <button type="button" class="btn btn-info prev backButton">
            Geri
          </button>
          <button type="button" class="btn btn-info next" onclick="kıdemStep3()">
            İleri
          </button>
        </div>
      </div>
      <div class="tab-pane" id="wizard-step-99">
        <div class="well">
          <div class="row g-3">
            <div class="col-md-12 form-required">
              <div class="formbold-main-wrapper">
                <!-- Author: FormBold Team -->
                <!-- Learn More: https://formbold.com -->
                <div class="formbold-form-wrapper">
                  <div class="col-md-12 justify-content-center d-flex">
                    <h5 class="main-forum-title" style="text-align: center">
                      Çok az kaldı, hesaplamanı görebilmen için son bir adım!
                    </h5>
                  </div>
                  <form method="POST" action="form-post.php" id="form-kidem">
                    <div class="formbold-mb-5 reInputFrst">
                      <label for="name" class="formbold-form-label"> </label>
                      <input type="text" name="name" id="name" placeholder="Ad Soyad" class="formbold-form-input" />
                    </div>

                    <div class="formbold-mb-5 reInputSec">
                      <label for="phone" class="formbold-form-label"> </label>
                      <input type="text" name="phone" id="phone" placeholder="Telefon Numaranız"
                        class="formbold-form-input" />
                    </div>

                    <div class="formbold-mb-5 subject">
                      <label for="subject" class="formbold-form-label">
                        Hesaplama Sonucunuz
                      </label>
                      <input type="text" name="subject" id="subject" placeholder="Hesaplama Sonucu"
                        class="formbold-form-input" />
                    </div>

                    <div class="formbold-mb-5 formType">
                      <input id="formType" type="hidden" name="formType" value="Kıdem Tazminatı">
                    </div>

                    <select class="form-select formbold-form-input formbold-mb-5" name="city" aria-label=" Default select
                      example">
                      <option value=" 0" disabled="" selected="">
                        Yaşadığınız Şehir
                      </option>
                      <option value="Adana">Adana</option>
                      <option value="Adıyaman">Adıyaman</option>
                      <option value="Afyonkarahisar">Afyonkarahisar</option>
                      <option value="Ağrı">Ağrı</option>
                      <option value="Amasya">Amasya</option>
                      <option value="Ankara">Ankara</option>
                      <option value="Antalya">Antalya</option>
                      <option value="Artvin">Artvin</option>
                      <option value="Aydın">Aydın</option>
                      <option value="Balıkesir">Balıkesir</option>
                      <option value="Bilecik">Bilecik</option>
                      <option value="Bingöl">Bingöl</option>
                      <option value="Bitlis">Bitlis</option>
                      <option value="Bolu">Bolu</option>
                      <option value="Burdur">Burdur</option>
                      <option value="Bursa">Bursa</option>
                      <option value="Çanakkale">Çanakkale</option>
                      <option value="Çankırı">Çankırı</option>
                      <option value="Çorum">Çorum</option>
                      <option value="Denizli">Denizli</option>
                      <option value="Diyarbakır">Diyarbakır</option>
                      <option value="Edirne">Edirne</option>
                      <option value="Elazığ">Elazığ</option>
                      <option value="Erzincan">Erzincan</option>
                      <option value="Erzurum">Erzurum</option>
                      <option value="Eskişehir">Eskişehir</option>
                      <option value="Gaziantep">Gaziantep</option>
                      <option value="Giresun">Giresun</option>
                      <option value="Gümüşhane">Gümüşhane</option>
                      <option value="Hakkâri">Hakkâri</option>
                      <option value="Hatay">Hatay</option>
                      <option value="Isparta">Isparta</option>
                      <option value="Mersin">Mersin</option>
                      <option value="İstanbul">İstanbul</option>
                      <option value="İzmir">İzmir</option>
                      <option value="Kars">Kars</option>
                      <option value="Kastamonu">Kastamonu</option>
                      <option value="Kayseri">Kayseri</option>
                      <option value="Kırklareli">Kırklareli</option>
                      <option value="Kırşehir">Kırşehir</option>
                      <option value="Kocaeli">Kocaeli</option>
                      <option value="Konya">Konya</option>
                      <option value="Kütahya">Kütahya</option>
                      <option value="Malatya">Malatya</option>
                      <option value="Manisa">Manisa</option>
                      <option value="Kahramanmaraş">Kahramanmaraş</option>
                      <option value="Mardin">Mardin</option>
                      <option value="Muğla">Muğla</option>
                      <option value="Muş">Muş</option>
                      <option value="Nevşehir">Nevşehir</option>
                      <option value="Niğde">Niğde</option>
                      <option value="Ordu">Ordu</option>
                      <option value="Rize">Rize</option>
                      <option value="Sakarya">Sakarya</option>
                      <option value="Samsun">Samsun</option>
                      <option value="Siirt">Siirt</option>
                      <option value="Sinop">Sinop</option>
                      <option value="Sivas">Sivas</option>
                      <option value="Tekirdağ">Tekirdağ</option>
                      <option value="Tokat">Tokat</option>
                      <option value="Trabzon">Trabzon</option>
                      <option value="Tunceli">Tunceli</option>
                      <option value="Şanlıurfa">Şanlıurfa</option>
                      <option value="Uşak">Uşak</option>
                      <option value="Van">Van</option>
                      <option value="Yozgat">Yozgat</option>
                      <option value="Zonguldak">Zonguldak</option>
                      <option value="Aksaray">Aksaray</option>
                      <option value="Bayburt">Bayburt</option>
                      <option value="Karaman">Karaman</option>
                      <option value="Kırıkkale">Kırıkkale</option>
                      <option value="Batman">Batman</option>
                      <option value="Şırnak">Şırnak</option>
                      <option value="Bartın">Bartın</option>
                      <option value="Ardahan">Ardahan</option>
                      <option value="Iğdır">Iğdır</option>
                      <option value="Yalova">Yalova</option>
                      <option value="Karabük">Karabük</option>
                      <option value="Kilis">Kilis</option>
                      <option value="Osmaniye">Osmaniye</option>
                      <option value="Düzce">Düzce</option>
                    </select>
                    <div class="reInputThr"></div>
                    <!-- <div class="formbold-mb-5">
                        <label for="message" class="formbold-form-label">
                        </label>
                        <textarea rows="6" name="message" id="message" placeholder="Mesajınız"
                          class="formbold-form-input"></textarea>
                      </div> -->
                      <div class="form-check checkbox-lg">
                        <input class="form-check-input" type="checkbox" id="vehicle1" name="vehicle1" value=""
                          onclick="checkBoxChanged(1)" />
                        <label for="vehicle1"><a href="#">Hüküm ve koşulları okudum. Kabul ediyorum.</a></label>
                      </div>
                      <br />
                      <div class="reInputFour"></div>
                      <div class="form-check checkbox-lg">
                        <input class="form-check-input" type="checkbox" id="vehicle2" name="vehicle2" value=""
                          onclick="checkBoxChanged(2)" />
                        <label for="vehicle2"><a href="#">KVKK</a>
                          metnini okudum. Onaylıyorum.</a></label>
                      </div>
                    <br />
                    <div class="reInputFifth"></div>
                    <!-- <input
                        type="checkbox"
                        id="vehicle1"
                        name="vehicle1"
                        value=""
                      />
                      <label for="vehicle1">
                        <a href="#"
                          >Hüküm ve koşulları okudum. Kabul ediyorum.</a
                        ></label
                      ><br />
                      <div class="reInputFour"></div>
                      <input
                        type="checkbox"
                        id="vehicle2"
                        name="vehicle2"
                        value=""
                      />
                      <label for="vehicle2">
                        <a href="#">KVKK</a> metnini okudum. Onaylıyorum.</label
                      ><br />
                      <div class="reInputFifth"></div> -->
                    <button type="button" class="btn btn-info prev backButton">
                      Geri
                    </button>
                    <button type="submit" class="btn btn-success first next" onclick="">
                      Gönder ve Sonucu Gör
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="result-step">
        <div class="well">
          <div class="row g-3 d-flex" style="flex-direction: column; align-items: center">
            <div class="result-tab col-md-4 mx-auto">
              <h2 class="form-label result-form d-flex justify-content-center pt-3" style="margin-top: 0.5rem">
                Hesaplama Sonucu
              </h2>
              <hr class="mx-auto" style="width: 70%; color: #78cce3; opacity: 100" />
              <h2 id="sonuc" class="form-label result-form d-flex justify-content-center pt-4"
                style="font-size: 2.5rem">
                {{result}}
              </h2>
              <p class="d-flex pt-5 justify-content-center pb-3" style="text-align: center; color: white">
                Detaylı bilgi için uzmanlarımız <br />
                tarafından aranacaksınız!
              </p>
            </div>
            <p class="col-md-4 d-flex" style="text-align: center; font-size: 9px; color: red">
              Tazminatsor.com hesaplama sonucu kesin ve nihai rakam olmamakla
              beraber, yargılama aşamasında farklılık gösterebilmektedir.*
            </p>
          </div>
        </div>
      </div>
      <!-- <div class="tab-pane">
          <div class="well">
            <div class="g-3">
              <div
                class="col-md-12"
                style="display: flex; flex-direction: column"
              >
                <br />
                <label
                  class="form-label"
                  style="
                    display: block;
                    margin-bottom: 1.5em;
                    width: max-content;
                  "
                  >Hesaplama Sonucu:</label
                >
                <label
                  id="sonuc"
                  class="form-label"
                  style="
                    display: block;
                    margin-bottom: 1.5em;
                    width: max-content;
                  "
                  >{{result}}
                </label>
              </div>
            </div>
          </div>
        </div> -->
    </div>
  </div>
  <hr />
  <div class="content-contact">
    <div class="container">
      <div class="contact-text" style="margin: 2em 0">
        <h5 class="card-title" style="font-family: neuemedium">
          Aklınıza bir şey mi takıldı?
        </h5>
        <p style="margin-top: 0.5rem; margin-bottom: 0.75rem">
          Size yardımcı olmamız için bizi arayabilirsiniz.
        </p>
        <a href="tel:02127060134" class="phone"><i class="bi bi-phone"></i>&nbsp; (0212) 706 0 134</a>
      </div>
    </div>
  </div>
  <hr />
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
                  <a href="https://www.facebook.com/profile.php?id=100086926898072&mibextid=LQQJ4d" target="_blank"><i
                      class="bi bi-facebook"></i></a>
                  <a href="https://twitter.com/tazminatsorcom" target="_blank"><i class="bi bi-twitter"></i></a>
                  <a href="https://instagram.com/tazminatsorcom?igshid=YmMyMTA2M2Y=" target="_blank"><i
                      class="bi bi-instagram"></i></a>
                  <a href="https://www.youtube.com/@tazminatsor/featured" target="_blank"><i
                      class="bi bi-youtube"></i></a>
                </li>
              </ul>
              <a href="tel:02127060134"><i class="bi bi-phone"></i>&nbsp (0212) 706 0 134
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
            <div class="col d-flex justify-content-center" style="margin-bottom: 1rem">
              <a href="#"><img src="/assets/img/PNG.png" alt="" /></a>
            </div>

            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Hizmetlerimiz
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                  data-bs-parent="#accordionFlushExample">
                  <a href="wizard-kidem.php" class="accordion-body">Kıdem Tazminatı</a>
                </div>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                  data-bs-parent="#accordionFlushExample">
                  <a href="#" class="accordion-body">İş Kazası Tazminatı</a>
                </div>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                  data-bs-parent="#accordionFlushExample">
                  <a href="wizard.php" class="accordion-body">Değer Kaybı Tazminatı</a>
                </div>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                  data-bs-parent="#accordionFlushExample">
                  <a href="wizard-trafik.php" class="accordion-body">Trafik Kazası Tazminatı</a>
                </div>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                  data-bs-parent="#accordionFlushExample">
                  <a href="wizard-miras.php" class="accordion-body">Miras Payı Hesaplama</a>
                </div>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                  data-bs-parent="#accordionFlushExample">
                  <a href="wizard-mesai.php" class="accordion-body">Fazla Çalışma Tazminatı</a>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Destek
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                  data-bs-parent="#accordionFlushExample">
                  <a href="about.php" class="accordion-body">Hakkımızda</a>
                </div>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                  data-bs-parent="#accordionFlushExample">
                  <a href="howto.php" class="accordion-body">Nasıl Çalışır?</a>
                </div>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                  data-bs-parent="#accordionFlushExample">
                  <a href="contact-form.php" class="accordion-body">Size Ulaşalım</a>
                </div>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                  data-bs-parent="#accordionFlushExample">
                  <a href="contact-form.php" class="accordion-body">Sıkça Sorulan Sorular</a>
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
                  <a href="https://www.facebook.com/profile.php?id=100086926898072&mibextid=LQQJ4d" target="_blank"><i
                      class="bi bi-facebook"></i></a>
                  <a href="https://twitter.com/tazminatsorcom" target="_blank"><i class="bi bi-twitter"></i></a>
                  <a href="https://instagram.com/tazminatsorcom?igshid=YmMyMTA2M2Y=" target="_blank"><i
                      class="bi bi-instagram"></i></a>
                  <a href="https://www.youtube.com/@tazminatsor/featured" target="_blank"><i
                      class="bi bi-youtube"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script type="text/javascript" src="custom.js"></script>
  <script>
  function checkBoxChanged(modalNo) {
    var checkbox = $('#vehicle' + modalNo);
    var isChecked = checkbox.prop('checked');

    if (isChecked) {
      $('#myModal' + modalNo).modal('show');
    }
  }

  function onayla(modalNo) {
    var checkbox = $('#vehicle' + modalNo);
    checkbox.prop('checked', true);
    $('#myModal' + modalNo).modal('hide');
  }

  function kapatModal(modalNo) {
    var checkbox = $('#vehicle' + modalNo);
    checkbox.prop('checked', false);
    $('#myModal' + modalNo).modal('hide');
  }
  </script>

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script>
  $(document).ready(function() {
    $("#form-kidem").submit(function(e) {
      e.preventDefault(); // Formun normal submit işlemini engelle

      // Form verilerini al
      var formData = $(this).serialize();

      // AJAX ile POST işlemi gerçekleştir
      $.ajax({
        type: "POST",
        url: "form-post.php",
        data: formData,
        success: function(response) {
          // Başarılı bir şekilde tamamlandığında yapılacak işlemler
          console.log(response);
          // Örneğin, bir sonraki adıma geçiş
          // window.location.href = "wizard-kidem.php?step=2";
        },
        error: function(error) {
          // Hata durumunda yapılacak işlemler
          console.error(error);
        }
      });
    });
  });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>

</html>