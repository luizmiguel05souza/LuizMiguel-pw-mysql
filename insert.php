<?php
require_once './vendor/autoload.php';
use ExemploPDOMySql\MySQLConnection;

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $bd = new MySQLConnection();
    $comando = $bd->prepare('INSERT INTO generos(nome) VALUES(:nome)');
    $comando->execute([':nome' => $_POST['nome']]);

    header('Location:/index.php');
}

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Novo Gênero</title> 
    </head>
    <body>
        
            <h1>Novo Gênero</h1>
            <form action="insert.php" method="post">
                    <label for="nome">Nome</label>
                    <input type="text" required name="nome" />
                     <button type="submit">Salvar</button>
            </form>
       
    </body>
</html>