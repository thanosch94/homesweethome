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
                    <button class="btn btn-success mt-4 pt-0 pb-0">Περισσότερα</button>
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
            echo '<h4 class="user btn text-light w-100">'. $user['username'] .'</h4>';
        }

    }
    function addNewUser(){
        global $pdo; 
        $add_new_user = $pdo->prepare('INSERT INTO users(username) VALUES (:username)');
        $add_new_user ->bindParam(':username', $_REQUEST['newUser'], PDO::PARAM_STR);
        $add_new_user ->execute();


    }
?>

