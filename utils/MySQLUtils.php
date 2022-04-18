<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MySQLUtils
 *
 * @author DELL
 */
class MySQLUtils {

    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "dack_carrent";
    private $conn = null;

    //put your code here
    public function connect() {
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function insertData($sql, $arr = array()) {
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($arr);
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    public function deleteData($sql, $arr = array()) {
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($arr);
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
    
    public function updateData($sql, $arr = array()) {
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($arr);
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    public function getData($sql, $arr = array()) {
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($arr);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    public function getAllData($sql) {
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    public function editData($sql, $arr = array()) {
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($arr);
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    public function disconnect() {

        $this->conn = null;
    }

}
