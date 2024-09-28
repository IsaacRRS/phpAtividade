<?php
include_once 'templates/topo.php';
?>

<div class="conteudo">
    <h1>Fale Conosco</h1>
    <form action="fale.php" method="post">

        <label>Nome: </label><br>
        <input type="text" name="nome"><br>
        <label>Email: </label><br>
        <input type="text" name="email"><br>
        <label>Mensagem: </label><br>
        <input type="textarea" name="mensagem"><br><br>
        <input type="submit" value="Enviar">

    </form><br>
<?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $nome = isset($_POST["nome"]) ? $_POST["nome"] : '';
        $email = isset($_POST["email"]) ? $_POST["email"] : '';
        $mensagem = isset($_POST["mensagem"]) ? $_POST["mensagem"] : '';

        if (!empty($nome) && !empty($email) && !empty($mensagem)) {

            echo "O envio foi um sucesso!<br><br>";

            echo "Seu nome é {$nome}<br>";
            echo "Seu email é {$email}<br>";
            echo "Sua mensagem foi {$mensagem}<br>";
            
        } else {
            echo "Preencha corretamente.<br>";
        }
    }
?>
<?php
include_once 'TEMPLATES/rodape.php';
?>
<style>

    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    footer {
        position: fixed;
        left: 0;
    }
    .conteudo {
        position: relative;
        top: 25px;
        background: #ffffff;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        padding: 20px;
        max-width: 600px;
        margin: auto;
    }

    h1 {
        color: #343a40;
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
        margin-top: 10px;
        display: block;
    }

    input[type="text"], input[type="email"], textarea {
        width: 70%;
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #ced4da;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: slategray;
        color: #ffffff;
        border: none;
        padding: 10px;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }

</style>