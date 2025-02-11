<?php

include("OtvoriVezu.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Podaci:</h1>

        <?php
            $ime= $_POST["ime"];
            $prezime= $_POST["prezime"];
            $adresa= $_POST["adresa"];
            $mobitel= $_POST["mobitel"];
            $email= $_POST["email"];
            $webstranica= $_POST["webstranica"];
            

            // spremanje podataka u datoteku:
            /*
            $myfile = fopen("datoteka.txt", "a") or die("Nije moguće otvoriti datoteku!");
            $txt = "$ime, $prezime, $adresa, $mobitel\n";
            fwrite($myfile,$txt);
            fclose($myfile);
            */

            // Spremanje u bazu podataka
            $veza = OtvoriVezu();

            $sql = "INSERT INTO kontakti (Ime, Prezime, Adresa, Mobitel, Email, Webstranica) VALUES('$ime','$prezime', '$adresa', '$mobitel', '$email', '$webstranica')";

            if($veza->query($sql) === TRUE) {
                echo "<p>Zapis je uspješni spremljen.</p>";
            } else {
                echo "Greška" . $veza->error;
            }

            $veza->close();

        ?>
            



        

    </div>
</body>
</html>