<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title ?></title>

    <link 
        
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
        
        rel="stylesheet"
    
    >
    <link 
    
        href="https://getbootstrap.com/docs/5.3/assets/css/docs.css"
        
        rel="stylesheet"
    
    >

</head>

<body>

    <?php include_once "includes/nav.php" ?>
    
    <div class="container my-5">

        <h4 class="mb-4"><?= $title ?></h4>

        <?= $content ?>

    </div>

    <script 
    
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    
    ></script>

</body>

</html>
