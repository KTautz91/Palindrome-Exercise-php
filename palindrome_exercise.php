<!--form-->
Wort eingeben:
<form method="post">
    <input type="text" name="txt"   /><br />
    <input type="submit" name="sbt" />
</form>

<?php
error_reporting(0);
$word = $_POST['txt'];
//change case to lower
$word = strtolower($word);
//remove special characters
$word = preg_replace('/[^A-Za-z0-9\-]/', '', $word);
//function compairs the reversed to the given word. if both objects equal => true else => false
function palindrome ($word) {
    if (strrev($word) == $word) {
        return 1;
    }
    else {
        return 0;
    }
}
if (palindrome($word)) {
    echo "$word ist ein Parlindrome!";
}
else {
    echo"$word ist kein Parlindrome!";
}
?>
