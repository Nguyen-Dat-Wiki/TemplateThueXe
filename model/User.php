<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author DELL
 */
class User {

    //put your code here
    private $username;
    private $email;
    private $password;
    private $sex;
    private $prefer;
    private $role;
    private $avatar;

    public function __construct($uname, $email, $pass, $sex, $prefer, $avatar, $role) {
        $this->username = $uname;
        $this->email = $email;
        $this->password = $pass;
        $this->sex = $sex;
        $this->prefer = $prefer;
        $this->avatar = $avatar;
        $this->role = $role;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getSex() {
        return $this->sex;
    }

    public function getPrefer() {
        return $this->prefer;
    }

    public function getRole() {
        return $this->role;
    }

    public function getAvatar() {
        return $this->avatar;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setSex($sex) {
        $this->sex = $sex;
    }

    public function setPrefer($prefer) {
        $this->prefer = $prefer;
    }

    public function setRole($role) {
        $this->role = $role;
    }

    public function setAvatar($avatar) {
        $this->avatar = $avatar;
    }

    public function editUser($sql, $arr_param) {
        $dbCon = new MySQLUtils();
        $dbCon->connect();
        $dbCon->editData($sql, $arr_param);
        $dbCon->disconnect();
    }

    public function insertUser($arr_param) {
        $sql = "INSERT INTO customer(username, email, password, sex, prefer, avatar, role) values(:username, :email, :password, :sex, :prefer, :avatar, :role)";

        $dbCon = new MySQLUtils();
        $dbCon->connect();
        $dbCon->insertData($sql, $arr_param);
        $dbCon->disconnect();
    }

    public function deleteUser($arr_param) {
        $sql = "DELETE FROM customer WHERE username = :username";
        $dbCon = new MySQLUtils();
        $dbCon->connect();
        $dbCon->deleteData($sql, $arr_param);
        $dbCon->disconnect();
    }

    public function getAllUser() {
         $sql = "SELECT * FROM customer";
        $arrUser = array();
        $dbCon = new MySQLUtils();
        $dbCon->connect();
        $arrUser = $dbCon->getAllData($sql);
        $dbCon->disconnect();
        return $arrUser;
    }

    public function updateUser($arr_param) {
        $sql = "UPDATE customer SET email=:email where id = :id";
        $dbCon = new MySQLUtils();
        $dbCon->connect();
        $dbCon->updateData($sql, $arr_param);
        $dbCon->disconnect();
    }

    public function getUser($arr = array()) {
        $sql = "SELECT id,username,email FROM customer where username = :username";
        $user = array();
        $dbCon = new MySQLUtils();
        $dbCon->connect();
        $user = $dbCon->getData($sql, $arr);
        $dbCon->disconnect();
        return $user;
    }
    
    
     private function getUserByUserName($sql, $arr = array()) {
      
        $user = array();
        $dbCon = new MySQLUtils();
        $dbCon->connect();
        $user = $dbCon->getData($sql, $arr);
        $dbCon->disconnect();
        return $user;
    }

    public function isUser($uname, $pass) {
        $username = "";
        $password = "";
        $arrUsers = array();
        $sql = "SELECT id,username,password FROM customer where username = :username";
        $arr_param = array("username" => $uname);

        $arrUsers = $this->getUserByUserName($sql, $arr_param);

        if (count($arrUsers) > 0) {
            $id = $arrUsers[0]["id"];
            $username = $arrUsers[0]["username"];
            $password = $arrUsers[0]["password"];

            if ($uname == $username && md5($pass) == $password) {
                if (!isset($_SESSION)) {
                    session_start();
                }
                $_SESSION["is_login"] = true;
                $_SESSION["account_id"]= $id;
                $_SESSION["username_login"] = $uname;
                return true;
            }
        }
        return false;
    }
    public function exitsUser($uname) {
        $username = "";
        $arrUsers = array();
        $sql = "SELECT username FROM customer where username = :username";
        $arr_param = array("username" => $uname);

        $arrUsers = $this->getUserByUserName($sql, $arr_param);

        if (count($arrUsers) > 0) {
            $username = $arrUsers[0]["username"];

            if ($uname == $username) {
                if (!isset($_SESSION)) {
                    session_start();
                }
                $_SESSION["is_login"] = false;
                return true;
            }
        }
        return false;
    }

    public function checkpass($pas, $confirm_pas)
    {
        if ($pas != $confirm_pas) {
            return true;
        }
        else return false;
    }

}
