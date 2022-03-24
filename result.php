<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <!-- CSS for Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>

    <nav class="navbar">
        <img src="assets/logo.jpg" alt="Logo" class="navbar-brand logo" />
    </nav>

    <section id="result">
        <div class="content result">

            <img src="assets/cake.jpg" class="img-result" alt="Message">

            <div class="message">
                <?php
                    $errors = [];
                    if(isset($_POST['submit'])) {

                        if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])) {
                            $errors = "Tous les champs sont requis !";
                        }
                        if (!$errors) {
                            $name = htmlspecialchars(($_POST['name']));
                            $email = htmlspecialchars(($_POST['email']));
                            $message = htmlspecialchars(($_POST['message']));
                        }

                    }
                ?>

                <div class="my-5">
                    <a href="index.php"><i class="fas fa-backward"></i> Retour au site</a>
                </div>

                <?php
                    if ($errors){
                    echo    '<div class="text-message alert alert-dismissible alert-danger mt-3">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                <strong>'. $errors . '</strong>
                            </div>';
                    };

                    if (isset($email)){
                        echo '<p>('. trim($email) .')</p>';
                    };

                    if (isset($name)){
                        echo '<h5 class="text-danger"> Bonjour ' . trim($name) . '</h5>';
                    };

                    if (isset($message)){
                        echo '<div class="text-message text-danger"><p>Nous vous remercions pour votre message : </p>'. '<div>'. trim($message) .'</div></div>';
                    };
                ?>
            </div>

        </div>
    </section>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
