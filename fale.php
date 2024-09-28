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
