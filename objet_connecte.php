<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="style1.css">
  <title>Montres</title>
</head>


<body>


  <!--HEADER-->
  <?php include("includes/header.php"); ?>

  <!--LOGO + SEARCH BAR + LOGIN / SIGN IN-->
  <?php include("includes/logo_search_login.php"); ?>

  <!--NAV ITEM BAR-->
  <?php include("includes/nav_item.php"); ?>


  <!--Montre-->
  <div class="container my-5">
    <h3 id="sectionMontre" class="sectionTitle">Montre</h3>
  </div>


  <div class="container my-5">
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative mb-5">
      <div class="col text-center d-flex flex-column position-static">
        <h3 class="mt-3">Samsung Galaxy Watch 3 4G</h3>
        <div class="mb-1 text-muted">Disponible en stock</div>
        <p class="card-text mb-4">Montre connectée 4G - 41 mm - certifiée IP68 - RAM 1 Go - écran Super AMOLED 1.2" - 8
          Go - NFC/Wi-Fi/Bluetooth 5.0 - 247 mAh - Tizen OS 5.5</p>
        <p class="fst-italic mt-0">Avec la Samsung Galaxy Watch 3, profitez d'une montre authentique avec une forme
          arrondie reprenant les codes de l'horlogerie. Cette montre connectée sous Tizen 5.5, fera tourner plus d'une
          tête. Elle vous permet notamment un accès rapide à vos notifications ou encore de répondre à vos appels</p>
        <span id="price" style="color:blue; font-weight: bold; font-family: Verdana, Geneva, Tahoma, sans-serif;">429.95
          €</span>

        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button class="btn btn-success me-md-2" type="button">Ajouter au panier</button>
          <button class="btn btn-danger ml-3" type="button">Retirer du panier</button>
        </div>
      </div>
      <div class="col-auto d-none d-lg-block">
        <img src="asset/galaxywacth.jpg" width="200" height="250">
      </div>
    </div>

    <!--Enceinte-->

    <h3 id="sectionEnceinte" class="sectionTitle">Enceinte </h3>


    <div class="row g-0 border rounded overflow-hidden flex-md-row my-5 shadow-sm h-md-250 position-relative  mb-5">
      <div class="col text-center d-flex flex-column position-static">
        <h3 class="mt-3">Edifier R1700BT Bois</h3>
        <div class="mb-1 text-muted">Disponible en stock</div>
        <p class="card-text mb-4">Enceintes 2.0 Bluetooth 66W</p>
        <p class="fst-italic mt-0">Les enceintes 2.0 Edifier R1700BT réservent un son précis et clair avec une puissance
          RMS de 66 Watts. Design et performantes, ces enceintes sans fil Bluetooth vont vous surprendre par la qualité
          des aigus et les basses profondes.</p>
        <span id="price" style="color:blue; font-weight: bold; font-family: Verdana, Geneva, Tahoma, sans-serif;">129.95
          €</span>

        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button class="btn btn-success me-md-2" type="button">Ajouter au panier</button>
          <button class="btn btn-danger ml-3" type="button">Retirer du panier</button>
        </div>
      </div>
      <div class="col-auto d-none d-lg-block">
        <img src="asset/enceinte.jpg" width="200" height="250">
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