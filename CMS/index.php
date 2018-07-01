<?php
ini_set('display_errors',true);
error_reporting(E_ALL);
header("Content-Type: text/html; charset=utf-8");

session_start();


class Cookie {


    public function setCook($name, $value) {
        $temp_array = array();

        if(isset($_COOKIE[$name])) {
            $temp_array = unserialize($_COOKIE[$name]);
        }
        $temp_array[] = $value;
        setcookie($name, serialize($temp_array), time() + 60 * 60 * 24 * 30, '/');
    }

    public function delCookie($name) {
        if (isset ($_COOKIE[$name])) {
            setcookie($name, null, time() -3600);
            echo "Cookie was removed";
        }
        else {
            echo "Cookie does not exist_dell"."<br>";
        }
    }

    public function getCookie($name) {
        if (isset ($_COOKIE[$name])) {
            print_r (unserialize($_COOKIE[$name]));
            echo"<br>";
        }
        else {
            echo "Cookie does not exist_get"."<br>";
        }
    }
}

//Раскомментить нужные строки для проверки:

//$object1 = new Cookie;

//$object1->setCook('test', 'testvalue'); //Create Cookie
//$object1->delCookie('test'); // Delete Cookie
//$object1->getCookie('test'); //Get Cookie



Class Session {


    public function setSessionVar($name, $value) {
        $_SESSION[$name] = $value;
        echo "Created: "."$_SESSION[$name]"."<br>";
    }

    public function getSessionVar($name) {
        echo "Get: "."$_SESSION[$name]"."<br>";
    }

    public function delSessionVar($name) {
        if (isset ($_SESSION[$name])) {
            unset($_SESSION[$name]);
            echo "SessionVar was removed"."<br>";
        }
        else {
            echo "Nothing to delete"."<br>";
        }
    }

    public function checkSessionVar($name) {
        if (isset ($_SESSION[$name])) {
            echo "$_SESSION[$name]"." already exist"."<br>";
        }
        else {
            echo  "SessionVar does not exist"."<br>";
        }
    }

}

//Раскомментить нужные строки для проверки:

//$object2 = new Session;

//$object2->setSessionVar('test1', 'testvalue1'); //Create SessionVar
//$object2->getSessionVar('test1'); //Get SessionVar
//$object2->delSessionVar('test1'); // Delete SessionVar
//$object2->checkSessionVar('test1'); // Check SessionVar

Class Flash {

    public $name;
    public $message_content;

    public function setMassage($name, $message_content){
        $object3 = new Session;
        $object3->setSessionVar($name, $message_content);
    }

    public function getMassage($name){
        $object4 = new Session;
        $object4->getSessionVar($name);
    }
}

//Раскомментить нужные строки для проверки:
//$name = 'message';
//$message_content = 'message_text';

//$obj5 = new Flash;

//$obj5 -> setMassage($name, $message_content);
//$obj5-> getMassage($name);



class dbWorker {

    public $link;
    public $sql;

    public function getData($link,$sql) {
        return mysqli_query($link, $sql);
    }

    public function delData($link,$sql) {
        return mysqli_query($link, $sql);
    }

    public function updateData($link,$sql) {
        return mysqli_query($link, $sql);
    }

    public function countData($link,$sql) {
        return mysqli_query($link, $sql);
    }

    public function clearData($link,$sql) {
        return mysqli_query($link, $sql);
    }

    public function clearTables($link,$sql) {
        return mysqli_query($link, $sql);
    }

}