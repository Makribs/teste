<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../site-exemplo/template/style.css">
    <title>Meu Primeiro Site em Repositório!</title>
</head>
<body>
    <?php 
        $firstName = $_GET['firstName'] ?? '';
        $lastName = $_GET['lastName'] ?? '';
    ?>
    <main>
        <h1>Salutation!</h1>

        <form action=<?=$_SERVER['PHP_SELF']?> method="get">
            <label for="firstName">First Name:</label>
            <input type="text" name="firstName" required>

            <label for="lastName">Last Name:</label>
            <input type="text" name="lastName" required>

            <input type="submit" value="Send">
        </form>

        <?php if ($firstName && $lastName) {
            echo "<br>
                <section>
                    <h2>Hello, $firstName $lastName! Nice to meet you! ^^</h2>
                </section>";
        }?>
    </main>
</body>
</html>