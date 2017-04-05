<?php
error_reporting(E_ALL);
if(!empty($_POST))
{
echo '<pre>';
echo print_r($_POST['choix'],true);
echo '</pre><br />
Faire un autre test : <a href="test.php">Tester à nouveau</a>';
}
else
{
echo '<b>Test de récupération dans le cas de checkbox multiple</b>';

echo '<form method="POST" action="test.php">
    <input type="checkbox" name="choix[]" value="v1"> nom 1<br>
    <input type="checkbox" name="choix[]" value="2"> nom 2<br>
    <input type="checkbox" name="choix[]" value="3"> nom 3<br>
    <input type="checkbox" name="choix[]" value="4"> nom 4<br>
    <input type="checkbox" name="choix[]" value="5"> nom 5<br>
    <input type="submit" value="test">
    </form>';
}
?>