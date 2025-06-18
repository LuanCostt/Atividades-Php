<?php
/**
 * Função de validarEnderecoEmail
 * @param string $email Endereço de email a ser validado
 * @return bool Resultado booleano da validação
 */
function validarEnderecoEmail(string $email): bool{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}
$diaDaSemana = 1;
switch ($diaDaSemana) {
    case 1:
        echo "Domingo";
        break;
    case 2:
        echo "Segunda-feira";
        break;
    case 3:
        echo "Terça-feira";
        break;
    case 4:
        echo "Quarta-feira";
        break;
    case 5:
        echo "Quinta-feira";
        break;
    case 6:
        echo "Sexta-feira";
        break;
    case 7:
        echo "Sábado";
        break;
    default:
    echo "O número informado não equivale a um dia da semana válido!";
}
?>