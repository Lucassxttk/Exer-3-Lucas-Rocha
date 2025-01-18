
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
session_destroy(); // Destrói a sessão
header('Location: ../index.php'); // Redireciona para a página de login
exit();
?>

</header>


</body>
</html>