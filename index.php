<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="style1.css">
  <title>Futur Technologie</title>
</head>

<body>

  <!--HEADER-->
  <?php include("includes/header.php"); ?>

  <!--LOGO + SEARCH BAR + LOGIN / SIGN IN-->
  <?php include("includes/logo_search_login.php"); ?>

  <!--NAV ITEM BAR-->
  <?php include("includes/nav_item.php"); ?>

  <!--CAROUSEL-->
  <?php include("includes/carousel.php"); ?>


  <!--POPULAR PRODUCTS-->
  <div class="container my-5">
    <div class="row">
      <div class="col">
        <h3 class="text-center text-danger">PRODUITS POPULAIRES</h3>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col">
        <div class="card" style="height: 29rem;">
          <img src="asset/asusM7.jpg" class="card-img-top" alt="ASUS Vivobook M7">
          <div class="card-body">
            <h6 class="card-title text-center text-primary">ASUS Vivobook M7</h6>
            <p class="card-text">17.3" ASUS M712JA-BX081T - Intel i3-1005G1 - 8 Go - 512 Go SSD - Windows 10 Familiale -
              Garantie 2 ans constructeur</p>
            <a href="pc&tablet.html#sectionPcPortable" class="stretched-link"></a>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card" style="height: 29rem;">
          <img src="asset/samsungTabA7.jpg" class="card-img-top" alt="Galaxy Tab A7">
          <div class="card-body">
            <h6 class="card-title text-center text-primary">Galaxy Tab A7</h6>
            <p class="card-text text-center">Galaxy Tab A7 Wi-Fi Samsung 10.4" - Dark grey - 32 Go - Garantie Samsung
              uniquement</p>
            <a href="pc&tablet.html#sectionTablette" class="stretched-link"></a>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card pt-5" style="height: 29rem;">
          <img src="asset/ps5.jpg" class="card-img-top" alt="PS5">
          <div class="card-body">
            <h6 class="card-title text-center mt-4 text-primary">PlayStation 5</h6>
            <p class="card-text text-center ">PlayStation 5 AMD Ryzen Zen 2, GPU AMD RDNA 2, 16 Go de RAM GDDR6, SSD de
              825 Go, lecteur Blu-ray 4K UHD. Garantie Sony uniquement</p>
            <a href="console.html#sectionPS5" class="stretched-link"></a>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col">
          <div class="card" style="height: 29rem;">
            <img src="asset/xbox.jpg" class="card-img-top" alt="XBOX series">
            <div class="card-body">
              <h6 class="card-title text-center text-primary">Xbox Series X</h6>
              <p class="card-text text-center">Xbox Series X - Processeur 8 cœurs AMD Zen 2 - 16 Go de GDDR6 - 1 To de
                stockage SSD - Garantie 2 ans constructeur</p>
              <a href="console.html#sectionXbox" class="stretched-link"></a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card" style="height: 29rem;">
            <img src="asset/razorV2.jpg" class="card-img-top" alt="Souris Razer">
            <div class="card-body">
              <h6 class="card-title text-center text-primary">Razer Basilisk v2</h6>
              <p class="card-text text-center">Souris filaire pour gamer droitier - 11 boutons programmables - gâchette
                amovible</p>
              <a href="peripherique.html#sectionSouris" class="stretched-link"></a>
            </div>
          </div>
        </div>


        <div class="col">
          <div class="card" style="height: 29rem;">
            <img src="asset/galaxywacth.jpg" class="card-img-top" alt="Galaxy Watch">
            <div class="card-body">
              <h6 class="card-title text-center text-primary">Samsung Galaxy Watch 3 4G</h6>
              <p class="card-text text-center">Montre connectée 4G - 41 mm - certifiée IP68 - RAM 1 Go - écran Super
                AMOLED 1.2" - 8 Go - NFC/Wi-Fi/Bluetooth 5.0 </p>
              <a href="objet_connecte.html#sectionMontre" class="stretched-link"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--ALL BRANDS-->
  <div class="container my-5">
    <div class="row">
      <div class="col">
        <h3 class="text-center text-danger">LES MARQUES</h3>
      </div>
    </div>

    <div class="row" style="height: 200px;">
      <div class="col">

        <div id="gallery" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner mb-5 ">
            <div class="carousel-item active">
              <div class="row">
                <div class="col">
                  <img class="img-fluid" src="asset/logitech_logo.jpg" alt="logitech logo" />
                </div>

                <div class="col">
                  <img class="img-fluid" src="asset/ps5_logo.jpg" alt="ps5 logo brand" />
                </div>

                <div class="col">
                  <img class="img-fluid" src="asset/asus_logo.jpg" alt="asus logo" />
                </div>

                <div class="col">
                  <img class="img-fluid" src="asset/hp_logo.jpg" alt="HP logo" />
                </div>

                <div class="col">
                  <img class="img-fluid" src="asset/razor_logo.png" alt="razor logo" />
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="row">

                <div class="col">
                  <img class="img-fluid" src="asset/apple_logo.jpg" alt="apple logo" />
                </div>

                <div class="col">
                  <img class="img-fluid" src="asset/samsung_logo.jpg" alt="samsung logo" />
                </div>

                <div class="col">
                  <img class="img-fluid" src="asset/lenovo_logo.jpg" alt="lenovo logo" />
                </div>

                <div class="col">
                  <img class="img-fluid" src="asset/dell_logo.png" alt="dell logo" />
                </div>

                <div class="col">
                  <img class="img-fluid" src="asset/archos_logo.jpg" alt="archos logo" />
                </div>
              </div>
            </div>
          </div>

          <a class="carousel-control-prev" href="#gallery" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>

          <a class="carousel-control-next" href="#gallery" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>


  <!--SERVICES-->

  <div class="container">
    <div class="d-flex justify-content-around mt-5">
      <div class="text-center bg-danger" style="width: 300px; height: 150px;">
        <img src="asset/livraison.png">
        <p class="text-white mt-3">Livraison avant 13H avec Chronopost</p>
      </div>

      <div class="text-center bg-danger" style="width: 300px; height: 150px;">
        <img src="asset/credit_card.png">
        <p class="text-white mt-3">Payement via <br /> VISA / MASTERCARD / ELECTRON</p>
      </div>

      <div class="text-center bg-danger" style="width: 300px; height: 150px;">
        <img src="asset/settings.png">
        <p class="text-white mt-3">SAV reactif</br>Lundi au jeudi<br />De 9h30 a 16h30</p>
      </div>
    </div>
  </div>


  <!--FOOTER-->
  <?php include("includes/footer.php"); ?>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>

</body>

</html>