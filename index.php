<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Αρχική</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </head>
  <body>
     <?php
       include "header.php"
     ?>

    <main>
<!--
      <section class="results">
        <h1>Αποτελέσματα</h1>
        <div  class="stoixeia-metaforikis box">
          <p>Καθημερινά θα πρέπει να εκτυπώνουμε τις παραγγελίες και να συλλέγουμε τα προίόντα. 
            Έπειτα ενημερώνουμε την παραγγελία στο Soft1 γράφοντας στα σχόλια τη θέση οπου βρίσκεται και 
            στη συνέχεια στέλνουμε SMS και E-mail στους πελάτες για να περάσουν να παραλάβουν. Προκεμένου 
            να ξεχωρίζουμε από τη λίστα ποιες παραγγελίες είναι έτοιμες και ποιες όχι, επιλέγουμε να βάζουμε 
            σχόλια λέξεις όπως 'ΚΑΤΩ', 'ΙΣΟΓΕΙΟ', 'ΕΠΑΝΩ', 'ΕΠΑΝΩ ΜΑΡΙΑΝΝΑ'. Βλέποντας ένα τέτοιο σχόλιο
            γνωρίζουμε ότι η παραγγελία είναι έτοιμη και έχει συγκεντρωθεί.</p>
          <br>
          <p>Μέσα στην ημέρα αφού ολοκληρωθούν οι παραλαβές θα είναι έτοιμες κι άλλες παραγγελίες οι οποίες 
            θα πρέπει να εκτυπωθούν και να ακολουθηθεί η παραπάνω διαδικασία.</p>
          <br>
          <br>
          <em>* Πριν ενημερώσουμε τους πελάτες ελέγχουμε για τυχόν σχόλια στις παραγγελίες</em>
          <br>
          <em>* Επειδή κάποιες φορές εκτυπώνουμε πρώτα τις παραγγελίες που δεν έχουν εκτυπωθει, 
            τις ελέγχουμε όλες γιατί μπορεί κάποια να έχει εκτυπωθεί προκειμένου να δοθεί αντίγραφο στον πελάτη</em>
        </div>
      </section>
      test
-->
      
      <div class="container mb-5">
        <div class="row">
          <div class="col-lg-4 col-sm-12 border me-0">
            <div class="center">
              <img src="images/receivals.jpg" width="300px">
              <br>
              <h3 class="fw-bold">Παραλαβές</h3>
            </div>
            <br>
            <ul>
              <li>Παραλαβές από το κατάστημα</li>
              <li>Αποστολές με κούριερ/μεταφορική</li>
              <li>Αποστολές με όχημα του καταστήματος</li>
            </ul>
            <div class="center">
              <button class="btn btn-success mt-3 mb-3">Περισσότερα</button>
            </div>

          </div>
          <div class="col-lg-4 col-sm-12 border me-0">
            <div class="center">
              <img src="images/returns.jpg" width="300px">
              <br>
              <h3 class="fw-bold">Επιστροφές</h3>
            </div>
            <br>
            <ul>
              <li>Επιστροφές απαράδοτων παραγγελιών</li>
              <li>Επιστροφές λόγω υπαναχώρησης</li>
              <li>Επιστροφές από Skroutz</li>
            </ul>
            <div class="center">
              <button class="btn btn-success mt-3 mb-3">Περισσότερα</button>
            </div>

          </div>
          <div class="col-lg-4 col-sm-12 border">
            <div class="center">
              <img src="images/compensations.jpg" width="300px">
              <br>
              <h3 class="fw-bold">Αποζημιώσεις</h3>
            </div>
            <br>
            <ul>
              <li>Αποζημιώσεις Γενικής Ταχυδρομικής</li>
              <li>Αποζημιώσεις προμηθευτών</li>
              <li>Έλεγχος εκκρεμοτήτων</li>
            </ul>

            <div class="center ">
              <button class="btn btn-success mt-3 mb-3">Περισσότερα</button>
            </div>

          </div>
        </div>
      </div>
      <br>
      
      <div class="pt-4 pb-4 text-light shadow p-3 mb-5 bg-secondary bg-gradient">
        <div class="container mt-3 mb-3" >
          <div class="row" data-mdb-animation-on-scroll="repeat">
            <img class="col-lg-6 col-sm-12" src="images/leitourgies.jpg">

          <div class="col-lg-6 col-sm-12">
            <h4 class="fw-bold  mt-sm-4 text-xs-center text-sm-center text-xl-start ">Λειτουργίες του καταστήματος</h4>
            <ul>
              <li>Καθημερινές εργασίες καταστηματος</li>
              <li>Ρόλοι υπαλλήλων καταστήματος</li>
              <li>Διακόσμηση και τακτοποίηση</li>
              <li>Διαχείριση παραπόνων</li>
              <li>Λειτουργίες Soft1</li>
                <ul>
                  <li>Εκκρεμείς παραγγελίες πελατών</li>
                  <li>Παραγγελίες προς προμηθευτές</li>
                  <li>Καταχώρηση τιμολογίων</li>
                  <li>Ανεκτέλεστα προϊόντα παραγγελιών</li>

                </ul>
            </ul>
            <div class="center ">
              <button class="btn btn-success mt-3 mb-3">Περισσότερα</button>
            </div>

          </div>
          </div>
        </div>
      </div>
      <br>
      <div>
        <?php include "suppliers.php"
        ?>
      </div>
      </div>
    </main>
    <?php
       include "footer.php"
     ?>
    <script src="manual.js"></script>
  </body>

  
</html>
