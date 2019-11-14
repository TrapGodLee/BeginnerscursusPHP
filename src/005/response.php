<?php
/**
 * Created by IntelliJ IDEA.
 * User: lesely
 * Date: 7-11-2019
 * Time: 13:02
 */

if($_POST['voornaam'] == "") {
    echo "Je moet nog een naam invullen";
    echo "<br><a href=\"formulier.html\">Terug naar het formulier</a>";
}

if($_POST['adres'] == "") {
    echo "Je moet nog een adres invullen";
    echo "<br><a href=\"formulier.html\">Terug naar het formulier</a>";
}

if($_POST['email'] == "") {
    echo "Je moet nog een email invullen";
    echo "<br><a href=\"formulier.html\">Terug naar het formulier</a>";
}

if($_POST['wachtwoord'] == "") {
    echo "Je moet nog een wachtwoord invullen";
    echo "<br><a href=\"formulier.html\">Terug naar het formulier</a>";
}

