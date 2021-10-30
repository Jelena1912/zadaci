<?php

$broj= $_POST["broj"];

?>
<html>
<title>zadatak_8</title>
<body>
<form action="zadatak_8.php"
      method="post">
    Upiši broj: <input  type="number" name="broj" value="" /><br>

    <input type="submit" value="Pošalji" />
</form>

<?php

if($broj>0) {
    for ($i = 2; $i < $broj; $i++) {
        if ($broj % $i == 0) {
            echo "Ovaj broj je prosti broj.";
        }
    }
}
else {echo "Ovaj broj nije prosti broj.";}
?>
