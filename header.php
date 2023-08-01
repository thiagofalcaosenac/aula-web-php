<?php

if (!isset($titulo)){
    $titulo = "Home";
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>
        <?php echo $titulo; ?>
    </title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
</head>

<body>
    <?php
    include __DIR__ . '/menu.php';
    ?>
</body>