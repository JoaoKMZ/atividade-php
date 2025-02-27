<?php
$usuario = [
    "nome" => "Marcos",
    "idade" => 23,
    "hobbies" => ["Futebol", "Leitura", "Música"]
];

function exibirMensagem($nome, $idade) {
    return "Olá, $nome! Você tem $idade anos.\n";
}

function listarHobbies($hobbies) {
    echo "Seus hobbies são:\n";
    foreach ($hobbies as $hobby) {
        echo "- $hobby\n";
    }
}

function verificarIdade($idade) {
    if ($idade < 18) {
        return "Você é menor de idade.\n";
    } else {
        return "Você é maior de idade.\n";
    }
}

echo exibirMensagem($usuario["nome"], $usuario["idade"]);
listarHobbies($usuario["hobbies"]);
echo verificarIdade($usuario["idade"]);

?>
