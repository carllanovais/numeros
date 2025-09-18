<?php
// a) Criar array com números de 1 a 10
$numeros = range(1, 10);
// a) Exibir todos os números do array
echo "Números do array: ";
foreach ($numeros as $n) {
   echo $n . " ";
}
echo "<br>";
// b) Calcular e exibir a soma de todos os números
$soma = array_sum($numeros);
echo "Soma de todos os números: " . $soma . "<br>";
// c) Inverter a ordem dos elementos e exibir
$invertido = array_reverse($numeros);
echo "Array invertido: ";
foreach ($invertido as $n) {
   echo $n . " ";
}
?>