<!-- Importo il file database.php che contiene la struttura dati in PHP -->
<?php 
    require __DIR__ . '/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Dischi</title>
</head>
<body>
    <!-- Prima Milestone:
    Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi. -->

    <!-- Header -->
    <header>
        <div class="logo">
            <img src="./img/spotify-logo.png" alt="Spotify Logo">
        </div>
    </header>

    <!-- Main -->
    <main>
        <div class="container">
            <div class="main-wrapper">
                <!-- Tramite un foreach sul $database stampo in pagina gli elementi -->
                <?php foreach($database as $disc) { ?>
                    <div class="single-card">
                        <div class="poster">
                            <img src="<?php echo $disc['poster']; ?>" alt="<?php echo $disc['title']; ?>">
                        </div>

                        <div class="title">
                            <h3><?php echo $disc['title']; ?></h3>
                        </div>

                        <div class="author">
                            <?php echo $disc['author']; ?>
                        </div>

                        <div class="year">
                            <?php echo $disc['year']; ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>
    <!-- End Main -->

</body>
</html>