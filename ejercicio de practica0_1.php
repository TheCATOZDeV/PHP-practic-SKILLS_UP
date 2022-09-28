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








}