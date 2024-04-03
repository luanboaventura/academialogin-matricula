<?php

if(isset($_POST['submit']))
{
   // print_r($_POST['nome']);
    //print_r($_POST['contato']);
    //print_r($_POST['email']);
    //print_r($_POST['senha']);

    include_once('config.php');

    $nome = $_POST['nome'];
    $contato = $_POST['contato'];
    $email = $_POST['nome'];
    $senha = $_POST['nome'];

    $result = mysqli_query($conexao, "INSERT INTO new_table(nome,contato,email,senha,)VALUES ('$nome','$contato','$email','$senha')");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matricula</title>
</head>
<body>

    <div class="box">
        <form action="matricula.php">
            <fieldset>

                <legend><b>Matricula do aluno</b></legend>
                <br></br>

                <div class="inputbox">
                    <input type="text" name="nome" class="inputUser" required>
                    <label for="nome">Nome completo</label>
                    <br></br>

                    <input type="tel" name="contato" class="inputUser" required>
                    <label for="nome">Contato</label>
                    <br></br>

                    <input type="email" name="email" class="inputUser" required>
                    <label for="nome">Email</label>
                    <br></br>

                    <input type="password" name="senha" class="inputUser" required>
                    <label for="nome">Senha</label>
                    <br></br>

                    <input type="submit" name="submit" id="submit">

                </div>

            </fieldset>
        </form>
    </div>
    
</body>
</html>