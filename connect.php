<?php
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
// Initialize a PDO connection to database
$pdo = new PDO('mysql:host=127.0.0.1;dbname=home_sweet_home;charset=UTF8', 'thanosch94', '981256Kos', [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"]);

// Prepare statement
$statement = $pdo->prepare('SELECT tk FROM taxidromikoi');
// Execute statement
$statement->execute();

// Fetch results
$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
$tk =[];

foreach($rows as $row){
    $tk[]=$row['tk'].'<br>';
    if (isset($_REQUEST['tax']) && $_REQUEST['tax']== $row['tk']){
        $tkinput = $_REQUEST['tax'];
        $nomosinput = $_REQUEST['nomos']; 
    }
  
};




function new_input(){
    global $pdo;
    $nea_metaforiki = $pdo->prepare('INSERT INTO metaforikes(tk, metaf, til1, til2, til3, til4, addr, email, website, descr) VALUES (:tk, :metaf, :til1, :til2, :til3, :til4, :addr, :email, :website, :descr)');
    $nea_metaforiki ->bindParam(':tk', $_REQUEST['tk'], PDO::PARAM_INT);
    $nea_metaforiki ->bindParam(':metaf', $_REQUEST['metaf'], PDO::PARAM_STR);
    $nea_metaforiki ->bindParam(':til1', $_REQUEST['til1'], PDO::PARAM_INT);
    $nea_metaforiki ->bindParam(':til2', $_REQUEST['til2'], PDO::PARAM_INT);
    $nea_metaforiki ->bindParam(':til3', $_REQUEST['til3'], PDO::PARAM_INT);
    $nea_metaforiki ->bindParam(':til4', $_REQUEST['til4'], PDO::PARAM_INT);
    $nea_metaforiki ->bindParam(':addr', $_REQUEST['addr'], PDO::PARAM_STR);
    $nea_metaforiki ->bindParam(':email', $_REQUEST['email'], PDO::PARAM_STR);
    $nea_metaforiki ->bindParam(':website', $_REQUEST['website'], PDO::PARAM_STR);
    $nea_metaforiki ->bindParam(':descr', $_REQUEST['descr'], PDO::PARAM_STR);

    $nea_metaforiki ->execute();
}


//Dispay Results
function lista_metaf(){
global $pdo; 
$statement2 = $pdo->prepare('SELECT * FROM metaforikes');
$statement2->execute();
$rows2 = $statement2->fetchAll(PDO::FETCH_ASSOC);
    global $metaforikes;
    foreach($rows2 as $row2){
        

            if (isset($_REQUEST['tax']) && $_REQUEST['tax']== $row2['tk']){
                $metaforikes[]=$row2['metaf'];
                if(!empty($metaforikes)){
            echo '<section class="media">
            <img class="metaf_foto center" src="images/metaforiki.gif" width="200px" height="auto"/>
            </section>';

            echo '<section class="stoixeia-metaforikis container">
                    <h3 class="fs-4 fw-bold mb-4">' . $row2['metaf'] .'</h3>
                    <p class="pb-4">'  . $row2['descr'] .  '</p>
                    <div class="">
                        <div class=" row mb-4 mt-6">
                            <div class="col-4">
                                <img class="d-inline float-start" src="images/phone.png" width="30px" height="auto"/>
                                <p class="d-inline ps-1 til1 float-start">' . $row2['til1'] . '</p>
                            </div>
                            <div class="col-8">
                                <img  class="d-inline ms-6 float-start" src="images/home.png"/>
                                <p class="d-inline ps-1 float-start">' . $row2['addr'] . '</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <img  class="d-inline  float-start" src="images/phone.png" width="30px" height="auto" />
                                <p class="til2 d-inline ps-1 float-start">' . $row2['til2'] . '</p>
                            </div>
                            <div class="col-8">
                                <img  class="d-inline ms-6 float-start" src="images/web.png" width= 25px" height="auto" />
                                <p class="site d-inline ps-1 float-start"><a href="' . $row2['website'] . '">' . $row2['website'] .'</a></p>
                            </div>
                        </div>
                    </div>
                    <button class="btn darkgrey text-light mt-4 pt-0 pb-0">Περισσότερα</button>
                  </section>
                  <div class="clear"></div>
                  <br />
                  <hr class="float-end" width="70%" />';
            }
        }
    }
}

    function no_results(){
        global $metaforikes;
        if(empty($metaforikes)){
            echo '<section class="media">   <h4 class="fs-5"> Δεν υπάρχουν αποτελέσματα </h4>';

        }
    }

    function users(){
        global $pdo; 
        $allusers = $pdo->prepare('SELECT username FROM users');
        $allusers -> execute();
        $users = $allusers->fetchAll(PDO::FETCH_ASSOC);

        foreach($users as $user){
            echo '<h4 class="user btn darkgrey text-light w-100">'. $user['username'] .'</h4>';
        }

    }
    function addNewUser(){
        global $pdo; 
        $add_new_user = $pdo->prepare('INSERT INTO users(username) VALUES (:username)');
        $add_new_user ->bindParam(':username', $_REQUEST['newUser'], PDO::PARAM_STR);
        $add_new_user ->execute();


    }

    function new_refund(){
        global $pdo; 
        $new_refund = $pdo->prepare('INSERT INTO refunds(customerid, orderid, refund, descr) VALUES (:customerid, :orderid, :refund, :descr)');
        $new_refund ->bindParam(':customerid', $_REQUEST['customerid'], PDO::PARAM_STR);
        $new_refund ->bindParam(':orderid', $_REQUEST['orderid'], PDO::PARAM_STR);
        $new_refund ->bindParam(':refund', $_REQUEST['refund'], PDO::PARAM_STR);
        $new_refund ->bindParam(':descr', $_REQUEST['descr'], PDO::PARAM_STR);
        $new_refund ->execute();
        unset($_POST['customerid']);
        
    }

    function refund(){
        global $pdo; 
        $refund = $pdo->prepare('SELECT * FROM refunds');
        $refund -> execute();
        $refunds= $refund->fetchAll(PDO::FETCH_ASSOC);
        return $refunds;
    }
    function deleteRefund(){
        $refid = $_POST['refid'];
        print_r($refid);
        global $pdo; 
        $deleteRef = $pdo->prepare('DELETE FROM refunds WHERE refund_id=?');
        $deleteRef -> execute([$refid]);
        $_POST['refid']=NULL;
    }

    function searchRefund(){
        global $pdo; 
        $input = $_POST['inputs'];
        $searchRefund = $pdo->prepare('SELECT * FROM refunds WHERE orderid LIKE ?');
        $searchRefund -> execute(['%'. $input.'%']);
        $search_refund = $searchRefund->fetchAll(PDO::FETCH_ASSOC);

        foreach($search_refund as $refund){
            echo'   <script>
                        refundId ='.$refund['refund_id'].'
                    </script>
                    <div>
                        <div class="refunds refund-'.$refund['refund_id'].'">
                            <div class="row mt-4">
                                <form>
                                    <p class="col-6 btn pt-4 pb-4 me-3 shadow darkgrey text-light rounded"> Κωδικός Πελάτη: '. $refund['customerid'] .' | Αριθμός παραγγελίας: ' . $refund['orderid'] .' </p> 
                                    <p class="col-2 btn pt-4 pb-4 me-3 shadow darkgrey text-light rounded">'. $refund['refund'].'€</p>
                                    <p class="col-1 btn btn-success pt-4 pb-4 me-3 text-light">√</p>
                                    <p class="col-1 btn btn-danger pt-4 pb-4 text-light delete">x</p>
                                </form>
                            </div>
                            <p class="col-9 mb-3"> Ημερομηνία καταχώρησης:' .$refund['date'].'</p>
                            <p class="col-9 mb-5"> Αιτιολογία: ' . $refund['descr'].'</p>
                            <hr class="shadow col-11">
                        </div>    
                    </div>';
        }
    
        unset($_POST['inputs']);

    }

