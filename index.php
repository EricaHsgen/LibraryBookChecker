<?php 
    include "functions.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Book Return</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="styles.css", rel="stylesheet">
</head>
<body>
    <div>
        <?php include "form.php" ?>

        <?php
            if($_GET){
                $dueDate = $_GET["dueDate"];
                $returnDate = $_GET["returnDate"];
                $isOverdue = checkIfOverdue($dueDate, $returnDate);
                echo("<br>");
                echo("<h1>$isOverdue</h1>");
                echo("<p>Due date: $dueDate</p>");
                echo("<p>Return date: $returnDate</p>");
            }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>