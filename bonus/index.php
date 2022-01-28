<?php require __DIR__ . '/database.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Ajax Dischi - Milestone 2</title>

    <link rel="stylesheet" href="css/style.css">
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
        crossorigin="anonymous"
    />

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
</head>
<body style="background-color: #1e2d3b;"
>

    <?php include __DIR__ . '/partials/header.php'; ?>
    <?php include __DIR__ . '/partials/main.php'; ?>
    <?php include __DIR__ . '/partials/footer.php'; ?>

    <script src="js/script.js"></script>
</body>
</html>