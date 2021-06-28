<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="style1.css">
  <title>Jeux</title>
</head>


<body>


  <!--HEADER-->
  <?php include("includes/header.php"); ?>

  <!--LOGO + SEARCH BAR + LOGIN / SIGN IN-->
  <?php include("includes/logo_search_login.php"); ?>

  <!--NAV ITEM BAR-->
  <?php include("includes/nav_item.php"); ?>


  <!--Jeux PS5-->


  <div class="container my-5">
    <h3 id="sectionGamePS5" class="sectionTitle bg-primary">Jeux PS5</h3>
  </div>

  <div class="container my-5">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

      <div class="col">
        <div class="card shadow-sm">
          <img src="asset/spiderman.jpeg" height="321px" title="spiderman_ps5">
          <div class="mb-1 text-muted text-center">Disponible en stock</div>
          <div class="card-body">
            <h6 class="text-center">Marvel's Spider-Man : Miles Morales (PS5)</h6>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group mt-2">
                <button type="button" class="btn btn-sm btn-outline-success">Ajouter</button>
                <button type="button" class="btn btn-sm btn-outline-danger ml-2 ">Retirer</button>
              </div>
              <span id="price"
                style="color:blue; font-weight: bold; font-family: Verdana, Geneva, Tahoma, sans-serif;">59.39 €</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card shadow-sm">
          <img src="asset/assasin_creed.jpeg" height="340px" title="assasin_creed">
          <div class="mb-1 text-muted text-center">Disponible en stock</div>
          <div class="card-body">
            <h6 class="text-center">Assassin s Creed Valhalla (PS5)</h6>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group mt-2">
                <button type="button" class="btn btn-sm btn-outline-success">Ajouter</button>
                <button type="button" class="btn btn-sm btn-outline-danger ml-2 ">Retirer</button>
              </div>
              <span id="price"
                style="color:blue; font-weight: bold; font-family: Verdana, Geneva, Tahoma, sans-serif;">76.82 €</span>
            </div>
          </div>
        </div>
      </div>


      <div class="col">
        <div class="card shadow-sm">
          <img src="asset/wrc9.jpeg" height="340px" title="wrc9">
          <div class="mb-1 text-muted text-center">Disponible en stock</div>
          <div class="card-body">
            <h6 class="text-center">WRC 9 (PS5)</h6>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group mt-2">
                <button type="button" class="btn btn-sm btn-outline-success">Ajouter</button>
                <button type="button" class="btn btn-sm btn-outline-danger ml-2 ">Retirer</button>
              </div>
              <span id="price"
                style="color:blue; font-weight: bold; font-family: Verdana, Geneva, Tahoma, sans-serif;">41.91 €</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!--Jeux XBOX-->


  <div class="container my-5">
    <h3 id="sectionGameXbox" class="sectionTitle bg-success">Jeux XBOX</h3>
  </div>

  <div class="container my-5">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

      <div class="col">
        <div class="card shadow-sm">
          <img src="asset/nbak21.jpeg" height="340px" title="nbak21">
          <div class="mb-1 text-muted text-center">Disponible en stock</div>
          <div class="card-body">
            <h6 class="text-center">NBA 2K21 (Xbox One)</h6>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group mt-2">
                <button type="button" class="btn btn-sm btn-outline-success">Ajouter</button>
                <button type="button" class="btn btn-sm btn-outline-danger ml-2 ">Retirer</button>
              </div>
              <span id="price"
                style="color:blue; font-weight: bold; font-family: Verdana, Geneva, Tahoma, sans-serif;">49.00 €</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card shadow-sm">
          <img src="asset/cod.jpeg" height="340px" title="cod">
          <div class="mb-1 text-muted text-center">Disponible en stock</div>
          <div class="card-body">
            <h6 class="text-center">Call of Duty World War II (Xbox One)</h6>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group mt-2">
                <button type="button" class="btn btn-sm btn-outline-success">Ajouter</button>
                <button type="button" class="btn btn-sm btn-outline-danger ml-2 ">Retirer</button>
              </div>
              <span id="price"
                style="color:blue; font-weight: bold; font-family: Verdana, Geneva, Tahoma, sans-serif;">46.45 €</span>
            </div>
          </div>
        </div>
      </div>


      <div class="col">
        <div class="card shadow-sm">
          <img src="asset/sims.jpeg" height="340px" title="sims4">
          <div class="mb-1 text-muted text-center">Disponible en stock</div>
          <div class="card-body">
            <h6 class="text-center">Les Sims 4 (Xbox One)</h6>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group mt-2">
                <button type="button" class="btn btn-sm btn-outline-success">Ajouter</button>
                <button type="button" class="btn btn-sm btn-outline-danger ml-2 ">Retirer</button>
              </div>
              <span id="price"
                style="color:blue; font-weight: bold; font-family: Verdana, Geneva, Tahoma, sans-serif;">27.99 €</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!--Jeux Nintendo Switch-->

  <div class="container my-5">
    <h3 id="sectionGameSwitch" class="sectionTitle bg-danger">Jeux Nintendo Switch</h3>
  </div>

  <div class="container my-5">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

      <div class="col">
        <div class="card shadow-sm">
          <img src="asset/overwatch.jpeg" height="340px" title="overwatch">
          <div class="mb-1 text-muted text-center">Disponible en stock</div>
          <div class="card-body">
            <h6 class="text-center">Overwatch Legendary Edition (SWITCH)</h6>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group mt-2">
                <button type="button" class="btn btn-sm btn-outline-success">Ajouter</button>
                <button type="button" class="btn btn-sm btn-outline-danger ml-2 ">Retirer</button>
              </div>
              <span id="price"
                style="color:blue; font-weight: bold; font-family: Verdana, Geneva, Tahoma, sans-serif;">36.98 €</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card shadow-sm">
          <img src="asset/dbz.jpeg" height="340px" title="dbz">
          <div class="mb-1 text-muted text-center">Disponible en stock</div>
          <div class="card-body">
            <h6 class="text-center">Dragon Ball Fighter Z (SWITCH)</h6>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group mt-2">
                <button type="button" class="btn btn-sm btn-outline-success">Ajouter</button>
                <button type="button" class="btn btn-sm btn-outline-danger ml-2 ">Retirer</button>
              </div>
              <span id="price"
                style="color:blue; font-weight: bold; font-family: Verdana, Geneva, Tahoma, sans-serif;">29.86 €</span>
            </div>
          </div>
        </div>
      </div>


      <div class="col">
        <div class="card shadow-sm">
          <img src="asset/jumanji.jpeg" height="340px" title="jumanji">
          <div class="mb-1 text-muted text-center">Disponible en stock</div>
          <div class="card-body">
            <h6 class="text-center">Jumanji (SWITCH)</h6>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group mt-2">
                <button type="button" class="btn btn-sm btn-outline-success">Ajouter</button>
                <button type="button" class="btn btn-sm btn-outline-danger ml-2 ">Retirer</button>
              </div>
              <span id="price"
                style="color:blue; font-weight: bold; font-family: Verdana, Geneva, Tahoma, sans-serif;">29.99 €</span>
            </div>
          </div>
        </div>
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