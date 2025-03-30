<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Collection Projets MVC PHP</title>
    <link rel="icon" type="image/x-icon" href="assets/" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="css/loader.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/projects.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<body id="page-top">

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">
                <span style="--i:1">c</span>
                <span style="--i:2">o</span>
                <span style="--i:3">l</span>
                <span style="--i:4">l</span>
                <span style="--i:5">e</span>
                <span style="--i:6">c</span>
                <span style="--i:7">t</span>
                <span style="--i:8">i</span>
                <span style="--i:9">o</span>
                <span style="--i:10">n</span>
                <span style="--i:10">.</span>
                <span style="--i:11">p</span>
                <span style="--i:12">r</span>
                <span style="--i:13">o</span>
                <span style="--i:14">j</span>
                <span style="--i:15">e</span>
                <span style="--i:16">t</span>
                <span style="--i:17">s</span>
                <br>
                <span style="--i:18">m</span>
                <span style="--i:19">v</span>
                <span style="--i:20">c</span>
            </a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="/ProjectsGithub_MVC-Collection">Accueil</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#about">Langages</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#portfolio">Divers</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#skills">Projets</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="/ProjectsGithub_MVC-Collection/contact">Contact</a></li>
                    <?php if ($isLoggedIn): ?>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="/ProjectsGithub_MVC-Collection/logout">Déconnexion</a></li>
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="/ProjectsGithub_MVC-Collection/admin">Admin</a></li>
                            <li class="nav-item mx-0 mx-lg-1">
                            Bonjour <?php echo $_SESSION['user']->getUsername(); ?> !
                        </li>
                        <?php else : ?>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="/ProjectsGithub_MVC-Collection/login">Connexion</a></li>
                    <?php endif; ?>
                    
                </ul>
            </div>
        </div>
    </nav>

    <!-- Affiche un message si l'utilisateur est connecté -->
    <?php if ($isLoggedIn): ?>
        <div class="alert alert-success">
            Bonjour <?php echo $_SESSION['user']->getUsername(); ?> !
        </div>
    <?php endif; ?>

    <!-- Header-->
    <header class="mt-5">
        <div class="container px-4 px-lg-5 my-5">
            <div>
                <h1 class="text-center mt-2 mb-2"><img src="assets/Vinyl-PNG-Clipart.png" alt="" width="250px"></h1>
                <h2 class="text-center text-uppercase text-black mb-0">Collection Projets Github</h2>
                <div class="col-6 col-md-2 mx-auto">
                    <input type="search" id="search" class="form-control mt-2" placeholder="Rechercher...">
                </div>
            </div>
            <section class="container px-4 px-lg-5 my-5">
                <ul class="d-flex flex-wrap align-items-center justify-content-center flex-row mx-auto list-unstyled">
                </ul>
            </section>
        </div>
    </header>

    <main class="container text-center py-5">
        <div class="loader">
            <img src="assets/Vinyl-PNG-Transparent-Image.png" alt="Loading..." width="300px" />
            <p class="text-black text-center"><strong>Loading...</strong></p>
        </div>
        <section class="row mx-auto justify-content-center" id="vinyles-grid"></section>
    </main>


    <template id="project">
        <article class="card mb-3" style="max-width: 550px; height:fit-content;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-md-8 d-flex align-items-center">
                    <div class="card-body">
                        <h3 class="card-title-album"></h3>
                        <h4 class="card-title-artist"></h4>
                        <small class="d-block text-secondary pb-2"></small>
                        <p class="card-text-year"><small class="text-body-secondary"></small></p>
                        <!--<p class="card-text-desc">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>-->
                        <button type="button" class="btn btn-sm btn-primary">
                            En savoir plus...
                        </button>
                        <?php if (isset($_SESSION['user'])): ?>
                            <button type="button" class="btn btn-sm btn-danger">
                                J'aime
                            </button>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </article>
    </template>

    <!-- Template pour afficher mes projets 
    <template id="project">
        <article class="pb-5">
            <h1></h1>
            <small class="d-block text-secondary pb-2"></small>
            <img src="" alt="" class="img-fluid rounded">
            <p></p>
            <button type="button" class="btn btn-sm btn-primary">
                En savoir plus...
            </button>
            <?php if ($isLoggedIn): ?>
                <button type="button" class="btn btn-sm btn-danger">
                    J'aime
                </button>
            <?php endif ?>
        </article>
    </template>-->

    <!-- Footer-->
    <footer class="py-3">
        <div class="container">
            <h1 class="text-center mt-2 mb-2"><img src="assets/Vinyl-PNG-Clipart.png" alt="" width="250px"></h1>
            <p class="m-0 text-center text-black">Copyright &copy; Collection Projets MVC PHP 2025</p>
        </div>
    </footer>


</body>

</html>