<style>
h3{color:blue;}
</style>
<?php
error_reporting(E_ALL ^ E_NOTICE);
//creamos la conexion a la base de datos
$conexion = mysql_connect('localhost','root','');
$db= mysql_select_db('noticias',$conexion);
$palabra = $_GET['variable'];
if($palabra == ''){
    echo 'Ingrese una palabra en el buscador';
}else{
$query = "SELECT registro_id, titulo, ntexto FROM registro where ntexto like '%$palabra%'";
$respuesta = mysql_query ($query) or die(mysql_error());
if (mysql_fetch_assoc ($respuesta)<=0) {
   
echo "No se encontraron resultados con el termino ".'<b>'.$palabra.'</b>'.".";
}else {
$respuesta = mysql_query ($query) or die(mysql_error());
while($row = mysql_fetch_array($respuesta))
{
    echo '<p>';
    echo '<b>'.$row['titulo'].'</b><br />';
    echo $row['ntexto'];
    echo '</p>';
}
}mysql_free_result($respuesta);
}
?>