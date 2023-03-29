<?php  
include "connect.php";
if (isset($_POST['customerid'])) {
  new_refund();
} 
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
    <main>
    <aside class="col-lg-3 col-sm-10 p-5">
        <form class="justify-content-center" action="refunds.php" method="post">
            <div class="row">
                <div class="col-6">
                    <label class="col-11 mb-4"for="customerid">Αριθμός Πελάτη</label>
                    <input name="customerid" class=" text-center p-3 mb-3" type="text">
                </div>
                <div class="col-6">
                    <label class="mb-4" for="orderid">Αριθμός Παραγγελίας</label>
                    <input name="orderid" class="text-center p-3 mb-3" type="text">
                </div>
            </div>
            <label for="refundAmount">Ποσό επιστροφής</label>
            <input name="refund" class="text-center p-3 mb-3" type="text">
            <label for="reason">Αιτία επιστροφής</label>
            <input name="descr" class="text-center p-3 mb-5" type="text">
            <button class="col-12 text-light darkgrey btn btn success"> Καταχώρηση </button>
 
        </form>
    </aside>
    <section class="results col-lg-7 col-sm-12">
      <h2>Επιστροφές χρημάτων</h2>
      <?php 
        $refunds = refund();      
        foreach($refunds as $refund){?>
         <script>
            refundId = <?php echo $refund['refund_id'];?>;
          </script>
          <div>
            <div class=" refund refund-<?php echo $refund['refund_id'];?>">
                
              <div class="row mt-4">
                <form>
                <p class="col-6 btn pt-4 pb-4 me-3 shadow darkgrey text-light rounded"> Κωδικός Πελάτη: <?php echo $refund['customerid'];?> | Αριθμός παραγγελίας: <?php echo $refund['orderid'];?> </p> 
                <p class="col-2 btn pt-4 pb-4 me-3 shadow darkgrey text-light rounded"><?php echo $refund['refund'];?>€</p>
                <p class="col-1 btn btn-success pt-4 pb-4 me-3 text-light">√</p>
                <p class="col-1 btn btn-danger pt-4 pb-4 text-light delete">x</p>
                </form>
              </div>
              <p class="col-9 mb-3"> Ημερομηνία καταχώρησης: <?php echo $refund['date'];?></p>
              <p class="col-9 mb-5"> Αιτία: <?php echo $refund['descr'];?></p>
              <hr class="shadow col-11">
            </div>
        
            <?php }?>
          </div>
    </section>
    </main>
      <?php
        include "footer.php";
      ?>
  </body>
  <script src="refunds.js"></script>
</html>