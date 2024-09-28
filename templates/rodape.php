<footer>
    <div class="caixa">
        <p>&copy; <?php echo date("Y"); ?> Rodapé</p>
        <ul>
            
            <li><a href="#">Política de Privacidade</a></li>
            <li><a href="#">Termos </a></li>
        </ul>
    </div>
</footer>

<style>
body {
    margin: 0;
    padding: 0;
}
footer {
    background: #15475c;
    color: #ffffff;
    padding: 20px 0;
    text-align: center;
    position: fixed;
    bottom: 0;
    height: 65px;
    width:100%;
}

footer .caixa {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    }

footer ul {
    list-style: none;
    padding: 0;
    display: flex;
    justify-content: center;
    margin-top: 10px;
}

footer ul li {
    margin: 0 15px;
}

footer ul li a {
    color: #ffffff;
    text-decoration: none;
    transition: color 0.3s;
}

footer ul li a:hover {
    color: #1abc9c;
}

</style>
