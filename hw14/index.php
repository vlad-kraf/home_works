<?php
ini_set('display_errors',true);
error_reporting(E_ALL);
header("Content-Type: text/html; charset=utf-8");


class Worker {

    private $name;
    private $age;
    private $salary;



    public function SetName($name) {
        $this->name = $name;
    }

    public function GetName() {
        return $this->name;
    }

    public function SetAge($age) {
        if ($this->checkAge($age)){
            $this->age = $age;
        }
        else {
            $name = $this->GetName();
            echo "Введите возраст юзера "."$name"." правильно"."<br>";
        }
    }

    private function checkAge($age){
        if ($age >= 1 && $age <= 100) {
            return 1;
        } else {
            return 0;
        }
    }


    public function GetAge() {
        return $this->age;
    }

    public function SetSalary($salary) {
        $this->salary = $salary;
    }

    public function GetSalary() {
        return $this->salary;
    }

}


$object1 = new Worker;

$object1->SetName("Иван");
$object1->SetAge(25);
$object1->SetSalary(1000);



$object2 = new Worker;

$object2->SetName("Вася");
$object2->SetAge(26);
$object2->SetSalary(2000);



$res1 = $object1->GetAge()+ $object2->GetAge();
$res2 = $object1->GetSalary()+ $object2->GetSalary();
$name1 = $object1->GetName();
$name2 = $object2->GetName();

echo "summ of the age of "."$name1"." and "."$name2"." = "."$res1"."<br>";
echo "summ of the salary: "."$res2"."<br>";

