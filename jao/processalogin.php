<?php
require 'conexao.php';
$usuario = $_POST ['usuario'];
$senha = $_POST ['senha'];

$sql = "select * from funcionarios where usuario='$usuario' and senha '$senha'";
$resultado=$conexao->query($sql);

if ($resultado-> num_rows ==1){
    header("Location:menu.php");
}
else{
    header("Location: saifora.php");

}

?>