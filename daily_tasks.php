<?php
include "connect.php";
//new_input();
if (isset($_POST['newUser'])) {
        addNewUser(); // Call the function to add the new user
        
    } 

?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Εργασίες</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  
  </head>
  <body>
      <?php
        include "header.php"; 
      ?>
    <main>
    <aside class="col-lg-3 col-sm-10">
        <h2>Χρήστες</h2>
        <?php users(); ?>
        <div class = "newUserInput row"></div>
        <h4 class="btn text-light center addUserBtn">+</h4>
    </aside>
    <section class="results col-lg-8 col-sm-12 todo-list">
    </section>

    </main>
      <?php
        include "footer.php";
      ?>
    <script src="tasks.js"></script>
  </body>
</html>