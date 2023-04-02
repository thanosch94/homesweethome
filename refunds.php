<?php  
include "connect.php";


 ?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Επιστροφές Χρημάτων</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  
  </head>
  <body>
      <?php
        include "header.php"; 
      ?>
              <h2 class="text-center pb-3">Επιστροφές χρημάτων</h2>
    <main class="mt-4">
    <aside class="col-lg-3 col-sm-10 ps-5 pe-5 pt-4 pb-4">
      <div class="mb-4 font-weight-bold">
        <h4>Καταχώρηση νέας επιστροφής</h4>
      </div>
        <form class="justify-content-center" action="refunds.php" method="post">
          <div class="row">
            <div class="col-6">
              <label class="col-10 mb-4"for="customerid">Αριθμός Πελάτη</label>
              <input name="customerid" class=" text-center p-3 mb-3" type="text">
            </div>
            <div class="col-6">
              <label class="mb-4" for="orderid">Αριθμός Παραγγελίας</label>
              <input name="orderid" class="text-center p-3 mb-3" type="text">
            </div>
            </div>
            <label for="refundAmount">Ποσό επιστροφής</label>
            <input name="refund" class="text-center p-3 mb-3" type="text">
            <label for="reason">Αιτιολογία επιστροφής</label>
            <input name="descr" class="text-center p-3 mb-5" type="text">
            <button class="col-12 text-light darkgrey btn btn success"> Καταχώρηση </button>
 
        </form>
    </aside>
    <section  class="results col-lg-7 col-sm-12">
      <section>
        <form class="row">
          <input name="order_customer_id" class="ord_cust_id col-8 p-3 mb-3" type="text" placeholder="Αναζήτηση με αριθμό παραγγελίας ή αριθμό πελάτη">
          <button class="col-3  ms-3 h-100 text-light darkgrey btn"> Αναζήτηση </button>
        </form>
      </section>

      <section class="refund">

      
        <?php 
if (isset($_POST['customerid'])) {
  new_refund();
} 
          $refunds = refund();      
          foreach($refunds as $refund){?>
          <script>
              refundId = <?php echo $refund['refund_id'];?>;
            </script>
            <div>
              <div class="refunds refund-<?php echo $refund['refund_id'];?>">
                <div class="row mt-4">
                  <form>
                  <p class="col-6 btn pt-4 pb-4 me-3 shadow darkgrey text-light rounded"> Κωδικός Πελάτη: <?php echo $refund['customerid'];?> | Αριθμός παραγγελίας: <?php echo $refund['orderid'];?> </p> 
                  <p class="col-2 btn pt-4 pb-4 me-3 shadow darkgrey text-light rounded"><?php echo $refund['refund'];?>€</p>
                  <p class="col-1 btn btn-success pt-4 pb-4 me-3 text-light">√</p>
                  <p class="col-1 btn btn-danger pt-4 pb-4 text-light delete">x</p>
                  </form>
                </div>
                <p class="col-9 mb-3"> Ημερομηνία καταχώρησης: <?php echo $refund['date'];?></p>
                <p class="col-9 mb-5"> Αιτιολογία: <?php echo $refund['descr'];?></p>
                <hr class="shadow col-11">
              </div>
          
              <?php }?>
            </div>
      </section>
    </section>
    </main>
      <?php
        include "footer.php";
      ?>
  </body>
  <script src="refunds.js"></script>
      <script src="search_refund.js"></script>
  
</html>