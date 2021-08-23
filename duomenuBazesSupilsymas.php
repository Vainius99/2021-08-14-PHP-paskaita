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

<form action="duomenuBazesSupilsymas.php" method="get">
    <button type="submit" name="sukurti">prideti 200 klientu</button>
</form>

<?php

if(isset($_GET["sukurti"])) {


    for($i=0; $i<200; $i++) {


        $sql = "INSERT INTO `klientai`(`vardas`, `pavarde`, `teises_id`) VALUES ('vardas$i','pavarde$i', 1)";

            if(mysqli_query($prisijungimas, $sql)) {

                echo "prideta";
        
            } else{
        
                echo "kazkas negerai";
        
            }
   
    }
  
} 

mysqli_close($prisijungimas);


?> 
    
</body>
</html>