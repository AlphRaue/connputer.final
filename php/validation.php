<?php
/**
 * Created by PhpStorm.
 * User: Büro
 * Date: 21.09.2018
 * Time: 18:12
 */

header( "Content-Type: text/html; charset=utf-8" );

include_once( "helper.php" );
include_once("f_emailcheck.php");

$vorname  = null;
$nachname = null;
$email    = null;
$betreff  = null;
$text     = null;
$wir      = null;

if (isset($_POST["vorname"])) {
    $vorname = ($_POST["vorname"]);
} else {
    header('LOCATION: ../../sites/kontakt.php');
    exit;
};

if (isset($_POST["nachname"])) {
    $nachname = ($_POST["nachname"]);
} else {
    header('LOCATION: ../../sites/kontakt.php');
    exit;
};

if (isset($_POST["email"])) {
    $email = ($_POST["email"]);
} else {
    header('LOCATION: ../../sites/kontakt.php');
    exit;
};

if (isset($_POST["betreff"])) {
    $betreff = ($_POST["betreff"]);
} else {
    header('LOCATION: ../../sites/kontakt.php');
    exit;
};

if (isset($_POST["text"])) {
    $comment = ($_POST["text"]);
} else {
    header('LOCATION: ../../sites/kontakt.php');
    exit;
};

$vorname  = trim( htmlspecialchars( $vorname ) );
$nachname = trim( htmlspecialchars( $nachname ) );
$email    = trim( htmlspecialchars( $email ) );
$betreff  = trim( htmlspecialchars( $betreff ) );
$comment  = trim( htmlspecialchars( $comment ) );

$absender = "Abs.: " . $nachname . ', ' . $vorname . " (" . $email . ")";

$betreff = "=?utf-8?q?" . quoted_printable_encode( $betreff ) . "?=";
$comment = $comment . "\n\n\n" . $absender;
$comment = wordwrap( $comment, 72 );

$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=utf-8";
$headers[] = "From: {$email}";
// falls Bcc benötigt wird
// $headers[] = "Bcc: Der Da <mitleser@example.com>";
$headers[] = "Reply-To: {$email}";
$headers[] = "Subject: {$betreff}";
$headers[] = "X-Mailer: PHP/" . phpversion();

// echo_r( $headers );

mail( $wir, $betreff, $comment, implode( "\r\n", $headers ) );

header( 'LOCATION: ../../sites/kontakt.php' );
//$wir = "info@connputer.de";
$wir = "arananka@gmx.de";

$vorname  = trim( htmlspecialchars( $vorname ) );
$nachname = trim( htmlspecialchars( $nachname ) );
$email    = trim( htmlspecialchars( $email ) );
$betreff  = trim( htmlspecialchars( $betreff ) );
$comment  = trim( htmlspecialchars( $comment ) );

$absender = $nachname . ', ' . $vorname;

$wir = "info@connputer.de";
// $wir = "arananka@gmx.de";

$betreff = "=?utf-8?q?" . quoted_printable_encode( $betreff ) . "?=";
$comment = $comment . "\n\n\n" . $absender . " (" . $email . ")";
$comment = wordwrap( $comment, 72 );

$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=utf-8";
$headers[] = "From: {$email}";
// falls Bcc benötigt wird
// $headers[] = "Bcc: Der Da <mitleser@example.com>";
$headers[] = "Reply-To: {$email}";
$headers[] = "Subject: {$betreff}";
$headers[] = "X-Mailer: PHP/" . phpversion();

// echo_r( $headers );

mail( $wir, $betreff, $comment, implode( "\r\n", $headers ) );

header( 'LOCATION: ../../sites/kontakt.php' );
exit;
