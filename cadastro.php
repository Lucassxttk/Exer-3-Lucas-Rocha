<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastrar Usuário</title>
</head>
<body>
    <h1>Cadastro de Novo Usuário</h1>
    
    <form action="cadastro_action.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br><br>
        
        <label for="email">E-mail:</label>
        <input type="email" name="email" required><br><br>
        
        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br><br>
        
        <button type="submit">Cadastrar</button>
    </form>
    
    <br>
    <a href="index.php">Voltar para a página inicial</a>
</body>
</html>