<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS -->
    <link href="style.css" rel="stylesheet" type="text/css" />
    <!-- CSS for Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Awesome" -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>

<!-- Logo -->
<nav class="navbar">
    <img src="assets/logo.jpg" alt="Logo" class="navbar-brand logo"/>
</nav>

<!-- Contact for organize events -->
<section id="contact">
    <div class="welcome">
        <img src="assets/icons/birthday.png" alt="Birthday" class="icon-lg mx-2">
        <div>
            <h1 class="h6">UN EVENEMENT A ORGANISER ?</h1>
            <h1 class="h2">Nos professionnels<br>s'occupent de tout !</h1>
        </div>
    </div>

    <div class="contact-form">
        <strong><p class="text-center">Organiser un évènement</p></strong>
        <form action="result.php" method="post">
            <div class="mb-3">
                <input type="text" name="name" placeholder="Nom & Prénom" class="form-control">
            </div>
            <div class="mb-3">
                <input type="email" name="email" placeholder="Adresse email" class="form-control">
            </div>
            <div class="form-group mb-3">
                <textarea rows="2" name="message" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="form-control btn btn-primary" value="Organiser">
            </div>
        </form>

    </div>
</section>

<!-- Presentation of our services  -->
<section id="presentation">
    <div class="bg-part">
        <strong><p>In voluptatem voluptas qui libero amet quo velit unde.</p></strong>
        <div class="tab-choice mt-4">
            <button class="btn btn-primary m-0 w-50">In arcus</button>
            <button class="btn btn-secondary w-50">Cursus euismod</button>
        </div>
    </div>
    <div class="part">
        <img src="assets/icons/calendar.png" alt="Calendar" class="icon">
        <p>Lorem ipsum dolor sit amet. Non magnam porro et itaque saepe non illo velit sit voluptatem omnis. Non natus velit rem illum galisum.</p>
        <b><h6>En savoir +</h6></b>
    </div>
    <div class="part">
        <img src="assets/icons/balloon.png" alt="Balloon" class="icon">
        <p>Lorem ipsum dolor sit amet. Non magnam porro et itaque saepe non illo velit sit voluptatem omnis. Non natus velit rem illum galisum. </p>
        <b><h6>En savoir +</h6></b>
    </div>
    <div class="part">
        <img src="assets/icons/karaoke.png" alt="Karaoke" class="icon">
        <p>Lorem ipsum dolor sit amet. Non magnam porro et itaque saepe non illo velit sit voluptatem omnis. Non natus velit rem illum galisum. </p>
        <b><h6>En savoir +</h6></b>
    </div>
</section>

<!-- Large screens slider -->
<section id="slider">
    <h2 class="h3">Quelques photos de nos magnifiques réalisations !</h2>
    <p class="description">Est sunt facilis sed molestias amet est autem eveniet aut nobis dicta </p>

    <div class="slide content">
        <div id="lgCarousel" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/slider/slider-1.jpg" alt="" class="img-slide">
                    <img src="assets/slider/slider-2.jpg" alt="" class="img-slide">
                    <img src="assets/slider/slider-3.jpg" alt="" class="img-slide">
                    <img src="assets/slider/slider-4.jpeg" alt="" class="img-slide">
                    <img src="assets/slider/slider-5.jpeg" alt="" class="img-slide">
                    <img src="assets/slider/slider-6.jpg" alt="" class="img-slide">
                </div>
                <div class="carousel-item">
                    <img src="assets/slider/slider-7.jpg" alt="" class="img-slide">
                    <img src="assets/slider/slider-8.jpeg" alt="" class="img-slide">
                    <img src="assets/slider/slider-1.jpg" alt="" class="img-slide">
                    <img src="assets/slider/slider-2.jpg" alt="" class="img-slide">
                    <img src="assets/slider/slider-3.jpg" alt="" class="img-slide">
                    <img src="assets/slider/slider-4.jpeg" alt="" class="img-slide">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#lgCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#lgCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- Small screens slider -->
    <div class="mobile-slide content">
        <div class="slideshow">
            <ul>
                <li><img src="assets/slider/slider-1.jpg" alt="" class="img-slide"></li>
                <li><img src="assets/slider/slider-2.jpg" alt="" class="img-slide"></li>
                <li><img src="assets/slider/slider-3.jpg" alt="" class="img-slide"></li>
                <li><img src="assets/slider/slider-4.jpeg" alt="" class="img-slide"></li>
                <li><img src="assets/slider/slider-5.jpeg" alt="" class="img-slide"></li>
                <li><img src="assets/slider/slider-6.jpg" alt="" class="img-slide"></li>
                <li><img src="assets/slider/slider-7.jpg" alt="" class="img-slide"></li>
                <li><img src="assets/slider/slider-8.jpeg" alt="" class="img-slide"></li>
                <li><img src="assets/slider/slider-1.jpg" alt="" class="img-slide"></li>
            </ul>
        </div>
    </div>
</section>

<!-- More description -->
<section id="details">
    <h2 class="h3">Nos differents packs sur mesure !</h2>
    <p class="description">Est sunt facilis sed molestias amet est autem eveniet aut nobis dicta </p>

    <div class="content-pack">
        <div class="pack mx-3">
            <p>Lorem</p>
            <h4>Nunc</h4>
            <ul>
                <li>- Ullamcorper a</li>
                <li>- Ullamcorper a</li>
                <li>- Ullamcorper a</li>
                <li>- Ullamcorper a</li>
            </ul>
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="button">SED</button>
            </div>
        </div>
        <div class="bg-pack mx-3">
            <p>Lorem</p>
            <h5>Nunc</h5>
            <ul>
                <li>- Ullamcorper a</li>
                <li>- Ullamcorper a</li>
                <li>- Ullamcorper a</li>
                <li>- Ullamcorper a</li>
                <li>- Ullamcorper a</li>
                <li>- Ullamcorper a</li>
            </ul>
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="button">SED</button>
            </div>
        </div>
        <div class="pack mx-3">
            <p>Lorem</p>
            <h5>Nunc</h5>
            <ul>
                <li>- Ullamcorper a</li>
                <li>- Ullamcorper a</li>
                <li>- Ullamcorper a</li>
                <li>- Ullamcorper a</li>
            </ul>
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="button">SED</button>
            </div>
        </div>
    </div>
</section>

<section id="subscribe">
    <div class="form-group w-75 m-auto">
        <label for="email" class="form-label my-4 h4">Lorem ipsum dolor sit amet.</label>
        <div class="form-group">
            <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                        <img src="assets/icons/email.png" alt="Email-icon" class="icon-email">
                    </span>
                <input type="text" class="form-control" placeholder="Adresse email" name="email" id="email">
                <button class="btn btn-danger btn-md mx-2" type="button" id="button-addon2">Souscrire</button>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="content-pack">
        <?php
            for ($i=0; $i<4; $i++) {
                echo '        
            <div class="pack company">
                <h5>Compagnie</h5>
                <ul>
                    <li>Este ante</li>
                    <li>Porta none</li>
                    <li>Ultrices dui</li>
                    <li>Ipsum suspendisse</li>
                    <li>Magna sit</li>
                </ul>
            </div>';
            }
        ?>
    </div>
</footer>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- JQuery -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<!-- JavaScript -->
<script src="script.js"></script>
</body>
</html>
