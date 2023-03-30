<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
</body>
</html>

<?php
require_once __DIR__.'/../vendor/autoload.php';

use APP\model\Calculadora;

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$op = $_POST['op'];

$calc = new Calculadora();

switch ($op) {
    case '+':
        $result = $calc->Somar($num1, $num2);
        break;
        case '-':
            $result = $calc->Subtrair($num1, $num2);
            break;
            case '/':
                $result = $calc->Dividir($num1, $num2);
                break;
                case '*':
                    $result = $calc->Multiplicar($num1, $num2);
                    break;
                    default:
                    $result = 'Operação Inválida';
}

echo "Resultado: $result";


