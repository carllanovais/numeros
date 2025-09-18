<?php

// Criar array com 3 alunos

$alunos = [

    ["nome" => "Juca", "idade" => 27, "notaFinal" => 8.5],

    ["nome" => "Maria", "idade" => 22, "notaFinal" => 9.0],

    ["nome" => "Pedro", "idade" => 25, "notaFinal" => 7.5]

];

// Adicionar mais 10 alunos

$alunos[] = ["nome" => "Ana", "idade" => 20, "notaFinal" => 8.0];

$alunos[] = ["nome" => "Lucas", "idade" => 24, "notaFinal" => 6.5];

$alunos[] = ["nome" => "Carla", "idade" => 21, "notaFinal" => 9.2];

$alunos[] = ["nome" => "Rafael", "idade" => 26, "notaFinal" => 7.0];

$alunos[] = ["nome" => "Fernanda", "idade" => 23, "notaFinal" => 8.8];

$alunos[] = ["nome" => "Paulo", "idade" => 28, "notaFinal" => 6.9];

$alunos[] = ["nome" => "Juliana", "idade" => 22, "notaFinal" => 9.5];

$alunos[] = ["nome" => "Diego", "idade" => 27, "notaFinal" => 7.8];

$alunos[] = ["nome" => "Camila", "idade" => 24, "notaFinal" => 8.3];

$alunos[] = ["nome" => "André", "idade" => 25, "notaFinal" => 7.2];

// Calcular média das notas

$somaNotas = 0;

foreach ($alunos as $aluno) {

    $somaNotas += $aluno["notaFinal"];

}

$media = $somaNotas / count($alunos);

?>
 
