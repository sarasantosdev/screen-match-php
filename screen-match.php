<?php

echo "Bem-vindo(a) ao Screen Match! \n";

$nomeDoFilme = "Top Gun - Maverick";
$nomeDoFilme = "Thor: Ragnarok";
$nomeDoFilme = "Se beber não case";

$anoLancamento = 2022;

$notas = $argv;
array_shift($notas);
$notaDoFilme = array_sum($notas) / count($notas);

$planoPrime = true;

$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

echo "Nome do filme: $nomeDoFilme \n";
echo "Nota: $notaDoFilme \n";
echo "Ano de lançamento: $anoLancamento \n";

if ($anoLancamento > 2022){
    echo "Esse filme é um lançamento \n";
} else if($anoLancamento > 2020 && $anoLancamento <= 2022){
    echo "Esse filme ainda é novo \n";
}else{
    echo "Esse filme não é um lançamento \n";
}

$genero = match ($nomeDoFilme){
    "Top Gun - Maverick" => "ação",
    "Thor: Ragnarok" => "super-herói",
    "Se beber não case" => "comédia",
    default => "genêro desconhecido"
};

echo "O gênero do filme é: $genero \n";