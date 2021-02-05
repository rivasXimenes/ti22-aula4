<?php 

// Variáveis super globais 
// Método  post -> variável superglobal $_POST[]
// $_POST['Silva', '1234']

$usuario= $_POST["usuario"];
$senha=$_POST["senha"];

echo "Usuário: ".($usuario);
echo "<br>";
echo "Senha: ".($senha);

?>