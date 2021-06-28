<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="style1.css">
  <title>Ecrans</title>
</head>


<body>


  <!--HEADER-->
  <?php include("includes/header.php"); ?>

  <!--LOGO + SEARCH BAR + LOGIN / SIGN IN-->
  <?php include("includes/logo_search_login.php"); ?>

  <!--NAV ITEM BAR-->
  <?php include("includes/nav_item.php"); ?>

  <!--ECRAN SAMSUNG-->
  <div class="container my-5">
    <h3 id="sectionSamsungEcran" class="sectionTitle bg-primary">Samsung</h3>
  </div>


  <div class="container my-5">
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative mb-5">
      <div class="col text-center d-flex flex-column position-static">
        <h3 class="mt-3"> Samsung 27" LED - Odyssey G5 C27G55TQWU</h3>
        <div class="mb-1 text-muted">Disponible en stock</div>
        <p class="card-text mb-4">2560 x 1440 pixels - 1 ms - Format 16/9 - Dalle VA incurvée - 144 Hz - HDR10 -
          FreeSync Premium - HDMI/DisplayPort - Noir</p>
        <p class="fst-italic mt-0">Partez à la conquête de succès futurs avec l'écran gaming Samsung Odyssey G5
          C27G55TQWU ! Offrant des performances élevées, une
          immersion supérieure et un confort permanent, ce modèle vous assurera des conditions rêvées pour atteindre les
          sommets dans vos jeux préférés</p>
        <span id="price" style="color:blue; font-weight: bold; font-family: Verdana, Geneva, Tahoma, sans-serif;">289.96
          €</span>

        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button class="btn btn-success me-md-2" type="button">Ajouter au panier</button>
          <button class="btn btn-danger ml-3" type="button">Retirer du panier</button>
        </div>
      </div>
      <div class="col-auto d-none d-lg-block">
        <img src="asset/samsungEcran.jpg" width="200" height="250">
      </div>
    </div>


    <!--ECRAN LG-->


    <h3 id="sectionLg" class="sectionTitle bg-danger">LG</h3>


    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative mb-5">
      <div class="col text-center d-flex flex-column position-static">
        <h3 class="mt-3">LG 22" LED 22MK430H-B</h3>
        <div class="mb-1 text-muted">Disponible en stock</div>
        <p class="card-text mb-4">1920 x 1080 pixels - 5 ms - Format large 16/9 - Dalle IPS - FreeSync - HDMI - Noir</p>
        <p class="fst-italic mt-0">Regroupant des fonctionnalités idéales pour des parties de haute volée, le moniteur
          22MK430H-B signé LG vous accompagnera idéalement
          dans votre quête de la victoire. Savourez des moments intenses devant cet écran Full HD doté d'une dalle IPS
          et de la technologie AMD FreeSync</p>
        <span id="price" style="color:blue; font-weight: bold; font-family: Verdana, Geneva, Tahoma, sans-serif;">119.95
          €</span>

        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button class="btn btn-success me-md-2" type="button">Ajouter au panier</button>
          <button class="btn btn-danger ml-3" type="button">Retirer du panier</button>
        </div>
      </div>
      <div class="col-auto d-none d-lg-block">
        <img src="asset/ecranLg.jpg" width="200" height="250">
      </div>
    </div>


    <!--ECRAN HP-->

    <h3 id="sectionEcranHP" class="sectionTitle bg-secondary">HP</h3>

    <div class="row g-0 border rounded overflow-hidden flex-md-row my-5 shadow-sm h-md-250 position-relative  mb-5">
      <div class="col text-center d-flex flex-column position-static">
        <h3 class="mt-3">HP 21.5" LED - 22f</h3>
        <div class="mb-1 text-muted">Disponible en stock</div>
        <p class="card-text mb-4">1920 x 1080 pixels - 5 ms (gris à gris) - Format large 16/9 - Dalle IPS - FreeSync -
          HDMI - Noir/Argent</p>
        <p class="fst-italic mt-0">Avec son design élégant et ses bords fins, le moniteur HP 22f trônera naturellement
          sur votre bureau pour vous apporter un confort au quotidien.
          Appréciez sa belle résolution Full HD, sa dalle IPS pour des angles de vue optimaux et des couleurs réalistes
          pour une expérience visuelle complète.</p>
        <span id="price" style="color:blue; font-weight: bold; font-family: Verdana, Geneva, Tahoma, sans-serif;">134.95
          €</span>

        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button class="btn btn-success me-md-2" type="button">Ajouter au panier</button>
          <button class="btn btn-danger ml-3" type="button">Retirer du panier</button>
        </div>
      </div>
      <div class="col-auto d-none d-lg-block">
        <img src="asset/hp_Ecran.jpg" width="200" height="250">
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