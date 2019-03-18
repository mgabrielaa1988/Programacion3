Hola mundo
<?php
echo "<br>Hola mundo otra vez";

//Ejercicio 01
$nombre="Gabriela";
$apellido="Aragón";
echo "<br>".$apellido.", ".$nombre;

//Ejercicio 02
$x=-3;
$y=15;
echo "<br>".($x+$y);

//Ejercicio 04
/*Confeccionar un programa que sume todos los números enteros desde 1 mientras la suma no
supere a 1000. Mostrar los números sumados y al finalizar el proceso indicar cuantos números
se sumaron.*/
$contador=0;
$suma=0;
do{
    $contador++;
    $suma=$suma+$contador;   
    echo "<br>Numero ".$contador." Suma ".$suma;
}while($suma<1000);
/*for($i=0;$i<1000;$i++){
    echo "<br>Numero ".$i." Suma ".$suma;
    if($suma>1000){
        break;
    }
    $suma=$suma+$i;
    $contador++;   
}*/
echo "<br>Cantidad de numeros sumados ".$contador;

//Ejercicio 07
/*Obtenga la fecha actual del servidor (función date ) y luego imprímala dentro de la página con
distintos formatos (seleccione los formatos que más le guste). Además indicar que estación del
año es. Utilizar una estructura selectiva múltiple.*/
$dia=date("l dS F,o H:i:s");
$mes=date("n");
echo "<br>".$dia;
switch($mes){
    case 01:
    case 02:
    case 03:
    case 04:
    case 05:
    case 06:
    case 07:
    case 08:
    case 09:
    case 10:
    case 11:
    case 12:
}

/*Aplicación Nº 9 (Carga aleatoria)
Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número (utilizar la
función rand ). Mediante una estructura condicional, determinar si el promedio de los números
son mayores, menores o iguales que 6. Mostrar un mensaje por pantalla informando el
resultado.*/
/*$vec;
$sumaTotal=0;
for ($i=0; $i <5 ; $i++) { 
    $vec[$i]=rand(1,10);
    echo "<br>Numero ".$vec[$i];
    $sumaTotal=$sumaTotal+$vec[$i];
}
$promedio=$sumaTotal/5;
if($promedio<6){
    echo "<br>El promedio es ".$promedio.", y es menor a 6.";
}
elseif ($promedio>6) {
    echo "<br>El promedio es ".$promedio.", y es mayor a 6.";
}
else {
    echo "<br>El promedio es ".$promedio.".";
}*/

/*Aplicación Nº 10 (Mostrar impares)
Generar una aplicación que permita cargar los primeros 10 números impares en un Array.
Luego imprimir (utilizando la estructura for ) cada uno en una línea distinta (recordar que el
salto de línea en HTML es la etiqueta <br/> ). Repetir la impresión de los números utilizando
las estructuras while y foreach*/
$vec;
for ($i=0; $i <10 ; $i++) { 
    
}

?>