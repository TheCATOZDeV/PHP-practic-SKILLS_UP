<?php



($_SERVER["REQUEST_METHOD"] == "POST") {
if (!empty ($_POST["name"]) || !empty($_POST["email"]) || 
echo "<br><strong>name post hay datos<strong><br>";
$name = $_POST["name"];
 













function limpiar_dato($data){
     $data =trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars ($data);

 }

//nombre, email y nº telefono 
function validar_name($name){
    if(!preg_match("/^['a-zA-z-'] ")) {
        return
    }
}
$name = limpiar_dato($_POST["name"]);
$email = limpiar_dato($_POST["email"]);
$phone = limpiar_dato($_POST["phone"]);
$address = limpiar_dato($_POST["address"]);
$city = limpiar_dato($_POST["city"]);
 





if (isset($_POST["address"])){

    $address = limpiar_dato($_POST["address"]);
}else{
    $address = NULL;
}
$city =limpiar_dato($_POST["city"]);
$communities =limpiar_dato($_POST["communities"]);
$Zcode =limpiar_dato($_POST["Zcode"]);
$format =limpiar_dato($_POST["format"]);
if (isset($_POST["city"])){

    $city = limpiar_dato($_POST["city"]);
}else{
    $city = NULL;
}
if (isset($_POST["Zcode"])){

    $Zcode = limpiar_dato($_POST["Zcode"]);
}else{
    $Zcode = NULL;
}
if (isset($_POST["communities"])){

    $communities = limpiar_dato($_POST["communities"]);
}else{
    $communities = NULL;
}
if(!empty($_POST["name"])) || !empty($_POST["email"]) || !empty($_POST[["phone"]])
 echo "Método post no ha llegado";
 if (!empty($_POST))
 
}

