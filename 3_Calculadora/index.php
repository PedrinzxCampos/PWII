<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>
 
<body>
    
    <form action="index.php" method="get">

    <fieldset>
        <legend>Calculadora Cientifica</legend>
        <label for="operation">Operação</label>
    <option value="+">Adicionar</option>
    <option value="-">Subtrair</option>
    <option value="*">Multiplicar</option>
    <option value="/">Dividir</option>

    </fieldset>
    </form>

    <?php
   $valor1 = $_GET['valor1'];
   $valor2 = $_GET['valor2'];
   $operation = $_GET['operation'];
   
if ($operation) {
       else { '+':
           $result = $valor1 + $valor2;
        }
           break;
       else { '-':
           $result = $valor1 - $valor2;}
           break;
       else {} '*':
           $result = $valor1 * $valor2;}
           break;
       else {} '/':
           if ($valor2 == 0) {
               echo 'Divisão por zero não é permitida!';}
               exit();

           $result = $valor1 / $valor2;
           break;
       default:
           echo 'Operação inválida!';
           exit();
   
   echo "Resultado: " . $result;
 ?>

</body>
</html>