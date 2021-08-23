<?php

require_once ("prijungimas.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="klientupildymoforma.php" method="get">
    <input type="text" value="test" name="vardas"/>
    <input type="text" value="test" name="pavarde"/>
    <input type="text" value="5" name="teises_id"/>
    <button type="submit" name="prideti">prideti nauja klienta</button>
</form>

<?php

if(isset($_GET["prideti"])) {
    if(isset($_GET["vardas"]) && !empty($_GET["vardas"]) && isset($_GET["pavarde"]) && !empty($_GET["pavarde"]) && isset($_GET["teises_id"]) && !empty($_GET["teises_id"])) {
       
        $vardas = $_GET["vardas"];
        $pavarde = $_GET["pavarde"];
        $teises_id = $_GET["teises_id"];
            if (is_numeric($teises_id)) {

                $sql = "INSERT INTO `klientai`(`vardas`, `pavarde`, `teises_id`) VALUES ('$vardas','$pavarde', $teises_id)";
                $klientas = "SELECT last_insert_id();";

                    if (mysqli_query($prisijungimas, $sql)){
                        echo "pavyko: ";
                        $last_id = mysqli_insert_id($prisijungimas);
                        echo "papildyta: id = ".$last_id.", vardas = ".$vardas.", pavarde = ".$pavarde.", teises numeris = ".$teises_id;
                    } else echo "nepavyko";
            } else echo "Teises id neskaicius";
        
    } else "lasgeliai tusti arba kazkas negerai";

    
}  

mysqli_close($prisijungimas);

?>
    
</body>
</html>