<?php
/**
 * Created by PhpStorm.
 * User: Büro
 * Date: 21.09.2018
 * Time: 18:12
 */

$vorname = "";
$nachname = "";
$email = "";
$betreff = "";
$text = "";

$vorname = htmlspecialchars($_POST["vorname"]);
$nachname = htmlspecialchars($_POST["nachname"]);
$email = htmlspecialchars($_POST["email"]);
$betreff = htmlspecialchars($_POST["betreff"]);
$text = htmlspecialchars($_POST["text"]);

var_dump($_POST);

print $vorname . "<br>";
print $nachname . "<br>";
print $email . "<br>";
print $betreff . "<br>";
print $text . "<br>";

/* header('LOCATION: ../../sites/kontakt.php');
exit;
*/
