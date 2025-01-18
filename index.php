

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" >
    <title>Document</title>
</head>
<body>
    <header>
<?php

session_start();

// Verifica se o usuário está autenticado
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit();
}

include 'config.php';


echo "<h1>Bem-vindo, " . $_SESSION['user_nome'] . "!</h1>";

echo "<h2>Opções:</h2>";
echo "<a href='cadastro.php'><button>Cadastrar Novo Usuário</button></a><br><br>";
echo "<a href='listar.php'><button>Listar Usuários</button></a><br><br>";

$sql = "SELECT * FROM users";
$stmt = $pdo->query($sql);


echo "<br><a href='logout.php'>Sair</a>";


?>

</header>


</body>
</html>