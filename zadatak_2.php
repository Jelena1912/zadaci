<?php

$ime= $_POST["ime"];

?>

<html>
    <title>zadatak_2</title>
    <body>
        <form action="zadatak_2.php"
            method="post">
                Upiši ime i prezime: <input  type="text" name="ime" value="0" /><br>

            <input type="submit" value="Pošalji" />
        </form>

        <?php

        if($ime==0){
            echo "Upisi svoje ime i prezime";
        }
        else {
            $ime=explode(" ", $ime);
            $a=$ime[0];
            $b=$ime[1];
            if (date('H:i:s') > '11:00:00' && date('H:i:s') < '18:00:00') {
                echo "Dobar dan $a $b ";
            } else if (date('H:i:s') > '08:00:00' && date('H:i:s') < '11:00:00') {
                echo "Dobro jutro $a $b";
            } else {
                echo "Dobra večer $a $b.";
            }
        }
        ?>

  </body>
</html>

