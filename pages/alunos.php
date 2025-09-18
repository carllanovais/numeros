<?php
//array de alunos
$alunos = [
["alunos" =>"Carlla", "idade" => 28, "notaFinal" => 6.4],
["alunos" =>"Samira", "idade" => 22, "notaFinal" => 8.4],
["alunos" =>"Letica", "idade" => 23, "notaFinal" => 9.4],
["alunos" =>"Carlos", "idade" => 23, "notaFinal" => 9.3],
["alunos" =>"Leandro", "idade" => 25, "notaFinal" => 7.2],
["alunos" =>"Bianca", "idade" => 27, "notaFinal" => 6.1],
["alunos" =>"Vitoria", "idade" => 34, "notaFinal" => 5.8],
["alunos" => "Leonardo", "idade" => 21, "notaFinal" => 5.0],
["alunos" => "Gabriela", "idade" => 21, "notaFinal" => 5.0],
["alunos" =>"Julio", "idade" => 29, "notaFinal" => 7.5]
];
 
 
$soma = 0;
// Mostrar informações e somar notas
foreach ($alunos as $a) {
   echo "alunos: {$a['alunos']}<br>";
   echo "idade: {$a['idade']}<br>";
   echo "notaFinal: {$a['notaFinal']}<br><br>";
   $soma += $a['notaFinal'];
}
// Média
$media = $soma / count($alunos);
echo "Média das notas: " . number_format($media, 2, ',', '.');
?>