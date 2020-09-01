<?php
echo '
<!doctype html>
<html lang="en">
  <head>
    <title>Hackers Poulette</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
    <body class="text-white">

        <nav class="navbar navbar-expand-lg" style="background-color: #0d8187;">
            <a class="navbar-brand font-weight-bold text-white" href="#">Hackers Poulette</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

           
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link text-white" href="#">Accueil </a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link text-white" href="#">Contact</a>
                </li>
 
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Que recherchez-vous ?" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Recherche</button>
              </form>
            </div>
          </nav>
      <main>
                

        <form action="test.php" method="GET">
            <div class="offset-3 col-6">
                <img src="img/hackers-poulette-logo.png" class="mx-auto d-block" id="logo" alt="logo">
                <div class="form-row">
                    <div class="col font-weight-bold">
                    <label for="nom">Nom :</label>
                      <input type="text" name="nom" class="form-control" id="nom" placeholder="Dupont" required>
                    </div>
                    <div class="col font-weight-bold">
                    <label for="exampleFormControlInput1">Prénom :</label>
                      <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Jean" required>
                    </div>
                </div>

                <div class="custom-control custom-radio custom-control-inline font-weight-bold">
                    <input type="radio" id="homme" name="gender" class="custom-control-input">
                    <label class="custom-control-label" for="homme">Homme</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline font-weight-bold">
                    <input type="radio" id="femme" name="gender" class="custom-control-input">
                    <label class="custom-control-label" for="femme">Femme</label>
                  </div>


            <div class="form-group font-weight-bold">
              <label for="exampleFormControlInput1">Email address</label>
              <input type="email" name="mail" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
            </div>


            <div class="form-group font-weight-bold">
              <label for="exampleFormControlSelect1">Votre pays :</label>
              <select class="form-control" name="pays" id="pays" required>
                <option>Belgique</option>
                <option>France</option>
                <option>Allemagne</option>
                <option>Pays-bas</option>
                <option>Espagne</option>
                <option>Italie</option>
                <option>Luxembourg</option>
                

              </select>
            </div>
            <div class="form-group font-weight-bold">
              <label for="exampleFormControlSelect2">Votre sujet :</label>
              <select multiple class="form-control" name="sujet" id="sujet" required>
                <option>Réclamation</option>
                <option>Suggestion</option>
                <option>Livraison</option>
                <option>Autres</option>
              </select>
            </div>
            <div class="form-group font-weight-bold">
              <label for="exampleFormControlTextarea1">Votre message :</label>
              <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
            </div>

            <button class="btn btn-primary font-weight-bold" type="submit" name="submit">Envoyer</button>
        </div>

        
          </form>

        </main>
         
          <footer class="font-weight-bold text-center text-justify">
            Hackers Poulette - Nathan 2020
          </footer>
        
    </body>
</html>

'
?>
