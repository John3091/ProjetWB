<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="style1.css">
  <title>Peripheriques</title>
</head>


<body>


  <!--HEADER-->
  <?php include("includes/header.php"); ?>

  <!--LOGO + SEARCH BAR + LOGIN / SIGN IN-->
  <?php include("includes/logo_search_login.php"); ?>

  <!--NAV ITEM BAR-->
  <?php include("includes/nav_item.php"); ?>


  <!--Souris-->
  <div class="container my-5">
    <h3 id="sectionSouris" class="sectionTitle bg-secondary">Souris</h3>
  </div>


  <div class="container my-5">
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative mb-5">
      <div class="col text-center d-flex flex-column position-static">
        <h3 class="mt-3">Razer Basilisk v2</h3>
        <div class="mb-1 text-muted">Disponible en stock</div>
        <p class="card-text mb-4">Souris filaire pour gamer - droitier - capteur optique 20000 dpi - 11 boutons
          programmables - rétroéclairage Chroma RGB 16.8 millions de couleurs - gâchette amovible</p>
        <p class="fst-italic mt-0">Prenez un avantage définitif sur vos adversaires grâce à la souris Razer Basilisk v2.
          embarquant un capteur optique Razer Focus+ de 20000 dpi, elle vous offre une précision féroce afin que vous ne
          ratiez plus jamais votre cible.</p>
        <span id="price" style="color:blue; font-weight: bold; font-family: Verdana, Geneva, Tahoma, sans-serif;">89.95
          €</span>

        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button class="btn btn-success me-md-2" type="button">Ajouter au panier</button>
          <button class="btn btn-danger ml-3" type="button">Retirer du panier</button>
        </div>
      </div>
      <div class="col-auto d-none d-lg-block">
        <img src="asset/razorV2.jpg" width="200" height="250">
      </div>
    </div>

    <!--Clavier-->

    <h3 id="sectionClavier" class="sectionTitle bg-secondary">Clavier</h3>


    <div class="row g-0 border rounded overflow-hidden flex-md-row my-5 shadow-sm h-md-250 position-relative  mb-5">
      <div class="col text-center d-flex flex-column position-static">
        <h3 class="mt-3">Logitech Corded Keyboard K280e</h3>
        <div class="mb-1 text-muted">Disponible en stock</div>
        <p class="card-text mb-4">Clavier filaire - résistant aux éclaboussures - AZERTY, Français</p>
        <p class="fst-italic mt-0">Idéal pour le travail en entreprise, le Logitech Corded Keyboard K280e est doté d'un
          châssis renforcé, de pattes d'inclinaison robustes et d'une structure résistante aux éclaboussures. Conçu pour
          résister à des années d'utilisation intensive en bureau, il est doté de touches ultra-plates.</p>
        <span id="price" style="color:blue; font-weight: bold; font-family: Verdana, Geneva, Tahoma, sans-serif;">26.95
          €</span>

        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button class="btn btn-success me-md-2" type="button">Ajouter au panier</button>
          <button class="btn btn-danger ml-3" type="button">Retirer du panier</button>
        </div>
      </div>
      <div class="col-auto d-none d-lg-block">
        <img src="asset/logitech_clavier.jpg" width="200" height="250">
      </div>
    </div>

    <!--Manette-->

    <h3 id="sectionManette" class="sectionTitle bg-secondary">Manette</h3>

    <div class="row g-0 border rounded overflow-hidden flex-md-row my-5 shadow-sm h-md-250 position-relative  mb-5">
      <div class="col text-center d-flex flex-column position-static">
        <h3 class="mt-3">Logitech Gamepad F310S</h3>
        <div class="mb-1 text-muted">Disponible en stock</div>
        <p class="card-text mb-4">Manette filaire pour PC</p>
        <p class="fst-italic mt-0">Le gamepad Logitech Gamepad F310S vous permet de profiter de l'expérience du jeu sur
          console sur votre ordinateur, avec la prise en charge du plus grand nombre de jeux. Différents modes
          permettent la prise en charge des nouveaux jeux PC et des jeux plus anciens.</p>
        <span id="price" style="color:blue; font-weight: bold; font-family: Verdana, Geneva, Tahoma, sans-serif;">36.95
          €</span>

        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button class="btn btn-success me-md-2" type="button">Ajouter au panier</button>
          <button class="btn btn-danger ml-3" type="button">Retirer du panier</button>
        </div>
      </div>
      <div class="col-auto d-none d-lg-block">
        <img src="asset/manette.jpg" width="200" height="250">
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