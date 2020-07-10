<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Un petit blog en POO sans fioriture">
    <meta name="author" content="Adrien Dudeck aka TheFury-BOY">
    <title>Blog App . TheFury-BOY</title>

    <!-- Bootstrap documentation -->
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/blog/">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../public/lib/bootstrap-4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/lib/fontawesome-5.13.1/css/all.min.css">
    <!-- Custom styles for this template -->
    <link href="../public/css/blog.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center ">
                <div class="col-4 pt-1">
                    <a class="text-muted" href="#">S'abonner</a>
                </div>
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-dark" href="../public/index.php"><i class="fas fa-cubes"></i> Large</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a class="text-muted" href="#" aria-label="Search">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img"
                            viewBox="0 0 24 24" focusable="false">
                            <title>Rechercher</title>
                            <circle cx="10.5" cy="10.5" r="7.5" />
                            <path d="M21 21l-5.2-5.2" />
                        </svg>
                    </a>
                    <a class="btn btn-sm btn-outline-secondary" href="#">S'inscrire</a>
                </div>
            </div>
        </header>

        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <a class="p-2 text-muted" href="../public/index.php?route=newArticle">Nouvel Article</a>
                <a class="p-2 text-muted" href="#">U.S.</a>
                <a class="p-2 text-muted" href="#">Technology</a>
                <a class="p-2 text-muted" href="#">Design</a>
                <a class="p-2 text-muted" href="#">Culture</a>
                <a class="p-2 text-muted" href="#">Business</a>
                <a class="p-2 text-muted" href="#">Politics</a>
                <a class="p-2 text-muted" href="#">Opinion</a>
                <a class="p-2 text-muted" href="#">Science</a>
                <a class="p-2 text-muted" href="#">Health</a>
                <a class="p-2 text-muted" href="#">Style</a>
                <a class="p-2 text-muted" href="#">Travel</a>
            </nav>
        </div>

        <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
            <div class="col-md-8 px-0">
                <h1 class="display-4 font-italic">Article HighLight</h1>
                <p class="lead my-3">Jelly tootsie roll tart tootsie roll chupa chups tiramisu sesame snaps. Oat cake pie chocolate bar. Cheesecake dessert dragée donut danish soufflé wafer. Toffee oat cake topping bonbon liquorice pastry donut.</p>
                <p class="lead mb-0"><a href="#" class="stretched-link">Continuer à lire...</a></p>
            </div>
        </div>
        <?= $content ?>
    </div>
    <footer class="blog-footer">
        <p>Blog App créée par <a href="https://github.com/thefury-boy">TheFury-BOY</a>.</p>
        <p>
            <a href="#">Retour en Haut</a>
        </p>
    </footer>
    <!-- Development Popper version -->
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <!-- Jquery Core -->
    <script src="../public/lib/jquery-3.5.1/jquery-3.5.1.min.js"></script>
    <!-- Fontawesome Core -->
    <script src="../public/lib/fontawesome-5.13.1/js/all.min.js"></script>
    <!-- Bootstrap core Script -->
    <script src="../public/lib/bootstrap-4.5.0/js/bootstrap.min.js"></script>
</body>

</html>