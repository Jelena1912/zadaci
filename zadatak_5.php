<?php
$ocjena1= (float) $_POST["ocjena1"];
$ocjena2= (float) $_POST["ocjena2"];
?>

<html>
<title>zadatak_5</title>
<link rel="stylesheet" href="zadatak_5.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
<body>
<form action="zadatak_5.php"
      method="post">
    Ocjena 1. kolokvija: <input  type="number" name="ocjena1" /><br>
    Ocjena 2. kolokvija: <input  type="number" name="ocjena2" /><br>
    <input type="submit" value="Izračunaj ocjenu" />
</form>
<?php
if($ocjena1>=1 && $ocjena1<=5 && $ocjena2>=1 && $ocjena2<=5) {

    if ($ocjena1 < 2 || $ocjena2 < 2) {
        echo "Pošto Vam je jedan kolokvij negativan, krajnja ocijena Vam je negativna.";
    } else {
        $ocjene = array($ocjena1, $ocjena2);
        $prosjek = (($ocjene[0] + $ocjene[1]) / 2);
        $konacnaOcjena = round($prosjek);

        echo  "Prosjek ocijena je: " .$prosjek.'<br>';
        echo "Konačna ocjena je: " .$konacnaOcjena.'<br>';;
    }
}
else
    echo "To nije ocijena, ocijena mora biti od 1 do 5! Molim pokusajte opet."

?>

</body>
</html>