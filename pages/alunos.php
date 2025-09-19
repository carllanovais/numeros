<?php
// alunos
$alunos = [
   ["nome" => "Juca", "idade" => 27, "notaFinal" => 8.5],
   ["nome" => "Maria", "idade" => 22, "notaFinal" => 9.0],
   ["nome" => "Pedro", "idade" => 25, "notaFinal" => 7.5],
];
$alunos[] = ["nome" => "Ana", "idade" => 20, "notaFinal" => 8.0];
$alunos[] = ["nome" => "Lucas", "idade" => 24, "notaFinal" => 6.5];
$alunos[] = ["nome" => "Carlla", "idade" => 21, "notaFinal" => 9.2];
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
// Exibir os alunos
echo "<h2>Lista de Alunos</h2>";
foreach ($alunos as $aluno) {
   echo "Nome: " . $aluno["nome"] . " - Idade: " . $aluno["idade"] . " - Nota Final: " . $aluno["notaFinal"] . "<br>";
}
echo "<br><strong>Média da turma: " . number_format($media, 2, ',', '.') . "</strong>";
?>
