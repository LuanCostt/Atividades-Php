<?php
$alunos = [
    "Luan" => ["nota" => "10"],
    "Pedro" => ["nota" => "9.5"],
    "Juan" => ["nota" => "8.5"],
];
$media = 0;
foreach ($alunos as $alunoNome => $alunoNota) {
    echo "Nome: " . $alunoNome. " , " . "Nota: " . $alunoNota["nota"] . "<br>";
    $media += $alunoNota['nota']/3;
};
    echo "Média da turma: " . number_format($media,2,'.','.');
?> 