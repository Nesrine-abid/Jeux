<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <form action='index.php' method='GET'>
                            <input type="hidden" name="action" value="getAllJeux" />
                            <button class="btn btn-link">Jeux</button>
                        </form>
                    </li>
                    <li class="nav-item">
                        <form action='index.php' method='GET'>
                            <input type="hidden" name="action" value="getAllJoueurs" />
                            <button class="btn btn-link">Joueur</button>
                        </form>                    
                    </li>
                    <li class="nav-item">
                        <input type="hidden" name="action" value="getAllJeux" />
                        <button class="btn btn-link">Thème</button>                    
                    </li>
                </ul>
        </div>
    </nav>
    </header>
