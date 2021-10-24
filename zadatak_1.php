<?php
 $vrijednost1= $_POST['vrijednost1'];
 $vrijednost2= $_POST['vrijednost2'];
?>

<html>
    <title>zadatak_1</title>
    <body>
        <form action="zadatak_1.php"
            method="post">
            Vrijednost a: <input  type="number" name="vrijednost1" ><br>
            Vrijednost b: <input  type="number" name="vrijednost2" ><br>
            <input type="submit" value="Izračunaj" />
        </form>

Formulom c=(3*a-b)/2 se dobije riješenje: <?php echo (((3*$vrijednost1)-$vrijednost2)/2); ?>

    </body>
</html>


