<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="style1.css">
  <title>Pc / Tablettes</title>
</head>


<body>


  <!--HEADER-->
  <?php include("includes/header.php"); ?>

  <!--LOGO + SEARCH BAR + LOGIN / SIGN IN-->
  <?php include("includes/logo_search_login.php"); ?>

  <!--NAV ITEM BAR-->
  <?php include("includes/nav_item.php"); ?>


  <!--PC BUREAU-->
  <div class="container my-5">
    <h3 id="sectionPcBureau" class="sectionTitle">PC DE BUREAU</h3>
  </div>


  <div class="container my-5">
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative mb-5">
      <div class="col text-center d-flex flex-column position-static">
        <h3 class="mt-3">PC de bureau HP Z2 G4</h3>
        <div class="mb-1 text-muted">Disponible en stock</div>
        <p class="card-text mb-4">Intel Core i5-9600 8 Go SSD 256 Go Windows 10 Professionnel 64 bits (sans écran)</p>
        <p class="fst-italic mt-0">La station de travail HP Z2 G4 au format tour est à la fois performante et évolutive.
          Taillée pour les applications professionnelles,
          elle offre la puissance et la sécurité nécessaires au sein d'une entreprise.</p>
        <span id="price"
          style="color:blue; font-weight: bold; font-family: Verdana, Geneva, Tahoma, sans-serif;">1099.99 €</span>

        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button class="btn btn-success me-md-2" type="button">Ajouter au panier</button>
          <button class="btn btn-danger ml-3" type="button">Retirer du panier</button>
        </div>
      </div>
      <div class="col-auto d-none d-lg-block">
        <img src="asset/hp_pc.jpg" width="200" height="250">
      </div>
    </div>

    <!--PC PORTABLE-->

    <h3 id="sectionPcPortable" class="sectionTitle bg-secondary">PC Portable</h3>


    <div class="row g-0 border rounded overflow-hidden flex-md-row my-5 shadow-sm h-md-250 position-relative  mb-5">
      <div class="col text-center d-flex flex-column position-static">
        <h3 class="mt-3">PC portable Asus Vivobbok M7</h3>
        <div class="mb-1 text-muted">Disponible en stock</div>
        <p class="card-text mb-4">17.3" ASUS M712JA-BX081T - Intel i3-1005G1 - 8 Go - 512 Go SSD - Windows 10 Familiale
          - Garantie 2 ans constructeur</p>
        <p class="fst-italic mt-0">Avec le Vivobook M712DA-BX045T, vous n'avez pas à choisir entre mobilité et taille
          d'écran. Grâce à son écran Nano Edge Full HD (1920 x 1080)
          et ses bords de 5,7 mm, il vous permet néanmoins de profiter d'une surface d'affichage large dans un châssis
          compact.</p>
        <span id="price" style="color:blue; font-weight: bold; font-family: Verdana, Geneva, Tahoma, sans-serif;">949.99
          €</span>

        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button class="btn btn-success me-md-2" type="button">Ajouter au panier</button>
          <button class="btn btn-danger ml-3" type="button">Retirer du panier</button>
        </div>
      </div>
      <div class="col-auto d-none d-lg-block">
        <img src="asset/asusM7.jpg" width="200" height="250">
      </div>
    </div>

    <!--TABLETTE-->

    <h3 id="sectionTablette" class="sectionTitle bg-primary">Tablette</h3>

    <div class="row g-0 border rounded overflow-hidden flex-md-row my-5 shadow-sm h-md-250 position-relative  mb-5">
      <div class="col text-center d-flex flex-column position-static">
        <h3 class="mt-3">Tablete Galaxy Tab A7</h3>
        <div class="mb-1 text-muted">Disponible en stock</div>
        <p class="card-text mb-4">Tablette Internet - Snapdragon 662 Octo-Core 2 GHz - RAM 3 Go - 32 Go - Écran 10.4"
          WUXGA+ - Wi-Fi/Bluetooth - Webcam - USB-C -
          7040 mAh - Android 10</p>
        <p class="fst-italic mt-0">La tablette Samsung Galaxy Tab A7 accompagnera toutes vos envies avec ses
          performances élevées, son large écran confortable et ses
          fonctionnalités intelligentes. Ce modèle offre une belle autonomie grâce à sa batterie grande capacité, une
          connectivité sans fil complète et une sécurité accrue.</p>
        <span id="price" style="color:blue; font-weight: bold; font-family: Verdana, Geneva, Tahoma, sans-serif;">259.99
          €</span>

        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button class="btn btn-success me-md-2" type="button">Ajouter au panier</button>
          <button class="btn btn-danger ml-3" type="button">Retirer du panier</button>
        </div>
      </div>
      <div class="col-auto d-none d-lg-block">
        <img src="asset/samsungTabA7.jpg" width="200" height="250">
      </div>
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