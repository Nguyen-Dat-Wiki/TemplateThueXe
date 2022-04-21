<?php

include_once '../utils/MySQLUtils.php';
class Product{
    public function selectDataLimit(){
        $mySQLCon = new MySQLUtils();
        $mySQLCon->connect();
        $sql = "SELECT * from car,car_detail where car.id = car_detail.car_id order by time_created DESC LIMIT 3 ";
        $select = $mySQLCon->getAllData($sql);
        return $select;
    }
    public function selectDataLimitPage($record_index, $limit){
        $mySQLCon = new MySQLUtils();
        $mySQLCon->connect();
        $sql = "SELECT * from car,car_detail where car.id = car_detail.car_id LIMIT $record_index, $limit";
        $select = $mySQLCon->getAllData($sql);
        return $select;
    }
    public function selectDetail($id){
        $mySQLCon = new MySQLUtils();
        $mySQLCon->connect();
        $sql = "SELECT * from car,car_detail where id=$id and car.id = car_detail.car_id";
        $select = $mySQLCon->getAllData($sql);
        return $select;
    }
    public function countCar(){
        $mySQLCon = new MySQLUtils();
        $mySQLCon->connect();
        $sql2 = "SELECT COUNT(*) as Tongxe FROM car"; 
        $select = $mySQLCon->getAllData($sql2);
        return $select;
    }
    public function likeCar($account, $id){
        $mySQLCon = new MySQLUtils();
        $mySQLCon->connect();
        $sql = "SELECT * from car_like,car where car_like.customer_id=$account and car_like.car_id=$id and car_like.car_id = car.id";
        $select = $mySQLCon->getAllData($sql);
        return $select;
    }

    public function likeCar_list($account_id){
        $mySQLCon = new MySQLUtils();
        $mySQLCon->connect();
        $sql = "SELECT * from car_like,car,car_detail where car_like.customer_id=$account_id and car_like.car_id = car.id and car.id = car_detail.car_id" ;
        $select = $mySQLCon->getAllData($sql);
        return $select;
    }

    public function getAllUser2($arr = array()) {
        $sql = "SELECT * FROM customer where id = :id";
        $user = array();
        $dbCon = new MySQLUtils();
        $dbCon->connect();
        $user = $dbCon->getData($sql, $arr);
        $dbCon->disconnect();
        return $user;
    }
}
?>
