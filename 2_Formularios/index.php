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
        <legend>Informações do Personagem</legend>
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Nome do Personagem" required> 
    
        <br>

        <label for="poder">Poder</label>
        <input type="text" name="poder" id="poder" placeholder="Poder do Personagem" required> 
        
        <input type="submit" value="Enviar">
    </fieldset>
    </form>

    <?php
    if (isset($_GET['nome'])) {
        if (empty($_GET['nome'])) {
            echo 'O Nome é Obrigatorio!';
         }}
         else {
            echo $_GET['nome']; 
        } 
        $_GET['nome']; 
    
    if (isset($_GET['poder'])) {
        if (empty($_GET['poder'])) {
             echo 'O Poder é Obrigatorio!';
         }}
         else {
            echo $_GET['poder']; 
        } $_GET['poder']; 
    
 ?>

</body>
</html>