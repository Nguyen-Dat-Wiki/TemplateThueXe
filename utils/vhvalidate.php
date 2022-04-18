<?php

class VhuValidate {

    public function checkUserName($name) {
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            return false;
        }
        return true;
    }

    public function checkUserEmail($email) {
        if (!preg_match("/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/", $email)) {
            return false;
        }
        return true;
    }

    public function checkNameExits($name)
    {
        
    }
}

?>
