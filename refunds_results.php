<?php
require_once __DIR__.'/boot/boot.php';

$refunds = new Refunds;
$results = $refunds ->search_results();

?>
<section class="refund">
<?php
          foreach($results as $refund){?>
          <script>
              refundId = <?php echo $refund['refund_id'];?>;
            </script>
            <div>
              <div class="refunds refund-<?php echo $refund['refund_id'];?>">
                <div class=" mt-4">
                  <form class=" w-100 row">
                    <p class="col-7 btn pt-4 pb-4 me-3 shadow darkgrey text-light rounded"> Κωδικός Πελάτη: <?php echo $refund['customerid'];?> | Αριθμός παραγγελίας: <?php echo $refund['orderid'];?> </p> 
                    <p class="col-2 btn pt-4 pb-4 me-3 shadow darkgrey text-light rounded"><?php echo $refund['refund'];?>€</p>
                    <button class="col-1 btn btn-success p-4 me-3 h-100 text-light">√</button>
                    <button class="col-1 btn btn-danger p-4 h-100 text-light delete">x</button>
                  </form>
                </div>
                <p class="col-9 mb-3"> Ημερομηνία καταχώρησης: <?php echo $refund['date'];?></p>
                <p class="col-9 mb-5"> Αιτιολογία: <?php echo $refund['descr'];?></p>
                <hr class="shadow col-11">
              </div>
          
              <?php }?>
            </div>
          </section>