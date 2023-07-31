<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MVC</title>
    <link rel="stylesheet" href="<?= URL ?>/assets/css/styles.css">
    <script src="<?= URL ?>/assets/js/scripts.js"></script>
</head>

<body>

    <header>

        <div class="header">
            <div class="header__logo">
                <a href="<?= URL ?>" class="header__link">
                    <?= NAME ?>
                </a>
            </div>
            <div class="header__items">
                <a href="<?= URL ?>/login" class="header__link">Login</a>
                <a href="<?= URL ?>/register" class="header__link header__link--action">Register</a>
            </div>
        </div>

    </header>

    <?php echo $contend; ?>

</body>

</html>