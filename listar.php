

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

include 'config.php';

$sql = "SELECT * FROM users";
$stmt = $pdo->query($sql);

while ($user = $stmt->fetch()) {
    echo "Nome: " . $user['nome'] . " - E-mail: " . $user['email'] . "<br>";
}
?>

</header>


</body>
</html>