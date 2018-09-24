<?php
/**
 * Created by PhpStorm.
 * User: Büro
 * Date: 21.09.2018
 * Time: 18:12
 */

header( "Content-Type: text/html; charset=utf-8" );

include_once( "helper.php" );

$vorname  = null;
$nachname = null;
$email    = null;
$betreff  = null;
$text     = null;
$wir      = null;

$vorname  = ( $_POST["vorname"] );
$nachname = ( $_POST["nachname"] );
$email    = ( $_POST["email"] );
$betreff  = ( $_POST["betreff"] );
$comment  = ( $_POST["comment"] );

//$wir = "info@connputer.de";
$wir = "arananka@gmx.de";

$vorname  = trim( htmlspecialchars( $vorname ) );
$nachname = trim( htmlspecialchars( $nachname ) );
$email    = trim( htmlspecialchars( $email ) );
$betreff  = trim( htmlspecialchars( $betreff ) );
$comment  = trim( htmlspecialchars( $comment ) );

$absender = $nachname . ', ' . $vorname;

$betreff = "=?utf-8?q?" . quoted_printable_encode( $betreff ) . "?=";
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
