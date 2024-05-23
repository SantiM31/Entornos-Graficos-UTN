<?php
function comprobar_nombre_usuario($nombre_usuario){
 //compruebo que el tamaño del string sea válido.
 if (strlen($nombre_usuario)<3 || strlen($nombre_usuario)>20){
 echo $nombre_usuario . " no es válido<br>";
 return false;
 }
 //compruebo que los caracteres sean los permitidos
 $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-
_";
 for ($i=0; $i<strlen($nombre_usuario); $i++){
    if (strpos($permitidos, substr($nombre_usuario,$i,1))===false){
        echo $nombre_usuario . " no es válido<br>";
        return false;
    }
 }
 echo $nombre_usuario . " es válido<br>";
 return true;
}

echo "<p>Nombres</p>\n";
comprobar_nombre_usuario('A');
comprobar_nombre_usuario('?');
comprobar_nombre_usuario('Jorge');
comprobar_nombre_usuario('Armand2');
comprobar_nombre_usuario('Acido desoxirribonucleico');
comprobar_nombre_usuario('');
?>