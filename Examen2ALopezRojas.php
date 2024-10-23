<?php
/*CBTIS 89
Programa que almacena precios de 5 articulos en un arreglo para por medio de un ciclo
calcula el iva para guardarlo en otro arreglo guardar la suma y el iva del precio
para asi calcular un descuento del 10% a todos los elementos del arreglo para 
finalmente obtener los resultados despues de aplicar descuento para al final 
guardarlo en un arreglo y posteriormente imprimirlo. 
Lopez Rojas Jesus Emiliano
3ºA programacion Matutino
*/
$array1=(0.16);
$arrayIVA=array();
$arraySubtotal=array();
$arrayPrecios=array(500,400,200,700,100);

echo "ARREGLOS PRECIOS ";
foreach()
echo "$arrayPrecios"; 
echo "<br>";

$longitud = count ($arrayPrecios);
for ($j=0;$j<=$longitud;$j++){
$arrayIVA[$j]=$arrayPrecios[$j]*$array1[$j];
$arraySubtotal[$j]=$arrayIVA[$j]+$arrayPrecios[$j];
}
echo "ARREGLO IVA <br>";
for ($i=0; $i<$longitud; $i++)
 {echo $arrayIVA[$j];
 echo "<br>","<br>";}

echo "ARREGLO SUBTOTAL <br>";
for ($i=0; $i<$longitud; $i++)
 {echo $arraySubtotal[$j];
 echo "<br>","<br>";} 
?>