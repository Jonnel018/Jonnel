<?php

class Employee extends Person {
    
    public function __construct($name, $address, $age, $companyName) {
        parent::__construct($name, $address, $age, $companyName);
    }

    public function __toString() {
        return parent::__toString();
    }
}
?>

