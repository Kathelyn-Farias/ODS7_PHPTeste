<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<style>
*{
    margin: 0;
    padding: 0;
}

header{
    font-family: cursive;
    background-color: #F58F01;
    width: 100%;
    height: 60px;
    text-align: center;
    align-items: center;
    display: flex;
    justify-content: space-evenly;
    position: fixed;
    border-radius: 2px;
}

a{
    text-decoration: none;
    color: white;
}

div{
    padding-top: 100px;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 30vh;
}

form{
    display: flex;
    flex-direction: column;
    border: 1px solid black;
    padding: 10px;
    width: 500px;
    border-radius: 5px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}

label, input, textarea {
    margin-bottom: 10px;
}

button{
    height: 25px;
    background-color: #F58F01;
    border: 0px;
    border-radius: 5px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}
</style>

<header>
            <a href="home.html">HOME</a>
            <a href="pag1.html">ODS 7</a>
            <a href="pag2.html">SUAS METAS</a>
            <a href="pag3.html">ESTATÍSTICAS</a>
            <a href="pag4.php">FORMULÁRIO</a>
</header>

<body>
    <div>
        <!-- Formulário de envio -->
        <form action="enviar.php" method="post">
            <!-- Campo para o nome -->
            <label for="name">Seu nome:</label>
            <input name="name" id="name" type="text">
            <!-- Campo para o e-mail -->
            <label for="email">Seu email:</label>
            <input name="email" id="email" type="email">
            <!-- Campo para a caixa de sugestão -->
            <label for="suggestion">Sua sugestão para atingir os objetivos da ODS:</label>
            <textarea name="suggestion" id="suggestion"></textarea>
            <!-- Botão enviar -->
            <button type="submit">Enviar</button>
        </form>
    </div>

<?php
//Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    //Obtém os valores enviados pelo formulário
    $name = $_POST['name'];
    $email = $_POST['email'];
    $suggestion = $_POST['suggestion'];

    //Exibe os valores recebidos
    echo ('<div style="text-align: center;">');
    echo ('Seu nome: ' . $name . '<br/>');
    echo ('Seu email: ' . $email . '<br/>');
    echo ('Sua sugestão para atingir os objetivos da ODS: ' . $suggestion . '<br/> <br/>');

    //Ou exibir uma mensagem
    echo ('Sua sugestão foi recebida com sucesso!!');
    echo ('</div>');
}
?>
</body>
</html>