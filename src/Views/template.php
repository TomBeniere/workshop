<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="La description de la page." />
    <title>Workshop</title>
    <link  rel="stylesheet" href="/css/tailwind.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body class="bg-sky h-screen bg-fixed">
    <?php include VIEW."components/header.php";?>
    <main>
    <?php echo $content;?>
    </main>
    <?php include VIEW."components/footer.php"?>
    <script src="https://kit.fontawesome.com/0694e3032b.js" crossorigin="anonymous"></script>
</body>
</html>