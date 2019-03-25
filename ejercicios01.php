Hola mundo
<?php
echo "<br>Hola mundo otra vez<br>";

//Parte 1 - Ejercicios Simples  
 
/*Aplicación Nº 1 (Mostrar variables)  
Realizar un programa que guarde su nombre en $nombre y su apellido en $apellido . 
Luego mostrar el contenido de las variables con el siguiente formato: Pérez, Juan. 
Utilizar el operador de concatenación.*/
$nombre="Gabriela";
$apellido="Aragón";
echo "<br>".$apellido.", ".$nombre."<br>";

/*Aplicación Nº 2 (Sumar dos números)  
Hacer un programa en PHP que sume el contenido de dos variables $x = -3 y $y = 15. 
Mostrar el resultado final. */
$x=-3;
$y=15;
echo "<br>La suma de x: ".$x." e y: ".$y." es = ".($x+$y)."<br>";

/*Aplicación Nº 3 (Sumar dos números II)  
Partiendo del ejercicio anterior, modificar la salida por pantalla para que se visualice
 el valor de la variable $x , el valor de la variable $y y el resultado final en líneas 
 distintas (recordar que el salto de línea en HTML es la etiqueta <br/> ).  */
 echo "<br> x = ".$x."<br> y = ".$y."<br> x + y = ".($x+$y)."<br>";

/*Aplicación Nº 4 (Sumar números)  
Confeccionar un programa que sume todos los números enteros desde 1 mientras la suma no
supere a 1000. Mostrar los números sumados y al finalizar el proceso indicar cuantos números
se sumaron.*/
$contador=0;
$suma=0;
/*do{
    $contador++;
    $suma=$suma+$contador;
    if($suma>1000){break;}   
    echo "<br>Numero ".$contador." Suma ".$suma;
}while($suma<1000);*/
for($i=0;$i<1000;$i++){
    $contador++;
    $suma=$suma+$contador;
    if($suma>1000){break;}  
    echo "<br>Numero ".$contador." Suma ".$suma; 
}
echo "<br>Cantidad de numeros sumados ".$i."<br>";

/*Aplicación Nº 5 (Obtener el valor del medio)  
Dadas tres variables numéricas de tipo entero $a , $b y $c , realizar una aplicación que 
muestre el contenido de aquella variable que contenga el valor que se encuentre en el medio
 de las tres variables. De no existir dicho valor, mostrar un mensaje que indique lo sucedido.  
 Ejemplo 1: $a = 6; $b = 9; $c = 8; => se muestra 8.  
 Ejemplo 2: $a = 5; $b = 1; $c = 5; => se muestra un mensaje “No hay valor del medio” */
 $a=6;
 $b=9;
 $c=8;
 echo "<br>Siendo A = ".$a." B = ".$b." C = ".$c;
 if(($a>$b && $a<$c) || ($a>$c && $a<$b)){
    echo "<br>El valor medio es: ".$a."<br>";
 }
 elseif(($b>$a && $b<$c) || ($b>$c && $b<$a)){
    echo "<br>El valor medio es: ".$b."<br>";
 }
 elseif(($c>$a && $c<$b) || ($c>$b && $c<$a)){
    echo "<br>El valor medio es: ".$c."<br>";
 }
 else{
    echo "<br>No hay valor del medio<br>";
 }

 $a=5;
 $b=1;
 $c=5;
 echo "<br>Siendo A = ".$a." B = ".$b." C = ".$c;
 if(($a>$b && $a<$c) || ($a>$c && $a<$b)){
    echo "<br>El valor medio es: ".$a."<br>";
 }
 elseif(($b>$a && $b<$c) || ($b>$c && $b<$a)){
    echo "<br>El valor medio es: ".$b."<br>";
 }
 elseif(($c>$a && $c<$b) || ($c>$b && $c<$a)){
    echo "<br>El valor medio es: ".$c."<br>";
 }
 else{
    echo "<br>No hay valor del medio<br>";
 }

/*Aplicación Nº 6 (Calculadora)  
Escribir un programa que use la variable $operador que pueda almacenar los símbolos matemáticos:
 ‘+’, ‘-’, ‘/’ y ‘*’; y definir dos variables enteras $op1 y $op2 . 
 De acuerdo al símbolo que tenga la variable $operador, deberá realizarse la operación indicada 
 y mostrarse el resultado por pantalla.  */
 $op1=2;
 $op2=0;
 $operador='+';
 $resultado=0;
 switch($operador){
     case '+':
     $resultado=$op1+$op2;
     break;
     case '-':
     $resultado=$op1-$op2;
     break;
     case '/':
     if($op2!=0){
         $resultado=$op1/$op2;
     }
     break;
     case '*':
     $resultado=$op1*$op2;
     break;
 }
 echo "<br>Calculadora<br>".$op1.$operador.$op2."=".$resultado."<br>";

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