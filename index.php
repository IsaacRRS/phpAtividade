<?php 

include_once("templates/topo.php");
/* include_once("templates/menu.php"); resolvi remover e colocar os links no topo.php */

if(empty($_SERVER["QUERY_STRING"])) {
    $var = "principal.php";
    include_once("$var");
}
else {
    $pg = $_GET['pg'];
    include_once("$pg.php");
}

include_once("templates/rodape.php");





?>