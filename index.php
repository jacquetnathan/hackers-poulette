<?php
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Hackers Poulette</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
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
                

        <form action="contact.php" method="GET">
        <input id="website" class="d-none" name="website"  type="text" value=""  />
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
              <label for="sujet">Votre sujet :</label>
              <select multiple class="form-control" name="sujet" id="sujet" required>
                <option>Réclamation</option>
                <option>Suggestion</option>
                <option>Livraison</option>
                <option>Autres</option>
              </select>
            </div>
            <div class="form-group font-weight-bold">
              <label for="message">Votre message :</label>
              <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
              
            </div>

            <button class="btn btn-primary font-weight-bold" type="submit" name="submit">Envoyer</button>
        </div>

        
          </form>

        </main>
         
          <footer class="font-weight-bold text-center text-justify">
            Hackers Poulette - Nathan 2020
          </footer>
          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
          <script>
            $('form').submit(function(){    
                    if ($('input#website').val().length != 0) {
                        return false;
                    } 
            });
          </script>

    </body>
</html>

