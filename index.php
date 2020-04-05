<?php include('./helloworld.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="carousel.css" />
    <!-- fontawesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
      integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
      crossorigin="anonymous"
    />
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>DRP - Home</title>
  </head>
  <body id="home">
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent" id="nav">
      <div class="container">
        <a class="navbar-brand" href="#top"
          ><img
            src="./images/logos/logo.png"
            id="navLogo"
            class="img-fluid logo_navbar"
            alt="logo DRPerformance DRP"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <!-- <li class="nav-item">
              <a class="nav-link" href="#top">Accueil </a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#prestations">Prestations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#footer">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="gallery.html">Galerie</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <header>
      <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-ride="carousel"
      >
        <ol class="carousel-indicators">
          <li
            data-target="#carouselExampleIndicators"
            data-slide-to="0"
            class="active"
          ></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <?php include('initcarousel.php'); ?>
        </div>
        <a
          class="carousel-control-prev"
          href="#carouselExampleIndicators"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#carouselExampleIndicators"
          role="button"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- Marketing messaging and featurettes
      ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container" >
      <!-- Three columns of text below the carousel -->
      <div class="row pt-5 text-center" id="services">
        <div class="col-12 col-lg-4">
          <h2>Diagnostique</h2>
          <div class="py-3">
            <i class="fas fa-3x fa-search text-primary"></i>
          </div>
        </div>
        <!-- /.col-lg-6 -->
        <div class="col-12 col-lg-4">
          <h2>Reprogrammation</h2>
          <div class="py-3">
            <i class="fas fa-3x fa-microchip text-success"></i>
          </div>
        </div>
        <!-- /.col-lg-6 -->
        <div class="col-12 col-lg-4">
          <h2>Performance</h2>
          <div class="py-3">
            <i class="fas fa-3x fa-tachometer-alt text-danger"></i>
          </div>
        </div>
        <!-- /.col-lg-6 -->
      </div>
      <!-- /.row -->
      <div class="row pt-5">
        <div class="col-12 mx-auto">
          <p>
            Bievenue sur mon site internet ! Je suis Christian "KIKI" Carrey, ma
            société "DRPerformance" est spécialisée dans la reprogrammation de
            la cartographie des calculateurs de véhicules (ECU), dans la
            détection de panne par diagnostic partiel ou complet ainsi que dans
            la suppression de codes erreur, pour tout type de véhicule, marque
            et modèle.
          </p>
          <p>
            Mon entreprise est située dans les Landes, dans une petite zone
            artisanale dans le village d'Angresse, à proximité de Capbreton et
            Hossegor.
          </p>
          <p>
            Les marques Allemandes n'ont aucun secret pour moi mais je suis tout
            autant performant sur les autres marques, prestigieuses ou non.
            Optimiser votre Honda Civic Type R ou bien votre Peugeot 208 ne sera
            pas un problème.
          </p>
        </div>
      </div>

      <div class="row pt-5">
        <div class="col-md-7 align-self-center">
          <h2 class="featurette-heading">
            Optimisez votre moteur. <br />
            <span class="text-muted">Consommez moins.</span>
          </h2>
          <p>
            La reprogrammation de votre ECU permet d'optimiser sa cartographie
            afin d'obtenir un gain en puissance, couple et consommation. Il est
            possible de faire dans les deux sens. On "upgrade" lorsque l'on
            applique une cartographie autre que celle par défaut, on "downgrade"
            lorsque l'on remet celle d'origine.
          </p>
          <p class="lead">
            Gain de puissance et de couple. <br />
            Consommation réduite.
          </p>
        </div>
        <div class="col-md-5 align-self-center">
          <img
            src="./images/benz.jpg"
            class="img-fluid"
            alt="Responsive image"
          />
        </div>
        <div class="col-12">
          <p>
            Je peux également m'occuper de cloner un calculateur moteur (lors
            d'un ECU à changer par exemple), proposer des solutions pour le FAP,
            l'EGR, l'Addblue ou encore le NOX², supprimer les codes "défauts",
            faire un reset du crash airbag, adapter le codage du calculateur,
            mettre à jour le code en ligne usine.
          </p>
        </div>
      </div>

      <div class="row featurette pt-5">
        <div class="col-md-7 order-md-2 align-self-center">
          <h2 class="featurette-heading">
            Expérience.<br />
            <span class="text-muted">Un savoir-faire reconnu.</span>
          </h2>
          <p>
            Plusieurs années d'expérience en mécanique et en
            diagnostic/reprogrammation des ECU. Je dispose de tout le
            matériel nécessaire afin de répondre aux différentes demandes que ce
            soit une détection de panne ou bien une optimisation de la
            cartographie du véhicule, quels que soient le type de véhicule ainsi
            que la marque et le modèle, dans la mesure du possible.
          </p>
          <p>
            La remise à zéro de code erreur permet de finaliser des réparations.
            Un code ne va pas forcément disparaitre de lui-même après réparation
            et peut potentiellement poser problème pendant un contrôle
            technique. En plus du diagnostic, je peux également effectuer les
            réparations en conséquence.
          </p>
          <p>
            Je propose également des services d'entretien courant (révision,
            vidange, pneumatique, freins, etc.).
          </p>
        </div>
        <div class="col-md-5 order-md-1 align-self-center">
          <img src="./images/amg.jpg" class="img-fluid" alt="Responsive image" />
        </div>
      </div>

      <div class="row featurette pt-5" id="prestations">
        <div class="col-md-7  align-self-center">
          <h2 class="featurette-heading">
            Prestations. <br />
            <span class="text-muted">Des tarifs abordables.</span>
          </h2>
          <p>
            Quelle que soit la demande, mes tarifs sont abordables et mon
            savoir-faire ainsi que ma rigueur sont reconnus par les concessions
            et professionnels auto environnants mais également par les
            professionnels dépendant d'un ou plusieurs véhicules (tels que les
            artisans) et par un grand nombre de particuliers.
          </p>
        </div>
        <div class="col-md-5  align-self-center">
          <img src="./images/r8.jpg" class="img-fluid" alt="Responsive image" />
        </div>
      </div>
      <div class="row pt-5">
        <div class="col-12  col-lg-6">
          <div class="table-responsive">
            <table class="table table-dark table-striped  align-self-center">
              <thead>
                <tr>
                  <th scope="col"><span class="text-success">Prestations</span></th>
                  <th scope="col"><span class="">Prix TTC <br> <small>(prix pour une heure)</small></span></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>Mécanique</th>
                  <td>66 €</td>
                </tr>
                <tr>
                  <th>Mécanique Utilitaire</th>
                  <td>78 €</td>
                </tr>
                <tr>
                    <th>Diagnostique simple</th>
                    <td>60 €</td>
                  </tr>
                <tr>
                  <th>Diagnostique approfondi</th>
                  <td>84 €</td>
                </tr>
                <tr>
                  <th>Diagnostique Code</th>
                  <td>108 €</td>
                </tr>
                <tr>
                  <th>Soudure composant électronique</th>
                  <td>96 €</td>
                </tr>
                <tr>
                  <th>Forfait déplacement supérieur à 20 Km</th>
                  <td>66 €</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-12  col-lg-6 align-self-center">
          <div class="table-responsive">
            <table class="table table-dark table-striped ">
              <thead>
                <tr>
                    <th scope="col"><span class="text-success">Reprogrammations</span></th>
                    <th scope="col"><span class="">Prix TTC </span></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>Reprog. voiture</th>
                  <td><small>à partir de </small>390 €</td>
                </tr>
                <tr>
                  <th>Reprog. utilitaire</th>
                  <td><small>à partir de </small>450 €</td>
                </tr>
                <tr>
                  <th>Reprog. supercar</th>
                  <td><small>à partir de </small>620 €</td>
                </tr>
                <tr>
                  <th>Reprog. jet-ski / moto</th>
                  <td><small>à partir de </small>320 €</td>
                </tr>
                <tr>
                  <th>Reprog. poids-lourd / tracteurs</th>
                  <td><small>à partir de </small>680 €</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <!-- /END THE FEATURETTES -->
    </div>
    <!-- /.container -->

    <!-- FOOTER -->
    <div class="container" id="footer">
      <footer class="pt-4 my-md-5 pt-md-5">
        <div class="row">
          <div class="col-12 col-md">
            <img
              src="./images/logos/logo.png"
              class="img-fluid"
              alt="logo DRPerformance DRP"
              style="max-width:200px;"
            />
            <!-- <small class="d-block mb-3 text-muted">© 2019</small> -->
          </div>
          <div class="col-12 col-md">
            <h5>Contact</h5>
            <div class="bd-example">
              <address>
                <strong>DRPerformance</strong><br />
                120 Zone Artisanal du Tuquet 1<br />
                40150 Angresse<br />
              </address>
              <address>
                <a href="tel:+33524624744">05 24 62 47 44</a> <br>
                <a href="tel:+33524624744">06 33 33 44 27</a> <br>
                <a href="mailto:drperformance@orange.fr">drperformance@orange.fr</a> <br>
                <a href="https://www.facebook.com/drperformance/"><img src="./images/Facebook.png"/></a> <br>
                <!-- <a href="#"><img src="./images/Instagram.png"/></a> <br> -->
              </address>
            </div>
          </div>
          <div class="col-12 col-md">
              <h5>Spécialités</h5>
              <ul class="list text-small">
                <li class="text-muted">Mise au point moteur sur banc de puissance</a></li>
                <li class="text-muted">Reprogrammation ECU (Calculateur moteur)</a></li>
                <li class="text-muted">Reprogrammation TCU (Boite automatique)</a></li>
                <li class="text-muted">Diagnostic électronique toutes marques</a></li>
                <li class="text-muted">Réparation crash airbag</a></li>
              </ul>
            </div>
          <div class="col-12 col-md">
            <div class="map-responsive">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2886.526657154981!2d-1.3395123837570826!3d43.6580155601359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd51504503f99685%3A0xc64ecb0075d25b07!2sSASU+DRPERFORMANCE!5e0!3m2!1sfr!2sfr!4v1557844511842!5m2!1sfr!2sfr"
                width="400"
                height="300"
                frameborder="0"
                style="border:0"
                allowfullscreen
              ></iframe>
            </div>
          </div>
          
        </div>

      </footer>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script src="drp.js"></script>
  </body>
</html>
