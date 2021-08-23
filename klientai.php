<?php


require_once ("prijungimas.php");

$sql = "SELECT * FROM `klientai` WHERE 1";

$rezultatas = $prisijungimas->query($sql);

// $klientai = mysqli_fetch_array($rezultatas);

while($klientai = mysqli_fetch_array($rezultatas)) {
echo $klientai["ID"];
echo " ";
echo $klientai["vardas"];
echo " ";
echo $klientai["pavarde"];
echo " ";
echo $klientai["teises_id"];
echo " ";
echo "<a href='klientai.php?trinti=".$klientai["ID"]."'>Trinti</a>";
echo "<br>";
}

if(isset($_GET["trinti"])){
    $id= $_GET["trinti"];
    $prisijungimas->query ("DELETE FROM `klientai` WHERE `ID` = $id;");
    header("location:klientai.php");  
}





?>