<!--Tabelle für Eingabe-->
Wort eingeben:
<form method="post">
    <input type="text" name="txt"   /><br />
    <input type="submit" name="sbt" />
</form>

<?php
//string festlegen
$word = $_POST['txt'];
//kleinschreibung
$word = strtolower($word);
//Sonderzeichen entfernen
$word = preg_replace('/[^A-Za-z0-9\-]/', '', $word);
//Variablen festlegen

function palindrome ($word) {
    if (strrev($word) == $word) {
        return 1;
    }
    else {
        return 0;
    }
}

//Ausgabe;
if (palindrome($word)) {
    echo "$word ist ein Parlindrome!";
}
else {
    echo"$word ist kein Parlindrome!";
}
?>
