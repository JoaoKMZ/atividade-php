<?php
$usuario = [
    "nome" => "Marcos",
    "idade" => 23,
    "hobbies" => ["Futebol", "Leitura", "Música"]
];

function verificarIdade($idade) {
    if ($idade < 18) {
        return "Menor de idade\n";
    } else {
        return "Maior de idade\n";
    }
}

echo verificarIdade($usuario["idade"]);


function listarHobbies($hobbies) {
    echo "Hobbies:\n";
    foreach ($hobbies as $hobby) {
        echo "- $hobby\n";
    }
}

listarHobbies($usuario["hobbies"]);

function exibirMensagem($nome, $idade) {
    return "Olá, $nome! Você tem $idade anos.\n";
}

echo exibirMensagem($usuario["nome"], $usuario["idade"]);

?>
