<?php

include_once '../utils/MySQLUtils.php';
class Order
{
    // lấy tất cả order
    public function getAllOrder($arr = array())
    {
        $sql = "SELECT car.car_name, order.state, order.order_date, order.conform_order_date, order_detail.total_price, order.id as orderid
                FROM dack_carrent.car, dack_carrent.order_detail, dack_carrent.order, dack_carrent.customer
                WHERE car.id = order_detail.car_id and order_detail.order_id = order.id and order.customer_id = :id and order.customer_id = customer.id";
        $user = array();
        $dbCon = new MySQLUtils();
        $dbCon->connect();
        $user = $dbCon->getData($sql, $arr);
        $dbCon->disconnect();
        return $user;
    }

    // lấy order đang xử lý
    public function getPendingOrder($arr = array())
    {
        $sql = "SELECT car.car_name, order.state, order.order_date, order.conform_order_date, order_detail.total_price, order.id as orderid
                FROM dack_carrent.car, dack_carrent.order_detail, dack_carrent.order, dack_carrent.customer
                WHERE car.id = order_detail.car_id and order_detail.order_id = order.id and order.customer_id = :id and order.customer_id = customer.id and order.state = '0'";
        $user = array();
        $dbCon = new MySQLUtils();
        $dbCon->connect();
        $user = $dbCon->getData($sql, $arr);
        $dbCon->disconnect();
        return $user;
    }

    // lấy order đã xác nhận
    public function getConformOrder($arr = array())
    {
        $sql = "SELECT car.car_name, order.state, order.order_date, order.conform_order_date, order_detail.total_price, order.id as orderid
                FROM dack_carrent.car, dack_carrent.order_detail, dack_carrent.order, dack_carrent.customer
                WHERE car.id = order_detail.car_id and order_detail.order_id = order.id and order.customer_id = :id and order.customer_id = customer.id and order.state = '1'";
        $user = array();
        $dbCon = new MySQLUtils();
        $dbCon->connect();
        $user = $dbCon->getData($sql, $arr);
        $dbCon->disconnect();
        return $user;
    }

    // lấy order đã bị hủy 
    public function getDeniedOrder($arr = array())
    {
        $sql = "SELECT car.car_name, order.state, order.order_date, order.conform_order_date, order_detail.total_price, order.id as orderid
                FROM dack_carrent.car, dack_carrent.order_detail, dack_carrent.order, dack_carrent.customer
                WHERE car.id = order_detail.car_id and order_detail.order_id = order.id and order.customer_id = :id and order.customer_id = customer.id and order.state = '2'";
        $user = array();
        $dbCon = new MySQLUtils();
        $dbCon->connect();
        $user = $dbCon->getData($sql, $arr);
        $dbCon->disconnect();
        return $user;
    }
}
