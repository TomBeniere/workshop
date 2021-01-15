<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="La description de la page." />
    <title>Workshop</title>
    <link href="/css/tailwind.css" rel="stylesheet">
</head>
<body>
    <?php include VIEW."components/header.php";?>
    <main>
    <?php echo $content;?>
    </main>
    <?php include VIEW."components/footer.php"?>
</body>
</html>