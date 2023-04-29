<?php
use PDO;

class Refunds{
    private $pdo;

    public function __construct(){
        $this->pdo = new PDO('mysql:host=127.0.0.1;dbname=home_sweet_home;charset=UTF8', 'thanosch94', '981256Kos', [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"]);
        
    }
    protected function getPdo() {
        return $this->pdo;
    }

    public function get_refunds(){
        $statement = $this->getPdo()->prepare('SELECT * FROM refunds');
        $statement -> execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function new_refund(){
        $statement = $this->getPdo()->prepare('INSERT INTO refunds(customerid, orderid, refund, descr) VALUES (:customerid, :orderid, :refund, :descr)');
        $statement ->bindParam(':customerid', $_REQUEST['customerid'], PDO::PARAM_STR);
        $statement ->bindParam(':orderid', $_REQUEST['orderid'], PDO::PARAM_STR);
        $statement ->bindParam(':refund', $_REQUEST['refund'], PDO::PARAM_STR);
        $statement ->bindParam(':descr', $_REQUEST['descr'], PDO::PARAM_STR);
        $statement ->execute();
        unset($_POST['customerid']);
        
    }
    public function deleteRefund(){
        $refid = $_POST['refid'];
        $statement = $this->getPdo()->prepare('DELETE FROM refunds WHERE refund_id=?');
        $statement -> execute([$refid]);
        $_POST['refid']=NULL;
    }

    public function search_results(){
        $input = $_POST['inputs'];
        $statement = $this->getPdo()->prepare('SELECT * FROM refunds WHERE orderid LIKE ?');
        $statement -> execute(['%'. $input.'%']);
        unset($_POST['inputs']);
        return $statement->fetchAll(PDO::FETCH_ASSOC); 
    }
}