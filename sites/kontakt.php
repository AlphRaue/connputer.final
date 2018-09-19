<!DOCTYPE html>
<html lang="de">
<head>
    <title>ConnPuter Kontakt</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="../css/style.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">

    <script src="../js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/0.1.12/wow.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/conn_script.js"></script>
</head>

<body>

<?php include_once("../sites/static/header.html"); ?>

<div class="container-fluid aktu-bg">
    <div class="container">
        <h1 class="heading-container">Kontakt</h1>
        <div class="bredcumb-con">
            <ul class="my-breadcumb">
                <li><a href="../index.php">Home</a></li>
                <li><a href="kontakt.php">Kontakt</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container-fluid aktue-con">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 about-text-container">
                <div class="row">
                    <div class="col-xs-12 col-md-7">
                        <div class="col-xs-12 col-md-12 map-container no-padding">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1048.7218336986548!2d12.380294603858413!3d51.30569797344352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a6f9c09822295f%3A0x21818522591fc2ee!2sConnPuter+%2F+Dominik+Rein!5e0!3m2!1sen!2sin!4v1525255440853"
                                    width="100%" height="550" frameborder="0"
                                    style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-5 contact-info">
                        <div class="col-xs-12 col-md-12">
                            <h2 class="contact-us">Kontaktaufnahme</h2>
                            <div class="address our-address">
                                <div class="address__icon">
                                    <i class="fa fa-map-marker"
                                       aria-hidden="true"></i>
                                </div>
                                <div class="address__details ">
                                    <h2 class="ct__title">unsere adresse</h2>
                                    <p>ConnPuter
                                        <br>Dominik Rein
                                        <br>Bornaische Str. 72
                                        <br>04277 Leipzig </p>
                                </div>
                            </div>
                            <div class="address opening-hours">
                                <div class="address__icon">
                                    <i class="fa fa-envelope-open"
                                       aria-hidden="true"></i>
                                </div>
                                <div class="address__details"
                                     style="padding:25px !important">
                                    <h2 class="ct__title">
                                        &oumlffnungszeiten</h2>
                                    <p>
                                        <span>Montag & Dienstag von 10 bis 18 Uhr</span>
                                        <span>Mittwoch bis Freitag von 10 bis 19
                                    Uhr</span>
                                    </p>
                                </div>
                            </div>
                            <div class="address phone-number">
                                <div class="address__icon">
                                    <i class="fa fa-phone"
                                       aria-hidden="true"></i>
                                </div>
                                <div class="address__details"
                                     style="padding:30px !important">
                                    <h2 class="ct__title">telefon & fax</h2>
                                    <p>Tel.: 0 341-58 067 604<br>
                                        Fax: 0 341-58 067 605</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-12 product-description contact-container">
                        <h2>Fragen? Anregungen? Kritik? Schreiben Sie uns!</h2>
                        <form action="#">
                            <p>
                                <input type="text" name="name" id="name"
                                       placeholder="Ihr Name"/>
                                <input type="email" name="mail" id="mail"
                                       placeholder="Ihre Mailadresse"/>
                            </p>
                            <p class="subject-container">
                                <input type="text" name="betreff" id="betreff"
                                       placeholder="Ihr Anliegen"/></p>
                            <p>
                                <textarea name="text" id="text"
                                          placeholder="Ihr Kommentar"></textarea>
                            </p>
                            <p>
                                <input type="submit" value="Absenden">
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once("../sites/static/footer.html"); ?>

</body>
</html>
