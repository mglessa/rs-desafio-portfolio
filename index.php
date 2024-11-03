<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,100..900;1,100..900&family=Inconsolata:wght@200..900&family=Maven+Pro:wght@400..900&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" href="/assets/styles/global.css">
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <i class="ph ph-smiley"></i>
    <i class="ph-fill ph-heart" style="color: hotpink"></i>
    <i class="ph-thin ph-cube"></i>

    <?php include './components/tag.php';?>

    <?php $project['stack'] = ['HTML', 'CSS']?>
    <?php include './components/tag.php';?>

    <div>
        <?php include './components/project.php';?>
    </div>

</body>
</html>