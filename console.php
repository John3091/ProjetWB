<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="style1.css">
  <title>Console</title>
</head>


<body>

  <!--HEADER-->
  <?php include("includes/header.php"); ?>

  <!--LOGO + SEARCH BAR + LOGIN / SIGN IN-->
  <?php include("includes/logo_search_login.php"); ?>

  <!--NAV ITEM BAR-->
  <?php include("includes/nav_item.php"); ?>



  <!--PS5-->


  <div class="container my-5">
    <h3 id="sectionPS5" class="sectionTitle bg-primary">PS5</h3>
  </div>


  <div class="container my-5">
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative mb-5">
      <div class="col text-center d-flex flex-column position-static">
        <h3 class="mt-3">Sony PlayStation 5 Digital Edition</h3>
        <div class="mb-1 text-muted">Disponible en stock</div>
        <p class="card-text mb-4">Console Ultra HD 8K - AMD Ryzen Zen 2 - AMD RDNA 2 10.28 TFLOPs - 16 Go GDDR6 - SSD
          825 Go - son 3D - manette sans fil</p>
        <p class="fst-italic mt-0">Offrez-vous une expérience de jeu unique avec la PlayStation 5. Véritable concentré
          de technologies de pointe, elle offre un
          rendu graphique encore plus proche de la façon dont nos yeux voient le monde réel. Pouvant délivrer des
          graphismes en 8K, elle pousse le réalisme à son paroxysme.</p>
        <span id="price" style="color:blue; font-weight: bold; font-family: Verdana, Geneva, Tahoma, sans-serif;">419.99
          €</span>

        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button class="btn btn-success me-md-2" type="button">Ajouter au panier</button>
          <button class="btn btn-danger ml-3" type="button">Retirer du panier</button>
        </div>
      </div>
      <div class="col-auto d-none d-lg-block">
        <img src="asset/ps5(2).jpg" width="200" height="250">
      </div>
    </div>


    <!--XBOX-->

    <h3 id="sectionXbox" class="sectionTitle bg-success">XBOX</h3>


    <div class="row g-0 border rounded overflow-hidden flex-md-row my-5 shadow-sm h-md-250 position-relative  mb-5">
      <div class="col text-center d-flex flex-column position-static">
        <h3 class="mt-3"> Microsoft Xbox Series S</h3>
        <div class="mb-1 text-muted">Disponible en stock</div>
        <p class="card-text mb-4">Console 1440p - AMD Ryzen Zen 2 - AMD RDNA 2 4 TFLOPs - 10 Go GDDR6 - SSD 512 Go - son
          Dolby Digital 5.1 - manette sans fil</p>
        <p class="fst-italic mt-0">Avec la Microsoft Xbox Series S, bénéficiez des performances de nouvelle génération
          dans la Xbox la plus compacte jamais conçue à ce jour.
          Avec des mondes plus dynamiques en 1440p, des temps de chargement réduits grâce à son SSD interne de 512 Go,
          la Xbox Series S offre une expérience unique</p>
        <span id="price" style="color:blue; font-weight: bold; font-family: Verdana, Geneva, Tahoma, sans-serif;">319.94
          €</span>

        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button class="btn btn-success me-md-2" type="button">Ajouter au panier</button>
          <button class="btn btn-danger ml-3" type="button">Retirer du panier</button>
        </div>
      </div>
      <div class="col-auto d-none d-lg-block">
        <img src="asset/xbox.jpg" width="200" height="250">
      </div>
    </div>

    <!--NINTENDO-->

    <h3 id="sectionSwitch" class="sectionTitle bg-danger">Nintendo Switch</h3>

    <div class="row g-0 border rounded overflow-hidden flex-md-row my-5 shadow-sm h-md-250 position-relative  mb-5">
      <div class="col text-center d-flex flex-column position-static">
        <h3 class="mt-3">Nintendo Switch v2</h3>
        <div class="mb-1 text-muted">Disponible en stock</div>
        <p class="card-text mb-4">Console hybride salon / portable - Joy-Con droit et gauche (gris)</p>
        <p class="fst-italic mt-0">Après la Wii et la Wii U, Nintendo continue de transformer votre façon de jouer aux
          jeux vidéo avec la Nintendo Switch v2.
          Cette dernière va vous permettre de jouer où vous voulez, quand vous voulez et avec qui vous voulez, le tout
          avec une autonomie plus importante.</p>
        <span id="price" style="color:blue; font-weight: bold; font-family: Verdana, Geneva, Tahoma, sans-serif;">399.95
          €</span>

        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button class="btn btn-success me-md-2" type="button">Ajouter au panier</button>
          <button class="btn btn-danger ml-3" type="button">Retirer du panier</button>
        </div>
      </div>
      <div class="col-auto d-none d-lg-block">
        <img src="asset/nintendoSwitch.jpg" width="200" height="250">
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