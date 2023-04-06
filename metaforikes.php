<?php include "connect.php"?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Μεταφορικές</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  
  </head>
  <body>
      <?php include "header.php"?>
    <main>
      <aside>
        <?php include "search_form.php"?>
      </aside>
      <section class="results">
            <h1 class=" fs-4 fw-bold no-padding-top">Αποτελέσματα Αναζήτησης</h1>
            <hr />
        <?php 
        if (isset($_REQUEST['tax'])){
        // Load results
        lista_metaf();
        // No results
        no_results();
        };
        ?>
        </section>
    </main>
      <?php include "footer.php"?>
    <script src="index.js"></script>
  </body>
</html>