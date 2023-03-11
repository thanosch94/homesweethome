<?php
include "connect.php";
new_input();
?>
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
      <?php
        include "header.php"; 
      ?>
    <main>
    <aside class="container w-25">
        <?php
        include "new_form.php";
        ?>
    </aside>
    <section class="results w-75">
        <div class="center">
            <h3 class="pb-5">Η μεταφορική προστέθηκε με επιτυχία</h3>
        </div>
        <div class="ps-5 pt-6">
            <br>
            <h4 class="fw-bold">Στοιχεία Μεταφορικής: </h4>
            <br>
            <?php 
                echo '<span class="fw-bold">Όνομα: </span>'.$_REQUEST['metaf'].  '<br><br>
                    <span class="fw-bold">Τηλέφωνο 1: </span>'.$_REQUEST['til1'] . '<br><br>
                    <span class="fw-bold">Τηλέφωνο 2: </span>'.$_REQUEST['til2'] . '<br><br>
                    <span class="fw-bold">Τηλέφωνο 3: </span>'.$_REQUEST['til3'] . '<br><br>
                    <span class="fw-bold">Τηλέφωνο 4: </span>'.$_REQUEST['til4'] . '<br><br>
                    <span class="fw-bold">Διεύθυνση: </span>'.$_REQUEST['addr'] . '<br><br>
                    <span class="fw-bold">Ταχυδρομικός Κώδικας: </span>'.$_REQUEST['tk'] . '<br><br>
                    <span class="fw-bold">Website: </span>'.$_REQUEST['website'] . '<br><br>
                    <span class="fw-bold">Email: </span>'.$_REQUEST['email'] . '<br><br>
                    <span class="fw-bold">Περιγραφή: </span>'.$_REQUEST['descr'] . '<br><br>'
            ?>
        </div>
    </section>

    </main>
      <?php
        include "footer.php";
      ?>
    <script src="index.js"></script>
  </body>
</html>