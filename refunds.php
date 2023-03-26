<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Επιστροφές Χρημάτων</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  
  </head>
  <body>
      <?php
        include "header.php"; 
      ?>
    <main>
    <aside class="col-lg-3 col-sm-10 p-5">
        <form class="justify-content-center">
            <div class="row">
                <div class="col-6">
                    <label class="col-11 mb-4"for="customNumber">Αριθμός Πελάτη</label>
                    <input class=" text-center p-3 mb-3" type="text">
                </div>
                <div class="col-6">
                    <label class="mb-4" for="orderNumber">Αριθμός Παραγγελίας</label>
                    <input class="text-center p-3 mb-3" type="text">
                </div>
            </div>
            <label for="refundAmount">Ποσό επιστροφής</label>
            <input class="text-center p-3 mb-3" type="text">
            <label for="reason">Αιτία επιστροφής</label>
            <input class="text-center p-3 mb-5" type="text">
            <button class="col-12 text-light btn btn success"> Καταχώρηση </button>
 
        </form>
    </aside>
    <section class="results col-lg-8 col-sm-12">
      <h2>Επιστροφές χρημάτων</h2>
    </section>

    </main>
      <?php
        include "footer.php";
      ?>
  </body>
</html>