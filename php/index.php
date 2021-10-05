<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link
        rel="stylesheet" href="style.css">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

        <title>Theses Eiffel</title>
    </head>
    <body>
        <header>
            <button>EN</button>
            <button>FR</button>
            <button>SE CONNECTER</button>
            <button>?</button>

        </header>
    </body>
    <section class="logo">
        <img src="http://theses.fr/images/theses.gif">
    </section>
    <section>
        <form class="row g-3 needs-validation" novalidate>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Toutes les thèses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Thèses en préparation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Personnes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Désactiver l'autocomplétion</a>
                </li>
            </ul>
            
        </form>
    </section>
    <section>
        <div class="nav justify-content-center">
            <div class="col-auto">
                <input type="search" class="form-control" id="search" placeholder="Thèse">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Rechercher</button>
            </div>
        </div>
    </section>
    <section class="filter">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Uniquement les thèses soutenues
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
                Uniquement les thèses soutenues accessibles en ligne
            </label>
        </div>
    </section>
    
    <section class="footer-text">
        <hr>
        <p>
            La base de données de theses.fr est en constante évolution.
            <br>
            L'ensemble des thèses de doctorat soutenues en France depuis 1985 est signalé.
        </p>
        <hr>
    </section>

    <footer>
        
    </footer>
</html>
